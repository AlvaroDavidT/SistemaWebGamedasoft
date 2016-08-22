<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b9c6604bc14ece14626fd19bfc7e0cb1566033917206dfeda3cb836815d38eca extends Twig_Template
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
        $__internal_e639b2e9a6b5082f7bdb04c368dae85c6b29c488fcf08984ca5b0c807dc49d44 = $this->env->getExtension("native_profiler");
        $__internal_e639b2e9a6b5082f7bdb04c368dae85c6b29c488fcf08984ca5b0c807dc49d44->enter($__internal_e639b2e9a6b5082f7bdb04c368dae85c6b29c488fcf08984ca5b0c807dc49d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e639b2e9a6b5082f7bdb04c368dae85c6b29c488fcf08984ca5b0c807dc49d44->leave($__internal_e639b2e9a6b5082f7bdb04c368dae85c6b29c488fcf08984ca5b0c807dc49d44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
