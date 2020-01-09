<?php

namespace App\Controller;

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
}
