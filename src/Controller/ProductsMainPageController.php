<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductsMainPageController extends AbstractController
{
    /**
     * @Route("/products/main/page", name="products_main_page")
     */
    public function index()
    {
        return $this->render('products_main_page/index.html.twig', [
            'controller_name' => 'ProductsMainPageController',
        ]);
    }
}
