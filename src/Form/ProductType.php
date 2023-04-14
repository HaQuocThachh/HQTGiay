<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Genre;
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ProductName',TextType::class)
            ->add('category',EntityType::class,array('class'=>'App\Entity\Category','choice_label'=>'Name'))
            ->add('genre',EntityType::class,array('class'=>'App\Entity\Genre','choice_label'=>'GenreName'))
            ->add('Description',TextareaType::class)
            ->add('Date',DateType::class)
            ->add('Price',TextType::class)
            ->add('Image',FileType::class, [
                'mapped'=> false,
                'required'=> false,
                'constraints'=>[

                ],
            ])

//            ->add('genre')
//            ->add('category')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}