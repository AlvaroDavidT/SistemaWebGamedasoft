<?php

/* LoginfirstBundle:Estaticas:QS.html.twig */
class __TwigTemplate_e8322c427062c027c6b008e48f5cc57f87a290264d6fa8ff58e9232d0179ea1c extends Twig_Template
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
        $__internal_9d682d8d5d8b51f4bb77b6a36ee0b919f16a66bb293505ebc3e4a2b66ba8abf0 = $this->env->getExtension("native_profiler");
        $__internal_9d682d8d5d8b51f4bb77b6a36ee0b919f16a66bb293505ebc3e4a2b66ba8abf0->enter($__internal_9d682d8d5d8b51f4bb77b6a36ee0b919f16a66bb293505ebc3e4a2b66ba8abf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Estaticas:QS.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d682d8d5d8b51f4bb77b6a36ee0b919f16a66bb293505ebc3e4a2b66ba8abf0->leave($__internal_9d682d8d5d8b51f4bb77b6a36ee0b919f16a66bb293505ebc3e4a2b66ba8abf0_prof);

    }

    // line 3
    public function block_content2($context, array $blocks = array())
    {
        $__internal_0cc7a7b704d9fff8001fccdf0fc78a54db3761be34e92d56038313cb8decfbf3 = $this->env->getExtension("native_profiler");
        $__internal_0cc7a7b704d9fff8001fccdf0fc78a54db3761be34e92d56038313cb8decfbf3->enter($__internal_0cc7a7b704d9fff8001fccdf0fc78a54db3761be34e92d56038313cb8decfbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

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
        
        $__internal_0cc7a7b704d9fff8001fccdf0fc78a54db3761be34e92d56038313cb8decfbf3->leave($__internal_0cc7a7b704d9fff8001fccdf0fc78a54db3761be34e92d56038313cb8decfbf3_prof);

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
