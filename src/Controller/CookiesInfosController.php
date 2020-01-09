<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CookiesInfosController extends AbstractController
{
    /**
     * @Route("/cookies/infos", name="cookies_infos")
     */
    public function index()
    {
        return $this->render('cookies_infos/index.html.twig', [
            'controller_name' => 'CookiesInfosController',
        ]);
    }
}
