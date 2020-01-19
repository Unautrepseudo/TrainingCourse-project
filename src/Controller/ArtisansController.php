<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Artisan;
use App\Form\ArtisanType;
use App\Repository\ArtisanRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\RegistrationFormType;

class ArtisansController extends AbstractController
{
    /**
     * @Route("/artisans", name="artisans")
     */

    public function index(ArtisanRepository $artisanRepository): Response
    {
        return $this->render('artisans/index.html.twig', [
            'artisans' => $artisanRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="artisans_show", methods={"GET"})
     */
     public function show(Artisan $artisan): Response
    {
        return $this->render('artisans/show.html.twig', [
            'artisan' => $artisan,
        ]);
    }
}
