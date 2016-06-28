<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_aa13eb0baaa199bc9257fea01e47d64f738cf71a0959c25e4a0a063e0b3aca14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8ee778eae497a1a59cf186a6be54bcdb6adb50c5a88ae1e50ae884ac8b88ce78 = $this->env->getExtension("native_profiler");
        $__internal_8ee778eae497a1a59cf186a6be54bcdb6adb50c5a88ae1e50ae884ac8b88ce78->enter($__internal_8ee778eae497a1a59cf186a6be54bcdb6adb50c5a88ae1e50ae884ac8b88ce78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ee778eae497a1a59cf186a6be54bcdb6adb50c5a88ae1e50ae884ac8b88ce78->leave($__internal_8ee778eae497a1a59cf186a6be54bcdb6adb50c5a88ae1e50ae884ac8b88ce78_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a11968f468b6640e63efe44cfc9ad871ffca5f4a6302381bbcbc1663cb9c9c53 = $this->env->getExtension("native_profiler");
        $__internal_a11968f468b6640e63efe44cfc9ad871ffca5f4a6302381bbcbc1663cb9c9c53->enter($__internal_a11968f468b6640e63efe44cfc9ad871ffca5f4a6302381bbcbc1663cb9c9c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a11968f468b6640e63efe44cfc9ad871ffca5f4a6302381bbcbc1663cb9c9c53->leave($__internal_a11968f468b6640e63efe44cfc9ad871ffca5f4a6302381bbcbc1663cb9c9c53_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_14be33130f9565191008d50554a840b4e0d2acddde2270e249c3696dde7e47af = $this->env->getExtension("native_profiler");
        $__internal_14be33130f9565191008d50554a840b4e0d2acddde2270e249c3696dde7e47af->enter($__internal_14be33130f9565191008d50554a840b4e0d2acddde2270e249c3696dde7e47af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_14be33130f9565191008d50554a840b4e0d2acddde2270e249c3696dde7e47af->leave($__internal_14be33130f9565191008d50554a840b4e0d2acddde2270e249c3696dde7e47af_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_670e3f4a447b4ac4b421892360a8e5b33c88d846dd4dc65fb14998252cce2d21 = $this->env->getExtension("native_profiler");
        $__internal_670e3f4a447b4ac4b421892360a8e5b33c88d846dd4dc65fb14998252cce2d21->enter($__internal_670e3f4a447b4ac4b421892360a8e5b33c88d846dd4dc65fb14998252cce2d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_670e3f4a447b4ac4b421892360a8e5b33c88d846dd4dc65fb14998252cce2d21->leave($__internal_670e3f4a447b4ac4b421892360a8e5b33c88d846dd4dc65fb14998252cce2d21_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
