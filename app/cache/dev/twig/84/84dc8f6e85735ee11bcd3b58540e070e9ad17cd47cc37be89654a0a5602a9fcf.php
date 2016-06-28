<?php

/* LoginfirstBundle:Empleados:UpdateEmpleado.html.twig */
class __TwigTemplate_454b7a5a4f80bed54a2858b99658e7c30e0941c569dcb95e4d8a00140d4f5d15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout_Empleado.html.twig", "LoginfirstBundle:Empleados:UpdateEmpleado.html.twig", 2);
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
        $__internal_493494e57da70e791ceb403561341ae4dafefc2b4364b4ea18f989d57f17f1c7 = $this->env->getExtension("native_profiler");
        $__internal_493494e57da70e791ceb403561341ae4dafefc2b4364b4ea18f989d57f17f1c7->enter($__internal_493494e57da70e791ceb403561341ae4dafefc2b4364b4ea18f989d57f17f1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Empleados:UpdateEmpleado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_493494e57da70e791ceb403561341ae4dafefc2b4364b4ea18f989d57f17f1c7->leave($__internal_493494e57da70e791ceb403561341ae4dafefc2b4364b4ea18f989d57f17f1c7_prof);

    }

    // line 4
    public function block_section2($context, array $blocks = array())
    {
        $__internal_f42f4b072254381a5edb253656593cc13229b25f084ab0583da01e409a0cc999 = $this->env->getExtension("native_profiler");
        $__internal_f42f4b072254381a5edb253656593cc13229b25f084ab0583da01e409a0cc999->enter($__internal_f42f4b072254381a5edb253656593cc13229b25f084ab0583da01e409a0cc999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 5
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Empleado");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Actualizar Datos Empleado</li>
        </ol>
    </section>
";
        
        $__internal_f42f4b072254381a5edb253656593cc13229b25f084ab0583da01e409a0cc999->leave($__internal_f42f4b072254381a5edb253656593cc13229b25f084ab0583da01e409a0cc999_prof);

    }

    // line 12
    public function block_section3($context, array $blocks = array())
    {
        $__internal_3b9e8efe82897fa69035c50f7bdab197f3c2a4c4d529e1494a102ff6d6404fb5 = $this->env->getExtension("native_profiler");
        $__internal_3b9e8efe82897fa69035c50f7bdab197f3c2a4c4d529e1494a102ff6d6404fb5->enter($__internal_3b9e8efe82897fa69035c50f7bdab197f3c2a4c4d529e1494a102ff6d6404fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 13
        echo "    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class='row'>
                            <div class='col-xs-6 '><h5>Actualizar  Información Empleado</h5></div>
                            <div class='col-xs-6 text-right'></div>
                        </div>
                        <hr>
                    </div>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Empleado"]) ? $context["Empleado"] : $this->getContext($context, "Empleado")));
        foreach ($context['_seq'] as $context["_key"] => $context["cli"]) {
            // line 25
            echo "                        <form id=\"ActualizarCliente\"class=\"form-horizontal\">
                            <div id=\"ActualizaCliente\" data-path=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("UpdateEmpleado");
            echo "\"></div>  
                            <div id=\"IdCliente\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "id", array()), "html", null, true);
            echo "\"></div>       
                            <div class=\"panel-body\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for='NombreEmpleado'>Nombre Empleado:</label>
                                    <div class=\"input-group col-sm-5\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </div>
                                        <input type=\"text\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "Nombre", array()), "html", null, true);
            echo "\"  id=\"NombreCliente\" name=\"NombreEmpleado\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for='DireccionEmpleado'>Dirección</label>
                                    <div class=\"input-group col-sm-4\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </div>
                                        <input type=\"text\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "Direccion", array()), "html", null, true);
            echo "\" id=\"DireccionEmpresa\" name=\"DireccionEmpleado\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=TelefonoEmpleado\">Telefono Empleado:</label>
                                    <div class=\"input-group col-sm-2\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-phone\"></i>
                                        </div>
                                        <input type=\"text\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "Telefono", array()), "html", null, true);
            echo "\" id=\"TelefonoEmpresa\" name=\"TelefonoEmpleado\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div>
                                     
                                     
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"MailEmpresa\">Correo Electrónico:</label>
                                    <div class=\"input-group col-sm-3\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-envelope\"></i>
                                        </div>
                                        <input type=\"email\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "Email", array()), "html", null, true);
            echo "\" id=\"MailEmpleado\" name=\"MailEmpleado\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div><hr>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"CIEmpleado\">Ruc:</label>
                                    <div class=\"input-group col-sm-3\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-qrcode\"></i>
                                        </div>
                                        <input  type=\"text\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "Cidentidad", array()), "html", null, true);
            echo "\" id=\"RucEmpresa\" name=\"CIEmpleado\" class=\"form-control  input-sm \" disabled/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel-footer\">
                                <div class='row'>
                                    <div class='col-xs-4 text-right'>
                                        <button class=\"btn btn-success btn-sm\" id=\"Guardar-Cliente\">Guardar</button>
                                    </div>
                                    <div class='col-xs-4 text-left'>
                                        <div id=\"success\" class=\" col-xm-5 alert alert-success\"  style=\"display: none;\"> <strong>Exitosamente !!</strong> Datos Actualizados</div>
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
        // line 90
        echo "            </div>
        </div>
    </div>
</section>
";
        
        $__internal_3b9e8efe82897fa69035c50f7bdab197f3c2a4c4d529e1494a102ff6d6404fb5->leave($__internal_3b9e8efe82897fa69035c50f7bdab197f3c2a4c4d529e1494a102ff6d6404fb5_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Empleados:UpdateEmpleado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 90,  148 => 73,  136 => 64,  122 => 53,  110 => 44,  98 => 35,  87 => 27,  83 => 26,  80 => 25,  76 => 24,  63 => 13,  57 => 12,  45 => 7,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::layout_Empleado.html.twig' %}*/
/* */
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Empleado')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Actualizar Datos Empleado</li>*/
/*         </ol>*/
/*     </section>*/
/* {%endblock%}*/
/* {%block section3 %}*/
/*     <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <div class='row'>*/
/*                             <div class='col-xs-6 '><h5>Actualizar  Información Empleado</h5></div>*/
/*                             <div class='col-xs-6 text-right'></div>*/
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     {% for cli in Empleado %}*/
/*                         <form id="ActualizarCliente"class="form-horizontal">*/
/*                             <div id="ActualizaCliente" data-path="{{path('UpdateEmpleado')}}"></div>  */
/*                             <div id="IdCliente" value="{{cli.id}}"></div>       */
/*                             <div class="panel-body">*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for='NombreEmpleado'>Nombre Empleado:</label>*/
/*                                     <div class="input-group col-sm-5">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-pencil"></i>*/
/*                                         </div>*/
/*                                         <input type="text" value="{{ cli.Nombre }}"  id="NombreCliente" name="NombreEmpleado" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for='DireccionEmpleado'>Dirección</label>*/
/*                                     <div class="input-group col-sm-4">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-pencil"></i>*/
/*                                         </div>*/
/*                                         <input type="text" value="{{ cli.Direccion }}" id="DireccionEmpresa" name="DireccionEmpleado" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for=TelefonoEmpleado">Telefono Empleado:</label>*/
/*                                     <div class="input-group col-sm-2">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-phone"></i>*/
/*                                         </div>*/
/*                                         <input type="text" value="{{cli.Telefono }}" id="TelefonoEmpresa" name="TelefonoEmpleado" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                      */
/*                                      */
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="MailEmpresa">Correo Electrónico:</label>*/
/*                                     <div class="input-group col-sm-3">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-envelope"></i>*/
/*                                         </div>*/
/*                                         <input type="email" value="{{ cli.Email }}" id="MailEmpleado" name="MailEmpleado" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div><hr>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="CIEmpleado">Ruc:</label>*/
/*                                     <div class="input-group col-sm-3">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-qrcode"></i>*/
/*                                         </div>*/
/*                                         <input  type="text" value="{{ cli.Cidentidad }}" id="RucEmpresa" name="CIEmpleado" class="form-control  input-sm " disabled/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="panel-footer">*/
/*                                 <div class='row'>*/
/*                                     <div class='col-xs-4 text-right'>*/
/*                                         <button class="btn btn-success btn-sm" id="Guardar-Cliente">Guardar</button>*/
/*                                     </div>*/
/*                                     <div class='col-xs-4 text-left'>*/
/*                                         <div id="success" class=" col-xm-5 alert alert-success"  style="display: none;"> <strong>Exitosamente !!</strong> Datos Actualizados</div>*/
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
