<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0f5ee090922f13d8fbf0a858c393512769392151da187c7db6ee44273a533770 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2976cd9fb4637f6873344d4e760b28cc494fe4e15394d58d9c315dc967e6a0d4 = $this->env->getExtension("native_profiler");
        $__internal_2976cd9fb4637f6873344d4e760b28cc494fe4e15394d58d9c315dc967e6a0d4->enter($__internal_2976cd9fb4637f6873344d4e760b28cc494fe4e15394d58d9c315dc967e6a0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2976cd9fb4637f6873344d4e760b28cc494fe4e15394d58d9c315dc967e6a0d4->leave($__internal_2976cd9fb4637f6873344d4e760b28cc494fe4e15394d58d9c315dc967e6a0d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
