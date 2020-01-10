<?php

namespace App\Controller;

use App\Entity\Artisan;
use App\Form\ArtisanType;
use App\Repository\ArtisanRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/artisan")
 */
class ArtisanController extends AbstractController
{
    /**
     * @Route("/", name="artisan_index", methods={"GET"})
     */
    public function index(ArtisanRepository $artisanRepository): Response
    {
        return $this->render('artisan/index.html.twig', [
            'artisans' => $artisanRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="artisan_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $artisan = new Artisan();
        $form = $this->createForm(ArtisanType::class, $artisan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($artisan);
            $entityManager->flush();

            return $this->redirectToRoute('artisan_index');
        }

        return $this->render('artisan/new.html.twig', [
            'artisan' => $artisan,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="artisan_show", methods={"GET"})
     */
    public function show(Artisan $artisan): Response
    {
        return $this->render('artisan/show.html.twig', [
            'artisan' => $artisan,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="artisan_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Artisan $artisan): Response
    {
        $form = $this->createForm(ArtisanType::class, $artisan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('artisan_index');
        }

        return $this->render('artisan/edit.html.twig', [
            'artisan' => $artisan,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="artisan_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Artisan $artisan): Response
    {
        if ($this->isCsrfTokenValid('delete'.$artisan->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($artisan);
            $entityManager->flush();
        }

        return $this->redirectToRoute('artisan_index');
    }
}
