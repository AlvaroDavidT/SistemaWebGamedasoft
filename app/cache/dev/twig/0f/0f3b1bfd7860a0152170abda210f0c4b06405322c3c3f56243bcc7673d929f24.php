<?php

/* LoginfirstBundle:Estaticas:Mision_Vision.html.twig */
class __TwigTemplate_31a0a90e266e32b52c13272539d7daaf6a5442de90b319887714b81f3bdf30d6 extends Twig_Template
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
        $__internal_ffdc1faa1aa967858e39ce3b15be8625eb53006c401e61e2a4293ca6bcc65c7d = $this->env->getExtension("native_profiler");
        $__internal_ffdc1faa1aa967858e39ce3b15be8625eb53006c401e61e2a4293ca6bcc65c7d->enter($__internal_ffdc1faa1aa967858e39ce3b15be8625eb53006c401e61e2a4293ca6bcc65c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Estaticas:Mision_Vision.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffdc1faa1aa967858e39ce3b15be8625eb53006c401e61e2a4293ca6bcc65c7d->leave($__internal_ffdc1faa1aa967858e39ce3b15be8625eb53006c401e61e2a4293ca6bcc65c7d_prof);

    }

    // line 3
    public function block_content2($context, array $blocks = array())
    {
        $__internal_47c6d479881d392cd15c272f0964e6d2773769cc657fb4dc870521cca2431770 = $this->env->getExtension("native_profiler");
        $__internal_47c6d479881d392cd15c272f0964e6d2773769cc657fb4dc870521cca2431770->enter($__internal_47c6d479881d392cd15c272f0964e6d2773769cc657fb4dc870521cca2431770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

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
        
        $__internal_47c6d479881d392cd15c272f0964e6d2773769cc657fb4dc870521cca2431770->leave($__internal_47c6d479881d392cd15c272f0964e6d2773769cc657fb4dc870521cca2431770_prof);

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
