<?php

/* LoginfirstBundle:Estaticas:Nosotros.html.twig */
class __TwigTemplate_cec3e4cc5896895168081d8ad4b3fc8512f9ef24b9af7cd555aaf51ad04d92a1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content2($context, array $blocks = array())
    {
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
        return array (  37 => 8,  31 => 4,  28 => 3,  11 => 2,);
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
