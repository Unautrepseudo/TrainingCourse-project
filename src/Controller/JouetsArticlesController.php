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
<<<<<<< HEAD
            'products' => $productRepository->findAll(),
=======
            'products' => $productRepository->findby (array('type' => 'figurines')),
>>>>>>> 1d08c7024e797de584801acbb8b3cb5aa096571d

        ]);
    }

     /**
     * @Route("jeux", name="jeux")
     */
    public function jeux(ProductRepository $productRepository): Response
    {
        return $this->render('jouets_articles/jeux.html.twig', [
<<<<<<< HEAD
            'products' => $productRepository->findAll(),
=======
            'products' => $productRepository->findby (array('type' => 'jeux')),
>>>>>>> 1d08c7024e797de584801acbb8b3cb5aa096571d

        ]);
    }

     /**
     * @Route("peluches", name="peluches")
     */
    public function peluches(ProductRepository $productRepository): Response
    {
        return $this->render('jouets_articles/peluches.html.twig', [
<<<<<<< HEAD
            'products' => $productRepository->findAll(),
=======
            'products' => $productRepository->findby (array('type' => 'peluches')),
>>>>>>> 1d08c7024e797de584801acbb8b3cb5aa096571d

        ]);
    }

     /**
     * @Route("puzzle", name="puzzle")
     */
    public function puzzle(ProductRepository $productRepository): Response
    {
        return $this->render('jouets_articles/puzzle.html.twig', [
<<<<<<< HEAD
            'products' => $productRepository->findAll(),
=======
            'products' => $productRepository->findby (array('type' => 'puzzle')),
>>>>>>> 1d08c7024e797de584801acbb8b3cb5aa096571d

        ]);
    }
}
