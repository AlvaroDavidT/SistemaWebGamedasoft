<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_04f6166fbddaf050b885fb6dadee65257bb8ea53c9c11b2de80928e8150bd527 extends Twig_Template
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
        $__internal_2fc0ec1b77a8a0cea73c06966c9f1b8783b4306fca379fb50efdd20bbf89ae32 = $this->env->getExtension("native_profiler");
        $__internal_2fc0ec1b77a8a0cea73c06966c9f1b8783b4306fca379fb50efdd20bbf89ae32->enter($__internal_2fc0ec1b77a8a0cea73c06966c9f1b8783b4306fca379fb50efdd20bbf89ae32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2fc0ec1b77a8a0cea73c06966c9f1b8783b4306fca379fb50efdd20bbf89ae32->leave($__internal_2fc0ec1b77a8a0cea73c06966c9f1b8783b4306fca379fb50efdd20bbf89ae32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
