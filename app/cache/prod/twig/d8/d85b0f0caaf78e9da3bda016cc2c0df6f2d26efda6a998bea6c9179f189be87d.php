<?php

/* LoginfirstBundle:Clientes:CambiarClave.html.twig */
class __TwigTemplate_851b276d14b17e8a635058208e9b167cdd657a7b3ed6bbc1171f6b62135a66dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Cliente.html.twig", "LoginfirstBundle:Clientes:CambiarClave.html.twig", 2);
        $this->blocks = array(
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::Layout_Cliente.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3151676e5daedfb74bbb3d3581f6993a94e16598cc7987386c506242cad7e779 = $this->env->getExtension("native_profiler");
        $__internal_3151676e5daedfb74bbb3d3581f6993a94e16598cc7987386c506242cad7e779->enter($__internal_3151676e5daedfb74bbb3d3581f6993a94e16598cc7987386c506242cad7e779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Clientes:CambiarClave.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3151676e5daedfb74bbb3d3581f6993a94e16598cc7987386c506242cad7e779->leave($__internal_3151676e5daedfb74bbb3d3581f6993a94e16598cc7987386c506242cad7e779_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_682d25851ca9f4be643843d0eae6319df7947e284eab868a6a443127f561675b = $this->env->getExtension("native_profiler");
        $__internal_682d25851ca9f4be643843d0eae6319df7947e284eab868a6a443127f561675b->enter($__internal_682d25851ca9f4be643843d0eae6319df7947e284eab868a6a443127f561675b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

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
        
        $__internal_682d25851ca9f4be643843d0eae6319df7947e284eab868a6a443127f561675b->leave($__internal_682d25851ca9f4be643843d0eae6319df7947e284eab868a6a443127f561675b_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_d8300eddd94a3832737d69a548ecc60bc1b5e0148675a85a9ecab5ac8b235ecc = $this->env->getExtension("native_profiler");
        $__internal_d8300eddd94a3832737d69a548ecc60bc1b5e0148675a85a9ecab5ac8b235ecc->enter($__internal_d8300eddd94a3832737d69a548ecc60bc1b5e0148675a85a9ecab5ac8b235ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        
        $__internal_d8300eddd94a3832737d69a548ecc60bc1b5e0148675a85a9ecab5ac8b235ecc->leave($__internal_d8300eddd94a3832737d69a548ecc60bc1b5e0148675a85a9ecab5ac8b235ecc_prof);

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
/* {% extends 'LoginfirstBundle::Layout_Cliente.html.twig' %}*/
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
