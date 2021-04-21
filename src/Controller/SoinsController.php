<?php

namespace App\Controller;

use App\Entity\Soins;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SoinsController extends AbstractController
{
    #[Route('/soins', name: 'soins')]
    public function index(): Response
    {
        
            $repository = $this->getDoctrine()->getRepository(Soins::class);
            $soins=$repository->findAll(); 
            return $this->render('soins/soins.html.twig', [
                'soins'=>$soins
            ]);
      
    }
}
