<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebaAjax' => array (  0 =>   array (    0 => 'ajax',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::ajaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ajax',    ),    1 =>     array (      0 => 'text',      1 => '/Ajax',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebaCliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::addClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/prueba',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebaAjax1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ajax1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Ajax/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ver_articulos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::verdatosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ver-articulos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estatica_Contactos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\DefaultController::ContactosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Contactos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estatica_Nosotros' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\DefaultController::NosotrosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Nosotros',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estatica_QS' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\DefaultController::QSAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/QuienesSomos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estatica_MV' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\DefaultController::MVAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Mision&Vision',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estatica_Productos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\DefaultController::ProductosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Productos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\LoginController::PerfilesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\LoginController::LogoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Cliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::ClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'UpdateCliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::updateClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/UpdateCliente/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardarUpdate' => array (  0 =>   array (    0 => 'Cliente',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::GuardarClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'Cliente',    ),    1 =>     array (      0 => 'text',      1 => '/UpdateCliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'CambiarClaveCliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::CambiarClaveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/CambiarCClave/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'PruebaClave' => array (  0 =>   array (    0 => 'Cliente',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::PruebaClaveClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'Cliente',    ),    1 =>     array (      0 => 'text',      1 => '/CambiarCClave',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardaClave' => array (  0 =>   array (    0 => 'Cliente',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::GuardarClaveClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'Cliente',    ),    1 =>     array (      0 => 'text',      1 => '/CambiarCClave/Guardar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'NuevoReq' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::NuevoRqAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/NuevoRq',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'SubMenus' => array (  0 =>   array (    0 => 'idMenu',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::SubMenuAjaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idMenu',    ),    1 =>     array (      0 => 'text',      1 => '/SubMenusAjax',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'SubMenus1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::SubMenusAjaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/SubMenusAjax/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardarReqCliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::GuardarRqClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GuardarRq/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Empleado' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::EmpleadoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Empleado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RegistroT' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::RegistroTAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/RegistroT/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RegistroTiempo' => array (  0 =>   array (    0 => 'idEmpresa',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::RequerimientoEmpAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idEmpresa',    ),    1 =>     array (      0 => 'text',      1 => '/RegistroT',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardarHojasT' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::GuardarRegistroTAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GuardarTiempo/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardarTiempoRq' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::GuardarRegistroTAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GuardarTiempo/Hojas/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'UpdateEmpleado' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::updateEmpleadoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/UpdateEmpleado/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'CambiarClaveEmpleado' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::CambiarClaveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/CambiarEClave/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardarHojaT' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\EmpleadoController::GuardarRequerimientoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/RegistroRq/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Perfil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaPerfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/perfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AdminConsulta' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaDatosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/AdminConsulta',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardarRq' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::GuardarRqAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GuardarRq',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ConsultaRq' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::ConsultaRqAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ConsultaRq',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ConsultaEstado' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\ClienteController::EstadosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/consulta',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::AdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActualizaDatos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ActualizaDatosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Actualiza/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardaDatosAdmin' => array (  0 =>   array (    0 => 'idAdmin',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarDatosAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idAdmin',    ),    1 =>     array (      0 => 'text',      1 => '/Actualiza',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActualizaClaveAdmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ActualizaClaveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ActualizaClave/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'PruebaClaveAdmin' => array (  0 =>   array (    0 => 'idAdmin',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::PruebaClaveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idAdmin',    ),    1 =>     array (      0 => 'text',      1 => '/ActualizaClave',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ConsultaEmpleados' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarEmpleadosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Empleados',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardarEmpleado' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarNuevoEmpleadoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GuardarEmpleado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'VerEmpleado' => array (  0 =>   array (    0 => 'idE',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::VerEmpleadoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idE',    ),    1 =>     array (      0 => 'text',      1 => '/Empleado/ver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'EditarEmpleado' => array (  0 =>   array (    0 => 'idE',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EditarEmpleadosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idE',    ),    1 =>     array (      0 => 'text',      1 => '/Empleado/Editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardarEditEmpleado' => array (  0 =>   array (    0 => 'idEU',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarEditEmpleadoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idEU',    ),    1 =>     array (      0 => 'text',      1 => '/Guardar/Editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'EliminarEmpleado' => array (  0 =>   array (    0 => 'idED',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EliminarEmpleadosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idED',    ),    1 =>     array (      0 => 'text',      1 => '/Empleado/Eliminar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ConsultaClientes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarClientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Clientes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardarCliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarNuevoClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GuardarCliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'VerCliente' => array (  0 =>   array (    0 => 'idC',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::VerClientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idC',    ),    1 =>     array (      0 => 'text',      1 => '/Cliente/ver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'EditarCliente' => array (  0 =>   array (    0 => 'idC',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EditarClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idC',    ),    1 =>     array (      0 => 'text',      1 => '/Cliente/Editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardarEditCliente' => array (  0 =>   array (    0 => 'idCU',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarEditarClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCU',    ),    1 =>     array (      0 => 'text',      1 => '/Guardar/EditarC',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'EliminarCliente' => array (  0 =>   array (    0 => 'idCD',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::EliminarClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCD',    ),    1 =>     array (      0 => 'text',      1 => '/Cliente/Eliminar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ConsultaModulos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarModulosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Modulos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardarModulo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarNuevoModuloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GuardarModulo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActivaMod' => array (  0 =>   array (    0 => 'idMod',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ActivaModuloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idMod',    ),    1 =>     array (      0 => 'text',      1 => '/Modulo/Activa',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'DesactivaMod' => array (  0 =>   array (    0 => 'idMod',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::DesactivaModuloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idMod',    ),    1 =>     array (      0 => 'text',      1 => '/Modulo/Desactiva',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ConsultaMenus' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarMenusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Menus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActivaMenu' => array (  0 =>   array (    0 => 'idMenu',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ActivaMenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idMenu',    ),    1 =>     array (      0 => 'text',      1 => '/Menu/Activa',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'DesactivaMenu' => array (  0 =>   array (    0 => 'idMenu',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::DesactivaMenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idMenu',    ),    1 =>     array (      0 => 'text',      1 => '/Menu/Desactiva',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardarMenu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarNuevoMenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GuardarMenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Menus' => array (  0 =>   array (    0 => 'idModulo',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::menuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idModulo',    ),    1 =>     array (      0 => 'text',      1 => '/Menus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Menus1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::menusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Menus/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ConsultaSubMenus' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarSubMenusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/SubMenus/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActivaSubMenu' => array (  0 =>   array (    0 => 'idSubMenu',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ActivaSubMenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSubMenu',    ),    1 =>     array (      0 => 'text',      1 => '/SubMenu/Activa',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'DesactivaSubMenu' => array (  0 =>   array (    0 => 'idSubMenu',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::DesactivaSubMenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSubMenu',    ),    1 =>     array (      0 => 'text',      1 => '/SubMenu/Desactiva',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardarSubMenu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::GuardarNuevoSubMenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GuardarSubMenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ConsultarRequerimientos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ListarRequerimientosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Requerimientos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'GuardarAsignacion' => array (  0 =>   array (    0 => 'idRq',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::AsignarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idRq',    ),    1 =>     array (      0 => 'text',      1 => '/Asignar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Requerimientos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaReqAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ConsultaReq/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RequerimientosFechaI' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaReqFechaInicialAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ConsultaReq/FechaInicial',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RequerimientosFechas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaReqFechasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ConsultaReq/Fechas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RequerimientosCliente' => array (  0 =>   array (    0 => 'IdCliente',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaClientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'IdCliente',    ),    1 =>     array (      0 => 'text',      1 => '/ConsultaReq/Cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RequerimientosEstado' => array (  0 =>   array (    0 => 'IdEstado',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaEstadoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'IdEstado',    ),    1 =>     array (      0 => 'text',      1 => '/ConsultaReq/Estado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RequerimientosModulo' => array (  0 =>   array (    0 => 'IdModulo',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaModuloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'IdModulo',    ),    1 =>     array (      0 => 'text',      1 => '/ConsultaReq/Modulo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RequerimientosEmpleado' => array (  0 =>   array (    0 => 'IdEmpleado',  ),  1 =>   array (    '_controller' => 'Login\\firstBundle\\Controller\\AdminController::ConsultaEmpleadoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'IdEmpleado',    ),    1 =>     array (      0 => 'text',      1 => '/ConsultaReq/Empleado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
