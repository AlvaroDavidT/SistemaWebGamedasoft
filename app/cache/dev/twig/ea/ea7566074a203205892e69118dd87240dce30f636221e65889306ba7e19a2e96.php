<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d223daeb2c82b83ef7a2d1e3bb9e8d4c5686923022ca93fa96bb44eef1abe31a extends Twig_Template
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
        $__internal_95cbd9ce3eb4ad445fcc783ef61befdc111a74161efa0c86788d522b424f6099 = $this->env->getExtension("native_profiler");
        $__internal_95cbd9ce3eb4ad445fcc783ef61befdc111a74161efa0c86788d522b424f6099->enter($__internal_95cbd9ce3eb4ad445fcc783ef61befdc111a74161efa0c86788d522b424f6099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_95cbd9ce3eb4ad445fcc783ef61befdc111a74161efa0c86788d522b424f6099->leave($__internal_95cbd9ce3eb4ad445fcc783ef61befdc111a74161efa0c86788d522b424f6099_prof);

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
