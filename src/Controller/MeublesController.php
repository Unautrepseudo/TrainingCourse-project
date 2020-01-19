<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MeublesController extends AbstractController
{
    /**
     * @Route("/meubles", name="meubles")
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('meubles/index.html.twig', [
            'products' => $productRepository->findAll(),

        ]);
    }
}
