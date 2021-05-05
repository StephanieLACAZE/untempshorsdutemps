<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use App\Form\CompteUtilisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class CompteUtilisateurController extends AbstractController
{
    #[Route('/inscription', name: 'inscription')]
    public function index(Request $request): Response
    {
        $utilisateurs = new Utilisateurs;
        $form = $this->createForm(CompteUtilisateurType::class,$utilisateurs);
        $form->handlerequest($request);
        if($form->isSubmitted()&& $form->isValid()) {
            $em =$this->getDoctrine()->getManager();
            $em ->persist ($utilisateurs);
            $em->flush();
            return $this->redirectToRoute('inscription');
        }
        return $this->render('inscription/inscription.html.twig', [
            'form'=>$form->createView()
        ]);
    }
}
