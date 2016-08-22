<?php

/* LoginfirstBundle:Empleados:RegistroTiempos.html.twig */
class __TwigTemplate_1fdda18619346f22c2382efee87f602acf86ce97a266c7a980c757a7d6648531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Empleado.html.twig", "LoginfirstBundle:Empleados:RegistroTiempos.html.twig", 2);
        $this->blocks = array(
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::Layout_Empleado.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_141ce044176043559b692a12d2654c012dfaf868a8849240aa7d553596376cd1 = $this->env->getExtension("native_profiler");
        $__internal_141ce044176043559b692a12d2654c012dfaf868a8849240aa7d553596376cd1->enter($__internal_141ce044176043559b692a12d2654c012dfaf868a8849240aa7d553596376cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Empleados:RegistroTiempos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_141ce044176043559b692a12d2654c012dfaf868a8849240aa7d553596376cd1->leave($__internal_141ce044176043559b692a12d2654c012dfaf868a8849240aa7d553596376cd1_prof);

    }

    // line 4
    public function block_section2($context, array $blocks = array())
    {
        $__internal_16c2f5cdb53fe032d1991fd7eb14ac4ed6e57dfeb836dc2a499d99ba54b2deee = $this->env->getExtension("native_profiler");
        $__internal_16c2f5cdb53fe032d1991fd7eb14ac4ed6e57dfeb836dc2a499d99ba54b2deee->enter($__internal_16c2f5cdb53fe032d1991fd7eb14ac4ed6e57dfeb836dc2a499d99ba54b2deee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 5
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Empleado");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Registro tiempos</li>
        </ol>
    </section>
";
        
        $__internal_16c2f5cdb53fe032d1991fd7eb14ac4ed6e57dfeb836dc2a499d99ba54b2deee->leave($__internal_16c2f5cdb53fe032d1991fd7eb14ac4ed6e57dfeb836dc2a499d99ba54b2deee_prof);

    }

    // line 12
    public function block_section3($context, array $blocks = array())
    {
        $__internal_a751d4aa7456db0210a1f6630202d04902fa670809da026ac22bc9a53f8065df = $this->env->getExtension("native_profiler");
        $__internal_a751d4aa7456db0210a1f6630202d04902fa670809da026ac22bc9a53f8065df->enter($__internal_a751d4aa7456db0210a1f6630202d04902fa670809da026ac22bc9a53f8065df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 13
        echo "    <section class=\"content\">

        <div class=\"col-xs-12\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "                 <div class=\"alert alert-success\"><strong><center>";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " Exitosamente!!!!</center></strong></div>
                 
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            <form id=\"RegistroTiemposE\" method=\"Post\" class=\"form-horizontal\" action='";
        echo $this->env->getExtension('routing')->getPath("GuardarHojasT");
        echo "'>                                                                         
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class='row'>
                            <div class='col-xs-6 '><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> Registrar Tiempos</div>
                            <div class='col-xs-6 text-right'>
                             </div>
                        </div>
                        <hr>
                    </div>
                    <div id=\"PathRegistroT\" data-path=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("RegistroT");
        echo "\"></div>  
                    
                    <div class=\"panel-body text-center\">
                        <label class=\"col-sm-3 control-label\" for=\"Modulo\">Seleccione la Empresa:</label>
                        <div class=\"input-group col-sm-5\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                            </div>

                            <select class=\"form-control input-sm\" name='RegistroReq' id='RegistroReq'>
                                <option value=''selected>Seleccione Empresa</option>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientesReq"]) ? $context["clientesReq"] : $this->getContext($context, "clientesReq")));
        foreach ($context['_seq'] as $context["_key"] => $context["Clientes"]) {
            echo "                                              
                                    <option value='";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "codigo", array()), "html", null, true);
            echo "' name='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Nombre", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Nombre", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Clientes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                            </select>
                        </div>
                        <br>
                        <div class=\"col-xs-12 text-center\"><div class=\"loading\"></div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"Req\">Seleccionar el requerimiento:</label>
                            <div class=\"input-group col-sm-5\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-bars\"></i>
                                </div>
                                <select class=\"form-control input-sm\" name='Requerimiento' id='Requerimiento'>
                                    <option value=''selected>Seleccione Requerimiento</option>
                                </select>
                            </div>  
                        </div> 
                        <br>
                        <hr>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"Req\">Ingrese el Tiempo:</label>
                            <div class=\"input-group\">

                                <input type=\"text\" name=\"time\" id=\"time\" placeholder=\"Tiempo\">
                            </div>  
                        </div> 
                     
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"Req\">Ingrese la actividad:</label>
                            <div class=\"input-group col-sm-5\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-bars\"></i>
                                </div>
                                <input class=\"form-control\" name=\"actividad\" id=\"actividad\">
                               
                            </div>  
                        </div> 
                         <div class='col-xs-4 text-left'>
                        <div id=\"success\" class=\" col-xm-5 alert alert-success\"  style=\"display: none;\"> <strong>Datos Guardados Exitosamente !!</strong> </div>
                    </div>
                    </div><div class=\"text-center\">
  <button type=\"submit\" class=\"btn btn-success btn-xs\" id=\"btn-envia\"><span class=\"fa fa-check-circle\"></span> Guardar</button>
                    </div>
                    <br>
                    
                    <br>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
</section><!-- /.content -->
";
        
        $__internal_a751d4aa7456db0210a1f6630202d04902fa670809da026ac22bc9a53f8065df->leave($__internal_a751d4aa7456db0210a1f6630202d04902fa670809da026ac22bc9a53f8065df_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Empleados:RegistroTiempos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 44,  116 => 42,  110 => 41,  96 => 30,  82 => 20,  72 => 17,  68 => 16,  63 => 13,  57 => 12,  45 => 7,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Empleado.html.twig' %}*/
/* */
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Empleado')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Registro tiempos</li>*/
/*         </ol>*/
/*     </section>*/
/* {%endblock%}*/
/* {%block section3 %}*/
/*     <section class="content">*/
/* */
/*         <div class="col-xs-12">*/
/*             {% for flashMessage in app.session.flashbag.get('mensaje')%}*/
/*                  <div class="alert alert-success"><strong><center>{{ flashMessage }} Exitosamente!!!!</center></strong></div>*/
/*                  */
/*              {% endfor%}*/
/*             <form id="RegistroTiemposE" method="Post" class="form-horizontal" action='{{ path('GuardarHojasT') }}'>                                                                         */
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <div class='row'>*/
/*                             <div class='col-xs-6 '><i class="fa fa-bars" aria-hidden="true"></i> Registrar Tiempos</div>*/
/*                             <div class='col-xs-6 text-right'>*/
/*                              </div>*/
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     <div id="PathRegistroT" data-path="{{path('RegistroT')}}"></div>  */
/*                     */
/*                     <div class="panel-body text-center">*/
/*                         <label class="col-sm-3 control-label" for="Modulo">Seleccione la Empresa:</label>*/
/*                         <div class="input-group col-sm-5">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-users" aria-hidden="true"></i>*/
/*                             </div>*/
/* */
/*                             <select class="form-control input-sm" name='RegistroReq' id='RegistroReq'>*/
/*                                 <option value=''selected>Seleccione Empresa</option>*/
/*                                 {% for Clientes in clientesReq %}                                              */
/*                                     <option value='{{Clientes.codigo }}' name='{{Clientes.Nombre }}'>{{Clientes.Nombre }}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                         <br>*/
/*                         <div class="col-xs-12 text-center"><div class="loading"></div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-3 control-label" for="Req">Seleccionar el requerimiento:</label>*/
/*                             <div class="input-group col-sm-5">*/
/*                                 <div class="input-group-addon">*/
/*                                     <i class="fa fa-bars"></i>*/
/*                                 </div>*/
/*                                 <select class="form-control input-sm" name='Requerimiento' id='Requerimiento'>*/
/*                                     <option value=''selected>Seleccione Requerimiento</option>*/
/*                                 </select>*/
/*                             </div>  */
/*                         </div> */
/*                         <br>*/
/*                         <hr>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-3 control-label" for="Req">Ingrese el Tiempo:</label>*/
/*                             <div class="input-group">*/
/* */
/*                                 <input type="text" name="time" id="time" placeholder="Tiempo">*/
/*                             </div>  */
/*                         </div> */
/*                      */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-3 control-label" for="Req">Ingrese la actividad:</label>*/
/*                             <div class="input-group col-sm-5">*/
/*                                 <div class="input-group-addon">*/
/*                                     <i class="fa fa-bars"></i>*/
/*                                 </div>*/
/*                                 <input class="form-control" name="actividad" id="actividad">*/
/*                                */
/*                             </div>  */
/*                         </div> */
/*                          <div class='col-xs-4 text-left'>*/
/*                         <div id="success" class=" col-xm-5 alert alert-success"  style="display: none;"> <strong>Datos Guardados Exitosamente !!</strong> </div>*/
/*                     </div>*/
/*                     </div><div class="text-center">*/
/*   <button type="submit" class="btn btn-success btn-xs" id="btn-envia"><span class="fa fa-check-circle"></span> Guardar</button>*/
/*                     </div>*/
/*                     <br>*/
/*                     */
/*                     <br>*/
/*                 </div>*/
/*             </form>*/
/*         </div><!-- /.box -->*/
/*     </div>*/
/* </section><!-- /.content -->*/
/* {% endblock %}*/
