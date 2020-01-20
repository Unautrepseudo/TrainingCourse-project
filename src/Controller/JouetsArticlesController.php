<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JouetsArticlesController extends AbstractController
{
    /**
     * @Route("/jouets/articles", name="jouets_articles")
     */
    public function index()
    {
        return $this->render('jouets_articles/index.html.twig', [
            'controller_name' => 'JouetsArticlesController',
        ]);
    }

        /**
     * @Route("figurines", name="figurines")
     */
    public function figurines(ProductRepository $productRepository): Response
    {
        return $this->render('jouets_articles/figurines.html.twig', [
            'products' => $productRepository->findAll(),

        ]);
    }

     /**
     * @Route("jeux", name="jeux")
     */
    public function jeux(ProductRepository $productRepository): Response
    {
        return $this->render('jouets_articles/jeux.html.twig', [
            'products' => $productRepository->findAll(),

        ]);
    }

     /**
     * @Route("peluches", name="peluches")
     */
    public function peluches(ProductRepository $productRepository): Response
    {
        return $this->render('jouets_articles/peluches.html.twig', [
            'products' => $productRepository->findAll(),

        ]);
    }

     /**
     * @Route("puzzle", name="puzzle")
     */
    public function puzzle(ProductRepository $productRepository): Response
    {
        return $this->render('jouets_articles/puzzle.html.twig', [
            'products' => $productRepository->findAll(),

        ]);
    }
}
