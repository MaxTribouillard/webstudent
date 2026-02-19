<?php

namespace App\Controller;

use App\Entity\Epouvantard;
use App\Form\EpouvantardType;
use App\Repository\EpouvantardRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/epouvantard')]
final class EpouvantardController extends AbstractController
{
    #[Route(name: 'app_epouvantard_index', methods: ['GET'])]
    public function index(EpouvantardRepository $epouvantardRepository): Response
    {
        return $this->render('epouvantard/index.html.twig', [
            'epouvantards' => $epouvantardRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_epouvantard_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $epouvantard = new Epouvantard();
        $form = $this->createForm(EpouvantardType::class, $epouvantard);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($epouvantard);
            $entityManager->flush();

            return $this->redirectToRoute('app_epouvantard_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('epouvantard/new.html.twig', [
            'epouvantard' => $epouvantard,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_epouvantard_show', methods: ['GET'])]
    public function show(Epouvantard $epouvantard): Response
    {
        return $this->render('epouvantard/show.html.twig', [
            'epouvantard' => $epouvantard,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_epouvantard_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Epouvantard $epouvantard, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EpouvantardType::class, $epouvantard);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_epouvantard_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('epouvantard/edit.html.twig', [
            'epouvantard' => $epouvantard,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_epouvantard_delete', methods: ['POST'])]
    public function delete(Request $request, Epouvantard $epouvantard, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$epouvantard->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($epouvantard);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_epouvantard_index', [], Response::HTTP_SEE_OTHER);
    }
}
