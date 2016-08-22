<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_75bcb3f6602f976e3d1f6a24c6c77b315cd3d01e3298699fcb74c6b783b19024 extends Twig_Template
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
        $__internal_39cad61b6448a1883cf230a2f3011eca371780e244c46f122e44c26acd22686d = $this->env->getExtension("native_profiler");
        $__internal_39cad61b6448a1883cf230a2f3011eca371780e244c46f122e44c26acd22686d->enter($__internal_39cad61b6448a1883cf230a2f3011eca371780e244c46f122e44c26acd22686d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_39cad61b6448a1883cf230a2f3011eca371780e244c46f122e44c26acd22686d->leave($__internal_39cad61b6448a1883cf230a2f3011eca371780e244c46f122e44c26acd22686d_prof);

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
