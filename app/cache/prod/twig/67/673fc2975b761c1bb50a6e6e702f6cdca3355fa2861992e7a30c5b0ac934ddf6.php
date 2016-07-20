<?php

/* LoginfirstBundle:Admin:VerEmpleado.html.twig */
class __TwigTemplate_e11a21ce50114ae7e50a8fffc359b049d19d8a8fd09da4345961cd64ca84b5ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Admin.html.twig", "LoginfirstBundle:Admin:VerEmpleado.html.twig", 2);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        // line 4
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("ConsultaEmpleados");
        echo "\"><i class=\"fa fa-dashboard\"></i> Lista Empleados</a></li>
            <li class=\"active\">Datos Empleado</li>
        </ol>
    </section>
";
    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        // line 12
        echo "    <section class=\"content\">
        <div class=\"row content\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">Información General</div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                             ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Empleado"]) ? $context["Empleado"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["EmpleadoV"]) {
            // line 19
            echo "                        <p> <strong>Nombres:  </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadoV"], "nombre", array()), "html", null, true);
            echo "</p>
                          <p><strong>Apellidos:  </strong>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadoV"], "apellido", array()), "html", null, true);
            echo "</p>
                         <p><strong>N° Cédula :  </strong>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadoV"], "cidentidad", array()), "html", null, true);
            echo "</p>
                          <p><strong>Dirección:  </strong>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadoV"], "direccion", array()), "html", null, true);
            echo "</p>
                           <p><strong>Teléfono:  </strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadoV"], "telefono", array()), "html", null, true);
            echo "</p>
                           ";
            // line 24
            if (($this->getAttribute($context["EmpleadoV"], "genero", array()) == "")) {
                // line 25
                echo "                               <p><strong>Género:  </strong>Masculino</p>
                               ";
            } else {
                // line 27
                echo "                                    <p><strong>Género:  </strong>Femenino</p>
                           ";
            }
            // line 29
            echo "                           <p><strong>Departamento:  </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadoV"], "Departamento", array()), "html", null, true);
            echo "</p>
                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['EmpleadoV'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                     </div>
                     
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Admin:VerEmpleado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  91 => 29,  87 => 27,  83 => 25,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  60 => 19,  56 => 18,  48 => 12,  45 => 11,  36 => 6,  32 => 4,  29 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Admin.html.twig' %}*/
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('ConsultaEmpleados')}}"><i class="fa fa-dashboard"></i> Lista Empleados</a></li>*/
/*             <li class="active">Datos Empleado</li>*/
/*         </ol>*/
/*     </section>*/
/* {%endblock%}*/
/* {%block section3 %}*/
/*     <section class="content">*/
/*         <div class="row content">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">Información General</div>*/
/*                 <div class="panel-body">*/
/*                     <div class="form-group">*/
/*                              {% for EmpleadoV in Empleado %}*/
/*                         <p> <strong>Nombres:  </strong>{{EmpleadoV.nombre}}</p>*/
/*                           <p><strong>Apellidos:  </strong>{{EmpleadoV.apellido}}</p>*/
/*                          <p><strong>N° Cédula :  </strong>{{EmpleadoV.cidentidad}}</p>*/
/*                           <p><strong>Dirección:  </strong>{{EmpleadoV.direccion}}</p>*/
/*                            <p><strong>Teléfono:  </strong>{{EmpleadoV.telefono}}</p>*/
/*                            {% if EmpleadoV.genero == ''%}*/
/*                                <p><strong>Género:  </strong>Masculino</p>*/
/*                                {% else %}*/
/*                                     <p><strong>Género:  </strong>Femenino</p>*/
/*                            {% endif %}*/
/*                            <p><strong>Departamento:  </strong>{{EmpleadoV.Departamento}}</p>*/
/*                              {%endfor%}*/
/*                      </div>*/
/*                      */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
