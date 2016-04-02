<?php

namespace cc\BatiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ccBatiBundle:Default:index.html.twig', array('name' => $name));
    }
}
