<?php

namespace Login\firstBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Login\firstBundle\Entity\Requerimientos;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Login\firstBundle\Entity\Detallehojas;

class EmpleadoController extends Controller {

    public function EmpleadoAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            return $this->render('LoginfirstBundle:Empleados:indexEmpleado.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
//    public function RegistroTAction(Request $request)
//    {
//            $session = $request->getSession();
//        if ($session->has("id")) {
//               return $this->render('LoginfirstBundle:Empleados:RegistroTiempos.html.twig');
//            } else {
//            $this->get('session')->getFlashBag()->add(
//                    'mensaje', 'Debes Iniciar Sesion'
//            );
//            return $this->redirect($this->generateUrl('Login'));
//        }
//    }
     public function updateEmpleadoAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $id = $session->get('id');
            $repository = $this->getDoctrine()->getRepository('LoginfirstBundle:Empleados');
            $Empleado = $repository->findById($id);
            return $this->render('LoginfirstBundle:Empleados:UpdateEmpleado.html.twig', array('Empleado' => $Empleado));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    public function GuardarEmpleadoAction($Empleado,Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $DtosCliente = $em->getRepository('LoginfirstBundle:Empleados')->find($Empleado);
            if (!$DtosCliente) {
                throw $this->createNotFoundException(
                        'NO existe ese Empleado ' . $Empleado
                );
            }
            $NombreEmpresa = $request->get("NombreEmpresa");
            $DireccionEmpresa = $request->get("DireccionEmpresa");
            $TelefonoEmpresa = $request->get("TelefonoEmpresa");
            $UsuarioEmpresa = $request->get("UsuarioEmpresa");
            $ContactoEmpresa = $request->get("ContactoEmpresa");
            $MailEmpresa = $request->get("MailEmpresa");
            $DtosCliente->setNombre($NombreEmpresa);
            $DtosCliente->setDireccion($DireccionEmpresa);
            $DtosCliente->setTelefono($TelefonoEmpresa);
            $DtosCliente->setUsuario($UsuarioEmpresa);
            $DtosCliente->setContacto($ContactoEmpresa);
            $DtosCliente->setEmail($MailEmpresa);        
            $em->flush();
            $response = new Response(json_encode($DtosCliente));
            $response->headers->set('Content-Type', 'application/json');
            return $response;       
        }
    }
       public function RegistroTAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $id = $session->get('id');
            $repository = $this->getDoctrine()->getRepository('LoginfirstBundle:Empleados');
            $Empleado = $repository->findById($id);
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery
                            (
                            'SELECT DISTINCT(C.nombre)as Nombre,C.id as codigo
                    FROM LoginfirstBundle:Clientes C 
                    JOIN LoginfirstBundle:Requerimientos R WITH C.id= R.clientes 
                    where R.asignadoemp=:Asignado and R.estados=2
                 '
                    )->setParameter('Asignado',$Empleado);
            
           $ClientesR = $query->getResult();
//                   print_r($ClientesR);
//          exit();
 
            return $this->render('LoginfirstBundle:Empleados:RegistroTiempos.html.twig', array('clientesReq' => $ClientesR));
         
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    public function RequerimientoEmpAction($idEmpresa,Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $id = $session->get('id');
            $repository = $this->getDoctrine()->getRepository('LoginfirstBundle:Empleados');
            $Empleado = $repository->findById($id);
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
                            'SELECT R.id as ID, R.fecha as Fecha, R.descripcion as Descripcion 
                    FROM LoginfirstBundle:Requerimientos R
                   where R.asignadoemp=:Asignado and R.estados=2 and R.clientes=:Cliente'
                    )->setParameters(array('Asignado'=>$Empleado,'Cliente'=>$idEmpresa));
            $requerimientos = $query->getArrayResult();


            $response = new Response(json_encode($requerimientos));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }
    }
    
    ///Guardar el registro de tiempos
    
     public function GuardarRegistroTAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $id = $session->get('id');
            $em = $this->getDoctrine()->getManager();
            $Empleado = $em->getRepository('LoginfirstBundle:Empleados')->find($id);
            $cliente=  $request->get('RegistroReq');
            $RequerimienForm=$request->get('Requerimiento');
            $Requerimiento = $em->getRepository('LoginfirstBundle:Requerimientos')->find($RequerimienForm);
            $Estado = $em->getRepository('LoginfirstBundle:Estados')->find(3);
            if (!$Requerimiento) {
                throw $this->createNotFoundException(
                        'Requerimiento no Encontrado ' . $RequerimienForm
                );
            }
            $Requerimiento->setEstados($Estado);
            $Time = $request->get("time");
            $actividad = $request->get("actividad");
            $DetalleTiempo = new Detallehojas();           
            $DetalleTiempo->setFecha(new \DateTime("now")); 
            $DetalleTiempo->setActividad("Req-"+$RequerimienForm+$actividad);
            $DetalleTiempo->setTiempo($Time);
            $ClienteId = $em->getRepository('LoginfirstBundle:Clientes')->find($cliente);
            $DetalleTiempo->setClientes($ClienteId);
            $HojaT = $this->getDoctrine()->getRepository('LoginfirstBundle:Hojastiempo')->findOneBy(array("empleados" => $Empleado));
            $DetalleTiempo->setHojastiempo($HojaT);
            $em->persist($DetalleTiempo);
            $em->flush();
           
          

            $this->get('session')->getFlashBag()->add('mensaje', 'Tiempo Ingresado');
            return $this->redirect($this->generateUrl('RegistroT'));    
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    
}
