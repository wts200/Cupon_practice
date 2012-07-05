<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction($name)
    {
        // Ejemplo
        return $this->render('OfertaBundle:Default:index.html.twig', array('name' => $name));
    }
}
