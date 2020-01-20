<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DecorationController extends AbstractController
{
    /**
     * @Route("/decoration", name="decoration")
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('decoration/index.html.twig', [
            'products' => $productRepository->findby (array('categorie' => 'Decoration')),

        ]);
    }
}