<?php

/* LoginfirstBundle:Empleados:UpdateEmpleado.html.twig */
class __TwigTemplate_d6048bffd669a20c75c0c86e72f7cbc5422a5fc703a13e629edacc4a1d359667 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Empleado.html.twig", "LoginfirstBundle:Empleados:UpdateEmpleado.html.twig", 2);
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
        $__internal_1dcebec829cc77afb699e84cf9d7cd3dc4e6400de3dcfbd4aa04e7f5d1150473 = $this->env->getExtension("native_profiler");
        $__internal_1dcebec829cc77afb699e84cf9d7cd3dc4e6400de3dcfbd4aa04e7f5d1150473->enter($__internal_1dcebec829cc77afb699e84cf9d7cd3dc4e6400de3dcfbd4aa04e7f5d1150473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Empleados:UpdateEmpleado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dcebec829cc77afb699e84cf9d7cd3dc4e6400de3dcfbd4aa04e7f5d1150473->leave($__internal_1dcebec829cc77afb699e84cf9d7cd3dc4e6400de3dcfbd4aa04e7f5d1150473_prof);

    }

    // line 4
    public function block_section2($context, array $blocks = array())
    {
        $__internal_07cfb91fe61d763a27f59189fb3d2bfe7ef248c274d75661498e23bb4c6e650b = $this->env->getExtension("native_profiler");
        $__internal_07cfb91fe61d763a27f59189fb3d2bfe7ef248c274d75661498e23bb4c6e650b->enter($__internal_07cfb91fe61d763a27f59189fb3d2bfe7ef248c274d75661498e23bb4c6e650b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

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
        
        $__internal_07cfb91fe61d763a27f59189fb3d2bfe7ef248c274d75661498e23bb4c6e650b->leave($__internal_07cfb91fe61d763a27f59189fb3d2bfe7ef248c274d75661498e23bb4c6e650b_prof);

    }

    // line 12
    public function block_section3($context, array $blocks = array())
    {
        $__internal_be1b1556a3375cd2eae13794e5ad9537f452f4dbf4a81573818c6016055d3f0c = $this->env->getExtension("native_profiler");
        $__internal_be1b1556a3375cd2eae13794e5ad9537f452f4dbf4a81573818c6016055d3f0c->enter($__internal_be1b1556a3375cd2eae13794e5ad9537f452f4dbf4a81573818c6016055d3f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        foreach ($context['_seq'] as $context["_key"] => $context["Empl"]) {
            // line 25
            echo "                        <form id=\"ActualizarEmpleado\"class=\"form-horizontal\">
                              <div id=\"IdEmpleado\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["Empl"], "id", array()), "html", null, true);
            echo "\"></div>   
                            <div id=\"ActualizarEmpleadoPath\" data-path=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("UpdateEmpleado");
            echo "\"></div>  
                              
                            <div class=\"panel-body\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for='NombreEmpleado'>Nombre Empleado:</label>
                                    <div class=\"input-group col-sm-5\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </div>
                                        <input type=\"text\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["Empl"], "Nombre", array()), "html", null, true);
            echo "\"  id=\"NombreEmpleado\" name=\"NombreEmpleado\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for='DireccionEmpleado'>Dirección</label>
                                    <div class=\"input-group col-sm-4\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </div>
                                        <input type=\"text\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["Empl"], "Direccion", array()), "html", null, true);
            echo "\" id=\"DireccionEmpleado\" name=\"DireccionEmpleado\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"TelefonoEmpleado\">Telefono Empleado:</label>
                                    <div class=\"input-group col-sm-2\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-phone\"></i>
                                        </div>
                                        <input type=\"text\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["Empl"], "Telefono", array()), "html", null, true);
            echo "\" id=\"TelefonoEmpleado\" name=\"TelefonoEmpleado\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div>
                                     
                                     
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"MailEmpresa\">Correo Electrónico:</label>
                                    <div class=\"input-group col-sm-3\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-envelope\"></i>
                                        </div>
                                        <input type=\"email\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["Empl"], "Email", array()), "html", null, true);
            echo "\" id=\"MailEmpleado\" name=\"MailEmpleado\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div><hr>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"CIEmpleado\">Cedula Identidad:</label>
                                    <div class=\"input-group col-sm-3\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-qrcode\"></i>
                                        </div>
                                        <input  type=\"text\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["Empl"], "Cidentidad", array()), "html", null, true);
            echo "\" id=\"RucEmpresa\" name=\"CIEmpleado\" class=\"form-control  input-sm \" disabled/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel-footer\">
                                <div class='row'>
                                    <div class='col-xs-4 text-right'>
                                        <button class=\"btn btn-success btn-sm\" id=\"Guardar-Empleado\">Guardar</button>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Empl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "            </div>
        </div>
    </div>
</section>
";
        
        $__internal_be1b1556a3375cd2eae13794e5ad9537f452f4dbf4a81573818c6016055d3f0c->leave($__internal_be1b1556a3375cd2eae13794e5ad9537f452f4dbf4a81573818c6016055d3f0c_prof);

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
        return array (  172 => 91,  149 => 74,  137 => 65,  123 => 54,  111 => 45,  99 => 36,  87 => 27,  83 => 26,  80 => 25,  76 => 24,  63 => 13,  57 => 12,  45 => 7,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Empleado.html.twig' %}*/
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
/*                     {% for Empl in Empleado %}*/
/*                         <form id="ActualizarEmpleado"class="form-horizontal">*/
/*                               <div id="IdEmpleado" value="{{Empl.id}}"></div>   */
/*                             <div id="ActualizarEmpleadoPath" data-path="{{path('UpdateEmpleado')}}"></div>  */
/*                               */
/*                             <div class="panel-body">*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for='NombreEmpleado'>Nombre Empleado:</label>*/
/*                                     <div class="input-group col-sm-5">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-pencil"></i>*/
/*                                         </div>*/
/*                                         <input type="text" value="{{ Empl.Nombre }}"  id="NombreEmpleado" name="NombreEmpleado" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for='DireccionEmpleado'>Dirección</label>*/
/*                                     <div class="input-group col-sm-4">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-pencil"></i>*/
/*                                         </div>*/
/*                                         <input type="text" value="{{ Empl.Direccion }}" id="DireccionEmpleado" name="DireccionEmpleado" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="TelefonoEmpleado">Telefono Empleado:</label>*/
/*                                     <div class="input-group col-sm-2">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-phone"></i>*/
/*                                         </div>*/
/*                                         <input type="text" value="{{Empl.Telefono }}" id="TelefonoEmpleado" name="TelefonoEmpleado" class="form-control  input-sm"/>*/
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
/*                                         <input type="email" value="{{ Empl.Email }}" id="MailEmpleado" name="MailEmpleado" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div><hr>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="CIEmpleado">Cedula Identidad:</label>*/
/*                                     <div class="input-group col-sm-3">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-qrcode"></i>*/
/*                                         </div>*/
/*                                         <input  type="text" value="{{ Empl.Cidentidad }}" id="RucEmpresa" name="CIEmpleado" class="form-control  input-sm " disabled/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="panel-footer">*/
/*                                 <div class='row'>*/
/*                                     <div class='col-xs-4 text-right'>*/
/*                                         <button class="btn btn-success btn-sm" id="Guardar-Empleado">Guardar</button>*/
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
