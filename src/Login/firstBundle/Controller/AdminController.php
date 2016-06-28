<?php

namespace Login\firstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Login\firstBundle\Entity\Empleados;
use Login\firstBundle\Entity\Modulos;
use Login\firstBundle\Entity\Menus;
use Login\firstBundle\Entity\Hojastiempo;
use Login\firstBundle\Entity\Submenus;
use Login\firstBundle\Entity\Clientes;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller {
    public function AdminAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {

            return $this->render('LoginfirstBundle:Admin:indexAdmin.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }

    public function ConsultaDatosAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $repository = $this->getDoctrine()->getRepository('LoginfirstBundle:Administradores');
            $Administrators = $repository->findAll();
            return $this->render('LoginfirstBundle:Admin:ConsultaDatos.html.twig', array('Administradores' => $Administrators));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    /*
     *====================================== Actualiza Administrador==================================
     * 
     */
    
    public function ActualizaDatosAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $id = $session->get('id');
            $repository = $this->getDoctrine()->getRepository('LoginfirstBundle:Administradores');
            $Administrador = $repository->findById($id);
            return $this->render('LoginfirstBundle:Admin:ActualizarDatosAdmin.html.twig', array('Administradores' => $Administrador));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
     public function GuardarDatosAdminAction($idAdmin, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $Administradores = $em->getRepository('LoginfirstBundle:Administradores')->find($idAdmin);
            if (!$Administradores) {
                throw $this->createNotFoundException(
                        'NO existe ese administrador ' . $idAdmin
                );
            }
            $Nombre = $request->get("nombre");
            $Apellido = $request->get("apellidos");
            $Telef = $request->get("telefono");
            $Email = $request->get("mail");
            $Administradores->setNombre($Nombre);
            $Administradores->setApellido($Apellido);
            $Administradores->setTelefono($Telef);
            $Administradores->setEmail($Email);
            $em->flush();
            $response = new Response(json_encode($Administradores));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
    }
     public function ActualizaClaveAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $id = $session->get('id');
            $repository = $this->getDoctrine()->getRepository('LoginfirstBundle:Administradores');
            $Administrador = $repository->findById($id);
            return $this->render('LoginfirstBundle:Admin:CambiarClaveAdmin.html.twig', array('Administradores' => $Administrador));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    public function PruebaClaveAction($idAdmin) {
      $em=  $this->getDoctrine()->getManager();
      $AdminC=$em->getRepository('LoginfirstBundle:Administradores')->find($idAdmin);
        if($AdminC){
            $Admin=$AdminC->getPassword();
        }else{
             $Admin=null;
        }
     $response=new JsonResponse();
     return $response->setData(array('Clave'=>$Admin));
        
        }
  public function GuardarClaveAdminAction($idAdmin,Request $request ) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $Administradores = $em->getRepository('LoginfirstBundle:Administradores')->find($idAdmin);
            if (!$Administradores) {
                throw $this->createNotFoundException(
                        'NO existe ese administrador ' . $idAdmin
                );
            }
            $Clave = $request->get("ClaveCN");
            $Administradores->setPassword($Clave);
            $em->flush();
            $response = new Response(json_encode($Administradores));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
    }
    /*
     * ===================================CRUD DE EMPLEADOS===================================================
     */

    public function ListarEmpleadosAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $Empleados = $em->getRepository('LoginfirstBundle:Empleados')->findAll();
            $Departamentos = $em->getRepository('LoginfirstBundle:Departamentos')->findAll();
               
            return $this->render('LoginfirstBundle:Admin:ListarEmpleados.html.twig', array('Empleados' => $Empleados,'Departamentos' => $Departamentos));
       
            } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }

    public function VerEmpleadoAction($idE, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery
                            (
                            'SELECT e.nombre,e.apellido,e.cidentidad,e.direccion,e.telefono,e.genero,d.nombre Departamento
                    FROM LoginfirstBundle:Empleados e
                    JOIN LoginfirstBundle:Departamentos d WITH e.departamentos= d.id  
                    where e.id = :Cli
                 '
                    )->setParameter('Cli', $idE);
            $Empleado = $query->getResult();
            //    print_r($Empleado);
            //     exit();
            return $this->render('LoginfirstBundle:Admin:VerEmpleado.html.twig', array('Empleado' => $Empleado));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }

    public function GuardarNuevoEmpleadoAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            // Entity Manager
            $em = $this->getDoctrine()->getManager();
            $Perfil = $em->getRepository('LoginfirstBundle:Perfiles')->find(2);
            // Variables obtenidas del formulario
            $Nombres = $request->get('nombre');
            $Apellidos = $request->get('apellidos');
            $Cedula = $request->get('cedula');
            $Direccion = $request->get('direccion');
            $Telefono = $request->get('telefono');
            $Genero = $request->get('genero');
            $idDepartamento = $request->get('departamento');
            $Mail = $request->get('mail');
            $ClaveT = $request->get('claveT');
            // Creación del objeto
            $Empleado = new Empleados();
            $Empleado->setNombre($Nombres);
            $Empleado->setApellido($Apellidos);
            $Empleado->setCidentidad($Cedula);
            $Empleado->setDireccion($Direccion);
            $Empleado->setTelefono($Telefono);
            $Empleado->setGenero($Genero);
            $Empleado->setEmail($Mail);
            $Empleado->setPerfiles($Perfil);
            $Empleado->setPassword($ClaveT);
            // Relación con Departamento
            $Departa = $em->getRepository('LoginfirstBundle:Departamentos')->find($idDepartamento);
            $Empleado->setDepartamentos($Departa);
            $em->persist($Empleado);
            //$em->persist($category);
            $em->flush();
            $this->get('session')->getFlashBag()->add('mensaje', 'Datos Guardados');
            return $this->redirect($this->generateUrl('ConsultaEmpleados'));
        } else {
            $this->get('session')->getFlashBag()->add('mensaje', 'Debes Iniciar Sesion');
            return $this->redirect($this->generateUrl('Login'));
        }
    }

    public function EditarEmpleadosAction($idE, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery
                            (
                            'SELECT e.id,e.nombre,e.apellido,e.cidentidad,e.direccion,e.email,e.telefono,e.genero,d.nombre Departamento,d.id DepartamentoId
                    FROM LoginfirstBundle:Empleados e
                    JOIN LoginfirstBundle:Departamentos d WITH e.departamentos= d.id  
                    where e.id = :Cli
                 '
                    )->setParameter('Cli', $idE);
            $Empleado = $query->getResult();
            //        print_r($Empleado);
            //exit();
            return $this->render('LoginfirstBundle:Admin:EditarEmpleado.html.twig', array('Empleado' => $Empleado));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Inicar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }

    public function GuardarEditEmpleadoAction($idEU, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $Empleado = $em->getRepository('LoginfirstBundle:Empleados')->find($idEU);
            if (!$Empleado) {
                throw $this->createNotFoundException(
                        'Empleado no Encontrado ' . $idEU
                );
            }
            $Nombres = $request->get('nombre');
            $Apellidos = $request->get('apellidos');
            $Cedula = $request->get('cedula');
            $Direccion = $request->get('direccion');
            $Telefono = $request->get('telefono');
            $Mail = $request->get('mail');
            $Empleado->setNombre($Nombres);
            $Empleado->setApellido($Apellidos);
            $Empleado->setCidentidad($Cedula);
            $Empleado->setDireccion($Direccion);
            $Empleado->setTelefono($Telefono);
            $Empleado->setEmail($Mail);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Datos Actualizados'
            );
            return $this->redirect($this->generateUrl('ConsultaEmpleados'));

            // return $this->render('LoginfirstBundle:Clientes:UpdateCliente.html.twig', array('Clientes' => $Clientes));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }

    public function EliminarEmpleadosAction($idED, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $Empleado = $em->getRepository('LoginfirstBundle:Empleados')->find($idED);

            if (!$Empleado) {
                throw $this->createNotFoundException(
                        'No se encuentra el empleado con ID' . $idED
                );
            }
            $em->remove($Empleado);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Empleado Eliminado');
            return $this->redirect($this->generateUrl('ConsultaEmpleados'));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }

    /*
     * ajax menu
     * 
     * 
     */
        
    public function menuAction($idModulo) {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT m.nombre MeNombre,m.id menuid
        FROM LoginfirstBundle:Menus m
                      
                    where m.modulos = :Modulo '
        )->setParameter('Modulo', $idModulo);
        $menu = $query->getArrayResult();
      
        
        $response=new Response(json_encode($menu));
         $response->headers->set('Content-Type', 'application/json');

        return $response;
   
    }
    public function ajax1Action() {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT d.nombre
        FROM LoginfirstBundle:Departamentos d'
        );
        $empleados = $query->getArrayResult();

        $response = new Response(json_encode($empleados));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /*
     * ======================================CRUD DE CLIENTES==========================================
     */

    public function ListarClientesAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $Clientes = $em->getRepository('LoginfirstBundle:Clientes')->findAll();
            return $this->render('LoginfirstBundle:Admin:ListarClientes.html.twig', array('Clientes' => $Clientes));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }

    public function GuardarNuevoClienteAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            // Entity Manager
            $em = $this->getDoctrine()->getManager();
            $Perfil = $em->getRepository('LoginfirstBundle:Perfiles')->find(3);
            // Variables obtenidas del formulario
            $Nombre = $request->get('nombreC');
            $Usuario = $request->get('UsuarioC');
            $Ruc = $request->get('ruc');
            $Direccion = $request->get('direccionC');
            $Telefono = $request->get('telefonoC');
            $Mail = $request->get('mailC');
            $Contacto = $request->get('contactoC');
            $ClaveT = $request->get('claveTC');
            // Creación del objeto
            $Cliente = new Clientes();
            $Cliente->setNombre($Nombre);
            $Cliente->setUsuario($Usuario);
            $Cliente->setRuc($Ruc);
            $Cliente->setDireccion($Direccion);
            $Cliente->setTelefono($Telefono);
            $Cliente->setEmail($Mail);
            $Cliente->setPerfiles($Perfil);
            $Cliente->setPassword($ClaveT);
            $Cliente->setContacto($Contacto);
            $em->persist($Cliente);
            $em->flush();
            $this->get('session')->getFlashBag()->add('mensaje', 'Datos Guardados');
            return $this->redirect($this->generateUrl('ConsultaClientes'));
        } else {
            $this->get('session')->getFlashBag()->add('mensaje', 'Debes Iniciar Sesion');
            return $this->redirect($this->generateUrl('Login'));
        }
    }

    public function VerClientesAction($idC, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery
                            (
                            'SELECT c.nombre,c.usuario,c.ruc,c.direccion,c.telefono,c.contacto,c.email
                    FROM LoginfirstBundle:Clientes c
                    where c.id = :Cli
                 '
                    )->setParameter('Cli', $idC);
            $Cliente = $query->getResult();

            return $this->render('LoginfirstBundle:Admin:VerCliente.html.twig', array('Cliente' => $Cliente));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }

    public function EditarClienteAction($idC, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery
                            (
                            'SELECT c.id,c.nombre,c.usuario,c.ruc,c.direccion,c.telefono,c.contacto,c.email
                    FROM LoginfirstBundle:Clientes c
                    where c.id = :Cli
                 '
                    )->setParameter('Cli', $idC);
            $Cliente = $query->getResult();

            return $this->render('LoginfirstBundle:Admin:EditarCliente.html.twig', array('Cliente' => $Cliente));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }

    public function GuardarEditarClienteAction($idCU, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $Cliente = $em->getRepository('LoginfirstBundle:Clientes')->find($idCU);
            if (!$Cliente) {
                throw $this->createNotFoundException(
                        'Cliente no Encontrado ' . $idCU
                );
            }
            $Nombre = $request->get('nombreC');
            $Usuario = $request->get('UsuarioC');
            $Ruc = $request->get('ruc');
            $Direccion = $request->get('direccionC');
            $Telefono = $request->get('telefonoC');
            $Mail = $request->get('mailC');
            $Contacto = $request->get('contactoC');
            $Cliente->setNombre($Nombre);
            $Cliente->setUsuario($Usuario);
            $Cliente->setRuc($Ruc);
            $Cliente->setDireccion($Direccion);
            $Cliente->setTelefono($Telefono);
            $Cliente->setEmail($Mail);
            $Cliente->setContacto($Contacto);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Datos Actualizados'
            );
            return $this->redirect($this->generateUrl('ConsultaClientes'));

            // return $this->render('LoginfirstBundle:Clientes:UpdateCliente.html.twig', array('Clientes' => $Clientes));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
      public function EliminarClienteAction($idCD, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $Cliente = $em->getRepository('LoginfirstBundle:Clientes')->find($idCD);

            if (!$Cliente) {
                throw $this->createNotFoundException(
                        'No se encuentra el cliente con ID' . $idCD
                );
            }
            $em->remove($Cliente);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Cliente Eliminado');
            return $this->redirect($this->generateUrl('ConsultaClientes'));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes logearte Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    /*
     * ===================================CRUD DE MODULOS===================================================
     */
     public function ListarModulosAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
         //   $Modulos = $em->getRepository('LoginfirstBundle:Modulos')->findAll();
           $dql="SELECT m FROM LoginfirstBundle:Modulos m";
           $modulos=$em->createQuery($dql);
           $paginator=  $this->get("Knp_Paginator");
           $pagination =$paginator->paginate(
                   $modulos,$request->query->getInt("page",1),
                  3
                   );
                   
           // return $this->render('LoginfirstBundle:Admin:ListarModulos.html.twig', array('Modulos' => $Modulos));
           return $this->render('LoginfirstBundle:Admin:ListarModulos.html.twig', array('pagination' => $pagination));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes logearte primero'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
     public function GuardarNuevoModuloAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            // Entity Manager
            $ModNombre = $request->get('ModNombre');
            $ModDescripcion= $request->get('ModDescripcion');
            
            $Modulos = new Modulos();
            $Modulos->setNombre($ModNombre);
            $Modulos->setDescripcion($ModDescripcion);
            $Modulos->setEstado('1');

            $em = $this->getDoctrine()->getManager();
            $em->persist($Modulos);
            $em->flush();
            $this->get('session')->getFlashBag()->add('mensaje', 'Módulo creado');
            return $this->redirect($this->generateUrl('ConsultaModulos'));
        } else {
            $this->get('session')->getFlashBag()->add('mensaje', 'Debes logearte primero');
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    public function ActivaModuloAction($idMod, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $Modulos = $em->getRepository('LoginfirstBundle:Modulos')->find($idMod);
            $Modulos->setEstado('1');
            $em->persist($Modulos);
            $em->flush();
            return $this->redirect($this->generateUrl('ConsultaModulos'));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    public function DesactivaModuloAction($idMod, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $Modulos = $em->getRepository('LoginfirstBundle:Modulos')->find($idMod);
            $Modulos->setEstado('0');
            $em->persist($Modulos);
            $em->flush();
            return $this->redirect($this->generateUrl('ConsultaModulos'));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }

    /*
     * ===================================CRUD DE MENUS===================================================
     */

    public function ListarMenusAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery
                (
                            'SELECT m.id idMenu,m.nombre NombreMenu,m.estado EstadoMenu,d.nombre Modulo
                    FROM LoginfirstBundle:Menus m
                    JOIN LoginfirstBundle:Modulos d WITH d.id= m.modulos  
                    Order by Modulo DESC
                    '
                    );
            $Menus = $query->getResult();
            $queryModulo= $em->createQuery(
                     'SELECT m.id idModulo,m.nombre NombreModulo
                    FROM LoginfirstBundle:Modulos m
                    where m.estado = :Est
                    '
                    )->setParameter('Est', 1);
            $Modulos=$queryModulo->getResult();
            
            return $this->render('LoginfirstBundle:Admin:ListarMenus.html.twig', array('Menus' => $Menus,'Modulos'=>$Modulos));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
     public function ActivaMenuAction($idMenu, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $Menus = $em->getRepository('LoginfirstBundle:Menus')->find($idMenu);
            $Menus->setEstado('1');
            $em->persist($Menus);
            $em->flush();
            return $this->redirect($this->generateUrl('ConsultaMenus'));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    public function DesactivaMenuAction($idMenu, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $Menus = $em->getRepository('LoginfirstBundle:Menus')->find($idMenu);
            $Menus->setEstado('0');
            $em->persist($Menus);
            $em->flush();
            return $this->redirect($this->generateUrl('ConsultaMenus'));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    public function GuardarNuevoMenuAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            // Entity Manager
            $em=  $this->getDoctrine()->getManager();
            //datos del form
            $MenuNombre = $request->get('MenuNombre');
            $MenuModulo= $request->get('Modulo');
            $Menus = new Menus();
            $Menus->setNombre($MenuNombre);
            $Menus->setEstado('1');
            
            //relacion con modulo
            $modulo=$em->getRepository('LoginfirstBundle:Modulos')->find($MenuModulo);
            $Menus->setModulos($modulo);       
            $em->persist($Menus);
            $em->flush();
            $this->get('session')->getFlashBag()->add('mensaje', 'Menu creado');
            return $this->redirect($this->generateUrl('ConsultaMenus'));
        } else {
            $this->get('session')->getFlashBag()->add('mensaje', 'Debes Iniciar Sesion');
            return $this->redirect($this->generateUrl('Login'));
        }
    }

    /*
     * ===================================CRUD DE SUBMENUS===================================================
     */
      public function ListarSubMenusAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery
                (
                            'SELECT s.id idSubMenu,s.nombre NombreSubMenu,s.estado EstadoSubMenu,d.nombre Modulo,m.nombre Menu
                    FROM LoginfirstBundle:Submenus s
                    JOIN LoginfirstBundle:Menus m WITH s.menus= m.id
                    JOIN LoginfirstBundle:Modulos d WITH m.modulos=d.id
                    Order by Modulo DESC
                    '
                    );
            $Submenus = $query->getResult();
            $queryModulo= $em->createQuery(
                     'SELECT m.id idModulo,m.nombre NombreModulo
                    FROM LoginfirstBundle:Modulos m
                    where m.estado = :Est
                    '
                    )->setParameter('Est', 1);
            $Modulos=$queryModulo->getResult();
            
            return $this->render('LoginfirstBundle:Admin:ListarSubMenus.html.twig', array('SubMenus' => $Submenus,'Modulos'=>$Modulos));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
     public function ActivaSubMenuAction($idSubMenu, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $SubMenus = $em->getRepository('LoginfirstBundle:Submenus')->find($idSubMenu);
            $SubMenus->setEstado('1');
            $em->persist($SubMenus);
            $em->flush();
            return $this->redirect($this->generateUrl('ConsultaSubMenus'));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    public function DesactivaSubMenuAction($idSubMenu, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $SubMenus = $em->getRepository('LoginfirstBundle:Submenus')->find($idSubMenu);
            $SubMenus->setEstado('0');
            $em->persist($SubMenus);
            $em->flush();
            return $this->redirect($this->generateUrl('ConsultaSubMenus'));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    public function GuardarNuevoSubMenuAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            // Entity Manager
            $em=  $this->getDoctrine()->getManager();
            //datos del form
            $SubMenuNombre = $request->get('SubMenuNombre');
            $MenuId= $request->get('Menu');
            $Submenus = new Submenus();
            $Submenus->setNombre($SubMenuNombre);
            $Submenus->setEstado('1');
            
            //relacion con menu
            $menu=$em->getRepository('LoginfirstBundle:Menus')->find($MenuId);
            $Submenus->setMenus($menu);       
            $em->persist($Submenus);
            $em->flush();
            $this->get('session')->getFlashBag()->add('mensaje', 'SubMenu creado');
            return $this->redirect($this->generateUrl('ConsultaSubMenus'));
        } else {
            $this->get('session')->getFlashBag()->add('mensaje', 'Debes logearte primero');
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    
    /*
     * ===================================ASIGNACION  REQUERIMIENTOS===================================================
     */
    public function ListarRequerimientosAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery
                    (
                    'SELECT r.fecha RqFecha,r.descripcion RqDescripcion,r.id RqId,c.nombre Cliente,e.nombre Estado,d.nombre Modulo,m.nombre Menu,s.nombre Submenu
                    FROM LoginfirstBundle:Clientes c
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    JOIN LoginfirstBundle:Submenus  s  WITH r.submenus = s.id  
                    JOIN LoginfirstBundle:Menus  m  WITH s.menus = m.id 
                    JOIN LoginfirstBundle:Modulos  d  WITH m.modulos = d.id  
                    where e.id= 1 
                    Order by RqFecha  desc                 
                   '
            );
            $requerimientos = $query->getResult();
            $queryEmpleados = $em->createQuery(
                    'SELECT E.id Id,E.nombre Nombre,E.apellido Apellido
                    FROM LoginfirstBundle:Empleados E
                     '
            );
            $empleados = $queryEmpleados->getResult();
            //$totalrq=  $this->totalReq();
           // die($totalrq);
            return $this->render('LoginfirstBundle:Admin:Requerimientos.html.twig', array('Requerimientos' => $requerimientos, 'Empleados' => $empleados));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }

    public function AsignarAction($idRq,Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
           $em = $this->getDoctrine()->getManager();
            $Requerimiento = $em->getRepository('LoginfirstBundle:Requerimientos')->find($idRq);
            $Estado = $em->getRepository('LoginfirstBundle:Estados')->find(2);
            if (!$Requerimiento) {
                throw $this->createNotFoundException(
                        'Requerimiento no Encontrado ' . $idRq
                );
            }
            $idEmpleado= $request->get('Empleado');
            $Requerimiento->setEstados($Estado);
            // Relación con Empleado
            $Empleado = $em->getRepository('LoginfirstBundle:Empleados')->find($idEmpleado);
            $Requerimiento->setAsignadoemp($Empleado);
            
            $em->flush();
            //Creacion de hoja de tiempo
            //
            //verificamos si existe hoja de tiempos
             $EmpleadoHT = $this->getDoctrine()->getRepository('LoginfirstBundle:Hojastiempo')->findOneBy(array("empleados" => $Empleado));
                   if($EmpleadoHT){
                       
                   }
                   else {
                         $HojasTiempo = new Hojastiempo();
              $HojasTiempo->setFecha(new \DateTime("now"));
              $HojasTiempo->setEmpleados($Empleado);
            $em->persist($HojasTiempo);
            $em->flush();
                   }
            
            
            
            ///----------------------
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Requerimiento Asignado'
            );
            return $this->redirect($this->generateUrl('ConsultarRequerimientos'));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }
    }
    /*
     * Consultas
     */
      public function ConsultaReqAction(Request $request){
       $session = $request->getSession();   
        if ($session->has("id")) {        
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery
                    (
                    'SELECT r.fecha RqFecha,r.descripcion RqDescripcion,r.id RqId,c.nombre Cliente,e.nombre Estado,d.nombre Modulo,m.nombre Menu,s.nombre Submenu,p.nombre AsignadoNombre,p.apellido AsignadoApellido
                    FROM LoginfirstBundle:Clientes c
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Empleados p  WITH r.asignadoemp= p.id
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    JOIN LoginfirstBundle:Submenus  s  WITH r.submenus = s.id  
                    JOIN LoginfirstBundle:Menus  m  WITH s.menus = m.id 
                    JOIN LoginfirstBundle:Modulos  d  WITH m.modulos = d.id  
                    Order by RqFecha                   
                   '
            );
            $requerimientos=$query->getResult();
             $Clientes = $em->getRepository('LoginfirstBundle:Clientes')->findAll();
             $Estados = $em->getRepository('LoginfirstBundle:Estados')->findAll();
             $Empleados=$em->getRepository('LoginfirstBundle:Empleados')->findAll();
             $Modulos=$em->getRepository('LoginfirstBundle:Modulos')->findAll();            
            return $this->render('LoginfirstBundle:Admin:ConsultaReq.html.twig',  array('Requerimientos' => $requerimientos,'Clientes'=>  $Clientes,'Estados'=>$Estados,'Modulos'=>$Modulos,'Empleados'=>$Empleados));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debes Iniciar Sesion'
            );
            return $this->redirect($this->generateUrl('Login'));
        }       
    }
    
      public function ConsultaReqFechaInicialAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $fechaInicial = $request->get("fechaInicial");
        $fechaInicialD = (new \DateTime($fechaInicial));
        $query = $em->createQuery(
                'SELECT r.fecha RqFecha,r.id RqId,c.nombre Cliente,e.nombre Estado,d.nombre Modulo,p.nombre AsignadoNombre,p.apellido AsignadoApellido
                    FROM LoginfirstBundle:Clientes c
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Empleados p  WITH r.asignadoemp= p.id
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    JOIN LoginfirstBundle:Submenus  s  WITH r.submenus = s.id  
                    JOIN LoginfirstBundle:Menus  m  WITH s.menus = m.id 
                    JOIN LoginfirstBundle:Modulos  d  WITH m.modulos = d.id  
                    where r.fecha>=:FechaI
                    Order by RqFecha'
        )->setParameters(array('FechaI'=>$fechaInicialD));
        $Requerimientos = $query->getArrayResult();
      
        $response = new Response(json_encode($Requerimientos));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
        public function ConsultaReqFechasAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $fechaInicial1 = $request->get("fechaInicial");
        $fechaFinal1 = $request->get("fechaFinal");
        $fechaInicial = (new \DateTime($fechaInicial1));
        $fechaFinal = (new \DateTime($fechaFinal1));
        $query = $em->createQuery(
                'SELECT r.fecha RqFecha,r.id RqId,c.nombre Cliente,e.nombre Estado,d.nombre Modulo,p.nombre AsignadoNombre,p.apellido AsignadoApellido
                    FROM LoginfirstBundle:Clientes c
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Empleados p  WITH r.asignadoemp= p.id
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    JOIN LoginfirstBundle:Submenus  s  WITH r.submenus = s.id  
                    JOIN LoginfirstBundle:Menus  m  WITH s.menus = m.id 
                    JOIN LoginfirstBundle:Modulos  d  WITH m.modulos = d.id  
                    where r.fecha>=:FechaI and r.fecha<=:FechaF
                    Order by RqFecha'
          )->setParameters(array('FechaI'=>$fechaInicial,'FechaF'=>$fechaFinal));         
     $Requerimientos = $query->getArrayResult();
      
        $response = new Response(json_encode($Requerimientos));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
    
   public function ConsultaClientesAction(Request $request, $IdCliente) {
        $em = $this->getDoctrine()->getManager();
        $fechaInicial1 = $request->get("fechaInicial");
        $fechaFinal1 = $request->get("fechaFinal");
        $fechaInicial = (new \DateTime($fechaInicial1));
        $fechaFinal = (new \DateTime($fechaFinal1));
        if($fechaInicial1=="" and $fechaFinal1==""){
            $query = $em->createQuery(
                'SELECT r.fecha RqFecha,r.id RqId,c.nombre Cliente,e.nombre Estado,d.nombre Modulo,p.nombre AsignadoNombre,p.apellido AsignadoApellido
                    FROM LoginfirstBundle:Clientes c
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Empleados p  WITH r.asignadoemp= p.id
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    JOIN LoginfirstBundle:Submenus  s  WITH r.submenus = s.id  
                    JOIN LoginfirstBundle:Menus  m  WITH s.menus = m.id 
                    JOIN LoginfirstBundle:Modulos  d  WITH m.modulos = d.id  
                    where c.id=:Cliente
                    Order by RqFecha'
        )->setParameters(array('Cliente'=>$IdCliente));                  
        }elseif ($IdCliente =="") {
            $query = $em->createQuery(
                'SELECT r.fecha RqFecha,r.id RqId,c.nombre Cliente,e.nombre Estado,d.nombre Modulo,p.nombre AsignadoNombre,p.apellido AsignadoApellido
                    FROM LoginfirstBundle:Clientes c
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Empleados p  WITH r.asignadoemp= p.id
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    JOIN LoginfirstBundle:Submenus  s  WITH r.submenus = s.id  
                    JOIN LoginfirstBundle:Menus  m  WITH s.menus = m.id 
                    JOIN LoginfirstBundle:Modulos  d  WITH m.modulos = d.id  
                    where c.id=:Cliente
                    Order by RqFecha'
        ); 
        
        }else{
                        $query = $em->createQuery(
                'SELECT r.fecha RqFecha,r.id RqId,c.nombre Cliente,e.nombre Estado,d.nombre Modulo,p.nombre AsignadoNombre,p.apellido AsignadoApellido
                    FROM LoginfirstBundle:Clientes c
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Empleados p  WITH r.asignadoemp= p.id
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    JOIN LoginfirstBundle:Submenus  s  WITH r.submenus = s.id  
                    JOIN LoginfirstBundle:Menus  m  WITH s.menus = m.id 
                    JOIN LoginfirstBundle:Modulos  d  WITH m.modulos = d.id  
                    where r.fecha>=:FechaI and r.fecha<=:FechaF and c.id=:Cliente
                    Order by RqFecha'
        )->setParameters(array('FechaI'=>$fechaInicial,'FechaF'=>$fechaFinal,'Cliente'=>$IdCliente)); 
                        }
       $Requerimientos = $query->getArrayResult();     
        $response = new Response(json_encode($Requerimientos));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
    public function ConsultaEstadoAction(Request $request, $IdEstado) {
        $em = $this->getDoctrine()->getManager();
        $fechaInicial1 = $request->get("fechaInicial");
        $fechaFinal1 = $request->get("fechaFinal");
        $fechaInicial = (new \DateTime($fechaInicial1));
        $fechaFinal = (new \DateTime($fechaFinal1));
        if($fechaFinal==""){
            $query = $em->createQuery(
                'SELECT r.fecha RqFecha,r.id RqId,c.nombre Cliente,e.nombre Estado,d.nombre Modulo,p.nombre AsignadoNombre,p.apellido AsignadoApellido
                    FROM LoginfirstBundle:Clientes c
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Empleados p  WITH r.asignadoemp= p.id
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    JOIN LoginfirstBundle:Submenus  s  WITH r.submenus = s.id  
                    JOIN LoginfirstBundle:Menus  m  WITH s.menus = m.id 
                    JOIN LoginfirstBundle:Modulos  d  WITH m.modulos = d.id  
                    where r.fecha>=:FechaI and r.fecha<=:FechaF and e.id=:Estado
                    Order by RqFecha'
        )->setParameters(array('FechaI'=>$fechaInicial,'FechaF'=>$fechaFinal,'Estado'=>$IdEstado));         
        }
                else{
                        $query = $em->createQuery(
                'SELECT r.fecha RqFecha,r.id RqId,c.nombre Cliente,e.nombre Estado,d.nombre Modulo,p.nombre AsignadoNombre,p.apellido AsignadoApellido
                    FROM LoginfirstBundle:Clientes c
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Empleados p  WITH r.asignadoemp= p.id
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    JOIN LoginfirstBundle:Submenus  s  WITH r.submenus = s.id  
                    JOIN LoginfirstBundle:Menus  m  WITH s.menus = m.id 
                    JOIN LoginfirstBundle:Modulos  d  WITH m.modulos = d.id  
                    where e.id=:Estado
                    Order by RqFecha'
        )->setParameters(array('Estado'=>$IdEstado));
                        }
       $Requerimientos = $query->getArrayResult();     
        $response = new Response(json_encode($Requerimientos));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
      public function ConsultaModuloAction(Request $request, $IdModulo) {
        $em = $this->getDoctrine()->getManager();
        $fechaInicial1 = $request->get("fechaInicial");
        $fechaFinal1 = $request->get("fechaFinal");
        $fechaInicial = (new \DateTime($fechaInicial1));
        $fechaFinal = (new \DateTime($fechaFinal1));
        if($fechaFinal==""){
            $query = $em->createQuery(
                'SELECT r.fecha RqFecha,r.id RqId,c.nombre Cliente,e.nombre Estado,d.nombre Modulo,p.nombre AsignadoNombre,p.apellido AsignadoApellido
                    FROM LoginfirstBundle:Clientes c
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Empleados p  WITH r.asignadoemp= p.id
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    JOIN LoginfirstBundle:Submenus  s  WITH r.submenus = s.id  
                    JOIN LoginfirstBundle:Menus  m  WITH s.menus = m.id 
                    JOIN LoginfirstBundle:Modulos  d  WITH m.modulos = d.id  
                    where r.fecha>=:FechaI and r.fecha<=:FechaF and d.id=:Modulo
                    Order by RqFecha'
        )->setParameters(array('FechaI'=>$fechaInicial,'FechaF'=>$fechaFinal,'Modulo'=>$IdModulo));         
        }
                else{
                        $query = $em->createQuery(
                'SELECT r.fecha RqFecha,r.id RqId,c.nombre Cliente,e.nombre Estado,d.nombre Modulo,p.nombre AsignadoNombre,p.apellido AsignadoApellido
                    FROM LoginfirstBundle:Clientes c
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Empleados p  WITH r.asignadoemp= p.id
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    JOIN LoginfirstBundle:Submenus  s  WITH r.submenus = s.id  
                    JOIN LoginfirstBundle:Menus  m  WITH s.menus = m.id 
                    JOIN LoginfirstBundle:Modulos  d  WITH m.modulos = d.id  
                    where d.id=:Modulo
                    Order by RqFecha'
        )->setParameters(array('Modulo'=>$IdModulo));
                        }
       $Requerimientos = $query->getArrayResult();     
        $response = new Response(json_encode($Requerimientos));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
       public function ConsultaEmpleadoAction(Request $request, $IdEmpleado) {
        $em = $this->getDoctrine()->getManager();
        $fechaInicial1 = $request->get("fechaInicial");
        $fechaFinal1 = $request->get("fechaFinal");
        $fechaInicial = (new \DateTime($fechaInicial1));
        $fechaFinal = (new \DateTime($fechaFinal1));
        if($fechaFinal==""){
            $query = $em->createQuery(
                'SELECT r.fecha RqFecha,r.id RqId,c.nombre Cliente,e.nombre Estado,d.nombre Modulo,p.nombre AsignadoNombre,p.apellido AsignadoApellido
                    FROM LoginfirstBundle:Clientes c
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Empleados p  WITH r.asignadoemp= p.id
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    JOIN LoginfirstBundle:Submenus  s  WITH r.submenus = s.id  
                    JOIN LoginfirstBundle:Menus  m  WITH s.menus = m.id 
                    JOIN LoginfirstBundle:Modulos  d  WITH m.modulos = d.id  
                    where r.fecha>=:FechaI and r.fecha<=:FechaF and p.id=:Empleado
                    Order by RqFecha'
        )->setParameters(array('FechaI'=>$fechaInicial,'FechaF'=>$fechaFinal,'Empleado'=>$IdEmpleado));         
        }
                else{
                        $query = $em->createQuery(
                'SELECT r.fecha RqFecha,r.id RqId,c.nombre Cliente,e.nombre Estado,d.nombre Modulo,p.nombre AsignadoNombre,p.apellido AsignadoApellido
                    FROM LoginfirstBundle:Clientes c
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Empleados p  WITH r.asignadoemp= p.id
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    JOIN LoginfirstBundle:Submenus  s  WITH r.submenus = s.id  
                    JOIN LoginfirstBundle:Menus  m  WITH s.menus = m.id 
                    JOIN LoginfirstBundle:Modulos  d  WITH m.modulos = d.id  
                    where p.id=:Empleado
                    Order by RqFecha'
        )->setParameters(array('Empleado'=>$IdEmpleado));
                        }
       $Requerimientos = $query->getArrayResult();     
        $response = new Response(json_encode($Requerimientos));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
    
    
 
      public function getTotalReq(){
       
            $Req = $this->getDoctrine()->getManager()->createQuery(
                    'SELECT count(r)
                    FROM LoginfirstBundle:Clientes c
                    JOIN LoginfirstBundle:Requerimientos  r WITH c.id = r.clientes  
                    JOIN LoginfirstBundle:Empleados p  WITH r.asignadoemp= p.id
                    JOIN LoginfirstBundle:Estados  e  WITH r.estados = e.id  
                    JOIN LoginfirstBundle:Submenus  s  WITH r.submenus = s.id  
                    JOIN LoginfirstBundle:Menus  m  WITH s.menus = m.id 
                    JOIN LoginfirstBundle:Modulos  d  WITH m.modulos = d.id  
                     group by r.fecha  
                    Order by r.fecha'
            );
             
              $resulf=$Req->getSingleScalarResult();
              
                    
            
            
            
                  
            return $resulf;
        
        
    }
 
   
}
