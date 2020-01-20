<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JouetsController extends AbstractController
{
    /**
     * @Route("/jouets", name="jouets")
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('jouets/index.html.twig', [
            'products' => $productRepository->findAll(),

        ]);
    }
}