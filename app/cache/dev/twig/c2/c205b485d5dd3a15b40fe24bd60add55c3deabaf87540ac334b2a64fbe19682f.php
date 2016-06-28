<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e07173610a205cb29038cd3196bb20da501d104d4a82f8e19edea10a637863e7 extends Twig_Template
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
        $__internal_a831cfe054b6b659ac75502b1862005148e67ee0c14bc3ac2fc3997447e944fc = $this->env->getExtension("native_profiler");
        $__internal_a831cfe054b6b659ac75502b1862005148e67ee0c14bc3ac2fc3997447e944fc->enter($__internal_a831cfe054b6b659ac75502b1862005148e67ee0c14bc3ac2fc3997447e944fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a831cfe054b6b659ac75502b1862005148e67ee0c14bc3ac2fc3997447e944fc->leave($__internal_a831cfe054b6b659ac75502b1862005148e67ee0c14bc3ac2fc3997447e944fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
