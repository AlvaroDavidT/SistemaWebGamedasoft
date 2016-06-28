<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_438556123d6d2846b49fd33da68f0fb8e4dd4cc5fda56e55513ce43b319ea51d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11eabe73eff6d5ea4d2f4be03c13afb7942d39cc8fb8cfaf4bf738ed06d3957a = $this->env->getExtension("native_profiler");
        $__internal_11eabe73eff6d5ea4d2f4be03c13afb7942d39cc8fb8cfaf4bf738ed06d3957a->enter($__internal_11eabe73eff6d5ea4d2f4be03c13afb7942d39cc8fb8cfaf4bf738ed06d3957a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11eabe73eff6d5ea4d2f4be03c13afb7942d39cc8fb8cfaf4bf738ed06d3957a->leave($__internal_11eabe73eff6d5ea4d2f4be03c13afb7942d39cc8fb8cfaf4bf738ed06d3957a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5897c31e06d04dd2c683f4d21e9c69d4ab1d1bc82f81678375896d0c5c746e7b = $this->env->getExtension("native_profiler");
        $__internal_5897c31e06d04dd2c683f4d21e9c69d4ab1d1bc82f81678375896d0c5c746e7b->enter($__internal_5897c31e06d04dd2c683f4d21e9c69d4ab1d1bc82f81678375896d0c5c746e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5897c31e06d04dd2c683f4d21e9c69d4ab1d1bc82f81678375896d0c5c746e7b->leave($__internal_5897c31e06d04dd2c683f4d21e9c69d4ab1d1bc82f81678375896d0c5c746e7b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8011ba59543aff93e5c144fd7a30be8f9ee09afbe4f78d468a8d200c3c77e08a = $this->env->getExtension("native_profiler");
        $__internal_8011ba59543aff93e5c144fd7a30be8f9ee09afbe4f78d468a8d200c3c77e08a->enter($__internal_8011ba59543aff93e5c144fd7a30be8f9ee09afbe4f78d468a8d200c3c77e08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8011ba59543aff93e5c144fd7a30be8f9ee09afbe4f78d468a8d200c3c77e08a->leave($__internal_8011ba59543aff93e5c144fd7a30be8f9ee09afbe4f78d468a8d200c3c77e08a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
