<?php

/* LoginfirstBundle:Clientes:CambiarClave.html.twig */
class __TwigTemplate_7f92302d8f18abea0585057c240f31b8943294c55cb50f8326e0b8a479b70f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout_Cliente.html.twig", "LoginfirstBundle:Clientes:CambiarClave.html.twig", 2);
        $this->blocks = array(
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::layout_Cliente.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f48ab3a6b3a462da4b07f3aed0527c746cac953d1db6d23fe6ad2de67945f47e = $this->env->getExtension("native_profiler");
        $__internal_f48ab3a6b3a462da4b07f3aed0527c746cac953d1db6d23fe6ad2de67945f47e->enter($__internal_f48ab3a6b3a462da4b07f3aed0527c746cac953d1db6d23fe6ad2de67945f47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Clientes:CambiarClave.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f48ab3a6b3a462da4b07f3aed0527c746cac953d1db6d23fe6ad2de67945f47e->leave($__internal_f48ab3a6b3a462da4b07f3aed0527c746cac953d1db6d23fe6ad2de67945f47e_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_7b132154803967e97d9d0f302bd497188544a58ebdee10f6cd3533d00b25bce9 = $this->env->getExtension("native_profiler");
        $__internal_7b132154803967e97d9d0f302bd497188544a58ebdee10f6cd3533d00b25bce9->enter($__internal_7b132154803967e97d9d0f302bd497188544a58ebdee10f6cd3533d00b25bce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 4
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Cliente");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Actualizar Clave</li>
        </ol>
    </section>
";
        
        $__internal_7b132154803967e97d9d0f302bd497188544a58ebdee10f6cd3533d00b25bce9->leave($__internal_7b132154803967e97d9d0f302bd497188544a58ebdee10f6cd3533d00b25bce9_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_9f501c6446f510b4b0a67eae6cee6a6a2bbb0fbd30d06058c2b03d4851f5779d = $this->env->getExtension("native_profiler");
        $__internal_9f501c6446f510b4b0a67eae6cee6a6a2bbb0fbd30d06058c2b03d4851f5779d->enter($__internal_9f501c6446f510b4b0a67eae6cee6a6a2bbb0fbd30d06058c2b03d4851f5779d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 12
        echo "     <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                
                <form id=\"ActualizaClaveCliente\"class=\"form-horizontal\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["Clientes"]) ? $context["Clientes"] : $this->getContext($context, "Clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cli"]) {
            // line 25
            echo "                     
                            <div id=\"CambiaCClave\" data-path=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("CambiarClaveCliente");
            echo "\"></div>  
                            <div id=\"idCliente\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "id", array()), "html", null, true);
            echo "\"></div>       
                            <div class=\"panel-body\">
                                <div class='row'>
                                    <div class='col-xs-3 col-sm-3 text-right'>
                                        <strong>Nombre Empresa:</strong>
                                    </div>
                                    <div class='col-xs-10 col-sm-6 text-left'>
                                        <div class=\"text-uppercase\">                                            
                                             ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "Nombre", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "Ruc", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cli'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "            </div>
        </div>
    </div>
</section>
";
        
        $__internal_9f501c6446f510b4b0a67eae6cee6a6a2bbb0fbd30d06058c2b03d4851f5779d->leave($__internal_9f501c6446f510b4b0a67eae6cee6a6a2bbb0fbd30d06058c2b03d4851f5779d_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Clientes:CambiarClave.html.twig";
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
/* {% extends 'LoginfirstBundle::layout_Cliente.html.twig' %}*/
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Cliente')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Actualizar Clave</li>*/
/*         </ol>*/
/*     </section>*/
/* {%endblock%}*/
/* {%block section3 %}*/
/*      <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 */
/*                 <form id="ActualizaClaveCliente"class="form-horizontal">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <div class='row'>*/
/*                             <div class='col-xs-12 '><h5>Actualizar Clave</h5></div>                          */
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     {% for cli in Clientes %}*/
/*                      */
/*                             <div id="CambiaCClave" data-path="{{path('CambiarClaveCliente')}}"></div>  */
/*                             <div id="idCliente" value="{{cli.id}}"></div>       */
/*                             <div class="panel-body">*/
/*                                 <div class='row'>*/
/*                                     <div class='col-xs-3 col-sm-3 text-right'>*/
/*                                         <strong>Nombre Empresa:</strong>*/
/*                                     </div>*/
/*                                     <div class='col-xs-10 col-sm-6 text-left'>*/
/*                                         <div class="text-uppercase">                                            */
/*                                              {{ cli.Nombre }}<br><br>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class='row'>                                   */
/*                                     <div class='col-xs-3 col-sm-3 text-right'>*/
/*                                         <strong>Usuario:</strong>*/
/*                                     </div>*/
/*                                     <div class='col-xs-10 col-sm-6 text-left'>*/
/*                                         <div class="text-uppercase">                                            */
/*                                          {{ cli.Ruc }} <br><br>*/
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
