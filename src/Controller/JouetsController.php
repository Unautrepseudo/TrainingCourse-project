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
<<<<<<< HEAD
            'products' => $productRepository->findAll(),
=======
            'products' => $productRepository->findby (array('categorie' => 'Jouets')),
>>>>>>> 1d08c7024e797de584801acbb8b3cb5aa096571d

        ]);
    }
}