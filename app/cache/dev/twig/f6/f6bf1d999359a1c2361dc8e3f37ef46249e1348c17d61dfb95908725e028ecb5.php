<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_58efd647dcf4194a72c814875f3cc298f5822e0912d351820582d92b5cffa09e extends Twig_Template
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
        $__internal_0b2d51bab3e6f07b6c7aa252e9d93a6007612fb675b14fbec68ac22d2ecec1f2 = $this->env->getExtension("native_profiler");
        $__internal_0b2d51bab3e6f07b6c7aa252e9d93a6007612fb675b14fbec68ac22d2ecec1f2->enter($__internal_0b2d51bab3e6f07b6c7aa252e9d93a6007612fb675b14fbec68ac22d2ecec1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0b2d51bab3e6f07b6c7aa252e9d93a6007612fb675b14fbec68ac22d2ecec1f2->leave($__internal_0b2d51bab3e6f07b6c7aa252e9d93a6007612fb675b14fbec68ac22d2ecec1f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
