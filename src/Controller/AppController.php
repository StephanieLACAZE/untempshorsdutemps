<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }

    #[Route('/À-propos', name: 'about')]
    public function about(): Response
    {
        return $this->render('app/about.html.twig', 
    );
    }

    #[Route('/Prestations/{id}', name: 'list_cares')]
    public function listCares(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Soins::class);
        $soins=$repository->findBy([],['id'=>'DESC'],1);
        return $this->render('app/list_cares.html.twig',[
            'soins'=>$soins
        ]);
    }

    #[Route('/Prestations/{id}', name: 'view_cares')]
    public function viewCares(): Response
    {
        return $this->render('app/view_cares.html.twig', 
    );
    }

    #[Route('/Contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('app/contact.html.twig', 
    );
    }
}
