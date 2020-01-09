<?php

namespace App\Controller;

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
}
