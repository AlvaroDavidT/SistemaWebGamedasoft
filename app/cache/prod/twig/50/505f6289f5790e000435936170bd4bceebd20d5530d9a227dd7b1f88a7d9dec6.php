<?php

/* LoginfirstBundle:Estaticas:QS.html.twig */
class __TwigTemplate_5cdd02d60c13e5cafae7a4808b788bfb51af93314119826a4d5e428adc3a8bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout.html.twig", "LoginfirstBundle:Estaticas:QS.html.twig", 2);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/quienes-somos.png"), "html", null, true);
        echo "\" alt=\"!\"  />
            
            </div>
            <div class=\"col-sm-8\">
                  <div class=\"Titulo\">
                    Quienes Somos
                </div>
                   <hr>
                 <div class=\"Texto\">
                    Gamedasoft es una firma de profesionales altamente calificados en desarrollo de sistemas,asi como una amplia experiencia en análisis de procesos, proyectos e implementación de soluciones.
                </div>
            <hr>
            
            </div>
        </div>
        
        
        
        
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-4\">
                
            </div>
            <div class=\"col-sm-12 col-lg-8 \">
               
            </div>
    
        </div>
        
    </div>
";
    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Estaticas:QS.html.twig";
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
/*                 <img id="img_logoQS" src="{{asset('bundles/loginfirst/Imagenes/quienes-somos.png')}}" alt="!"  />*/
/*             */
/*             </div>*/
/*             <div class="col-sm-8">*/
/*                   <div class="Titulo">*/
/*                     Quienes Somos*/
/*                 </div>*/
/*                    <hr>*/
/*                  <div class="Texto">*/
/*                     Gamedasoft es una firma de profesionales altamente calificados en desarrollo de sistemas,asi como una amplia experiencia en análisis de procesos, proyectos e implementación de soluciones.*/
/*                 </div>*/
/*             <hr>*/
/*             */
/*             </div>*/
/*         </div>*/
/*         */
/*         */
/*         */
/*         */
/*         <div class="row">*/
/*             <div class="col-sm-12 col-lg-4">*/
/*                 */
/*             </div>*/
/*             <div class="col-sm-12 col-lg-8 ">*/
/*                */
/*             </div>*/
/*     */
/*         </div>*/
/*         */
/*     </div>*/
/* {%  endblock%}*/
/* */
