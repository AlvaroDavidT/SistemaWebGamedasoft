<?php

/* LoginfirstBundle:Admin:CambiarClaveAdmin.html.twig */
class __TwigTemplate_d740efa65e07bfa02f2983575034e437308dc8780e3b9c9519ced0c4f7e5e49a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Admin.html.twig", "LoginfirstBundle:Admin:CambiarClaveAdmin.html.twig", 2);
        $this->blocks = array(
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::Layout_Admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b26342b1773dc72cdaed61d6b9a1cbd361bca64ed6979394f53c50d8d5ab263 = $this->env->getExtension("native_profiler");
        $__internal_8b26342b1773dc72cdaed61d6b9a1cbd361bca64ed6979394f53c50d8d5ab263->enter($__internal_8b26342b1773dc72cdaed61d6b9a1cbd361bca64ed6979394f53c50d8d5ab263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:CambiarClaveAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b26342b1773dc72cdaed61d6b9a1cbd361bca64ed6979394f53c50d8d5ab263->leave($__internal_8b26342b1773dc72cdaed61d6b9a1cbd361bca64ed6979394f53c50d8d5ab263_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_155f54de2ea0673e27eac4336bd9cc3bb61850f3906da0a1f18c26c5bb7014d1 = $this->env->getExtension("native_profiler");
        $__internal_155f54de2ea0673e27eac4336bd9cc3bb61850f3906da0a1f18c26c5bb7014d1->enter($__internal_155f54de2ea0673e27eac4336bd9cc3bb61850f3906da0a1f18c26c5bb7014d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 4
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Actualizar Clave</li>
        </ol>
    </section>
";
        
        $__internal_155f54de2ea0673e27eac4336bd9cc3bb61850f3906da0a1f18c26c5bb7014d1->leave($__internal_155f54de2ea0673e27eac4336bd9cc3bb61850f3906da0a1f18c26c5bb7014d1_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_784a0ee602ae49682c07e939e94550683228117cd588a0c6d936a06d155aad2a = $this->env->getExtension("native_profiler");
        $__internal_784a0ee602ae49682c07e939e94550683228117cd588a0c6d936a06d155aad2a->enter($__internal_784a0ee602ae49682c07e939e94550683228117cd588a0c6d936a06d155aad2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 12
        echo "    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "                    <strong class=\"alert-success\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " Exitosamente!!!!</strong> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                   <form id=\"ActualizaCAdmin\"class=\"form-horizontal\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class='row'>
                            <div class='col-xs-12 '><h5>Actualizar Clave</h5></div>
                           
                        </div>
                        <hr>
                    </div>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Administradores"]) ? $context["Administradores"] : $this->getContext($context, "Administradores")));
        foreach ($context['_seq'] as $context["_key"] => $context["Admin"]) {
            // line 28
            echo "                     
                            <div id=\"CambiaClave\" data-path=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("ActualizaClaveAdmin");
            echo "\"></div>  
                            <div id=\"idAdmin\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["Admin"], "id", array()), "html", null, true);
            echo "\"></div>       
                            <div class=\"panel-body\">
                                <div class='row'>
                                    <div class='col-xs-3 col-sm-3 text-right'>
                                        <strong>Nombre:</strong>
                                    </div>
                                    <div class='col-xs-10 col-sm-6 text-left'>
                                        <div class=\"text-uppercase\">                                            
                                            ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["Admin"], "Nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Admin"], "Apellido", array()), "html", null, true);
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
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["Admin"], "Cidentidad", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "            </div>
        </div>
    </div>
</section>
";
        
        $__internal_784a0ee602ae49682c07e939e94550683228117cd588a0c6d936a06d155aad2a->leave($__internal_784a0ee602ae49682c07e939e94550683228117cd588a0c6d936a06d155aad2a_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Admin:CambiarClaveAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 96,  129 => 48,  114 => 38,  103 => 30,  99 => 29,  96 => 28,  92 => 27,  81 => 18,  72 => 16,  68 => 15,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Admin.html.twig' %}*/
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Admin')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Actualizar Clave</li>*/
/*         </ol>*/
/*     </section>*/
/* {%endblock%}*/
/* {%block section3 %}*/
/*     <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 {% for flashMessage in app.session.flashbag.get('mensaje')%}*/
/*                     <strong class="alert-success">{{ flashMessage }} Exitosamente!!!!</strong> */
/*                 {% endfor%}*/
/*                    <form id="ActualizaCAdmin"class="form-horizontal">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <div class='row'>*/
/*                             <div class='col-xs-12 '><h5>Actualizar Clave</h5></div>*/
/*                            */
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     {% for Admin in Administradores %}*/
/*                      */
/*                             <div id="CambiaClave" data-path="{{path('ActualizaClaveAdmin')}}"></div>  */
/*                             <div id="idAdmin" value="{{Admin.id}}"></div>       */
/*                             <div class="panel-body">*/
/*                                 <div class='row'>*/
/*                                     <div class='col-xs-3 col-sm-3 text-right'>*/
/*                                         <strong>Nombre:</strong>*/
/*                                     </div>*/
/*                                     <div class='col-xs-10 col-sm-6 text-left'>*/
/*                                         <div class="text-uppercase">                                            */
/*                                             {{ Admin.Nombre }} {{ Admin.Apellido }}<br><br>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class='row'>                                   */
/*                                     <div class='col-xs-3 col-sm-3 text-right'>*/
/*                                         <strong>Usuario:</strong>*/
/*                                     </div>*/
/*                                     <div class='col-xs-10 col-sm-6 text-left'>*/
/*                                         <div class="text-uppercase">                                            */
/*                                           {{ Admin.Cidentidad }} <br><br>*/
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
/* */
/* */
/* */
/* */
/* */
