<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_44d515cb3779c7137cfb5dde895c84e159a33d4ed57bb5b4d3b453a587400963 extends Twig_Template
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
        $__internal_b3c2d7c0538d3adddb524f68e75eec1eee15fcba2d5a1670495f4085548f621f = $this->env->getExtension("native_profiler");
        $__internal_b3c2d7c0538d3adddb524f68e75eec1eee15fcba2d5a1670495f4085548f621f->enter($__internal_b3c2d7c0538d3adddb524f68e75eec1eee15fcba2d5a1670495f4085548f621f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b3c2d7c0538d3adddb524f68e75eec1eee15fcba2d5a1670495f4085548f621f->leave($__internal_b3c2d7c0538d3adddb524f68e75eec1eee15fcba2d5a1670495f4085548f621f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
