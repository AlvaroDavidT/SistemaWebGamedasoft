<?php

/* LoginfirstBundle:Estaticas:Nosotros.html.twig */
class __TwigTemplate_48b5cce0f24861a9519afa5579beb7448ce0f6194303c4426d94daa6d485aab4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout.html.twig", "LoginfirstBundle:Estaticas:Nosotros.html.twig", 2);
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
        $__internal_544a55c787006e204221e6d1b941cc747392ac72a94677dba671dd43a8f9abae = $this->env->getExtension("native_profiler");
        $__internal_544a55c787006e204221e6d1b941cc747392ac72a94677dba671dd43a8f9abae->enter($__internal_544a55c787006e204221e6d1b941cc747392ac72a94677dba671dd43a8f9abae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Estaticas:Nosotros.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_544a55c787006e204221e6d1b941cc747392ac72a94677dba671dd43a8f9abae->leave($__internal_544a55c787006e204221e6d1b941cc747392ac72a94677dba671dd43a8f9abae_prof);

    }

    // line 3
    public function block_content2($context, array $blocks = array())
    {
        $__internal_9a03f6f62f1f2df873daa60e479e9a5710a633f526fc58159fd909aa3bd51f45 = $this->env->getExtension("native_profiler");
        $__internal_9a03f6f62f1f2df873daa60e479e9a5710a633f526fc58159fd909aa3bd51f45->enter($__internal_9a03f6f62f1f2df873daa60e479e9a5710a633f526fc58159fd909aa3bd51f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

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
        
        $__internal_9a03f6f62f1f2df873daa60e479e9a5710a633f526fc58159fd909aa3bd51f45->leave($__internal_9a03f6f62f1f2df873daa60e479e9a5710a633f526fc58159fd909aa3bd51f45_prof);

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
/* {% extends 'LoginfirstBundle::layout.html.twig' %}*/
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
