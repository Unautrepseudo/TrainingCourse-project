<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MeublesArticlesController extends AbstractController
{
    /**
     * @Route("/meubles/articles", name="meubles_articles")
     */
    public function index()
    {
        return $this->render('meubles_articles/index.html.twig', [
            'controller_name' => 'MeublesArticlesController',
        ]);
    }

    /**
     * @Route("tables", name="tables")
     */
    public function tables(ProductRepository $productRepository): Response
    {
        return $this->render('meubles_articles/tables.html.twig', [
            'products' => $productRepository->findby (array('type' => 'tables')),

        ]);
    }

    /**
     * @Route("chaises", name="chaises")
     */
    public function chaises(ProductRepository $productRepository): Response
    {
        return $this->render('meubles_articles/chaises.html.twig', [
            'products' => $productRepository->findby (array('type' => 'chaises')),

        ]);
    }

     /**
     * @Route("bureaux", name="bureaux")
     */
    public function bureaux(ProductRepository $productRepository): Response
    {
        return $this->render('meubles_articles/bureaux.html.twig', [
            'products' => $productRepository->findby (array('type' => 'bureaux')),

        ]);
    }

     /**
     * @Route("etageres", name="etageres")
     */
    public function etageres(ProductRepository $productRepository): Response
    {
        return $this->render('meubles_articles/etageres.html.twig', [
            'products' => $productRepository->findby (array('type' => 'etageres')),

        ]);
    }

     /**
     * @Route("armoires", name="armoires")
     */
    public function armoires(ProductRepository $productRepository): Response
    {
        return $this->render('meubles_articles/armoires.html.twig', [
            'products' => $productRepository->findby (array('type' => 'armoires')),

        ]);
    }
}
