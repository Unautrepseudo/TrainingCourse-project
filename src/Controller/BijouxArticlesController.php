<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BijouxArticlesController extends AbstractController
{
    /**
     * @Route("/bijoux/articles", name="bijoux_articles")
     */
    public function index()
    {
        return $this->render('bijoux_articles/index.html.twig', [
            'controller_name' => 'BijouxArticlesController',
        ]);
    }

    /**
     * @Route("bagues", name="bagues")
     */
    public function bagues(ProductRepository $productRepository): Response
    {
        return $this->render('bijoux_articles/bagues.html.twig', [
            'products' => $productRepository->findAll(),

        ]);
    }

     /**
     * @Route("bracelets", name="bracelets")
     */
    public function bracelets(ProductRepository $productRepository): Response
    {
        return $this->render('bijoux_articles/bracelets.html.twig', [
            'products' => $productRepository->findAll(),

        ]);
    }

     /**
     * @Route("colliers", name="colliers")
     */
    public function colliers(ProductRepository $productRepository): Response
    {
        return $this->render('bijoux_articles/colliers.html.twig', [
            'products' => $productRepository->findAll(),

        ]);
    }

     /**
     * @Route("tete", name="tete")
     */
    public function tete(ProductRepository $productRepository): Response
    {
        return $this->render('bijoux_articles/tete.html.twig', [
            'products' => $productRepository->findAll(),

        ]);
    }
}
