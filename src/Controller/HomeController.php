<?php

namespace App\Controller;

use App\Repository\EleveRepository;
use App\Repository\MaisonRepository;
use App\Repository\ProfesseurRepository;
use App\Repository\MatiereRepository;
use App\Repository\NoteRepository;
use App\Repository\CompetenceRepository;
use App\Repository\BaguetteRepository;
use App\Repository\PromotionRepository;
use App\Repository\CompositionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        EleveRepository $eleveRepository,
        MaisonRepository $maisonRepository,
        ProfesseurRepository $professeurRepository,
        MatiereRepository $matiereRepository,
        NoteRepository $noteRepository,
        CompetenceRepository $competenceRepository,
        BaguetteRepository $baguetteRepository,
        PromotionRepository $promotionRepository,
        CompositionRepository $compositionRepository
    ): Response
    {
        return $this->render('home/index.html.twig', [
            'stats' => [
                'eleves' => count($eleveRepository->findAll()),
                'maisons' => count($maisonRepository->findAll()),
                'professeurs' => count($professeurRepository->findAll()),
                'matieres' => count($matiereRepository->findAll()),
                'notes' => count($noteRepository->findAll()),
                'competences' => count($competenceRepository->findAll()),
                'baguettes' => count($baguetteRepository->findAll()),
                'promotions' => count($promotionRepository->findAll()),
                'compositions' => count($compositionRepository->findAll()),
            ],
        ]);
    }
}
