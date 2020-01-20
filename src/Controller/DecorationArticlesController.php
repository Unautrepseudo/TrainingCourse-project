<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DecorationArticlesController extends AbstractController
{
    /**
     * @Route("/decoration/articles", name="decoration_articles")
     */
    public function index()
    {
        return $this->render('decoration_articles/index.html.twig', [
            'controller_name' => 'DecorationArticlesController',
        ]);
    }

     /**
     * @Route("poteries", name="poteries")
     */
    public function poteries(ProductRepository $productRepository): Response
    {
        return $this->render('decoration_articles/poteries.html.twig', [
<<<<<<< HEAD
            'products' => $productRepository->findAll(),
=======
            'products' => $productRepository->findby (array('type' => 'poteries')),
>>>>>>> 1d08c7024e797de584801acbb8b3cb5aa096571d

        ]);
    }

     /**
     * @Route("luminaires", name="luminaires")
     */
    public function luminaires(ProductRepository $productRepository): Response
    {
        return $this->render('decoration_articles/luminaires.html.twig', [
<<<<<<< HEAD
            'products' => $productRepository->findAll(),
=======
            'products' => $productRepository->findby (array('type' => 'luminaires')),
>>>>>>> 1d08c7024e797de584801acbb8b3cb5aa096571d

        ]);
    }

     /**
     * @Route("murales", name="murales")
     */
    public function murales(ProductRepository $productRepository): Response
    {
        return $this->render('decoration_articles/murales.html.twig', [
<<<<<<< HEAD
            'products' => $productRepository->findAll(),
=======
            'products' => $productRepository->findby (array('type' => 'murales')),
>>>>>>> 1d08c7024e797de584801acbb8b3cb5aa096571d

        ]);
    }

     /**
     * @Route("bougies", name="bougies")
     */
    public function bougies(ProductRepository $productRepository): Response
    {
        return $this->render('decoration_articles/bougies.html.twig', [
<<<<<<< HEAD
            'products' => $productRepository->findAll(),
=======
            'products' => $productRepository->findby (array('type' => 'bougies')),
>>>>>>> 1d08c7024e797de584801acbb8b3cb5aa096571d

        ]);
    }

}
