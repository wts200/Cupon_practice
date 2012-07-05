<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction($name)
    {
        // Ejemplo
      if (1==1) {
        echo "prueba";
        }

        return $this->render('OfertaBundle:Default:index.html.twig', array('name' => $name));
    }
}
