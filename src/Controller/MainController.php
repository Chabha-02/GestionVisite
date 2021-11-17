<?php

namespace App\Controller;

use App\Repository\MedecinRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/vvvv', name: 'gestion visite')]
    public function index(MedecinRepository $medecinRepository): Response
    {
        $lastMedecin = $medecinRepository->findLastMedecin(3);

        return $this->render('main/index.html.twig', [
            'lastMedecin' => $lastMedecin,
        ]);
    }
}
