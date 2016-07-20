<?php

/* LoginfirstBundle:Estaticas:Mision_Vision.html.twig */
class __TwigTemplate_0f7a023fc6432ca88cfd83086510e0210bcc0681b199da0671fb69a2da23e5ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout.html.twig", "LoginfirstBundle:Estaticas:Mision_Vision.html.twig", 2);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/mision.jpg"), "html", null, true);
        echo "\" alt=\"!\"  />
            
            </div>
            <div class=\"col-sm-8\">
                
              
                <div class=\"Titulo\">
                    Misión
                </div>
                   <hr>
                 <div class=\"Texto\">
                    Gamedasoft trabaja con el setor empresarial de Ecuador y Latinoamérica, brindando soluciones informaticas para alcanzar un desarrollo sostenible mutuo.
                </div>
            <hr>
            
            </div>
        </div>
        
        
        
        
         <div class=\"row\">
            <div class=\"col-sm-4\" style=\"text-align:center;\">
              
                <img id=\"img_logoQS\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/vision.jpg"), "html", null, true);
        echo "\" alt=\"!\"  />
            
            </div>
            <div class=\"col-sm-8\">
                
              
                <div class=\"Titulo\">
                    Visión
                </div>
                   <hr>
                 <div class=\"Texto\">
                    Entregar a las empresas un software de calidad y servicios eficienes para la gestión y control de negocios.
                </div>
            <hr>
            
            </div>
        </div>
        
    </div>
";
    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Estaticas:Mision_Vision.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 32,  37 => 8,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Estaticas/index.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout.html.twig' %}*/
/* {% block content2 %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-4" style="text-align:center;">*/
/*               */
/*                 <img id="img_logoQS" src="{{asset('bundles/loginfirst/Imagenes/mision.jpg')}}" alt="!"  />*/
/*             */
/*             </div>*/
/*             <div class="col-sm-8">*/
/*                 */
/*               */
/*                 <div class="Titulo">*/
/*                     Misión*/
/*                 </div>*/
/*                    <hr>*/
/*                  <div class="Texto">*/
/*                     Gamedasoft trabaja con el setor empresarial de Ecuador y Latinoamérica, brindando soluciones informaticas para alcanzar un desarrollo sostenible mutuo.*/
/*                 </div>*/
/*             <hr>*/
/*             */
/*             </div>*/
/*         </div>*/
/*         */
/*         */
/*         */
/*         */
/*          <div class="row">*/
/*             <div class="col-sm-4" style="text-align:center;">*/
/*               */
/*                 <img id="img_logoQS" src="{{asset('bundles/loginfirst/Imagenes/vision.jpg')}}" alt="!"  />*/
/*             */
/*             </div>*/
/*             <div class="col-sm-8">*/
/*                 */
/*               */
/*                 <div class="Titulo">*/
/*                     Visión*/
/*                 </div>*/
/*                    <hr>*/
/*                  <div class="Texto">*/
/*                     Entregar a las empresas un software de calidad y servicios eficienes para la gestión y control de negocios.*/
/*                 </div>*/
/*             <hr>*/
/*             */
/*             </div>*/
/*         </div>*/
/*         */
/*     </div>*/
/* {%  endblock%}*/
/* */
