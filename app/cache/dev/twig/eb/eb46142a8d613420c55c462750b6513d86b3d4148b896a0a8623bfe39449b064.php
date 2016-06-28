<?php

/* LoginfirstBundle:Admin:EditarCliente.html.twig */
class __TwigTemplate_96489495ec1ca30316df8c7ba1a89d02dba45b8899d4ceea4e8df924d5876101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout_Admin.html.twig", "LoginfirstBundle:Admin:EditarCliente.html.twig", 2);
        $this->blocks = array(
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::layout_Admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ac7cf98956451869863439e217d1fac3883a6fa4d870a0cbd4656273b4351df = $this->env->getExtension("native_profiler");
        $__internal_6ac7cf98956451869863439e217d1fac3883a6fa4d870a0cbd4656273b4351df->enter($__internal_6ac7cf98956451869863439e217d1fac3883a6fa4d870a0cbd4656273b4351df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:EditarCliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ac7cf98956451869863439e217d1fac3883a6fa4d870a0cbd4656273b4351df->leave($__internal_6ac7cf98956451869863439e217d1fac3883a6fa4d870a0cbd4656273b4351df_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_437edaa1ece512f0b8f563a7e764f94ca482c171f56c190a07a973f25fdfd88b = $this->env->getExtension("native_profiler");
        $__internal_437edaa1ece512f0b8f563a7e764f94ca482c171f56c190a07a973f25fdfd88b->enter($__internal_437edaa1ece512f0b8f563a7e764f94ca482c171f56c190a07a973f25fdfd88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 4
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("ConsultaClientes");
        echo "\"><i class=\"fa fa-dashboard\"></i> Lista Empleados</a></li>
            <li class=\"active\">Editar Cliente</li>
        </ol>
    </section>
";
        
        $__internal_437edaa1ece512f0b8f563a7e764f94ca482c171f56c190a07a973f25fdfd88b->leave($__internal_437edaa1ece512f0b8f563a7e764f94ca482c171f56c190a07a973f25fdfd88b_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_35e2264cf66a677cf853675cca7af89711e612a533a80e9384c3263e2eca6f28 = $this->env->getExtension("native_profiler");
        $__internal_35e2264cf66a677cf853675cca7af89711e612a533a80e9384c3263e2eca6f28->enter($__internal_35e2264cf66a677cf853675cca7af89711e612a533a80e9384c3263e2eca6f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 12
        echo "    <section class=\"content\">
        <div class=\"row content\">
            <div class=\"col-xs-12\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Cliente"]) ? $context["Cliente"] : $this->getContext($context, "Cliente")));
        foreach ($context['_seq'] as $context["_key"] => $context["ClienteE"]) {
            echo " 
                    <form id=\"cliente\" method=\"Post\" class=\"form-horizontal\" action='";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GuardarEditCliente", array("idCU" => $this->getAttribute($context["ClienteE"], "id", array()))), "html", null, true);
            echo "'>
                        <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for='nombreC'>Nombre:</label>
                        <div class=\"input-group col-sm-3\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-pencil\"></i>
                            </div>
                            <input type=\"text\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["ClienteE"], "nombre", array()), "html", null, true);
            echo "\" id=\"nombreC\" name=\"nombreC\" class=\"form-control  input-sm\"/>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for='UsuarioC'>Usuario:</label>
                        <div class=\"input-group col-sm-3\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-pencil\"></i>
                            </div>
                            <input type=\"text\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["ClienteE"], "usuario", array()), "html", null, true);
            echo "\" id=\"UsuarioC\" name=\"UsuarioC\" class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"ruc\">Ruc:</label>
                        <div class=\"input-group col-sm-3\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-qrcode\"></i>
                            </div>
                            <input type=\"text\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["ClienteE"], "ruc", array()), "html", null, true);
            echo "\" id=\"ruc\" name=\"ruc\" class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"telefonoC\">Telefóno:</label>
                        <div class=\"input-group col-sm-2\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-phone\"></i>
                            </div>
                            <input type=\"text\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["ClienteE"], "telefono", array()), "html", null, true);
            echo "\" id=\"telefonoC\" name=\"telefonoC\" class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"direccionC\">Dirección:</label>
                        <div class=\"input-group col-sm-4\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-map-marker\"></i>
                            </div>
                            <input type=\"text\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["ClienteE"], "direccion", array()), "html", null, true);
            echo "\" id=\"direccionC\" name=\"direccionC\"  class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"mailC\">Correo Electrónico:</label>
                        <div class=\"input-group col-sm-3\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-envelope\"></i>
                            </div>
                            <input type=\"email\"  value=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["ClienteE"], "email", array()), "html", null, true);
            echo "\" id=\"mailC\" name=\"mailC\" class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"contactoC\">Contacto:</label>
                       <div class=\"input-group col-sm-3\">
                           <div class=\"input-group-addon\">
                               <i class=\"fa fa-user\"></i>
                           </div>
                           <input type=\"Text\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["ClienteE"], "contacto", array()), "html", null, true);
            echo "\" id=\"contactoC\" name=\"contactoC\" class=\"form-control  input-sm\"/>
                       </div>
                   </div>
               <hr>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"></label>
                            <div class=\"input-group col-sm-3\">
                                <button type=\"submit\" class=\"btn btn-primary\" >Guardar</button>
                            </div>
                        </div>
                    </form>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ClienteE'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                <div class=\"form-group\">
                </div>  
            </div><!-- /.box -->    
        </div>
    </section>
";
        
        $__internal_35e2264cf66a677cf853675cca7af89711e612a533a80e9384c3263e2eca6f28->leave($__internal_35e2264cf66a677cf853675cca7af89711e612a533a80e9384c3263e2eca6f28_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Admin:EditarCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 90,  157 => 78,  145 => 69,  133 => 60,  121 => 51,  109 => 42,  97 => 33,  84 => 23,  74 => 16,  68 => 15,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::layout_Admin.html.twig' %}*/
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('ConsultaClientes')}}"><i class="fa fa-dashboard"></i> Lista Empleados</a></li>*/
/*             <li class="active">Editar Cliente</li>*/
/*         </ol>*/
/*     </section>*/
/* {%endblock%}*/
/* {%block section3 %}*/
/*     <section class="content">*/
/*         <div class="row content">*/
/*             <div class="col-xs-12">*/
/*                 {% for ClienteE in Cliente %} */
/*                     <form id="cliente" method="Post" class="form-horizontal" action='{{ path('GuardarEditCliente',{'idCU': ClienteE.id}) }}'>*/
/*                         <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for='nombreC'>Nombre:</label>*/
/*                         <div class="input-group col-sm-3">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-pencil"></i>*/
/*                             </div>*/
/*                             <input type="text" value="{{ClienteE.nombre}}" id="nombreC" name="nombreC" class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for='UsuarioC'>Usuario:</label>*/
/*                         <div class="input-group col-sm-3">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-pencil"></i>*/
/*                             </div>*/
/*                             <input type="text" value="{{ClienteE.usuario}}" id="UsuarioC" name="UsuarioC" class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="ruc">Ruc:</label>*/
/*                         <div class="input-group col-sm-3">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-qrcode"></i>*/
/*                             </div>*/
/*                             <input type="text" value="{{ClienteE.ruc}}" id="ruc" name="ruc" class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="telefonoC">Telefóno:</label>*/
/*                         <div class="input-group col-sm-2">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-phone"></i>*/
/*                             </div>*/
/*                             <input type="text" value="{{ClienteE.telefono}}" id="telefonoC" name="telefonoC" class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="direccionC">Dirección:</label>*/
/*                         <div class="input-group col-sm-4">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-map-marker"></i>*/
/*                             </div>*/
/*                             <input type="text" value="{{ClienteE.direccion}}" id="direccionC" name="direccionC"  class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="mailC">Correo Electrónico:</label>*/
/*                         <div class="input-group col-sm-3">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-envelope"></i>*/
/*                             </div>*/
/*                             <input type="email"  value="{{ClienteE.email}}" id="mailC" name="mailC" class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="contactoC">Contacto:</label>*/
/*                        <div class="input-group col-sm-3">*/
/*                            <div class="input-group-addon">*/
/*                                <i class="fa fa-user"></i>*/
/*                            </div>*/
/*                            <input type="Text" value="{{ClienteE.contacto}}" id="contactoC" name="contactoC" class="form-control  input-sm"/>*/
/*                        </div>*/
/*                    </div>*/
/*                <hr>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label"></label>*/
/*                             <div class="input-group col-sm-3">*/
/*                                 <button type="submit" class="btn btn-primary" >Guardar</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 {%endfor%}*/
/*                 <div class="form-group">*/
/*                 </div>  */
/*             </div><!-- /.box -->    */
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
