<?php

/* LoginfirstBundle:Admin:VerEmpleado.html.twig */
class __TwigTemplate_67ef89a3d98ed9ffd3c9086450c570e9dfbe00e9298b1c2588d1d8a9620d1ba8 extends Twig_Template
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
        $__internal_bb469ada116a87ec114dc8021875bfecc37c7a37c86627bb3769b930015f188b = $this->env->getExtension("native_profiler");
        $__internal_bb469ada116a87ec114dc8021875bfecc37c7a37c86627bb3769b930015f188b->enter($__internal_bb469ada116a87ec114dc8021875bfecc37c7a37c86627bb3769b930015f188b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:VerEmpleado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb469ada116a87ec114dc8021875bfecc37c7a37c86627bb3769b930015f188b->leave($__internal_bb469ada116a87ec114dc8021875bfecc37c7a37c86627bb3769b930015f188b_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_da74571f802bf2a6794fd3af7feb9bb05e35555901f0586dad63aa84847b53a1 = $this->env->getExtension("native_profiler");
        $__internal_da74571f802bf2a6794fd3af7feb9bb05e35555901f0586dad63aa84847b53a1->enter($__internal_da74571f802bf2a6794fd3af7feb9bb05e35555901f0586dad63aa84847b53a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

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
        
        $__internal_da74571f802bf2a6794fd3af7feb9bb05e35555901f0586dad63aa84847b53a1->leave($__internal_da74571f802bf2a6794fd3af7feb9bb05e35555901f0586dad63aa84847b53a1_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_0aa84288130a8ef9117bda6dc7bbfc6a9a594a2a57e4f2fc8d53e64dfa9c2b56 = $this->env->getExtension("native_profiler");
        $__internal_0aa84288130a8ef9117bda6dc7bbfc6a9a594a2a57e4f2fc8d53e64dfa9c2b56->enter($__internal_0aa84288130a8ef9117bda6dc7bbfc6a9a594a2a57e4f2fc8d53e64dfa9c2b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["Empleado"]) ? $context["Empleado"] : $this->getContext($context, "Empleado")));
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
        
        $__internal_0aa84288130a8ef9117bda6dc7bbfc6a9a594a2a57e4f2fc8d53e64dfa9c2b56->leave($__internal_0aa84288130a8ef9117bda6dc7bbfc6a9a594a2a57e4f2fc8d53e64dfa9c2b56_prof);

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
        return array (  115 => 31,  106 => 29,  102 => 27,  98 => 25,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  75 => 19,  71 => 18,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
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
