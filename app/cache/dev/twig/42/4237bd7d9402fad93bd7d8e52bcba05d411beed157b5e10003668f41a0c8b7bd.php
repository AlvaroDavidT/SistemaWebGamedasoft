<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_67b0abd42986256691612baccdc52900506e66bc1f8a444d0e26325966c91c5b extends Twig_Template
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
        $__internal_81e4040f6c78a4223b464d7cb28c254e59d04fea615b1b1d65c2755aa4fafb38 = $this->env->getExtension("native_profiler");
        $__internal_81e4040f6c78a4223b464d7cb28c254e59d04fea615b1b1d65c2755aa4fafb38->enter($__internal_81e4040f6c78a4223b464d7cb28c254e59d04fea615b1b1d65c2755aa4fafb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81e4040f6c78a4223b464d7cb28c254e59d04fea615b1b1d65c2755aa4fafb38->leave($__internal_81e4040f6c78a4223b464d7cb28c254e59d04fea615b1b1d65c2755aa4fafb38_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1eae56e1ed5f15e5799431598fdd1c96aedb582d12351c6eae18579812a887eb = $this->env->getExtension("native_profiler");
        $__internal_1eae56e1ed5f15e5799431598fdd1c96aedb582d12351c6eae18579812a887eb->enter($__internal_1eae56e1ed5f15e5799431598fdd1c96aedb582d12351c6eae18579812a887eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1eae56e1ed5f15e5799431598fdd1c96aedb582d12351c6eae18579812a887eb->leave($__internal_1eae56e1ed5f15e5799431598fdd1c96aedb582d12351c6eae18579812a887eb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb40323de298a7e36deb9fda9495764b22765abcce7d85fb8349cc0793981510 = $this->env->getExtension("native_profiler");
        $__internal_fb40323de298a7e36deb9fda9495764b22765abcce7d85fb8349cc0793981510->enter($__internal_fb40323de298a7e36deb9fda9495764b22765abcce7d85fb8349cc0793981510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fb40323de298a7e36deb9fda9495764b22765abcce7d85fb8349cc0793981510->leave($__internal_fb40323de298a7e36deb9fda9495764b22765abcce7d85fb8349cc0793981510_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b66ebadfefb9cba51c80016f0a84950c050bf634067d356d6df85341e33e3e5e = $this->env->getExtension("native_profiler");
        $__internal_b66ebadfefb9cba51c80016f0a84950c050bf634067d356d6df85341e33e3e5e->enter($__internal_b66ebadfefb9cba51c80016f0a84950c050bf634067d356d6df85341e33e3e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b66ebadfefb9cba51c80016f0a84950c050bf634067d356d6df85341e33e3e5e->leave($__internal_b66ebadfefb9cba51c80016f0a84950c050bf634067d356d6df85341e33e3e5e_prof);

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
