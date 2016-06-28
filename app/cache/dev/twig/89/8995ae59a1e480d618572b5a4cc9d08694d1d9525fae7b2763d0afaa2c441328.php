<?php

/* LoginfirstBundle:Estaticas:Contactos.html.twig */
class __TwigTemplate_979373e5d572a1f046fc4e7a858e42cf567b3637e94f45c3fc5640405cb4d60b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout.html.twig", "LoginfirstBundle:Estaticas:Contactos.html.twig", 2);
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
        $__internal_d433a5773be813cadb985ae293389b649cdfc98af3cf644be7d0576233e9c2da = $this->env->getExtension("native_profiler");
        $__internal_d433a5773be813cadb985ae293389b649cdfc98af3cf644be7d0576233e9c2da->enter($__internal_d433a5773be813cadb985ae293389b649cdfc98af3cf644be7d0576233e9c2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Estaticas:Contactos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d433a5773be813cadb985ae293389b649cdfc98af3cf644be7d0576233e9c2da->leave($__internal_d433a5773be813cadb985ae293389b649cdfc98af3cf644be7d0576233e9c2da_prof);

    }

    // line 3
    public function block_content2($context, array $blocks = array())
    {
        $__internal_1f1a1d2d70383714b986ec41089f561e50def2e022fbcebc7db59a3c0bb44d54 = $this->env->getExtension("native_profiler");
        $__internal_1f1a1d2d70383714b986ec41089f561e50def2e022fbcebc7db59a3c0bb44d54->enter($__internal_1f1a1d2d70383714b986ec41089f561e50def2e022fbcebc7db59a3c0bb44d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\" style=\"text-align:center;\">
              
                <img id=\"img_logoQS\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/contactenos.gif"), "html", null, true);
        echo "\" alt=\"!\"  />
            
            </div>
            <div class=\"col-sm-8\">
                  <div class=\"Titulo\">
                    Contactos
                </div>
                   <hr>
                 <div class=\"Texto\">
                     <address>
                         <strong>Direccion:</strong><br>
                         Av. Amazonas N25-23 y Av. Colon Ed. España piso 7 of. 77<br>
                     
                         <abbr title=\"Phone\"> <span class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"> </abbr> (02)-2345904
                     </address>

                     <address>
                         <strong>E-mail</strong><br>
                         <a href=\"mailto:#\">  <span class=\"glyphicons glyphicon-envelope\"> </span> &nbsp; info@gamedasoft.com</a>
                     </address>
                 </div>
                 <hr>
            
            </div>
        </div>
        
    </div>
";
        
        $__internal_1f1a1d2d70383714b986ec41089f561e50def2e022fbcebc7db59a3c0bb44d54->leave($__internal_1f1a1d2d70383714b986ec41089f561e50def2e022fbcebc7db59a3c0bb44d54_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Estaticas:Contactos.html.twig";
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
/*                 <img id="img_logoQS" src="{{asset('bundles/loginfirst/Imagenes/contactenos.gif')}}" alt="!"  />*/
/*             */
/*             </div>*/
/*             <div class="col-sm-8">*/
/*                   <div class="Titulo">*/
/*                     Contactos*/
/*                 </div>*/
/*                    <hr>*/
/*                  <div class="Texto">*/
/*                      <address>*/
/*                          <strong>Direccion:</strong><br>*/
/*                          Av. Amazonas N25-23 y Av. Colon Ed. España piso 7 of. 77<br>*/
/*                      */
/*                          <abbr title="Phone"> <span class="glyphicon glyphicon-earphone" aria-hidden="true"> </abbr> (02)-2345904*/
/*                      </address>*/
/* */
/*                      <address>*/
/*                          <strong>E-mail</strong><br>*/
/*                          <a href="mailto:#">  <span class="glyphicons glyphicon-envelope"> </span> &nbsp; info@gamedasoft.com</a>*/
/*                      </address>*/
/*                  </div>*/
/*                  <hr>*/
/*             */
/*             </div>*/
/*         </div>*/
/*         */
/*     </div>*/
/* {%  endblock%}*/
/* */
