<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_318f8c1637b1f55504e3891460c14de17c05cc884bde405827b743e7f453e0b4 extends Twig_Template
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
        $__internal_3a1fcf53903347c7029d8933bf80aa9151b20e8e819c25bc40bf4d87aebaf39d = $this->env->getExtension("native_profiler");
        $__internal_3a1fcf53903347c7029d8933bf80aa9151b20e8e819c25bc40bf4d87aebaf39d->enter($__internal_3a1fcf53903347c7029d8933bf80aa9151b20e8e819c25bc40bf4d87aebaf39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3a1fcf53903347c7029d8933bf80aa9151b20e8e819c25bc40bf4d87aebaf39d->leave($__internal_3a1fcf53903347c7029d8933bf80aa9151b20e8e819c25bc40bf4d87aebaf39d_prof);

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
