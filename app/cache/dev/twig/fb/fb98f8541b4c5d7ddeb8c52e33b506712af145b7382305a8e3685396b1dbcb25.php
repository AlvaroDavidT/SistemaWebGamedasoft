<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_28ac8125aec3ed26ebe2737241cf611060ae1f34978cedaf041a6030d19bc16b extends Twig_Template
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
        $__internal_66647fa9fa2896f7d7f483fd19362fcd154bc7a0bc96a1d36c786e89acd949c2 = $this->env->getExtension("native_profiler");
        $__internal_66647fa9fa2896f7d7f483fd19362fcd154bc7a0bc96a1d36c786e89acd949c2->enter($__internal_66647fa9fa2896f7d7f483fd19362fcd154bc7a0bc96a1d36c786e89acd949c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_66647fa9fa2896f7d7f483fd19362fcd154bc7a0bc96a1d36c786e89acd949c2->leave($__internal_66647fa9fa2896f7d7f483fd19362fcd154bc7a0bc96a1d36c786e89acd949c2_prof);

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
