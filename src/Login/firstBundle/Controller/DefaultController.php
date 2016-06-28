<?php

namespace Login\firstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LoginfirstBundle:Estaticas:index.html.twig');
    }
    public function QSAction()
    {
        return $this->render('LoginfirstBundle:Estaticas:QS.html.twig');
    }
      public function MVAction()
    {
        return $this->render('LoginfirstBundle:Estaticas:Mision_Vision.html.twig');
    }
     public function ProductosAction()
    {
        return $this->render('LoginfirstBundle:Estaticas:Productos.html.twig');
    }
       public function NosotrosAction()
    {
        return $this->render('LoginfirstBundle:Estaticas:Nosotros.html.twig');
    }
      public function ContactosAction()
    {
        return $this->render('LoginfirstBundle:Estaticas:Contactos.html.twig');
    }
}
