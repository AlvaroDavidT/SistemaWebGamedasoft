<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cb9c6a935bbc8c73e7507854bb0edd8f7875ae35ccc21eaf6163a3850df9ea86 extends Twig_Template
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
        $__internal_3b9967b521607de1dd669256ccd17c150caa8ecca8a5073f1f314b62489a3e69 = $this->env->getExtension("native_profiler");
        $__internal_3b9967b521607de1dd669256ccd17c150caa8ecca8a5073f1f314b62489a3e69->enter($__internal_3b9967b521607de1dd669256ccd17c150caa8ecca8a5073f1f314b62489a3e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3b9967b521607de1dd669256ccd17c150caa8ecca8a5073f1f314b62489a3e69->leave($__internal_3b9967b521607de1dd669256ccd17c150caa8ecca8a5073f1f314b62489a3e69_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
