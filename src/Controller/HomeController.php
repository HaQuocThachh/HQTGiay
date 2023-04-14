<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Genre;
use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class HomeController extends AbstractController
{
    /**
     * @Route("/product_view/{id}", name="view_product")
     */
    public function Show(ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger, int $id, Product $products): Response
    {
        $products = $doctrine->getRepository(Product::class)->findProduct($id);
        $genre = $doctrine->getRepository(Genre::class)->findAll();
        $category = $doctrine->getRepository(Category::class)->findAll();

        return $this->render('home/view.html.twig', array(
            'products' => $products,
            'genre' => $genre,
            'category' => $category,
        ));
    }
}