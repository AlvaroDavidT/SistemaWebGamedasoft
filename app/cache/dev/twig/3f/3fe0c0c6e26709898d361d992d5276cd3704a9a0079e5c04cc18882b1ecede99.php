<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b8fcb4dfc1664dc00cd027cf6d51b4cf768d33f451a062f06c3aaa0c5fd6742e extends Twig_Template
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
        $__internal_af0c50359f44f703340eb570de5db7761095da1ceb1ad13551e21e1b8d12c8b2 = $this->env->getExtension("native_profiler");
        $__internal_af0c50359f44f703340eb570de5db7761095da1ceb1ad13551e21e1b8d12c8b2->enter($__internal_af0c50359f44f703340eb570de5db7761095da1ceb1ad13551e21e1b8d12c8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_af0c50359f44f703340eb570de5db7761095da1ceb1ad13551e21e1b8d12c8b2->leave($__internal_af0c50359f44f703340eb570de5db7761095da1ceb1ad13551e21e1b8d12c8b2_prof);

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
