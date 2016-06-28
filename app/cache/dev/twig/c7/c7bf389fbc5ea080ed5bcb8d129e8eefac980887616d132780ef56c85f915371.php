<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fc3aacb541fca0ef3276eab4568bceb6f7bfccd6d55e2f3f3896fb50b6d46a68 extends Twig_Template
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
        $__internal_f4dea1bb8c497ff322cee545951dc7fe47a0590c5d39e888dfd669e4d59e6a1a = $this->env->getExtension("native_profiler");
        $__internal_f4dea1bb8c497ff322cee545951dc7fe47a0590c5d39e888dfd669e4d59e6a1a->enter($__internal_f4dea1bb8c497ff322cee545951dc7fe47a0590c5d39e888dfd669e4d59e6a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f4dea1bb8c497ff322cee545951dc7fe47a0590c5d39e888dfd669e4d59e6a1a->leave($__internal_f4dea1bb8c497ff322cee545951dc7fe47a0590c5d39e888dfd669e4d59e6a1a_prof);

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
