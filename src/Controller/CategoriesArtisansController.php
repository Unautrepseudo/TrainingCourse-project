<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesArtisansController extends AbstractController
{
    /**
     * @Route("/categories/artisans", name="categories_artisans")
     */
    public function index()
    {
        return $this->render('categories_artisans/index.html.twig', [
            'controller_name' => 'CategoriesArtisansController',
        ]);
    }


    public function couturier()
    {
        return $this->render('categories_artisans/index.html.twig', [
            'controller_name' => 'CategoriesArtisansController',
        ]);
    }

    public function forgeron()
    {
        return $this->render('categories_artisans/index.html.twig', [
            'controller_name' => 'CategoriesArtisansController',
        ]);
    }

    public function peintre()
    {
        return $this->render('categories_artisans/index.html.twig', [
            'controller_name' => 'CategoriesArtisansController',
        ]);
    }

    public function menuisier()
    {
        return $this->render('categories_artisans/index.html.twig', [
            'controller_name' => 'CategoriesArtisansController',
        ]);
    }

    public function potier()
    {
        return $this->render('categories_artisans/index.html.twig', [
            'controller_name' => 'CategoriesArtisansController',
        ]);
    }

    public function tapissier()
    {
        return $this->render('categories_artisans/index.html.twig', [
            'controller_name' => 'CategoriesArtisansController',
        ]);
    }

    
    public function bijoutier()
    {
        return $this->render('categories_artisans/index.html.twig', [
            'controller_name' => 'CategoriesArtisansController',
        ]);
    }

    
    public function Autre()
    {
        return $this->render('categories_artisans/index.html.twig', [
            'controller_name' => 'CategoriesArtisansController',
        ]);
    }
}
