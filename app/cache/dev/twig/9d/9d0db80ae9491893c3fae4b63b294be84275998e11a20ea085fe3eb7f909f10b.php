<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_fadd62db6e779b52548d855b82a2e407e17cdbdca7bb2f64cbc4255665a808b1 extends Twig_Template
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
        $__internal_be4ef80044d333ee900e346c1506127601b37e2182e2b8cf8ad9a759ec601115 = $this->env->getExtension("native_profiler");
        $__internal_be4ef80044d333ee900e346c1506127601b37e2182e2b8cf8ad9a759ec601115->enter($__internal_be4ef80044d333ee900e346c1506127601b37e2182e2b8cf8ad9a759ec601115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_be4ef80044d333ee900e346c1506127601b37e2182e2b8cf8ad9a759ec601115->leave($__internal_be4ef80044d333ee900e346c1506127601b37e2182e2b8cf8ad9a759ec601115_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
