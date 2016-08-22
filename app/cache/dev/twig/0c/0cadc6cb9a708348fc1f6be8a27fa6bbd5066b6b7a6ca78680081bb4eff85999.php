<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2dbdb9197849999ab4217cec641cc620df86afb26071c84068bd21d5f6e52ca8 extends Twig_Template
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
        $__internal_6ffb03d155a77e487e684e6b5bf011a58dceec46ce326c96e12baec9ef7662b1 = $this->env->getExtension("native_profiler");
        $__internal_6ffb03d155a77e487e684e6b5bf011a58dceec46ce326c96e12baec9ef7662b1->enter($__internal_6ffb03d155a77e487e684e6b5bf011a58dceec46ce326c96e12baec9ef7662b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6ffb03d155a77e487e684e6b5bf011a58dceec46ce326c96e12baec9ef7662b1->leave($__internal_6ffb03d155a77e487e684e6b5bf011a58dceec46ce326c96e12baec9ef7662b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
