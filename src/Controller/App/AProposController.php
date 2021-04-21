<?php

namespace App\Controller\App;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AProposController extends AbstractController
{
    #[Route('/a-propos', name: 'a-propos')]
    public function index(): Response
    {
        return $this->render('a-propos/aPropos.html.twig', [
            'controller_name' => 'AProposController',
        ]);
    }
}
