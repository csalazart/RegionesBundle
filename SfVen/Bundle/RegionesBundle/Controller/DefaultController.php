<?php

namespace SfVen\Bundle\RegionesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SfVenRegionesBundle:Default:index.html.twig', array('name' => $name));
    }
}
