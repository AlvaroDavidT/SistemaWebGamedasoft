<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_376983b13c295e2057549e5ea09848ff69438f9ad92ae27bf30e7d69f3c0c375 extends Twig_Template
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
        $__internal_ef812d3b5cf7ffc103a3f7b9cfc082cd55897b514fd69d302949e6b580579b3c = $this->env->getExtension("native_profiler");
        $__internal_ef812d3b5cf7ffc103a3f7b9cfc082cd55897b514fd69d302949e6b580579b3c->enter($__internal_ef812d3b5cf7ffc103a3f7b9cfc082cd55897b514fd69d302949e6b580579b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ef812d3b5cf7ffc103a3f7b9cfc082cd55897b514fd69d302949e6b580579b3c->leave($__internal_ef812d3b5cf7ffc103a3f7b9cfc082cd55897b514fd69d302949e6b580579b3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
