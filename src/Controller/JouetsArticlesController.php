<?php

namespace App\Controller;

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
}
