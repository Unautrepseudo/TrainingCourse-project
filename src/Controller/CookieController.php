<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CookieController extends AbstractController
{
    /**
     * @Route("/cookie", name="cookie")
     */
    public function index()
    {
        return $this->render('cookie/index.html.twig', [
            'controller_name' => 'CookieController',
        ]);
    }
}
