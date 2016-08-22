<?php

/* LoginfirstBundle:Empleados:CambiarClave.html.twig */
class __TwigTemplate_3e2d24ae229d2a293a0123614aa0ce4becb789e3768a5e1300344ea8132c170a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Empleado.html.twig", "LoginfirstBundle:Empleados:CambiarClave.html.twig", 2);
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
        $__internal_129a55e77716afbd1b5ef427a958ff0fdc75a8a2874a7f6536469bdcfabf2289 = $this->env->getExtension("native_profiler");
        $__internal_129a55e77716afbd1b5ef427a958ff0fdc75a8a2874a7f6536469bdcfabf2289->enter($__internal_129a55e77716afbd1b5ef427a958ff0fdc75a8a2874a7f6536469bdcfabf2289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Empleados:CambiarClave.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_129a55e77716afbd1b5ef427a958ff0fdc75a8a2874a7f6536469bdcfabf2289->leave($__internal_129a55e77716afbd1b5ef427a958ff0fdc75a8a2874a7f6536469bdcfabf2289_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_0a3a468ad7e78a2ace328de3ebe7df16a8f826d42c427e3d5b647812d6e268e9 = $this->env->getExtension("native_profiler");
        $__internal_0a3a468ad7e78a2ace328de3ebe7df16a8f826d42c427e3d5b647812d6e268e9->enter($__internal_0a3a468ad7e78a2ace328de3ebe7df16a8f826d42c427e3d5b647812d6e268e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 4
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Empleado");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Actualizar Clave</li>
        </ol>
    </section>
";
        
        $__internal_0a3a468ad7e78a2ace328de3ebe7df16a8f826d42c427e3d5b647812d6e268e9->leave($__internal_0a3a468ad7e78a2ace328de3ebe7df16a8f826d42c427e3d5b647812d6e268e9_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_16a680d1780de1bac4c3713cd04f1d01479068c28cb8082b1f1389e9bf9e87fa = $this->env->getExtension("native_profiler");
        $__internal_16a680d1780de1bac4c3713cd04f1d01479068c28cb8082b1f1389e9bf9e87fa->enter($__internal_16a680d1780de1bac4c3713cd04f1d01479068c28cb8082b1f1389e9bf9e87fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 12
        echo "     <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                
                <form id=\"ActualizaClaveEmpleado\"class=\"form-horizontal\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class='row'>
                            <div class='col-xs-12 '><h5>Actualizar Clave</h5></div>                          
                        </div>
                        <hr>
                    </div>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Empleados"]) ? $context["Empleados"] : $this->getContext($context, "Empleados")));
        foreach ($context['_seq'] as $context["_key"] => $context["Empleado"]) {
            // line 25
            echo "                     
                            <div id=\"CambiaEClave\" data-path=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("CambiarClaveEmpleado");
            echo "\"></div>  
                            <div id=\"idEmpleado\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["Empleado"], "id", array()), "html", null, true);
            echo "\"></div>       
                            <div class=\"panel-body\">
                                <div class='row'>
                                    <div class='col-xs-3 col-sm-3 text-right'>
                                        <strong>Nombre Empleado:</strong>
                                    </div>
                                    <div class='col-xs-10 col-sm-6 text-left'>
                                        <div class=\"text-uppercase\">                                            
                                             ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["Empleado"], "Nombre", array()), "html", null, true);
            echo "<br><br>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>                                   
                                    <div class='col-xs-3 col-sm-3 text-right'>
                                        <strong>Usuario:</strong>
                                    </div>
                                    <div class='col-xs-10 col-sm-6 text-left'>
                                        <div class=\"text-uppercase\">                                            
                                         ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["Empleado"], "cidentidad", array()), "html", null, true);
            echo " <br><br>
                                        </div>
                                    </div>
                                </div>
                                          <div class='row'>                                              
                                              <div class='col-xs-3 col-sm-3 text-right'>
                                                  <strong>Clave Anterior:</strong>
                                              </div>
                                              <div class='col-xs-10 col-sm-2 text-left'>                                
                                                  <input type=\"password\" id=\"ClaveA\" name=\"ClaveA\" class=\"form-control  input-sm\"/>                                                                                             
                                              </div>
                                              <div id=\"error\" class=\" col-xs-10 col-sm-2 alert-danger\" style=\"display: none;\"> <strong>Error!! Clave Incorrecta </strong></div>
                                            
                                          </div>  <br>
                                             <div class='row'>                                              
                                              <div class='col-xs-3 col-sm-3 text-right'>
                                                  <strong>Clave Nueva:</strong>
                                              </div>
                                              <div class='col-xs-10 col-sm-2 text-left'>                                
                                                  <input type=\"password\" id=\"ClaveN\" name=\"ClaveN\" class=\"form-control  input-sm\"/>                                                                                             
                                              </div>
                                             
                                             </div><br>
                                          <div class='row'>                                              
                                              <div class='col-xs-3 col-sm-3 text-right'>
                                                  <strong>Confirmar Clave Nueva:</strong>
                                              </div>
                                              <div class='col-xs-10 col-sm-2 text-left'>                                
                                                  <input type=\"password\" id=\"ClaveCN\" name=\"ClaveCN\" class=\"form-control  input-sm\"/>                                                                                             
                                              </div>
                                              
                                          </div>
                                        <br>
                                                                 
                            </div>
                            <div class=\"panel-footer\">
                                <div class='row'>
                                    <div class='col-xs-2 col-sm-4 text-right'>
                                       <button class=\"btn btn-success btn-sm\" id=\"btn-GuardarClave\">Guardar</button>                                     
                                    </div>
                                    <div class='col-xs-10 col-sm-3 text-left'>
                                        <div id=\"success\" class=\" col-xm-3 alert-success\"  style=\"display: none;\"> <strong>Exitosamente !! Datos Actualizados</strong></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Empleado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "            </div>
        </div>
    </div>
</section>
";
        
        $__internal_16a680d1780de1bac4c3713cd04f1d01479068c28cb8082b1f1389e9bf9e87fa->leave($__internal_16a680d1780de1bac4c3713cd04f1d01479068c28cb8082b1f1389e9bf9e87fa_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Empleados:CambiarClave.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 93,  112 => 45,  99 => 35,  88 => 27,  84 => 26,  81 => 25,  77 => 24,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Empleado.html.twig' %}*/
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Empleado')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Actualizar Clave</li>*/
/*         </ol>*/
/*     </section>*/
/* {%endblock%}*/
/* {%block section3 %}*/
/*      <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 */
/*                 <form id="ActualizaClaveEmpleado"class="form-horizontal">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <div class='row'>*/
/*                             <div class='col-xs-12 '><h5>Actualizar Clave</h5></div>                          */
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     {% for Empleado in Empleados %}*/
/*                      */
/*                             <div id="CambiaEClave" data-path="{{path('CambiarClaveEmpleado')}}"></div>  */
/*                             <div id="idEmpleado" value="{{Empleado.id}}"></div>       */
/*                             <div class="panel-body">*/
/*                                 <div class='row'>*/
/*                                     <div class='col-xs-3 col-sm-3 text-right'>*/
/*                                         <strong>Nombre Empleado:</strong>*/
/*                                     </div>*/
/*                                     <div class='col-xs-10 col-sm-6 text-left'>*/
/*                                         <div class="text-uppercase">                                            */
/*                                              {{ Empleado.Nombre }}<br><br>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class='row'>                                   */
/*                                     <div class='col-xs-3 col-sm-3 text-right'>*/
/*                                         <strong>Usuario:</strong>*/
/*                                     </div>*/
/*                                     <div class='col-xs-10 col-sm-6 text-left'>*/
/*                                         <div class="text-uppercase">                                            */
/*                                          {{ Empleado.cidentidad }} <br><br>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                           <div class='row'>                                              */
/*                                               <div class='col-xs-3 col-sm-3 text-right'>*/
/*                                                   <strong>Clave Anterior:</strong>*/
/*                                               </div>*/
/*                                               <div class='col-xs-10 col-sm-2 text-left'>                                */
/*                                                   <input type="password" id="ClaveA" name="ClaveA" class="form-control  input-sm"/>                                                                                             */
/*                                               </div>*/
/*                                               <div id="error" class=" col-xs-10 col-sm-2 alert-danger" style="display: none;"> <strong>Error!! Clave Incorrecta </strong></div>*/
/*                                             */
/*                                           </div>  <br>*/
/*                                              <div class='row'>                                              */
/*                                               <div class='col-xs-3 col-sm-3 text-right'>*/
/*                                                   <strong>Clave Nueva:</strong>*/
/*                                               </div>*/
/*                                               <div class='col-xs-10 col-sm-2 text-left'>                                */
/*                                                   <input type="password" id="ClaveN" name="ClaveN" class="form-control  input-sm"/>                                                                                             */
/*                                               </div>*/
/*                                              */
/*                                              </div><br>*/
/*                                           <div class='row'>                                              */
/*                                               <div class='col-xs-3 col-sm-3 text-right'>*/
/*                                                   <strong>Confirmar Clave Nueva:</strong>*/
/*                                               </div>*/
/*                                               <div class='col-xs-10 col-sm-2 text-left'>                                */
/*                                                   <input type="password" id="ClaveCN" name="ClaveCN" class="form-control  input-sm"/>                                                                                             */
/*                                               </div>*/
/*                                               */
/*                                           </div>*/
/*                                         <br>*/
/*                                                                  */
/*                             </div>*/
/*                             <div class="panel-footer">*/
/*                                 <div class='row'>*/
/*                                     <div class='col-xs-2 col-sm-4 text-right'>*/
/*                                        <button class="btn btn-success btn-sm" id="btn-GuardarClave">Guardar</button>                                     */
/*                                     </div>*/
/*                                     <div class='col-xs-10 col-sm-3 text-left'>*/
/*                                         <div id="success" class=" col-xm-3 alert-success"  style="display: none;"> <strong>Exitosamente !! Datos Actualizados</strong></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     </form>*/
/*                 {% endfor%}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
