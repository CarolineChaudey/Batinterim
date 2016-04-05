<?php


namespace cc\BatiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use cc\BatiBundle\Entity\Artisan;
use cc\BatiBundle\Entity\ChefChantier;

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
            
            // retourner la vue pour que le formulaire se vide
        }
        
        return $this->render('ccBatiBundle:Gestionnaire:creationArtisan.html.twig', array( 'form' => $form->createView() ));
    }
    
    public function creerChefAction(Request $request){
        //return new Response('Creer chef de chantier');
        // zone de test
        
        $chef = new ChefChantier();
        $form = $this->createForm(new ChefChantierType(), $chef); // formulaire ChefChantier à créer
                
        $form->handleRequest($request);
        
        if($form->isValid()){   
            $chef->setLogin(strtolower(substr($chef->getPrenom(), 0, 1).$chef->getNom()));
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($chef);
            $em->flush();
            
            // pareil on retourne la vue
        }
        
        return $this->render('ccBatiBundle:Gestionnaire:creationChef.html.twig', array( 'form' => $form->createView() ));
        
        // fin zone
    }
    
    public function voirProfilsAction(Request $request){
        
        // 2 colonnes : les artisans et les chefs de chantier
        // zone de test
        
        $lesArtisans = $this->getDoctrine()->getManager()->getRepository('ccBatiBundle:Artisan');
        $lesChefs = $this->getDoctrine()->getManager()->getRepository('ccBatiBundle:ChefChantier');
        
        return $this->render('ccBatiBundle:Gestionnaire:listeProfils', array(
            'lesArtisans' => $lesArtisans,
            'lesChefs' => $lesChefs
        ));
        // fin zone
        
    }
    
}
