<?php

namespace App\Controller;

use App\Repository\SaisonRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
/**
 * @Route("/serie/{slug}/saison")
 */
class SaisonController extends AbstractController
{
    /**
     * @Route("/", name="saison")
     */
    public function index(SaisonRepository $saisonRepository) :Response
    {
        return $this->render('saison/index.html.twig', [
            'saisons' => $saisonRepository->findBySeason(),
        ]);
    }
}
