<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductSingleController extends AbstractController
{
    /**
     * @Route("/productsingle", name="product_single")
     */
    public function index()
    {
        return $this->render('product_single/index.html.twig', [
            'controller_name' => 'ProductSingleController',
        ]);
    }
}
