<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e656979c9fc923c665e5b78aaa9342bfd610de979f5ebc67166a0201dfd4d656 extends Twig_Template
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
        $__internal_8b53585a7bd49d12229f5e3df11b337f22881279bc363a6b1160abc8c307ae1f = $this->env->getExtension("native_profiler");
        $__internal_8b53585a7bd49d12229f5e3df11b337f22881279bc363a6b1160abc8c307ae1f->enter($__internal_8b53585a7bd49d12229f5e3df11b337f22881279bc363a6b1160abc8c307ae1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_8b53585a7bd49d12229f5e3df11b337f22881279bc363a6b1160abc8c307ae1f->leave($__internal_8b53585a7bd49d12229f5e3df11b337f22881279bc363a6b1160abc8c307ae1f_prof);

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
