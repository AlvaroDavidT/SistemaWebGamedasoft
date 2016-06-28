<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_058d64d1e29b32e5baee5c67672a519486486c42a0d6b883f54692ec4fc71807 extends Twig_Template
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
        $__internal_2fe9f532c5c05d9eb6076051ccf8ec6725aaede87614a6e16c0a28ae4f674745 = $this->env->getExtension("native_profiler");
        $__internal_2fe9f532c5c05d9eb6076051ccf8ec6725aaede87614a6e16c0a28ae4f674745->enter($__internal_2fe9f532c5c05d9eb6076051ccf8ec6725aaede87614a6e16c0a28ae4f674745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2fe9f532c5c05d9eb6076051ccf8ec6725aaede87614a6e16c0a28ae4f674745->leave($__internal_2fe9f532c5c05d9eb6076051ccf8ec6725aaede87614a6e16c0a28ae4f674745_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
