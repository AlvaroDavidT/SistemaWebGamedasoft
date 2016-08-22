<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3dd4ad037c97668fa15ac6a1977a9390d948f7d7b690af51c6d50fb7b17a4421 extends Twig_Template
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
        $__internal_7c1e6399a79d94172e093c55a407f29ad0bcc9726ca376cc10f34c2b49509bb6 = $this->env->getExtension("native_profiler");
        $__internal_7c1e6399a79d94172e093c55a407f29ad0bcc9726ca376cc10f34c2b49509bb6->enter($__internal_7c1e6399a79d94172e093c55a407f29ad0bcc9726ca376cc10f34c2b49509bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7c1e6399a79d94172e093c55a407f29ad0bcc9726ca376cc10f34c2b49509bb6->leave($__internal_7c1e6399a79d94172e093c55a407f29ad0bcc9726ca376cc10f34c2b49509bb6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5b316958cc916667b6fc9db7387fab79e8064b1b8e687c347fd2ad5faaed2fb = $this->env->getExtension("native_profiler");
        $__internal_d5b316958cc916667b6fc9db7387fab79e8064b1b8e687c347fd2ad5faaed2fb->enter($__internal_d5b316958cc916667b6fc9db7387fab79e8064b1b8e687c347fd2ad5faaed2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d5b316958cc916667b6fc9db7387fab79e8064b1b8e687c347fd2ad5faaed2fb->leave($__internal_d5b316958cc916667b6fc9db7387fab79e8064b1b8e687c347fd2ad5faaed2fb_prof);

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
