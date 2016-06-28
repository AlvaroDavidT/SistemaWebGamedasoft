<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_abd885b2c0d671179506f213bf15a86065acb31e6d7317c0f3b1f94e342fec1d extends Twig_Template
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
        $__internal_b114f4eea863924a355af480676caf2d69960f5970095c7cd840441c2441fe07 = $this->env->getExtension("native_profiler");
        $__internal_b114f4eea863924a355af480676caf2d69960f5970095c7cd840441c2441fe07->enter($__internal_b114f4eea863924a355af480676caf2d69960f5970095c7cd840441c2441fe07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b114f4eea863924a355af480676caf2d69960f5970095c7cd840441c2441fe07->leave($__internal_b114f4eea863924a355af480676caf2d69960f5970095c7cd840441c2441fe07_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
