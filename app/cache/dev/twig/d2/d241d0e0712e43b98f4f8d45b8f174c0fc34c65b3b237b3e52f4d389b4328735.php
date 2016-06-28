<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4abd650461f2da0332d6e7d9efb5e2a018dd67487601c74286c0a89045b4bf9d extends Twig_Template
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
        $__internal_9911b5ddb286e2e3b340bba5ed1ea820f23be042eec21a2d7e6c32d3ecf02c74 = $this->env->getExtension("native_profiler");
        $__internal_9911b5ddb286e2e3b340bba5ed1ea820f23be042eec21a2d7e6c32d3ecf02c74->enter($__internal_9911b5ddb286e2e3b340bba5ed1ea820f23be042eec21a2d7e6c32d3ecf02c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9911b5ddb286e2e3b340bba5ed1ea820f23be042eec21a2d7e6c32d3ecf02c74->leave($__internal_9911b5ddb286e2e3b340bba5ed1ea820f23be042eec21a2d7e6c32d3ecf02c74_prof);

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
