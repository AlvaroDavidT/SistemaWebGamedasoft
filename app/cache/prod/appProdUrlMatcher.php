<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // pruebaAjax
        if (0 === strpos($pathinfo, '/Ajax') && preg_match('#^/Ajax/(?P<ajax>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pruebaAjax')), array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::ajaxAction',));
        }

        // pruebaCliente
        if ($pathinfo === '/prueba') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::addClienteAction',  '_route' => 'pruebaCliente',);
        }

        // pruebaAjax1
        if (rtrim($pathinfo, '/') === '/Ajax') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pruebaAjax1');
            }

            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ajax1Action',  '_route' => 'pruebaAjax1',);
        }

        // ver_articulos
        if ($pathinfo === '/ver-articulos') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::verdatosAction',  '_route' => 'ver_articulos',);
        }

        // estatica_Contactos
        if ($pathinfo === '/Contactos') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\DefaultController::ContactosAction',  '_route' => 'estatica_Contactos',);
        }

        // estatica_Nosotros
        if ($pathinfo === '/Nosotros') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\DefaultController::NosotrosAction',  '_route' => 'estatica_Nosotros',);
        }

        // estatica_QS
        if ($pathinfo === '/QuienesSomos') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\DefaultController::QSAction',  '_route' => 'estatica_QS',);
        }

        // estatica_MV
        if ($pathinfo === '/Mision&Vision') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\DefaultController::MVAction',  '_route' => 'estatica_MV',);
        }

        // estatica_Productos
        if ($pathinfo === '/Productos') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\DefaultController::ProductosAction',  '_route' => 'estatica_Productos',);
        }

        // Login
        if ($pathinfo === '/Login') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\LoginController::PerfilesAction',  '_route' => 'Login',);
        }

        // Logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\LoginController::LogoutAction',  '_route' => 'Logout',);
        }

        // Cliente
        if ($pathinfo === '/Cliente') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::ClienteAction',  '_route' => 'Cliente',);
        }

        if (0 === strpos($pathinfo, '/UpdateCliente')) {
            // UpdateCliente
            if (rtrim($pathinfo, '/') === '/UpdateCliente') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'UpdateCliente');
                }

                return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::updateClienteAction',  '_route' => 'UpdateCliente',);
            }

            // GuardarUpdate
            if (preg_match('#^/UpdateCliente/(?P<Cliente>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'GuardarUpdate')), array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::GuardarClienteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/CambiarCClave')) {
            // CambiarClaveCliente
            if (rtrim($pathinfo, '/') === '/CambiarCClave') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'CambiarClaveCliente');
                }

                return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::CambiarClaveAction',  '_route' => 'CambiarClaveCliente',);
            }

            // PruebaClave
            if (preg_match('#^/CambiarCClave/(?P<Cliente>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'PruebaClave')), array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::PruebaClaveClienteAction',));
            }

            // GuardaClave
            if (0 === strpos($pathinfo, '/CambiarCClave/Guardar') && preg_match('#^/CambiarCClave/Guardar/(?P<Cliente>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'GuardaClave')), array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::GuardarClaveClienteAction',));
            }

        }

        // NuevoReq
        if ($pathinfo === '/NuevoRq') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::NuevoRqAction',  '_route' => 'NuevoReq',);
        }

        if (0 === strpos($pathinfo, '/SubMenusAjax')) {
            // SubMenus
            if (preg_match('#^/SubMenusAjax/(?P<idMenu>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SubMenus')), array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::SubMenuAjaxAction',));
            }

            // SubMenus1
            if (rtrim($pathinfo, '/') === '/SubMenusAjax') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'SubMenus1');
                }

                return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::SubMenusAjaxAction',  '_route' => 'SubMenus1',);
            }

        }

        // GuardarReqCliente
        if (rtrim($pathinfo, '/') === '/GuardarRq') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'GuardarReqCliente');
            }

            return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::GuardarRqClienteAction',  '_route' => 'GuardarReqCliente',);
        }

        // Empleado
        if ($pathinfo === '/Empleado') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::EmpleadoAction',  '_route' => 'Empleado',);
        }

        if (0 === strpos($pathinfo, '/RegistroT')) {
            // RegistroT
            if (rtrim($pathinfo, '/') === '/RegistroT') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'RegistroT');
                }

                return array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::RegistroTAction',  '_route' => 'RegistroT',);
            }

            // RegistroTiempo
            if (preg_match('#^/RegistroT/(?P<idEmpresa>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RegistroTiempo')), array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::RequerimientoEmpAction',));
            }

        }

        if (0 === strpos($pathinfo, '/GuardarTiempo')) {
            // GuardarHojasT
            if (rtrim($pathinfo, '/') === '/GuardarTiempo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'GuardarHojasT');
                }

                return array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::GuardarRegistroTAction',  '_route' => 'GuardarHojasT',);
            }

            // GuardarTiempoRq
            if (rtrim($pathinfo, '/') === '/GuardarTiempo/Hojas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'GuardarTiempoRq');
                }

                return array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::GuardarRegistroTAction',  '_route' => 'GuardarTiempoRq',);
            }

        }

        // UpdateEmpleado
        if (rtrim($pathinfo, '/') === '/UpdateEmpleado') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'UpdateEmpleado');
            }

            return array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::updateEmpleadoAction',  '_route' => 'UpdateEmpleado',);
        }

        // CambiarClaveEmpleado
        if (rtrim($pathinfo, '/') === '/CambiarEClave') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'CambiarClaveEmpleado');
            }

            return array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::CambiarClaveAction',  '_route' => 'CambiarClaveEmpleado',);
        }

        // GuardarHojaT
        if (rtrim($pathinfo, '/') === '/RegistroRq') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'GuardarHojaT');
            }

            return array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::GuardarRequerimientoAction',  '_route' => 'GuardarHojaT',);
        }

        // Perfil
        if ($pathinfo === '/perfil') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaPerfilAction',  '_route' => 'Perfil',);
        }

        // AdminConsulta
        if ($pathinfo === '/AdminConsulta') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaDatosAction',  '_route' => 'AdminConsulta',);
        }

        // GuardarRq
        if ($pathinfo === '/GuardarRq') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::GuardarRqAction',  '_route' => 'GuardarRq',);
        }

        // ConsultaRq
        if ($pathinfo === '/ConsultaRq') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::ConsultaRqAction',  '_route' => 'ConsultaRq',);
        }

        // ConsultaEstado
        if (0 === strpos($pathinfo, '/consulta') && preg_match('#^/consulta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ConsultaEstado')), array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::EstadosAction',));
        }

        if (0 === strpos($pathinfo, '/A')) {
            // Admin
            if ($pathinfo === '/Admin') {
                return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::AdminAction',  '_route' => 'Admin',);
            }

            if (0 === strpos($pathinfo, '/Actualiza')) {
                // ActualizaDatos
                if (rtrim($pathinfo, '/') === '/Actualiza') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ActualizaDatos');
                    }

                    return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ActualizaDatosAction',  '_route' => 'ActualizaDatos',);
                }

                // GuardaDatosAdmin
                if (preg_match('#^/Actualiza/(?P<idAdmin>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GuardaDatosAdmin')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarDatosAdminAction',));
                }

                if (0 === strpos($pathinfo, '/ActualizaClave')) {
                    // ActualizaClaveAdmin
                    if (rtrim($pathinfo, '/') === '/ActualizaClave') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'ActualizaClaveAdmin');
                        }

                        return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ActualizaClaveAction',  '_route' => 'ActualizaClaveAdmin',);
                    }

                    // PruebaClaveAdmin
                    if (preg_match('#^/ActualizaClave/(?P<idAdmin>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'PruebaClaveAdmin')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::PruebaClaveAction',));
                    }

                }

            }

        }

        // ConsultaEmpleados
        if ($pathinfo === '/Empleados') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarEmpleadosAction',  '_route' => 'ConsultaEmpleados',);
        }

        // GuardarEmpleado
        if ($pathinfo === '/GuardarEmpleado') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarNuevoEmpleadoAction',  '_route' => 'GuardarEmpleado',);
        }

        if (0 === strpos($pathinfo, '/Empleado')) {
            // VerEmpleado
            if (0 === strpos($pathinfo, '/Empleado/ver') && preg_match('#^/Empleado/ver/(?P<idE>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'VerEmpleado')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::VerEmpleadoAction',));
            }

            // EditarEmpleado
            if (0 === strpos($pathinfo, '/Empleado/Editar') && preg_match('#^/Empleado/Editar/(?P<idE>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EditarEmpleado')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EditarEmpleadosAction',));
            }

        }

        // GuardarEditEmpleado
        if (0 === strpos($pathinfo, '/Guardar/Editar') && preg_match('#^/Guardar/Editar/(?P<idEU>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'GuardarEditEmpleado')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarEditEmpleadoAction',));
        }

        // EliminarEmpleado
        if (0 === strpos($pathinfo, '/Empleado/Eliminar') && preg_match('#^/Empleado/Eliminar/(?P<idED>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'EliminarEmpleado')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EliminarEmpleadosAction',));
        }

        // ConsultaClientes
        if ($pathinfo === '/Clientes') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarClientesAction',  '_route' => 'ConsultaClientes',);
        }

        // GuardarCliente
        if ($pathinfo === '/GuardarCliente') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarNuevoClienteAction',  '_route' => 'GuardarCliente',);
        }

        if (0 === strpos($pathinfo, '/Cliente')) {
            // VerCliente
            if (0 === strpos($pathinfo, '/Cliente/ver') && preg_match('#^/Cliente/ver/(?P<idC>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'VerCliente')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::VerClientesAction',));
            }

            // EditarCliente
            if (0 === strpos($pathinfo, '/Cliente/Editar') && preg_match('#^/Cliente/Editar/(?P<idC>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EditarCliente')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EditarClienteAction',));
            }

        }

        // GuardarEditCliente
        if (0 === strpos($pathinfo, '/Guardar/EditarC') && preg_match('#^/Guardar/EditarC/(?P<idCU>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'GuardarEditCliente')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarEditarClienteAction',));
        }

        // EliminarCliente
        if (0 === strpos($pathinfo, '/Cliente/Eliminar') && preg_match('#^/Cliente/Eliminar/(?P<idCD>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'EliminarCliente')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EliminarClienteAction',));
        }

        // ConsultaModulos
        if ($pathinfo === '/Modulos') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarModulosAction',  '_route' => 'ConsultaModulos',);
        }

        // GuardarModulo
        if ($pathinfo === '/GuardarModulo') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarNuevoModuloAction',  '_route' => 'GuardarModulo',);
        }

        if (0 === strpos($pathinfo, '/M')) {
            if (0 === strpos($pathinfo, '/Modulo')) {
                // ActivaMod
                if (0 === strpos($pathinfo, '/Modulo/Activa') && preg_match('#^/Modulo/Activa/(?P<idMod>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActivaMod')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ActivaModuloAction',));
                }

                // DesactivaMod
                if (0 === strpos($pathinfo, '/Modulo/Desactiva') && preg_match('#^/Modulo/Desactiva/(?P<idMod>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'DesactivaMod')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::DesactivaModuloAction',));
                }

            }

            if (0 === strpos($pathinfo, '/Menu')) {
                // ConsultaMenus
                if ($pathinfo === '/Menus') {
                    return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarMenusAction',  '_route' => 'ConsultaMenus',);
                }

                // ActivaMenu
                if (0 === strpos($pathinfo, '/Menu/Activa') && preg_match('#^/Menu/Activa/(?P<idMenu>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActivaMenu')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ActivaMenuAction',));
                }

                // DesactivaMenu
                if (0 === strpos($pathinfo, '/Menu/Desactiva') && preg_match('#^/Menu/Desactiva/(?P<idMenu>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'DesactivaMenu')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::DesactivaMenuAction',));
                }

            }

        }

        // GuardarMenu
        if ($pathinfo === '/GuardarMenu') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarNuevoMenuAction',  '_route' => 'GuardarMenu',);
        }

        if (0 === strpos($pathinfo, '/Menus')) {
            // Menus
            if (preg_match('#^/Menus/(?P<idModulo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Menus')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::menuAction',));
            }

            // Menus1
            if (rtrim($pathinfo, '/') === '/Menus') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Menus1');
                }

                return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::menusAction',  '_route' => 'Menus1',);
            }

        }

        if (0 === strpos($pathinfo, '/SubMenu')) {
            // ConsultaSubMenus
            if (rtrim($pathinfo, '/') === '/SubMenus') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ConsultaSubMenus');
                }

                return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarSubMenusAction',  '_route' => 'ConsultaSubMenus',);
            }

            // ActivaSubMenu
            if (0 === strpos($pathinfo, '/SubMenu/Activa') && preg_match('#^/SubMenu/Activa/(?P<idSubMenu>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActivaSubMenu')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ActivaSubMenuAction',));
            }

            // DesactivaSubMenu
            if (0 === strpos($pathinfo, '/SubMenu/Desactiva') && preg_match('#^/SubMenu/Desactiva/(?P<idSubMenu>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'DesactivaSubMenu')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::DesactivaSubMenuAction',));
            }

        }

        // GuardarSubMenu
        if ($pathinfo === '/GuardarSubMenu') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarNuevoSubMenuAction',  '_route' => 'GuardarSubMenu',);
        }

        // ConsultarRequerimientos
        if ($pathinfo === '/Requerimientos') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarRequerimientosAction',  '_route' => 'ConsultarRequerimientos',);
        }

        // GuardarAsignacion
        if (0 === strpos($pathinfo, '/Asignar') && preg_match('#^/Asignar/(?P<idRq>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'GuardarAsignacion')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::AsignarAction',));
        }

        if (0 === strpos($pathinfo, '/ConsultaReq')) {
            // Requerimientos
            if (rtrim($pathinfo, '/') === '/ConsultaReq') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Requerimientos');
                }

                return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaReqAction',  '_route' => 'Requerimientos',);
            }

            if (0 === strpos($pathinfo, '/ConsultaReq/Fecha')) {
                // RequerimientosFechaI
                if ($pathinfo === '/ConsultaReq/FechaInicial') {
                    return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaReqFechaInicialAction',  '_route' => 'RequerimientosFechaI',);
                }

                // RequerimientosFechas
                if ($pathinfo === '/ConsultaReq/Fechas') {
                    return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaReqFechasAction',  '_route' => 'RequerimientosFechas',);
                }

            }

            // RequerimientosCliente
            if (0 === strpos($pathinfo, '/ConsultaReq/Cliente') && preg_match('#^/ConsultaReq/Cliente/(?P<IdCliente>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RequerimientosCliente')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaClientesAction',));
            }

            // RequerimientosEstado
            if (0 === strpos($pathinfo, '/ConsultaReq/Estado') && preg_match('#^/ConsultaReq/Estado/(?P<IdEstado>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RequerimientosEstado')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaEstadoAction',));
            }

            // RequerimientosModulo
            if (0 === strpos($pathinfo, '/ConsultaReq/Modulo') && preg_match('#^/ConsultaReq/Modulo/(?P<IdModulo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RequerimientosModulo')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaModuloAction',));
            }

            // RequerimientosEmpleado
            if (0 === strpos($pathinfo, '/ConsultaReq/Empleado') && preg_match('#^/ConsultaReq/Empleado/(?P<IdEmpleado>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RequerimientosEmpleado')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaEmpleadoAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
