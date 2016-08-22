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

        if (0 === strpos($pathinfo, '/ActualizaReq')) {
            // ActualizaReq1
            if ($pathinfo === '/ActualizaReq') {
                return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::ActualizaRequerimientoAction',  '_route' => 'ActualizaReq1',);
            }

            // ActualizaReq
            if (preg_match('#^/ActualizaReq/(?P<idRq>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActualizaReq')), array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::ActualizaRequerimientoAction',));
            }

        }

        if (0 === strpos($pathinfo, '/EliminarReq')) {
            // EliminaReq1
            if ($pathinfo === '/EliminarReq') {
                return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::EliminarRequerimientoAction',  '_route' => 'EliminaReq1',);
            }

            // EliminaReq
            if (preg_match('#^/EliminarReq/(?P<idRq>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EliminaReq')), array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::EliminarRequerimientoAction',));
            }

        }

        if (0 === strpos($pathinfo, '/ConsultaReqC')) {
            // RequerimientosClientes
            if (rtrim($pathinfo, '/') === '/ConsultaReqC') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'RequerimientosClientes');
                }

                return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::ConsultaReqAction',  '_route' => 'RequerimientosClientes',);
            }

            // RequerimientosModulosClientes
            if (0 === strpos($pathinfo, '/ConsultaReqC/Modulo') && preg_match('#^/ConsultaReqC/Modulo/(?P<IdModulo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RequerimientosModulosClientes')), array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::ConsultaModuloClientesAction',));
            }

        }

        if (0 === strpos($pathinfo, '/RequerimientosC')) {
            // RequerimientosC
            if ($pathinfo === '/RequerimientosC') {
                return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::RequerimientosCAction',  '_route' => 'RequerimientosC',);
            }

            if (0 === strpos($pathinfo, '/RequerimientosC/Fecha')) {
                // RequerimientosCFechaInicial
                if ($pathinfo === '/RequerimientosC/FechaInicialC') {
                    return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::RequerimientosFechaInicialCAction',  '_route' => 'RequerimientosCFechaInicial',);
                }

                // RequerimientosCEntreFechas
                if ($pathinfo === '/RequerimientosC/FechaEntreFechasC') {
                    return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::RequerimientosEntreFechasCAction',  '_route' => 'RequerimientosCEntreFechas',);
                }

            }

            if (0 === strpos($pathinfo, '/RequerimientosC/Estados')) {
                // RequerimientosCEstados
                if ($pathinfo === '/RequerimientosC/Estados') {
                    return array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::RequerimientosEntreFechasCAction',  '_route' => 'RequerimientosCEstados',);
                }

                // RequerimientosEstadosC
                if (preg_match('#^/RequerimientosC/Estados/(?P<IdEstado>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'RequerimientosEstadosC')), array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::ConsultaEstadosCAction',));
                }

            }

            // RequerimientosModulos
            if (0 === strpos($pathinfo, '/RequerimientosC/Modulos') && preg_match('#^/RequerimientosC/Modulos/(?P<IdModulo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RequerimientosModulos')), array (  '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::ConsultaModulosCAction',));
            }

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

        if (0 === strpos($pathinfo, '/UpdateEmpleado')) {
            // UpdateEmpleado
            if (rtrim($pathinfo, '/') === '/UpdateEmpleado') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'UpdateEmpleado');
                }

                return array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::updateEmpleadoAction',  '_route' => 'UpdateEmpleado',);
            }

            // GuardarUpdateE
            if (preg_match('#^/UpdateEmpleado/(?P<Empleado>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'GuardarUpdateE')), array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::GuardarEmpleadoAction',));
            }

        }

        if (0 === strpos($pathinfo, '/CambiarEClave')) {
            // CambiarClaveEmpleado
            if (rtrim($pathinfo, '/') === '/CambiarEClave') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'CambiarClaveEmpleado');
                }

                return array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::CambiarClaveAction',  '_route' => 'CambiarClaveEmpleado',);
            }

            // PruebaClaveE
            if (preg_match('#^/CambiarEClave/(?P<Empleado>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'PruebaClaveE')), array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::PruebaClaveEmpleadoAction',));
            }

            // GuardaClaveE
            if (0 === strpos($pathinfo, '/CambiarEClave/Guardar') && preg_match('#^/CambiarEClave/Guardar/(?P<Empleado>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'GuardaClaveE')), array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::GuardarClaveEmpleadoAction',));
            }

        }

        // GuardarHojaT
        if (rtrim($pathinfo, '/') === '/RegistroRq') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'GuardarHojaT');
            }

            return array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::GuardarReqTiempoAction',  '_route' => 'GuardarHojaT',);
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

                    // GuardaClaveA
                    if (0 === strpos($pathinfo, '/ActualizaClave/GuardarA') && preg_match('#^/ActualizaClave/GuardarA/(?P<idAdmin>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'GuardaClaveA')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarClaveAdminAction',));
                    }

                }

            }

        }

        // ConsultaEmpleados
        if ($pathinfo === '/Empleados') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarEmpleadosAction',  '_route' => 'ConsultaEmpleados',);
        }

        if (0 === strpos($pathinfo, '/Guardar')) {
            // GuardarEmpleado
            if ($pathinfo === '/GuardarEmpleado') {
                return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarNuevoEmpleadoAction',  '_route' => 'GuardarEmpleado',);
            }

            if (0 === strpos($pathinfo, '/Guardar/Editar')) {
                // GuardarEditEmpleado1
                if ($pathinfo === '/Guardar/Editar') {
                    return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarEditEmpleadoAction',  '_route' => 'GuardarEditEmpleado1',);
                }

                // GuardarEditEmpleado
                if (preg_match('#^/Guardar/Editar/(?P<idEU>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GuardarEditEmpleado')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarEditEmpleadoAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/Cedula')) {
            // BuscaPorCedula
            if (rtrim($pathinfo, '/') === '/Cedula') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'BuscaPorCedula');
                }

                return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::BuscaCedulaAction',  '_route' => 'BuscaPorCedula',);
            }

            // BuscaPorCedula1
            if (preg_match('#^/Cedula/(?P<idCedula>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BuscaPorCedula1')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::BuscaCedulaAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Empleado/Eliminar')) {
            // EliminarEmpleado1
            if ($pathinfo === '/Empleado/Eliminar') {
                return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EliminarEmpleadosAction',  '_route' => 'EliminarEmpleado1',);
            }

            // EliminarEmpleado
            if (preg_match('#^/Empleado/Eliminar/(?P<idED>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EliminarEmpleado')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EliminarEmpleadosAction',));
            }

        }

        // ConsultaClientes
        if ($pathinfo === '/Clientes') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarClientesAction',  '_route' => 'ConsultaClientes',);
        }

        // GuardarCliente
        if ($pathinfo === '/GuardarCliente') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarNuevoClienteAction',  '_route' => 'GuardarCliente',);
        }

        if (0 === strpos($pathinfo, '/Ruc')) {
            // BuscaPorRuc
            if (rtrim($pathinfo, '/') === '/Ruc') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'BuscaPorRuc');
                }

                return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::BuscaRucAction',  '_route' => 'BuscaPorRuc',);
            }

            // BuscaPorRuc1
            if (preg_match('#^/Ruc/(?P<idRuc>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BuscaPorRuc1')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::BuscaRucAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Guardar/EditarC')) {
            // GuardarEditCliente1
            if ($pathinfo === '/Guardar/EditarC') {
                return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarEditarClienteAction',  '_route' => 'GuardarEditCliente1',);
            }

            // GuardarEditCliente
            if (preg_match('#^/Guardar/EditarC/(?P<idCU>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'GuardarEditCliente')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarEditarClienteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Cliente/Eliminar')) {
            // EliminarCliente1
            if ($pathinfo === '/Cliente/Eliminar') {
                return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EliminarClienteAction',  '_route' => 'EliminarCliente1',);
            }

            // EliminarCliente
            if (preg_match('#^/Cliente/Eliminar/(?P<idCD>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EliminarCliente')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EliminarClienteAction',));
            }

        }

        // ConsultaModulos
        if ($pathinfo === '/Modulos') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarModulosAction',  '_route' => 'ConsultaModulos',);
        }

        if (0 === strpos($pathinfo, '/Guardar')) {
            // GuardarModulo
            if ($pathinfo === '/GuardarModulo') {
                return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarNuevoModuloAction',  '_route' => 'GuardarModulo',);
            }

            if (0 === strpos($pathinfo, '/Guardar/Editar')) {
                // GuardarEditModuloA1
                if ($pathinfo === '/Guardar/EditarModulo') {
                    return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarEditarClienteAction',  '_route' => 'GuardarEditModuloA1',);
                }

                // GuardarEditMenusA
                if (0 === strpos($pathinfo, '/Guardar/Editarmenu') && preg_match('#^/Guardar/Editarmenu/(?P<idMenu>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GuardarEditMenusA')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarEditarMenuAction',));
                }

                if (0 === strpos($pathinfo, '/Guardar/EditarModulo')) {
                    // GuardarEditMenusA1
                    if ($pathinfo === '/Guardar/EditarModulo') {
                        return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarEditarModuloAction',  '_route' => 'GuardarEditMenusA1',);
                    }

                    // GuardarEditModuloA
                    if (preg_match('#^/Guardar/EditarModulo/(?P<idModulo>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'GuardarEditModuloA')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarEditarModuloAction',));
                    }

                }

            }

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

                // EliminarModulo
                if (0 === strpos($pathinfo, '/Modulo/Eliminar') && preg_match('#^/Modulo/Eliminar/(?P<idEM>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'EliminarModulo')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EliminarModuloAction',));
                }

            }

            if (0 === strpos($pathinfo, '/Menu')) {
                // ConsultaMenus
                if ($pathinfo === '/Menus') {
                    return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarMenusAction',  '_route' => 'ConsultaMenus',);
                }

                // EliminarMenu
                if (0 === strpos($pathinfo, '/Menu/Eliminar') && preg_match('#^/Menu/Eliminar/(?P<idEMe>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'EliminarMenu')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EliminarMenuAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/Submenu/Eliminar')) {
            // EliminarSubmenus1
            if ($pathinfo === '/Submenu/Eliminar') {
                return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EliminarSubmenusAction',  '_route' => 'EliminarSubmenus1',);
            }

            // EliminarSubmenus
            if (preg_match('#^/Submenu/Eliminar/(?P<idSm>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EliminarSubmenus')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EliminarSubmenusAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Menu')) {
            // ActivaMenu
            if (0 === strpos($pathinfo, '/Menu/Activa') && preg_match('#^/Menu/Activa/(?P<idMenu>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActivaMenu')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ActivaMenuAction',));
            }

            // DesactivaMenu
            if (0 === strpos($pathinfo, '/Menu/Desactiva') && preg_match('#^/Menu/Desactiva/(?P<idMenu>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'DesactivaMenu')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::DesactivaMenuAction',));
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

        if (0 === strpos($pathinfo, '/Guardar')) {
            // GuardarSubMenu
            if ($pathinfo === '/GuardarSubMenu') {
                return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarNuevoSubMenuAction',  '_route' => 'GuardarSubMenu',);
            }

            if (0 === strpos($pathinfo, '/Guardar/EditarSubMenu')) {
                // GuardarEditSubMenusA1
                if ($pathinfo === '/Guardar/EditarSubMenu') {
                    return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarEditarSubMenuAction',  '_route' => 'GuardarEditSubMenusA1',);
                }

                // GuardarEditSubMenusA
                if (preg_match('#^/Guardar/EditarSubMenu/(?P<idSubMenu>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GuardarEditSubMenusA')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarEditarSubMenuAction',));
                }

            }

        }

        // ConsultarRequerimientos
        if ($pathinfo === '/Requerimientos') {
            return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarRequerimientosAction',  '_route' => 'ConsultarRequerimientos',);
        }

        // GuardarAsignacion
        if (0 === strpos($pathinfo, '/Asignar') && preg_match('#^/Asignar/(?P<idRq>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'GuardarAsignacion')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::AsignarAction',));
        }

        if (0 === strpos($pathinfo, '/C')) {
            // Requerimientos
            if (rtrim($pathinfo, '/') === '/ConsultaReq') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Requerimientos');
                }

                return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaReqAction',  '_route' => 'Requerimientos',);
            }

            if (0 === strpos($pathinfo, '/C_Tiempos')) {
                // ConsultaTiempos
                if (rtrim($pathinfo, '/') === '/C_Tiempos') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ConsultaTiempos');
                    }

                    return array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaTiemposAction',  '_route' => 'ConsultaTiempos',);
                }

                // ConsultaTiempos1
                if (0 === strpos($pathinfo, '/C_Tiempos/Cliente') && preg_match('#^/C_Tiempos/Cliente/(?P<idCliente>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ConsultaTiempos1')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaTiemposCAction',));
                }

            }

            if (0 === strpos($pathinfo, '/Consul')) {
                if (0 === strpos($pathinfo, '/ConsultaReq')) {
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

                    // ConsulReqEmp
                    if ($pathinfo === '/ConsultaReqE') {
                        return array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::ConsultaReqEAction',  '_route' => 'ConsulReqEmp',);
                    }

                }

                // ConsulReqTiempos
                if ($pathinfo === '/ConsulReqTiempos') {
                    return array (  '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::ConsulReqTiemposAction',  '_route' => 'ConsulReqTiempos',);
                }

            }

        }

        // BuscaSubmenu
        if (0 === strpos($pathinfo, '/Submenu/Busca') && preg_match('#^/Submenu/Busca/(?P<idSub>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'BuscaSubmenu')), array (  '_controller' => 'Login\\firstBundle\\Controller\\AdminController::BuscaSubmenuAction',));
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
