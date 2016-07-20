<?php

/* LoginfirstBundle:Estaticas:Contactos.html.twig */
class __TwigTemplate_cef6d05d7f58072560018503c54c0ba6961623d6d74d8ac1cffda71c79bfd062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout.html.twig", "LoginfirstBundle:Estaticas:Contactos.html.twig", 2);
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
