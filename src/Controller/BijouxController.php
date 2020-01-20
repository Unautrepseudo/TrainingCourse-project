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
<<<<<<< HEAD
            'products' => $productRepository->findAll(),
=======
            'products' => $productRepository->findby (array('categorie' => 'Bijoux')),
>>>>>>> 1d08c7024e797de584801acbb8b3cb5aa096571d

        ]);
    }
}
