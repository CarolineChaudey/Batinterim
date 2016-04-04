<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace cc\BatiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use cc\BatiBundle\Entity\Artisan;

/**
 * Description of BatiInterimArtisan
 *
 * @author Caroline
 */
class BatiInterimArtisanController extends Controller {
    
    public function indexAction(Request $request){
        return $this->render('ccBatiBundle:Gestionnaire:menuGest.html.twig');
    }
    
    public function creerArtisanAction(Request $request){
        
        $artisan = new Artisan();
        $form = $this->createForm(new \cc\BatiBundle\Form\ArtisanType(), $artisan);
                
        $form->handleRequest($request);
        
        if($form->isValid()){
            $artisan->setAffectation('L');
            $artisan->setLogin(strtolower(substr($artisan->getPrenom(), 0, 1).$artisan->getNom()));
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($artisan);
            $em->flush();
        }
        
        return $this->render('ccBatiBundle:Gestionnaire:creationArtisan.html.twig', array( 'form' => $form->createView() ));
    }
    
    public function creerChefAction(Request $request){
        return new Response('Creer chef de chantier');
    }
    
    public function voirProfilsAction(Request $request){
        return new Response('Consulter profils');
    }
    
}
