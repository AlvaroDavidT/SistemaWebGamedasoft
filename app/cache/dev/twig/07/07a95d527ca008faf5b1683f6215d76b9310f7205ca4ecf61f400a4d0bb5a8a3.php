<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f335d10626dbc2636b17f6b4849d72274d808711117f2e94782805277bec223c extends Twig_Template
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
        $__internal_b7aa77dfa2faa9429dc16fec11f0833472527355818a6f4f0a2b3fcf4c6919f4 = $this->env->getExtension("native_profiler");
        $__internal_b7aa77dfa2faa9429dc16fec11f0833472527355818a6f4f0a2b3fcf4c6919f4->enter($__internal_b7aa77dfa2faa9429dc16fec11f0833472527355818a6f4f0a2b3fcf4c6919f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b7aa77dfa2faa9429dc16fec11f0833472527355818a6f4f0a2b3fcf4c6919f4->leave($__internal_b7aa77dfa2faa9429dc16fec11f0833472527355818a6f4f0a2b3fcf4c6919f4_prof);

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
