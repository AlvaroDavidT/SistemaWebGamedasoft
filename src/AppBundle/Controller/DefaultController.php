<?php

/*
 * ESTA ES EL CONTROLADOR QUE REDIRECCIONA A LA PAGINA INDEX
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction() {
        return $this->render('LoginfirstBundle:Estaticas:index.html.twig');
    }

}
