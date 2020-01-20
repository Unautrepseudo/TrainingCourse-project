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
            'products' => $productRepository->findby (array('type' => 'poteries')),

        ]);
    }

     /**
     * @Route("luminaires", name="luminaires")
     */
    public function luminaires(ProductRepository $productRepository): Response
    {
        return $this->render('decoration_articles/luminaires.html.twig', [
            'products' => $productRepository->findby (array('type' => 'luminaires')),

        ]);
    }

     /**
     * @Route("murales", name="murales")
     */
    public function murales(ProductRepository $productRepository): Response
    {
        return $this->render('decoration_articles/murales.html.twig', [
            'products' => $productRepository->findby (array('type' => 'murales')),

        ]);
    }

     /**
     * @Route("bougies", name="bougies")
     */
    public function bougies(ProductRepository $productRepository): Response
    {
        return $this->render('decoration_articles/bougies.html.twig', [
            'products' => $productRepository->findby (array('type' => 'bougies')),

        ]);
    }

}
