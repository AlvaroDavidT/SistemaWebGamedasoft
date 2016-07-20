<?php

/* LoginfirstBundle:Admin:VerCliente.html.twig */
class __TwigTemplate_bfa683ab1f5dce45a7e85c3fe81a216cab4cfd723e2bdab17f110fa873f6bc51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Admin.html.twig", "LoginfirstBundle:Admin:VerCliente.html.twig", 2);
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
        $__internal_dc4c90c23f4875adeb65c78d9bbdea34ef8cc5335f185222ceb59eadf745e088 = $this->env->getExtension("native_profiler");
        $__internal_dc4c90c23f4875adeb65c78d9bbdea34ef8cc5335f185222ceb59eadf745e088->enter($__internal_dc4c90c23f4875adeb65c78d9bbdea34ef8cc5335f185222ceb59eadf745e088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:VerCliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc4c90c23f4875adeb65c78d9bbdea34ef8cc5335f185222ceb59eadf745e088->leave($__internal_dc4c90c23f4875adeb65c78d9bbdea34ef8cc5335f185222ceb59eadf745e088_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_58acd5e900d0a6bffc0c334a8cffd9d2f4f8056ad9fcb11c33d6c35216d016bc = $this->env->getExtension("native_profiler");
        $__internal_58acd5e900d0a6bffc0c334a8cffd9d2f4f8056ad9fcb11c33d6c35216d016bc->enter($__internal_58acd5e900d0a6bffc0c334a8cffd9d2f4f8056ad9fcb11c33d6c35216d016bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 4
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("ConsultaClientes");
        echo "\"><i class=\"fa fa-dashboard\"></i> Lista Clientes</a></li>
            <li class=\"active\">Datos Cliente</li>
        </ol>
    </section>
";
        
        $__internal_58acd5e900d0a6bffc0c334a8cffd9d2f4f8056ad9fcb11c33d6c35216d016bc->leave($__internal_58acd5e900d0a6bffc0c334a8cffd9d2f4f8056ad9fcb11c33d6c35216d016bc_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_36141284f1f3bd7a5007ca4fa1f1fdcbf0e82034482d0a2dcc3c91f42e42ac98 = $this->env->getExtension("native_profiler");
        $__internal_36141284f1f3bd7a5007ca4fa1f1fdcbf0e82034482d0a2dcc3c91f42e42ac98->enter($__internal_36141284f1f3bd7a5007ca4fa1f1fdcbf0e82034482d0a2dcc3c91f42e42ac98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        $context['_seq'] = twig_ensure_traversable($context["Cliente"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Cliente"]) {
            // line 19
            echo "                        <p> <strong>Nombres:  </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Cliente"], "nombre", array()), "html", null, true);
            echo "</p>
                          <p><strong>Usuario:  </strong>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["Cliente"], "usuario", array()), "html", null, true);
            echo "</p>
                         <p><strong>RUC :  </strong>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["Cliente"], "ruc", array()), "html", null, true);
            echo "</p>
                          <p><strong>Dirección:  </strong>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["Cliente"], "direccion", array()), "html", null, true);
            echo "</p>
                           <p><strong>Teléfono:  </strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["Cliente"], "telefono", array()), "html", null, true);
            echo "</p>
                           <p><strong>Contacto:  </strong>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["Cliente"], "contacto", array()), "html", null, true);
            echo "</p>
                            <p><strong>Email:  </strong>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["Cliente"], "email", array()), "html", null, true);
            echo "</p>
                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                     </div>
                     
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_36141284f1f3bd7a5007ca4fa1f1fdcbf0e82034482d0a2dcc3c91f42e42ac98->leave($__internal_36141284f1f3bd7a5007ca4fa1f1fdcbf0e82034482d0a2dcc3c91f42e42ac98_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Admin:VerCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 27,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  75 => 19,  71 => 18,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Admin.html.twig' %}*/
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('ConsultaClientes')}}"><i class="fa fa-dashboard"></i> Lista Clientes</a></li>*/
/*             <li class="active">Datos Cliente</li>*/
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
/*                              {% for Cliente in Cliente %}*/
/*                         <p> <strong>Nombres:  </strong>{{Cliente.nombre}}</p>*/
/*                           <p><strong>Usuario:  </strong>{{Cliente.usuario}}</p>*/
/*                          <p><strong>RUC :  </strong>{{Cliente.ruc}}</p>*/
/*                           <p><strong>Dirección:  </strong>{{Cliente.direccion}}</p>*/
/*                            <p><strong>Teléfono:  </strong>{{Cliente.telefono}}</p>*/
/*                            <p><strong>Contacto:  </strong>{{Cliente.contacto}}</p>*/
/*                             <p><strong>Email:  </strong>{{Cliente.email}}</p>*/
/*                              {%endfor%}*/
/*                      </div>*/
/*                      */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
