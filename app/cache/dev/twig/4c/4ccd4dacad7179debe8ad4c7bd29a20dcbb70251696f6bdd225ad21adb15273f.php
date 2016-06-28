<?php

/* LoginfirstBundle:Admin:VerEmpleado.html.twig */
class __TwigTemplate_b2102000f233a23e3a55954a57d8c94f8c4f34c48d2a1b14eac7ce3ef306efb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout_Admin.html.twig", "LoginfirstBundle:Admin:VerEmpleado.html.twig", 2);
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
        $__internal_47df9ad62861460fb086fd65c6c6bb712d8f229a835341d8d408d2359aceca0e = $this->env->getExtension("native_profiler");
        $__internal_47df9ad62861460fb086fd65c6c6bb712d8f229a835341d8d408d2359aceca0e->enter($__internal_47df9ad62861460fb086fd65c6c6bb712d8f229a835341d8d408d2359aceca0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:VerEmpleado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47df9ad62861460fb086fd65c6c6bb712d8f229a835341d8d408d2359aceca0e->leave($__internal_47df9ad62861460fb086fd65c6c6bb712d8f229a835341d8d408d2359aceca0e_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_f579aff0a2caf28310078cd2ee030dcdf81cc9580828cf6d5c2a6997384fa11d = $this->env->getExtension("native_profiler");
        $__internal_f579aff0a2caf28310078cd2ee030dcdf81cc9580828cf6d5c2a6997384fa11d->enter($__internal_f579aff0a2caf28310078cd2ee030dcdf81cc9580828cf6d5c2a6997384fa11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

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
        
        $__internal_f579aff0a2caf28310078cd2ee030dcdf81cc9580828cf6d5c2a6997384fa11d->leave($__internal_f579aff0a2caf28310078cd2ee030dcdf81cc9580828cf6d5c2a6997384fa11d_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_29ed8c9ce65e7a70e5f0c74c975ef6650bff3b70cd542caf6cf612b68812ba2f = $this->env->getExtension("native_profiler");
        $__internal_29ed8c9ce65e7a70e5f0c74c975ef6650bff3b70cd542caf6cf612b68812ba2f->enter($__internal_29ed8c9ce65e7a70e5f0c74c975ef6650bff3b70cd542caf6cf612b68812ba2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        
        $__internal_29ed8c9ce65e7a70e5f0c74c975ef6650bff3b70cd542caf6cf612b68812ba2f->leave($__internal_29ed8c9ce65e7a70e5f0c74c975ef6650bff3b70cd542caf6cf612b68812ba2f_prof);

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
/* {% extends 'LoginfirstBundle::layout_Admin.html.twig' %}*/
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
