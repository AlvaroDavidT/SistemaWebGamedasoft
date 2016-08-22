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
    public function GuardarEmpleadoAction(Request $request,$Empleado) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $DtosCliente = $em->getRepository('LoginfirstBundle:Empleados')->find($Empleado);
            if (!$DtosCliente) {
                throw $this->createNotFoundException(
                        'NO existe ese Empleado ' . $Empleado
                );
            }
            $NombreEmpleado = $request->get("NombreEmpleado");
            $DireccionEmpleado = $request->get("DireccionEmpleado");
            $TelefonoEmpleado = $request->get("TelefonoEmpleado");
            $MailEmpleado = $request->get("MailEmpleado");
            $DtosCliente->setNombre($NombreEmpleado);
            $DtosCliente->setDireccion($DireccionEmpleado);
            $DtosCliente->setTelefono($TelefonoEmpleado);
            $DtosCliente->setEmail($MailEmpleado);        
            $em->flush();
            $response = new Response(json_encode($DtosCliente));
            $response->headers->set('Content-Type', 'application/json');
            return $response;       
        }
    }
    
    /*
     * Controller para cambiar de clave
     * 
     */
    
    #=========================Cambiar clave===========================================
    public function CambiarClaveAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $id = $session->get('id');
            $repository = $this->getDoctrine()->getRepository('LoginfirstBundle:Empleados');
            $Empleado = $repository->findById($id);
            return $this->render('LoginfirstBundle:Empleados:CambiarClave.html.twig', array('Empleados' => $Empleado));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    public function PruebaClaveEmpleadoAction($Empleado) {
      $em=  $this->getDoctrine()->getManager();
      $EmpleadoC=$em->getRepository('LoginfirstBundle:Empleados')->find($Empleado);
        if($EmpleadoC){
            $Empleado=$EmpleadoC->getPassword();
        }else{
             $Empleado=null;
        }
     $response=new JsonResponse();
     return $response->setData(array('Clave'=>$Empleado));
        
        }

    public function GuardarClaveEmpleadoAction($Empleado,Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {          
            $clave = $request->get("ClaveA");
            $newclave = $request->get("ClaveN");
            $confirclave = $request->get("ClaveCN");
            $em = $this->getDoctrine()->getManager();
            $Empleados = $em->getRepository('LoginfirstBundle:Empleados')->find($Empleado);
            if (!$Empleados) {
                throw $this->createNotFoundException(
                        'No product found for id ' . $Empleado
                );
            }           
            $EmpleadoC = $this->getDoctrine()->getRepository('LoginfirstBundle:Empleados')->findOneBy(array("password" => $clave , "id" => $Empleado
                    ));              
            if($EmpleadoC)
              {
                   if ($newclave == $confirclave) {                       
                        $Empleados->setPassword($newclave);
                        $em->flush();
                        $response = new Response(json_encode($Empleados));
                        $response->headers->set('Content-Type', 'application/json');
                        return $response;
                    }  
              }                    
            $response->headers->set('Content-Type', 'application/json');
            return $response;   
        }
        $this->get('session')->getFlashBag()->add('mensaje', 'Debes Iniciar Sesion primero');
        return $this->redirect($this->generateUrl('Login'));
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
            $Req=$request->get('Requerimiento');
            $Requerimiento = $em->getRepository('LoginfirstBundle:Requerimientos')->find($Req);
            $Estado = $em->getRepository('LoginfirstBundle:Estados')->find(3);
            if (!$Requerimiento) {
                throw $this->createNotFoundException(
                        'Requerimiento no Encontrado ' . $Req
                );
            }
           
            $Time = $request->get("time");
            $actividad = $request->get("actividad");
            $DetalleTiempo = new Detallehojas();           
            $DetalleTiempo->setFecha(new \DateTime("now")); 
            $DetalleTiempo->setActividad($actividad);
            $DetalleTiempo->setTiempo($Time);
            $Requerimiento->setEstados($Estado);
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
     public function ConsultaReqEAction(Request $request) {
       $session = $request->getSession();   
        if ($session->has("id")) {   
           $empleado = $session->get('id');
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery
                    (
                    'SELECT r.fecha RqFecha,r.descripcion RqDescripcion,r.id RqId,c.nombre Cliente
                    FROM LoginfirstBundle:Clientes c
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Empleados p  WITH r.asignadoemp= p.id
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    where p.id=:Empleado
                    Order by RqFecha                   
                   '
            )->setParameters(array('Empleado'=>$empleado));;
            $requerimientos=$query->getResult();
              return $this->render('LoginfirstBundle:Empleados:Consultas.html.twig',  array('Requerimientos' => $requerimientos));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }       
    }

    public function ConsulReqTiemposAction(Request $request) {
       $session = $request->getSession();   
        if ($session->has("id")) {   
           $empleado = $session->get('id');
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery
                    (
                    'SELECT  d.fecha FechaR, d.actividad Actividad, d.tiempo Tiempo, r.fecha FecReq
                    FROM LoginfirstBundle:Detallehojas d
                    JOIN LoginfirstBundle:Hojastiempo  h WITH d.hojastiempo = h.id  
                    JOIN LoginfirstBundle:Empleados e  WITH h.empleados= e.id
                    JOIN LoginfirstBundle:Requerimientos  r WITH e.id = r.id  
                    JOIN LoginfirstBundle:Estados t WITH r.estados=t.id 
                    where e.id=:Empleado and t.id=3
                                    
                   '
            )->setParameters(array('Empleado'=>$empleado));
            $requerimientos=$query->getResult();
              return $this->render('LoginfirstBundle:Empleados:ConsultasEmpleados.html.twig',  array('Requerimientos' => $requerimientos));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }       
    }

    
}
   