<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Service\Attribute\SubscribedService;
use Symfony\Component\String\Slugger\SluggerInterface;
use Psr\Container\ContainerInterface;
use DeepCopy\Filter\Doctrine;
use App\Entity\Product;
use App\Entity\Category;
use App\Entity\Genre;
use App\Form\ProductType;
use App\Service\FileUploader;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProductController extends AbstractController
{
    #[Route('/', name: 'product_list')]
    public function listAction(ManagerRegistry $doctrine): Response
    {
        $products = $doctrine->getRepository('App\Entity\Product')->findAll();
        $genres = $doctrine->getRepository('App\Entity\Genre')->findAll();
        return $this->render('product/index.html.twig', ['products'=> $products,
            'genres' => $genres
        ]);
    }
    /**
     * @route("/delete/{id}", name="product_delete")
     */
    public function deleteAction(ManagerRegistry $doctrine,$id): Response
    {
        $em = $doctrine->getManager();
        $products = $em->getRepository('App\Entity\Product')->find($id);
        $em->remove($products);
        $em->flush();

        $this->addFlash(
            'error',
            'Product deleted'
        );
        return $this->redirectToRoute('product_list');
    }

     #[Route('/details/{id}', name: 'product_details')]
    public function detailsAction(ManagerRegistry $doctrine,$id): Response
    {
        $products =  $doctrine->getRepository('App\Entity\Product')->find($id);


        return $this->render('product/details.html.twig', [
            'products' => $products
        ]);
    }
    /**
     * @Route("/create/", name="product_create", methods={"GET","POST"})
     */
    public function createAction(ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger): Response
    {
        $products = new Product();

        $form = $this->createForm(ProductType::class, $products);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form->get('Image')->getData();
            if ($uploadedFile) {
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $uploadedFile->guessExtension();

                // Move the file to the directory where image are stored
                try {
                    $uploadedFile->move(
                        (string)$this -> getParameter('images_directory') ,
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash(
                        'error',
                        'Cannot Upload'
                    );
                    // ... handle exception if something happens during file upload
                }
                $products->setImage($newFilename);

                $entitymanager = $doctrine->getManager();
                $entitymanager->persist($products);
                $entitymanager->flush();

                $this->addFlash(
                    'notice',
                    'New Product Added'
                );
                return $this->redirectToRoute('product_create');
            }
        }
        return $this->render('product/create.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/edit/{id}", name="product_edit")
     */
    public function editAction(ManagerRegistry $doctrine, int $id, Request $request): Response
    {
        $entitymanager = $doctrine->getManager();
        $products = $entitymanager->getRepository(Product::class)->find($id);
        $form = $this->createForm(ProductType::class, $products);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entitymanager = $doctrine->getManager();
            $entitymanager->persist($products);
            $entitymanager->flush();

            return $this->redirectToRoute('product_list', [
                'id' => $products->getId()
            ]);

        }
        return $this->renderForm('product/edit.html.twig', ['form' => $form,]);
    }
    public function saveChanges(ManagerRegistry $doctrine, $form, $request, $products)
    {
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $products->setName($request->request->get('product')['name']);
            $products->setGenre($request->request->get('product')['genre']);
            $products->setDescription($request->request->get('product')['description']);
            $products->setPrice($request->request->get('product')['price']);
            $entitymanager = $doctrine->getManager();
            $entitymanager->persist($products);
            $entitymanager->flush();

            return true;
        }

        return false;
    }

    /**
     * @Route("/productByGenre/{id}", name="productByGenre")
     */
    public function GenreAction(ManagerRegistry $doctrine, $id): Response
    {
        $genre = $doctrine->getRepository(Genre::class)->find($id);
        $products = $genre->getProducts();
        $genres = $doctrine->getRepository(Genre::class)->findAll();
        return $this->render('product/index.html.twig', [
            'products' => $products,
            'genres' => $genres
        ]);

    }

}
