<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsMainPageController extends AbstractController
{
    /**
     * @Route("/products/main/page", name="products_main_page")
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('products_main_page/index.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }


  /**
     * @Route("/{id}", name="products_main_page_show", methods={"GET"})
     */
     public function show(Product $product): Response
    {
        return $this->render('products_main_page/show.html.twig', [
            'product' => $product,
        ]);
    }
}