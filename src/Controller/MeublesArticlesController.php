<?php

namespace App\Controller;

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
}
