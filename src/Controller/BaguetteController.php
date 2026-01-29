<?php

namespace App\Controller;

use App\Entity\Baguette;
use App\Form\BaguetteType;
use App\Repository\BaguetteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/baguette')]
final class BaguetteController extends AbstractController
{
    #[Route(name: 'app_baguette_index', methods: ['GET'])]
    public function index(BaguetteRepository $baguetteRepository): Response
    {
        return $this->render('baguette/index.html.twig', [
            'baguettes' => $baguetteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_baguette_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $baguette = new Baguette();
        $form = $this->createForm(BaguetteType::class, $baguette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($baguette);
            $entityManager->flush();

            return $this->redirectToRoute('app_baguette_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('baguette/new.html.twig', [
            'baguette' => $baguette,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_baguette_show', methods: ['GET'])]
    public function show(Baguette $baguette): Response
    {
        return $this->render('baguette/show.html.twig', [
            'baguette' => $baguette,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_baguette_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Baguette $baguette, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BaguetteType::class, $baguette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_baguette_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('baguette/edit.html.twig', [
            'baguette' => $baguette,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_baguette_delete', methods: ['POST'])]
    public function delete(Request $request, Baguette $baguette, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$baguette->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($baguette);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_baguette_index', [], Response::HTTP_SEE_OTHER);
    }
}
