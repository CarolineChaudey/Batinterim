<?php

namespace cc\BatiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $form = $this->createFormBuilder()
                ->add('login', 'text')
                ->add('mdp', 'password')
                ->add('valider', 'submit')
                ->add('annuler', 'reset')
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            //return new Response("test");
            
            $login = $form["login"]->getData();
            $mdp = $form["mdp"]->getData();
            
            $em = $this->getDoctrine()->getManager();
            $repoA = $em->getRepository('ccBatiBundle:Artisan');
            $repoC = $em->getRepository('ccBatiBundle:ChefChantier');
            $repoG = $em->getRepository('ccBatiBundle:Gestionnaire');

            $user = null;
            $user = $repoG->chercherGestionnaire($login, $mdp);
            if($user !== null){
                $request->getSession()->set('user', $user);
                return new Response("ok");
            }
            $user = $repoC->chercherChef($login, $mdp);
            if($user !== null){
                $request->getSession()->set('user', $user);
                return new Response("ok");
            }
            $user = $repoA->chercherArtisan($login, $mdp);
            if($user !== null){
                $request->getSession()->set('user', $user);
                return new Response("ok");
            }
            else{
                //return new Response("nok");
                $this->addFlash('error', 'Utilisateur inconnu.');
                return $this->redirectToRoute('connexion');
            }
             
        }  
        return $this->render('ccBatiBundle:Default:connexion.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
