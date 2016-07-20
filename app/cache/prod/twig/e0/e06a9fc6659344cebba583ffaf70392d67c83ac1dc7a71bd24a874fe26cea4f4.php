<?php

/* LoginfirstBundle:Admin:EditarEmpleado.html.twig */
class __TwigTemplate_c4b439fd3ebae5ab9aeb153c852d422327e1508b35a72c5eeb3990ef86b0aad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Admin.html.twig", "LoginfirstBundle:Admin:EditarEmpleado.html.twig", 2);
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
        $__internal_b24053b74561abed2230f18843b766854abe1a61a3230ffff3605611e84da397 = $this->env->getExtension("native_profiler");
        $__internal_b24053b74561abed2230f18843b766854abe1a61a3230ffff3605611e84da397->enter($__internal_b24053b74561abed2230f18843b766854abe1a61a3230ffff3605611e84da397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:EditarEmpleado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b24053b74561abed2230f18843b766854abe1a61a3230ffff3605611e84da397->leave($__internal_b24053b74561abed2230f18843b766854abe1a61a3230ffff3605611e84da397_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_2a822ce0c240bc5190847b6b7b84495a02a810d58f311cfc63890f967df74bc6 = $this->env->getExtension("native_profiler");
        $__internal_2a822ce0c240bc5190847b6b7b84495a02a810d58f311cfc63890f967df74bc6->enter($__internal_2a822ce0c240bc5190847b6b7b84495a02a810d58f311cfc63890f967df74bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 4
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("ConsultaEmpleados");
        echo "\"><i class=\"fa fa-dashboard\"></i> Lista Empleados</a></li>
            <li class=\"active\">Editar Empleado</li>
        </ol>
    </section>
";
        
        $__internal_2a822ce0c240bc5190847b6b7b84495a02a810d58f311cfc63890f967df74bc6->leave($__internal_2a822ce0c240bc5190847b6b7b84495a02a810d58f311cfc63890f967df74bc6_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_932be69a5c85f4a3848d999f68b77c9ef76d9c8b6940b2a97812f6bce1a51ceb = $this->env->getExtension("native_profiler");
        $__internal_932be69a5c85f4a3848d999f68b77c9ef76d9c8b6940b2a97812f6bce1a51ceb->enter($__internal_932be69a5c85f4a3848d999f68b77c9ef76d9c8b6940b2a97812f6bce1a51ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 12
        echo "    <section class=\"content\">
        <div class=\"row content\">
            <div class=\"col-xs-12\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Empleado"]) ? $context["Empleado"] : $this->getContext($context, "Empleado")));
        foreach ($context['_seq'] as $context["_key"] => $context["EmpleadoE"]) {
            echo " 
                    <form id=\"empleado\" method=\"Post\" class=\"form-horizontal\" action='";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GuardarEditEmpleado", array("idEU" => $this->getAttribute($context["EmpleadoE"], "id", array()))), "html", null, true);
            echo "'>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for='nombre'>Nombres:</label>
                            <div class=\"input-group col-sm-3\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-pencil\"></i>
                                </div>
                                <input type=\"text\"  id=\"nombre\" name=\"nombre\" value='";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadoE"], "nombre", array()), "html", null, true);
            echo "' class=\"form-control  input-sm\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for='apellidos'>Apellidos:</label>
                            <div class=\"input-group col-sm-3\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-pencil\"></i>
                                </div>
                                <input type=\"text\" id=\"apellidos\" value='";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadoE"], "apellido", array()), "html", null, true);
            echo "' name=\"apellidos\" class=\"form-control  input-sm\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"cedula\">Cédula Identidad:</label>
                            <div class=\"input-group col-sm-3\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-qrcode\"></i>
                                </div>
                                <input type=\"text\" id=\"cedula\" name=\"cedula\" value='";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadoE"], "cidentidad", array()), "html", null, true);
            echo "' class=\"form-control  input-sm\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"genero\">Seleccione Género:</label>
                            <div class=\"input-group col-sm-2\">
                                ";
            // line 47
            if (($this->getAttribute($context["EmpleadoE"], "genero", array()) == "")) {
                // line 48
                echo "                                    <p><strong></strong>Masculino</p>
                                ";
            } else {
                // line 50
                echo "                                    <p><strong></strong>Femenino</p>
                                ";
            }
            // line 52
            echo "                                <p>
                                    <button type=\"button\" class=\"btn btn-success btn-xs\">cambiar</button>
                                </p>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"telefono\">Telefóno:</label>
                            <div class=\"input-group col-sm-2\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-phone\"></i>
                                </div>
                                <input type=\"text\" id=\"telefono\" name=\"telefono\" value='";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadoE"], "telefono", array()), "html", null, true);
            echo "' class=\"form-control  input-sm\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"direccion\">Dirección:</label>
                            <div class=\"input-group col-sm-4\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-map-marker\"></i>
                                </div>
                                <input type=\"text\" id=\"direccion\" name=\"direccion\" value='";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadoE"], "direccion", array()), "html", null, true);
            echo "' class=\"form-control  input-sm\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"mail\">Correo Electrónico:</label>
                            <div class=\"input-group col-sm-3\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-envelope\"></i>
                                </div>
                                <input type=\"email\" id=\"mail\" name=\"mail\" value='";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadoE"], "email", array()), "html", null, true);
            echo "' class=\"form-control  input-sm\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Departamento:</label>
                            <div class=\"input-group col-sm-3\">
                                <p>  ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadoE"], "Departamento", array()), "html", null, true);
            echo "</p>
                                 <p>  ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadoE"], "id", array()), "html", null, true);
            echo "</p>
                              
                                <p>
                                    <button type=\"button\" id=\"Departamentos\" class=\"btn btn-success btn-xs\">cambiar</button>
                                </p>
                            </div>
                        </div> 
                        <hr>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"></label>
                            <div class=\"input-group col-sm-3\">
                                <button type=\"submit\" class=\"btn btn-primary\">Guardar</button>
                            </div>
                        </div>
                    </form>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['EmpleadoE'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                <div class=\"form-group\">
                </div>  
            </div><!-- /.box -->    
        </div>
    </section>
";
        
        $__internal_932be69a5c85f4a3848d999f68b77c9ef76d9c8b6940b2a97812f6bce1a51ceb->leave($__internal_932be69a5c85f4a3848d999f68b77c9ef76d9c8b6940b2a97812f6bce1a51ceb_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Admin:EditarEmpleado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 104,  177 => 88,  173 => 87,  164 => 81,  152 => 72,  140 => 63,  127 => 52,  123 => 50,  119 => 48,  117 => 47,  108 => 41,  96 => 32,  84 => 23,  74 => 16,  68 => 15,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Admin.html.twig' %}*/
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('ConsultaEmpleados')}}"><i class="fa fa-dashboard"></i> Lista Empleados</a></li>*/
/*             <li class="active">Editar Empleado</li>*/
/*         </ol>*/
/*     </section>*/
/* {%endblock%}*/
/* {%block section3 %}*/
/*     <section class="content">*/
/*         <div class="row content">*/
/*             <div class="col-xs-12">*/
/*                 {% for EmpleadoE in Empleado %} */
/*                     <form id="empleado" method="Post" class="form-horizontal" action='{{ path('GuardarEditEmpleado',{'idEU': EmpleadoE.id}) }}'>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for='nombre'>Nombres:</label>*/
/*                             <div class="input-group col-sm-3">*/
/*                                 <div class="input-group-addon">*/
/*                                     <i class="fa fa-pencil"></i>*/
/*                                 </div>*/
/*                                 <input type="text"  id="nombre" name="nombre" value='{{EmpleadoE.nombre}}' class="form-control  input-sm"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for='apellidos'>Apellidos:</label>*/
/*                             <div class="input-group col-sm-3">*/
/*                                 <div class="input-group-addon">*/
/*                                     <i class="fa fa-pencil"></i>*/
/*                                 </div>*/
/*                                 <input type="text" id="apellidos" value='{{EmpleadoE.apellido}}' name="apellidos" class="form-control  input-sm"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="cedula">Cédula Identidad:</label>*/
/*                             <div class="input-group col-sm-3">*/
/*                                 <div class="input-group-addon">*/
/*                                     <i class="fa fa-qrcode"></i>*/
/*                                 </div>*/
/*                                 <input type="text" id="cedula" name="cedula" value='{{EmpleadoE.cidentidad}}' class="form-control  input-sm"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="genero">Seleccione Género:</label>*/
/*                             <div class="input-group col-sm-2">*/
/*                                 {% if EmpleadoE.genero == ''%}*/
/*                                     <p><strong></strong>Masculino</p>*/
/*                                 {% else %}*/
/*                                     <p><strong></strong>Femenino</p>*/
/*                                 {% endif %}*/
/*                                 <p>*/
/*                                     <button type="button" class="btn btn-success btn-xs">cambiar</button>*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="telefono">Telefóno:</label>*/
/*                             <div class="input-group col-sm-2">*/
/*                                 <div class="input-group-addon">*/
/*                                     <i class="fa fa-phone"></i>*/
/*                                 </div>*/
/*                                 <input type="text" id="telefono" name="telefono" value='{{EmpleadoE.telefono}}' class="form-control  input-sm"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="direccion">Dirección:</label>*/
/*                             <div class="input-group col-sm-4">*/
/*                                 <div class="input-group-addon">*/
/*                                     <i class="fa fa-map-marker"></i>*/
/*                                 </div>*/
/*                                 <input type="text" id="direccion" name="direccion" value='{{EmpleadoE.direccion}}' class="form-control  input-sm"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="mail">Correo Electrónico:</label>*/
/*                             <div class="input-group col-sm-3">*/
/*                                 <div class="input-group-addon">*/
/*                                     <i class="fa fa-envelope"></i>*/
/*                                 </div>*/
/*                                 <input type="email" id="mail" name="mail" value='{{EmpleadoE.email}}' class="form-control  input-sm"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Departamento:</label>*/
/*                             <div class="input-group col-sm-3">*/
/*                                 <p>  {{EmpleadoE.Departamento }}</p>*/
/*                                  <p>  {{EmpleadoE.id }}</p>*/
/*                               */
/*                                 <p>*/
/*                                     <button type="button" id="Departamentos" class="btn btn-success btn-xs">cambiar</button>*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div> */
/*                         <hr>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label"></label>*/
/*                             <div class="input-group col-sm-3">*/
/*                                 <button type="submit" class="btn btn-primary">Guardar</button>*/
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
