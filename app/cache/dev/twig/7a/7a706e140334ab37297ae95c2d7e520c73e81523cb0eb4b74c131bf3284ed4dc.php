<?php

/* LoginfirstBundle:Admin:VerEmpleado.html.twig */
class __TwigTemplate_f7edafba84422f5636a8e5f887b7b6106c7f792640dce3add3f434b5f8df8c40 extends Twig_Template
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
        $__internal_8cab5135457b21dc5fba2a6684ca9b0633903a5e22f50b51d469b85c1d680942 = $this->env->getExtension("native_profiler");
        $__internal_8cab5135457b21dc5fba2a6684ca9b0633903a5e22f50b51d469b85c1d680942->enter($__internal_8cab5135457b21dc5fba2a6684ca9b0633903a5e22f50b51d469b85c1d680942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:VerEmpleado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cab5135457b21dc5fba2a6684ca9b0633903a5e22f50b51d469b85c1d680942->leave($__internal_8cab5135457b21dc5fba2a6684ca9b0633903a5e22f50b51d469b85c1d680942_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_63f081c62bfa86c83097fffa719f0e48779d638310e0ca972773ab9b03bb12ce = $this->env->getExtension("native_profiler");
        $__internal_63f081c62bfa86c83097fffa719f0e48779d638310e0ca972773ab9b03bb12ce->enter($__internal_63f081c62bfa86c83097fffa719f0e48779d638310e0ca972773ab9b03bb12ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

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
        
        $__internal_63f081c62bfa86c83097fffa719f0e48779d638310e0ca972773ab9b03bb12ce->leave($__internal_63f081c62bfa86c83097fffa719f0e48779d638310e0ca972773ab9b03bb12ce_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_deff6bf1cb5b6c261d33a5bc4d5460b3960bef3c3284eadbe85c19a0dcc504be = $this->env->getExtension("native_profiler");
        $__internal_deff6bf1cb5b6c261d33a5bc4d5460b3960bef3c3284eadbe85c19a0dcc504be->enter($__internal_deff6bf1cb5b6c261d33a5bc4d5460b3960bef3c3284eadbe85c19a0dcc504be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        
        $__internal_deff6bf1cb5b6c261d33a5bc4d5460b3960bef3c3284eadbe85c19a0dcc504be->leave($__internal_deff6bf1cb5b6c261d33a5bc4d5460b3960bef3c3284eadbe85c19a0dcc504be_prof);

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
