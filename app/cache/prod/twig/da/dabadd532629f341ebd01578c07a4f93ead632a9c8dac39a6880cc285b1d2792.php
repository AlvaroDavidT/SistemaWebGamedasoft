<?php

/* LoginfirstBundle:Estaticas:Productos.html.twig */
class __TwigTemplate_68961810006a33d0e84b7486d20cab2eab014a5e9d47150e277b128e965bd209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout.html.twig", "LoginfirstBundle:Estaticas:Productos.html.twig", 2);
        $this->blocks = array(
            'content2' => array($this, 'block_content2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content2($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">

                <div class=\"Titulo\" style=\"text-align:center;\">
                    Productos
                </div>
                <hr>
                <div class=\"Texto\">
                    Gameda se encuentra definido por una serie de módulos básicos, los cuales interactuan entre si, permitiendo contar siempre con una información clara, veráz y oportuna.El sistema cuenta con los siguientes módulos, los mismos que se presentarán dependiendo de las apliciones que requiera el cliente según sus específicas necesidades.  
                </div>

                <hr>
            </div>



        </div>
        <div class=\"row\">
            <div class=\"col-sm-4\" style=\"text-align:center;\">
                <hr>

                <img id=\"img_logoQS\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/contabilidad.jpg"), "html", null, true);
        echo "\" alt=\"!\"  />
                <hr>


                <img id=\"img_logoQS\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/contabilidad1.jpg"), "html", null, true);
        echo "\" alt=\"!\"  />

            </div>
            <div class=\"col-sm-8\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\" id=\"produTitle\"><i class=\"fa fa-line-chart fa-1x\"></i>&nbsp;Contabilidad</div>
                    <div class=\"panel-body TextoPro\">
                        Es el corazón de todos los módulos que reciben y crean los diarios de la contabilización total, aquí se generan mayores, balances, estados financieros mensuales o acumuladosanuales.Se puede definir un plan de cuentas de hasta 20 dígitos y 9 niveles.
                    </div>
                    <div class=\"panel-heading\" id=\"produTitle\"><i class=\"fa fa-money fa-1x\"></i>&nbsp;Bancos</div>
                    <div class=\"panel-body TextoPro\">
                        Este módulo nos permite crear cualquier número de cuentas bancarias (C. Corriente o C. Ahorros) para su control, generación e impresión automática de cheques, conciliación bancaria a cualquier fecha, emite reportes y anexos que cumplen con las normas del SRI.
                    </div>
                    <div class=\"panel-heading\" id=\"produTitle\"><i class=\"fa fa-building fa-1x\"></i>&nbsp;Activos Fijos</div>
                    <div class=\"panel-body TextoPro\">
                        Agrupados por grupos y centros de costos, se pueden distribuir un Activo a varios centros de costo ya sea por porcentaje, dimensiones o cualquier criterio. Se emite reportes de inventarios a cualquier fecha (anterior o futura), contabilización de depreciaciones, bajas o ventas de activos.
                    </div>
                    <div class=\"panel-heading\" id=\"produTitle\"><i class=\"fa fa-users fa-1x\"></i>&nbsp;Rol de pagos</div>
                    <div class=\"panel-body TextoPro\">
                        Desarrollado bajo las normas ecuatorianas, incluye exportaciones de datos para el SRI y el IESS, crea la ficha individual del empleado con datos de cargas, control de horas extras diarias con tarifas para trabajo nocturno,horas del 50% y horas del 100%,rol
                        de pagos mensuales o quincenales con cálculos de impuesto a la renta, XIII, XIV , Fondos de Reserva, días y utilización de vacaciones, transferencias a bancos (vía archivo o reporte), cuentas por 
                        cobrar empleados, planilla de ingreso, salida y mensual.

                    </div>
                    <div class=\"panel-heading\" id=\"produTitle\"><i class=\"fa fa-shopping-cart fa-1x\"></i>&nbsp;Compras</div>
                    <div class=\"panel-body TextoPro\">
                        El ciclo completo inicia con la solicitud de compra, que se convierte en una orden de compra por diferentes conceptos, la que se convierte en factura al momento del ingreso de la compra, contabilizando automáticamente el ingreso(previo a la autorización electrónica, el
                        traspaso de la información a cuentas por pagar y bancos es automática.
                    </div>
                    <div class=\"panel-heading\" id=\"produTitle\"><i class=\"fa fa-calendar-minus-o fa-1x\"></i>&nbsp;Cuentas por Pagar</div>
                    <div class=\"panel-body TextoPro\">
                        El sistema emite reportes de facturas pendientes de pago y sus montos a ser cancelados, el usuario dispone que se cancelen algunas o todas la cuentas en sus montos totales o parciales, por lo que se mantiene un control de todas las cuentas por pagar.
                    </div>
                    <div class=\"panel-heading\" id=\"produTitle\"><i class=\"fa fa-file-code-o fa-1x\"></i>&nbsp;Facturación Electrónica</div>
                    <div class=\"panel-body TextoPro\">
                        Permite la creación de varios tipos de produtos y unidades a ser facturadas, se puede crear facturas por medio de guias de remisión o solamente fatura, mantine el control de la emisión y pagos realizados a las facturas, estados de cuenta por producto y por cliente, notas de ajuste a facturas y clientes ,emision de comprobantes electrónicos.
                    </div>
                </div>
            </div>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Estaticas:Productos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 30,  55 => 26,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Estaticas/index.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout.html.twig' %}*/
/* {% block content2 %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/* */
/*                 <div class="Titulo" style="text-align:center;">*/
/*                     Productos*/
/*                 </div>*/
/*                 <hr>*/
/*                 <div class="Texto">*/
/*                     Gameda se encuentra definido por una serie de módulos básicos, los cuales interactuan entre si, permitiendo contar siempre con una información clara, veráz y oportuna.El sistema cuenta con los siguientes módulos, los mismos que se presentarán dependiendo de las apliciones que requiera el cliente según sus específicas necesidades.  */
/*                 </div>*/
/* */
/*                 <hr>*/
/*             </div>*/
/* */
/* */
/* */
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-4" style="text-align:center;">*/
/*                 <hr>*/
/* */
/*                 <img id="img_logoQS" src="{{asset('bundles/loginfirst/Imagenes/contabilidad.jpg')}}" alt="!"  />*/
/*                 <hr>*/
/* */
/* */
/*                 <img id="img_logoQS" src="{{asset('bundles/loginfirst/Imagenes/contabilidad1.jpg')}}" alt="!"  />*/
/* */
/*             </div>*/
/*             <div class="col-sm-8">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading" id="produTitle"><i class="fa fa-line-chart fa-1x"></i>&nbsp;Contabilidad</div>*/
/*                     <div class="panel-body TextoPro">*/
/*                         Es el corazón de todos los módulos que reciben y crean los diarios de la contabilización total, aquí se generan mayores, balances, estados financieros mensuales o acumuladosanuales.Se puede definir un plan de cuentas de hasta 20 dígitos y 9 niveles.*/
/*                     </div>*/
/*                     <div class="panel-heading" id="produTitle"><i class="fa fa-money fa-1x"></i>&nbsp;Bancos</div>*/
/*                     <div class="panel-body TextoPro">*/
/*                         Este módulo nos permite crear cualquier número de cuentas bancarias (C. Corriente o C. Ahorros) para su control, generación e impresión automática de cheques, conciliación bancaria a cualquier fecha, emite reportes y anexos que cumplen con las normas del SRI.*/
/*                     </div>*/
/*                     <div class="panel-heading" id="produTitle"><i class="fa fa-building fa-1x"></i>&nbsp;Activos Fijos</div>*/
/*                     <div class="panel-body TextoPro">*/
/*                         Agrupados por grupos y centros de costos, se pueden distribuir un Activo a varios centros de costo ya sea por porcentaje, dimensiones o cualquier criterio. Se emite reportes de inventarios a cualquier fecha (anterior o futura), contabilización de depreciaciones, bajas o ventas de activos.*/
/*                     </div>*/
/*                     <div class="panel-heading" id="produTitle"><i class="fa fa-users fa-1x"></i>&nbsp;Rol de pagos</div>*/
/*                     <div class="panel-body TextoPro">*/
/*                         Desarrollado bajo las normas ecuatorianas, incluye exportaciones de datos para el SRI y el IESS, crea la ficha individual del empleado con datos de cargas, control de horas extras diarias con tarifas para trabajo nocturno,horas del 50% y horas del 100%,rol*/
/*                         de pagos mensuales o quincenales con cálculos de impuesto a la renta, XIII, XIV , Fondos de Reserva, días y utilización de vacaciones, transferencias a bancos (vía archivo o reporte), cuentas por */
/*                         cobrar empleados, planilla de ingreso, salida y mensual.*/
/* */
/*                     </div>*/
/*                     <div class="panel-heading" id="produTitle"><i class="fa fa-shopping-cart fa-1x"></i>&nbsp;Compras</div>*/
/*                     <div class="panel-body TextoPro">*/
/*                         El ciclo completo inicia con la solicitud de compra, que se convierte en una orden de compra por diferentes conceptos, la que se convierte en factura al momento del ingreso de la compra, contabilizando automáticamente el ingreso(previo a la autorización electrónica, el*/
/*                         traspaso de la información a cuentas por pagar y bancos es automática.*/
/*                     </div>*/
/*                     <div class="panel-heading" id="produTitle"><i class="fa fa-calendar-minus-o fa-1x"></i>&nbsp;Cuentas por Pagar</div>*/
/*                     <div class="panel-body TextoPro">*/
/*                         El sistema emite reportes de facturas pendientes de pago y sus montos a ser cancelados, el usuario dispone que se cancelen algunas o todas la cuentas en sus montos totales o parciales, por lo que se mantiene un control de todas las cuentas por pagar.*/
/*                     </div>*/
/*                     <div class="panel-heading" id="produTitle"><i class="fa fa-file-code-o fa-1x"></i>&nbsp;Facturación Electrónica</div>*/
/*                     <div class="panel-body TextoPro">*/
/*                         Permite la creación de varios tipos de produtos y unidades a ser facturadas, se puede crear facturas por medio de guias de remisión o solamente fatura, mantine el control de la emisión y pagos realizados a las facturas, estados de cuenta por producto y por cliente, notas de ajuste a facturas y clientes ,emision de comprobantes electrónicos.*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {%  endblock%}*/
/* */
