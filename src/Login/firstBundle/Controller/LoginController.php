<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Login\firstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

/**
 * Description of LoginController
 *
 * @author ALVARO
 */
class LoginController extends Controller {

//action q me carga los perfiles
    public function PerfilesAction(Request $request) {
        if ($request->getMethod() == "POST") {
            $Perfil = $request->get("_perfil");
            $Username = $request->get("_username");
            $Pass = $request->get("_password");
            switch ($Perfil) {
                case "ADMINISTRADOR":
                    $user = $this->getDoctrine()->getRepository('LoginfirstBundle:Administradores')->findOneBy(array("cidentidad" => $Username, "password" => $Pass));
                    if ($user) {
                        $session = $request->getSession();
                        $session->set("id", $user->getId());
                        $session->set("Nombre", $user->getNombre());
                        return $this->render('LoginfirstBundle:Admin:indexAdmin.html.twig');
                    } else {
                        $this->get('session')->getFlashBag()->add('mensaje', 'No existe ese usuario');
                        return $this->redirect($this->generateUrl('Login'));
                    }
                    break;
                case "CLIENTE":
                    $user = $this->getDoctrine()->getRepository('LoginfirstBundle:Clientes')->findOneBy(array("ruc" => $Username, "password" => $Pass));
                    if ($user) {
                        $session = $request->getSession();
                        $session->set("id", $user->getId());
                        $session->set("usuario", $user->getUsuario());

                        return $this->redirect($this->generateUrl('Cliente'));
                    } else {
                        $this->get('session')->getFlashBag()->add('mensaje', 'No existe ese  Cliente');
                        return $this->redirect($this->generateUrl('Login'));
                    }
                    break;
                case "EMPLEADO":
                    $user = $this->getDoctrine()->getRepository('LoginfirstBundle:Empleados')->findOneBy(array("cidentidad" => $Username, "password" => $Pass));
                    if ($user) {
                        $session = $request->getSession();
                        $session->set("id", $user->getId());
                        $session->set("Nombre", $user->getNombre());
                        return $this->redirect($this->generateUrl('Empleado'));
                    } else {
                        $this->get('session')->getFlashBag()->add('mensaje', 'No existe ese Empleado');
                        return $this->redirect($this->generateUrl('Login'));
                    }
                    break;
            }
        } else {
            $em = $this->getDoctrine()->getManager(); //comunica con la BDD
            $query = $em->createquery(
                    'SELECT p FROM LoginfirstBundle:Perfiles p WHERE p.estado <>0 ORDER BY p.nombre asc'
            );
            $Perfil = $query->getResult();
            return $this->render('LoginfirstBundle:Login:Login.html.twig', array('Perfiles' => $Perfil));
        }
    }

//action 
    public function LogoutAction(Request $request) {
        $sesion = $request->getSession();
        $sesion->clear();
        return $this->redirect($this->generateUrl('Login'));
    }
}
