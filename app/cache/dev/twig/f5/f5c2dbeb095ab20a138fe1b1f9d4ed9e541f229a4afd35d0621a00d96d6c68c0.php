<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e4d7396854942a458e0944a225fbbbd269c311a8ae4b25207e6387e9a42d23fa extends Twig_Template
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
        $__internal_85e4d067189f3dd6d17ad1b2a47fbc2223659999a783ce784e82f02d8a0e9feb = $this->env->getExtension("native_profiler");
        $__internal_85e4d067189f3dd6d17ad1b2a47fbc2223659999a783ce784e82f02d8a0e9feb->enter($__internal_85e4d067189f3dd6d17ad1b2a47fbc2223659999a783ce784e82f02d8a0e9feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_85e4d067189f3dd6d17ad1b2a47fbc2223659999a783ce784e82f02d8a0e9feb->leave($__internal_85e4d067189f3dd6d17ad1b2a47fbc2223659999a783ce784e82f02d8a0e9feb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
