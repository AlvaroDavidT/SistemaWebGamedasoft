<?php

/* LoginfirstBundle:Estaticas:Nosotros.html.twig */
class __TwigTemplate_21b884385072d36d99a41c2623ba18cf662f8c1286a81a4c9bc3b12e11c0c4c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout.html.twig", "LoginfirstBundle:Estaticas:Nosotros.html.twig", 2);
        $this->blocks = array(
            'content2' => array($this, 'block_content2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_335ac56e0497413303efb492ba1d9739a727658dddf34d263abf61b2bb42928a = $this->env->getExtension("native_profiler");
        $__internal_335ac56e0497413303efb492ba1d9739a727658dddf34d263abf61b2bb42928a->enter($__internal_335ac56e0497413303efb492ba1d9739a727658dddf34d263abf61b2bb42928a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Estaticas:Nosotros.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_335ac56e0497413303efb492ba1d9739a727658dddf34d263abf61b2bb42928a->leave($__internal_335ac56e0497413303efb492ba1d9739a727658dddf34d263abf61b2bb42928a_prof);

    }

    // line 3
    public function block_content2($context, array $blocks = array())
    {
        $__internal_dc6c9bd8170c45a5a2ef251f7147a8e676fa637066ebcb6b5e18d7c60c53b52b = $this->env->getExtension("native_profiler");
        $__internal_dc6c9bd8170c45a5a2ef251f7147a8e676fa637066ebcb6b5e18d7c60c53b52b->enter($__internal_dc6c9bd8170c45a5a2ef251f7147a8e676fa637066ebcb6b5e18d7c60c53b52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\" style=\"text-align:center;\">
              
                <img id=\"img_logoQS\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/nosotros.jpg"), "html", null, true);
        echo "\" alt=\"!\"  />
            
            </div>
            <div class=\"col-sm-8\">
                  <div class=\"Titulo\">
                    Nosotros
                </div>
                   <hr>
                 <div class=\"Texto\">
                    Gamedasoft Cia. Ltda. ha venido desarrollando desde hace varios años un producto de software para apoyo en la gestión de la operación de las empresas
                    ecuatorianas; el cual ha ido evolucionando hasta convertirseen un eficiente ERP (Enterprise Resoure Planning); fundalmente por estas características:
                      <hr>
                    <ul>
                        <li>Optimización de procesos.</li>
                        <li>Facilidad y versatilidad en el acceso a la información empresarial.</li>
                        <li>Modularidad de funciones y procesos.</li>
                        <li>Factores claves de control y seguridad en procesos sensibles.</li>
                        <li>Integración de procesos</li>
                    </ul>
                 </div>
            <hr>
            
            </div>
        </div>
        
    </div>
";
        
        $__internal_dc6c9bd8170c45a5a2ef251f7147a8e676fa637066ebcb6b5e18d7c60c53b52b->leave($__internal_dc6c9bd8170c45a5a2ef251f7147a8e676fa637066ebcb6b5e18d7c60c53b52b_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Estaticas:Nosotros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Estaticas/index.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout.html.twig' %}*/
/* {% block content2 %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-4" style="text-align:center;">*/
/*               */
/*                 <img id="img_logoQS" src="{{asset('bundles/loginfirst/Imagenes/nosotros.jpg')}}" alt="!"  />*/
/*             */
/*             </div>*/
/*             <div class="col-sm-8">*/
/*                   <div class="Titulo">*/
/*                     Nosotros*/
/*                 </div>*/
/*                    <hr>*/
/*                  <div class="Texto">*/
/*                     Gamedasoft Cia. Ltda. ha venido desarrollando desde hace varios años un producto de software para apoyo en la gestión de la operación de las empresas*/
/*                     ecuatorianas; el cual ha ido evolucionando hasta convertirseen un eficiente ERP (Enterprise Resoure Planning); fundalmente por estas características:*/
/*                       <hr>*/
/*                     <ul>*/
/*                         <li>Optimización de procesos.</li>*/
/*                         <li>Facilidad y versatilidad en el acceso a la información empresarial.</li>*/
/*                         <li>Modularidad de funciones y procesos.</li>*/
/*                         <li>Factores claves de control y seguridad en procesos sensibles.</li>*/
/*                         <li>Integración de procesos</li>*/
/*                     </ul>*/
/*                  </div>*/
/*             <hr>*/
/*             */
/*             </div>*/
/*         </div>*/
/*         */
/*     </div>*/
/* {%  endblock%}*/
/* */
