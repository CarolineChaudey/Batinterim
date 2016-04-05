<?php


namespace cc\BatiBundle\Controller;

use cc\BatiBundle\Entity\Artisan;

/**
 * Description of BatiInterimController
 *
 * @author Caroline
 */
class BatiInterimController {
    //put your code here
    
    public function modifierArtisanAction($idArtisan){
        $em = $this->getDoctrine()->getManager();
        $artisan = $em->getRepository('ccBatiBundle:Artisan')->findById($idArtisan);
        $formArtisan = $this->getForm('ccBatiBundle:Artisan', $artisan);
        
        // on "rend" le formulaire dans une vue twig
    }
    
    public function supprimerArtisan($idArtisan){
        $em = $this->getDoctrine()->getManager();
        $artisan = $em->getRepository('ccBatiBundle:Artisan')->findById($idArtisan);
        $em->remove($artisan);
        $em->flush();
        
        return $this->render('ccBatiBundle:Gestionnaire:listeProfils.html.twig');
    }
    
}
