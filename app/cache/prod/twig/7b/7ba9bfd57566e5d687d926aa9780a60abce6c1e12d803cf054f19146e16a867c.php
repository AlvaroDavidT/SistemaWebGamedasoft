<?php

/* LoginfirstBundle:Admin:VerCliente.html.twig */
class __TwigTemplate_63b8e8272d944acc4b1166aef38712ef230ba8dc54e43f3a82db41bfe7b5c04b extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("ConsultaClientes");
        echo "\"><i class=\"fa fa-dashboard\"></i> Lista Clientes</a></li>
            <li class=\"active\">Datos Cliente</li>
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
        return array (  93 => 27,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  60 => 19,  56 => 18,  48 => 12,  45 => 11,  36 => 6,  32 => 4,  29 => 3,  11 => 2,);
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
