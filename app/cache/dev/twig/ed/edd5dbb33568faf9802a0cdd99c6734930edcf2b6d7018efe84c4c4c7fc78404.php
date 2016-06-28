<?php

/* LoginfirstBundle:Estaticas:Mision_Vision.html.twig */
class __TwigTemplate_9bcacfa030e3cdd829ff038f03a33fc483e85162b464eba56aa87f41694c6bfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout.html.twig", "LoginfirstBundle:Estaticas:Mision_Vision.html.twig", 2);
        $this->blocks = array(
            'content2' => array($this, 'block_content2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9dea8658331d077b344366ebe3f1483bc664694efdb7282e4d4abbe0d727f70 = $this->env->getExtension("native_profiler");
        $__internal_e9dea8658331d077b344366ebe3f1483bc664694efdb7282e4d4abbe0d727f70->enter($__internal_e9dea8658331d077b344366ebe3f1483bc664694efdb7282e4d4abbe0d727f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Estaticas:Mision_Vision.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9dea8658331d077b344366ebe3f1483bc664694efdb7282e4d4abbe0d727f70->leave($__internal_e9dea8658331d077b344366ebe3f1483bc664694efdb7282e4d4abbe0d727f70_prof);

    }

    // line 3
    public function block_content2($context, array $blocks = array())
    {
        $__internal_1cec62c3e84760ef33550ebd4bb711bba90c822c21d64511ed5bfaad53892dd5 = $this->env->getExtension("native_profiler");
        $__internal_1cec62c3e84760ef33550ebd4bb711bba90c822c21d64511ed5bfaad53892dd5->enter($__internal_1cec62c3e84760ef33550ebd4bb711bba90c822c21d64511ed5bfaad53892dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

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
        
        $__internal_1cec62c3e84760ef33550ebd4bb711bba90c822c21d64511ed5bfaad53892dd5->leave($__internal_1cec62c3e84760ef33550ebd4bb711bba90c822c21d64511ed5bfaad53892dd5_prof);

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
        return array (  73 => 32,  46 => 8,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Estaticas/index.html.twig #}*/
/* {% extends 'LoginfirstBundle::layout.html.twig' %}*/
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
