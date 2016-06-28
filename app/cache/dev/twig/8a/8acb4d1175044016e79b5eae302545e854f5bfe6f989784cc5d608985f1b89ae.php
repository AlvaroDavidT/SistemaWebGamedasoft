<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d1061d82e66fccaa8cec68be326b0cb65943664d2500303b3d3c108b61ff310b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0fef5a566e261e38eade8b035cf40aa1c053f742b505583a2613569b61230a0 = $this->env->getExtension("native_profiler");
        $__internal_a0fef5a566e261e38eade8b035cf40aa1c053f742b505583a2613569b61230a0->enter($__internal_a0fef5a566e261e38eade8b035cf40aa1c053f742b505583a2613569b61230a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a0fef5a566e261e38eade8b035cf40aa1c053f742b505583a2613569b61230a0->leave($__internal_a0fef5a566e261e38eade8b035cf40aa1c053f742b505583a2613569b61230a0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_843128bf4b452ab5419773640f77fe483bf55c8f6f81c9e9ceb8ca54eec3b71a = $this->env->getExtension("native_profiler");
        $__internal_843128bf4b452ab5419773640f77fe483bf55c8f6f81c9e9ceb8ca54eec3b71a->enter($__internal_843128bf4b452ab5419773640f77fe483bf55c8f6f81c9e9ceb8ca54eec3b71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_843128bf4b452ab5419773640f77fe483bf55c8f6f81c9e9ceb8ca54eec3b71a->leave($__internal_843128bf4b452ab5419773640f77fe483bf55c8f6f81c9e9ceb8ca54eec3b71a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
