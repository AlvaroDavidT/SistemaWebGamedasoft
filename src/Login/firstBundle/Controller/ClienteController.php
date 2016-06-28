<?php

namespace Login\firstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Login\firstBundle\Form\ClientesType;
use Login\firstBundle\Entity\Requerimientos;
use Symfony\Component\HttpFoundation\Response;

class ClienteController extends Controller {
    
   public function ajaxAction($ajax) {
      $em=  $this->getDoctrine()->getManager();
      $cliente=$em->getRepository('LoginfirstBundle:Clientes')->findOneBy(array('nombre'=>$ajax));
        if($cliente){
            $Clienteg=$cliente->getNombre();
        }else{
             $Clienteg=null;
        }
      // die($Clienteg);
   $response=new JsonResponse();
     return $response->setData(array('clienteMail'=>$Clienteg));
        
        }
    public function addClienteAction() {
      $form=  $this->createForm(new ClientesType());
 
      return $this->render('LoginfirstBundle:Clientes:indexClientePruebas.html.twig',  array('formClientes'=>$form->createView()));
        
        }       
    public function ClienteAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            return $this->render('LoginfirstBundle:Clientes:indexCliente.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    
    #=====================Actualiza cliente=================================

    public function updateClienteAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $id = $session->get('id');
            $repository = $this->getDoctrine()->getRepository('LoginfirstBundle:Clientes');
            $Clientes = $repository->findById($id);
            return $this->render('LoginfirstBundle:Clientes:UpdateCliente.html.twig', array('Clientes' => $Clientes));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }

    public function GuardarClienteAction($Cliente,Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $DtosCliente = $em->getRepository('LoginfirstBundle:Clientes')->find($Cliente);
            if (!$DtosCliente) {
                throw $this->createNotFoundException(
                        'NO existe ese Cliente ' . $Cliente
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
#=========================Cambiar clave===========================================
    public function CambiarClaveAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $id = $session->get('id');
            $repository = $this->getDoctrine()->getRepository('LoginfirstBundle:Clientes');
            $Clientes = $repository->findById($id);
            return $this->render('LoginfirstBundle:Clientes:CambiarClave.html.twig', array('Clientes' => $Clientes));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    public function PruebaClaveClienteAction($Cliente) {
      $em=  $this->getDoctrine()->getManager();
      $ClienteC=$em->getRepository('LoginfirstBundle:Clientes')->find($Cliente);
        if($ClienteC){
            $Cliente=$ClienteC->getPassword();
        }else{
             $Cliente=null;
        }
     $response=new JsonResponse();
     return $response->setData(array('Clave'=>$Cliente));
        
        }

    public function GuardarClaveClienteAction($Cliente,Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {          
            $clave = $request->get("ClaveA");
            $newclave = $request->get("ClaveN");
            $confirclave = $request->get("ClaveCN");
            $em = $this->getDoctrine()->getManager();
            $Clientes = $em->getRepository('LoginfirstBundle:Clientes')->find($Cliente);
            if (!$Clientes) {
                throw $this->createNotFoundException(
                        'No product found for id ' . $Cliente
                );
            }           
            $ClienteC = $this->getDoctrine()->getRepository('LoginfirstBundle:Clientes')->findOneBy(array("password" => $clave , "id" => $Cliente));              
            if($ClienteC)
              {
                   if ($newclave == $confirclave) {                       
                        $Clientes->setPassword($newclave);
                        $em->flush();
                        $response = new Response(json_encode($Clientes));
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
  #==============================Ingreso requerimiento==========================
    public function NuevoRqAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $idCliente = $session->get('id');
            $em = $this->getDoctrine()->getManager();
            $dql = "SELECT r.fecha Fecha,r.id IdReq,d.nombre Modulo,e.nombre Estado,m.nombre Menu,s.nombre SubMenu
                    FROM LoginfirstBundle:Clientes c               
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    JOIN LoginfirstBundle:Submenus  s  WITH r.submenus = s.id  
                    JOIN LoginfirstBundle:Menus  m  WITH s.menus = m.id 
                    JOIN LoginfirstBundle:Modulos  d  WITH m.modulos = d.id  
                    where e.id= 1 and c.id=:Cliente
                    order by r.fecha desc";
            $Requerimientos = $em->createQuery($dql);
            $Requerimientos ->setParameter('Cliente', $idCliente);                   
            $paginator = $this->get("Knp_Paginator");
            $pagination = $paginator->paginate(
                    $Requerimientos, $request->query->getInt("page", 1),
                    2
                    );        
            $dqlModulos="SELECT m From LoginfirstBundle:Modulos m where m.estado=1";
            $ModulosA=$em->createQuery($dqlModulos);
            $Modulos=$ModulosA->getResult();
         
            return $this->render('LoginfirstBundle:Clientes:NuevoReq.html.twig',  array('pagination' => $pagination,'Modulos' => $Modulos));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion '
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
#==================================Consulta de submenus ajax=========================
      public function SubMenuAjaxAction($idMenu) {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT s.nombre SubMenuNombre,s.id SubMenuId
        FROM LoginfirstBundle:Submenus s
        Where s.estado=1 and s.menus = :Menu'
        )->setParameter('Menu', $idMenu);
        $SubMenu = $query->getArrayResult();
      
        
        $response=new Response(json_encode($SubMenu));
         $response->headers->set('Content-Type', 'application/json');

        return $response;
   
    }
  #====================================Guardar requerimiento=========================
     public function GuardarRqClienteAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {        
           // Entity Manager
            $id = $session->get('id');
            $em=  $this->getDoctrine()->getManager();
            $Cliente = $em->getRepository('LoginfirstBundle:Clientes')->find($id);          
            //datos del form
//            $Fecha = getdate();                
            $SubMenu= $request->get('SubMenu');
            $Descripcion=$request->get('txtArea');
            $Requerimiento = new Requerimientos();                  
            $Requerimiento->setFecha(new \DateTime("now")); 
            $Requerimiento->setDescripcion($Descripcion);
            $Requerimiento->setClientes($Cliente);      
            //relaciones
            $Submenu=$em->getRepository('LoginfirstBundle:Submenus')->find($SubMenu);
            $Requerimiento->setSubmenus($Submenu);     
            $req=$em->getRepository('LoginfirstBundle:Estados')->find(1);
            $Requerimiento->setEstados($req);
            $em->persist($Requerimiento);
            $em->flush();
            $this->get('session')->getFlashBag()->add('mensaje', 'Requerimiento creado');
            return $this->redirect($this->generateUrl('NuevoReq'));   
        }
        $this->get('session')->getFlashBag()->add('mensaje', 'Debes Iniciar Sesion');
        return $this->redirect($this->generateUrl('Login'));
    } 
  #=======================================Consulta Requerimientos============================   
      public function ConsultaRqAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $idCliente = $session->get('id');
            $em = $this->getDoctrine()->getManager();
            $dql = "SELECT r FROM LoginfirstBundle:Requerimientos r
                    where r.clientes= :Cliente";
            $Requerimientos = $em->createQuery($dql);
            $Requerimientos ->setParameter('Cliente', $idCliente);                   
            $paginator = $this->get("Knp_Paginator");
            $pagination = $paginator->paginate(
                    $Requerimientos, $request->query->getInt("page", 1),
                    5
                    );        
          
                       
            return $this->render('LoginfirstBundle:Clientes:Consultas.html.twig',  array('pagination' => $pagination));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    public function estadosAction(){
        $em=  $this->getDoctrine()->getManager();
      //  estados=$em
        
    }
   
}
