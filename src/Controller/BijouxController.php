<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class BijouxController extends AbstractController
{
    /**
     * @Route("/bijoux", name="bijoux")
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('bijoux/index.html.twig', [
            'products' => $productRepository->findAll(),

        ]);
    }
}
