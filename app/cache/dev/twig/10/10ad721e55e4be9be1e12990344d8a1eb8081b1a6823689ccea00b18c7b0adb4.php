<?php

/* LoginfirstBundle:Empleados:RegistroTiempos.html.twig */
class __TwigTemplate_4086e958fff68f539646060eef8b78a6ef21db8efc8015e0b778005a4a065d39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout_Empleado.html.twig", "LoginfirstBundle:Empleados:RegistroTiempos.html.twig", 2);
        $this->blocks = array(
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::layout_Empleado.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2638686ad3217e6210734d4538ee9d88303f1d85f9a1687b3c62f67f4f025e9 = $this->env->getExtension("native_profiler");
        $__internal_e2638686ad3217e6210734d4538ee9d88303f1d85f9a1687b3c62f67f4f025e9->enter($__internal_e2638686ad3217e6210734d4538ee9d88303f1d85f9a1687b3c62f67f4f025e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Empleados:RegistroTiempos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2638686ad3217e6210734d4538ee9d88303f1d85f9a1687b3c62f67f4f025e9->leave($__internal_e2638686ad3217e6210734d4538ee9d88303f1d85f9a1687b3c62f67f4f025e9_prof);

    }

    // line 4
    public function block_section2($context, array $blocks = array())
    {
        $__internal_1b00157679548acd6b7678b9a5e27f62addc1b97b814ccfe5c9aa6b465f8b221 = $this->env->getExtension("native_profiler");
        $__internal_1b00157679548acd6b7678b9a5e27f62addc1b97b814ccfe5c9aa6b465f8b221->enter($__internal_1b00157679548acd6b7678b9a5e27f62addc1b97b814ccfe5c9aa6b465f8b221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 5
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Cliente");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Registro tiempos</li>
        </ol>
    </section>
";
        
        $__internal_1b00157679548acd6b7678b9a5e27f62addc1b97b814ccfe5c9aa6b465f8b221->leave($__internal_1b00157679548acd6b7678b9a5e27f62addc1b97b814ccfe5c9aa6b465f8b221_prof);

    }

    // line 12
    public function block_section3($context, array $blocks = array())
    {
        $__internal_d1bfb2777fd13592737d349fddfc31140d967b30d6ad0da529c58ac3cf84eebf = $this->env->getExtension("native_profiler");
        $__internal_d1bfb2777fd13592737d349fddfc31140d967b30d6ad0da529c58ac3cf84eebf->enter($__internal_d1bfb2777fd13592737d349fddfc31140d967b30d6ad0da529c58ac3cf84eebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 13
        echo "    <section class=\"content\">

        <div class=\"col-xs-12\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "                <strong class=\"alert-success\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " Exitosamente!!!!</strong> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            <form id=\"Re\">                                                                               
                <div class=\"panel panel-primary\">
                    <div id=\"PathGuardarHojasT\" data-path=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("GuardarHojasT");
        echo "\"></div>  
                    <div class=\"panel-heading\">
                        <div class='row'>
                            <div class='col-xs-6 '><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> Registrar Tiempos</div>
                            <div class='col-xs-6 text-right'>
                            <button id=\"GuardarT\" class=\"btn btn-success\"><i class=\"fa fa-floppy-o fa-1x\" aria-hidden=\"true\"></i> Guardar</button>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div id=\"PathRegistroT\" data-path=\"";
        // line 31
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientesReq"]) ? $context["clientesReq"] : $this->getContext($context, "clientesReq")));
        foreach ($context['_seq'] as $context["_key"] => $context["Clientes"]) {
            echo "                                              
                                    <option value='";
            // line 43
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
        // line 45
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
                    </div>

                    <br>
                    
                    <br>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
</section><!-- /.content -->
";
        
        $__internal_d1bfb2777fd13592737d349fddfc31140d967b30d6ad0da529c58ac3cf84eebf->leave($__internal_d1bfb2777fd13592737d349fddfc31140d967b30d6ad0da529c58ac3cf84eebf_prof);

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
        return array (  130 => 45,  118 => 43,  112 => 42,  98 => 31,  85 => 21,  81 => 19,  72 => 17,  68 => 16,  63 => 13,  57 => 12,  45 => 7,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::layout_Empleado.html.twig' %}*/
/* */
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Cliente')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Registro tiempos</li>*/
/*         </ol>*/
/*     </section>*/
/* {%endblock%}*/
/* {%block section3 %}*/
/*     <section class="content">*/
/* */
/*         <div class="col-xs-12">*/
/*             {% for flashMessage in app.session.flashbag.get('mensaje')%}*/
/*                 <strong class="alert-success">{{ flashMessage }} Exitosamente!!!!</strong> */
/*             {% endfor%}*/
/*             <form id="Re">                                                                               */
/*                 <div class="panel panel-primary">*/
/*                     <div id="PathGuardarHojasT" data-path="{{path('GuardarHojasT')}}"></div>  */
/*                     <div class="panel-heading">*/
/*                         <div class='row'>*/
/*                             <div class='col-xs-6 '><i class="fa fa-bars" aria-hidden="true"></i> Registrar Tiempos</div>*/
/*                             <div class='col-xs-6 text-right'>*/
/*                             <button id="GuardarT" class="btn btn-success"><i class="fa fa-floppy-o fa-1x" aria-hidden="true"></i> Guardar</button>*/
/*                             </div>*/
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
/*                     </div>*/
/* */
/*                     <br>*/
/*                     */
/*                     <br>*/
/*                 </div>*/
/*             </form>*/
/*         </div><!-- /.box -->*/
/*     </div>*/
/* </section><!-- /.content -->*/
/* {% endblock %}*/
/* */
/* */
/*   {#          <label class="col-sm-2 control-label" >  <div class="col-xs-12 text-center"><div class="loading"></div>*/
/*                         </div></label>                */
/*                     <div class="input-group col-sm-5">*/
/*                         */
/*                         <div class="table-responsive">*/
/*   <table class="table table-bordered">*/
/*     <thead class="bg-success text-center">*/
/*                                */
/*                                     <th>Requerimiento</th>*/
/*                                     <th>Detalle</th>*/
/*                                     <th>Ingresar Tiempo</th>*/
/*                               */
/*                             </thead>*/
/*                             <tbody id="req" class="control-group">*/
/*                                 */
/*                             </tbody>*/
/*   </table>*/
/*                             */
/* </div>*/
/*             #}          */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
