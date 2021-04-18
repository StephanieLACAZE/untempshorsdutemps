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
        return $this->render('a-propos/indexAPropos.html.twig', [
            'controller_name' => 'AProposController',
        ]);
    }
}
