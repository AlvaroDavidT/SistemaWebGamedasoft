<?php

/* LoginfirstBundle:Estaticas:QS.html.twig */
class __TwigTemplate_61b203744772f5c8158c18389b422323f040ef0d258af807787ba0dd337dbe9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout.html.twig", "LoginfirstBundle:Estaticas:QS.html.twig", 2);
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
        $__internal_193b470892639354d9c801e8788b9df48511a5e268eaaf9cb88626f281d79c4e = $this->env->getExtension("native_profiler");
        $__internal_193b470892639354d9c801e8788b9df48511a5e268eaaf9cb88626f281d79c4e->enter($__internal_193b470892639354d9c801e8788b9df48511a5e268eaaf9cb88626f281d79c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Estaticas:QS.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_193b470892639354d9c801e8788b9df48511a5e268eaaf9cb88626f281d79c4e->leave($__internal_193b470892639354d9c801e8788b9df48511a5e268eaaf9cb88626f281d79c4e_prof);

    }

    // line 3
    public function block_content2($context, array $blocks = array())
    {
        $__internal_1b950c89b78e47e21ef580e3ba1489064365b12f020e1de82ef2e1b9c73377d4 = $this->env->getExtension("native_profiler");
        $__internal_1b950c89b78e47e21ef580e3ba1489064365b12f020e1de82ef2e1b9c73377d4->enter($__internal_1b950c89b78e47e21ef580e3ba1489064365b12f020e1de82ef2e1b9c73377d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

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
        
        $__internal_1b950c89b78e47e21ef580e3ba1489064365b12f020e1de82ef2e1b9c73377d4->leave($__internal_1b950c89b78e47e21ef580e3ba1489064365b12f020e1de82ef2e1b9c73377d4_prof);

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
        return array (  46 => 8,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Estaticas/index.html.twig #}*/
/* {% extends 'LoginfirstBundle::layout.html.twig' %}*/
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
