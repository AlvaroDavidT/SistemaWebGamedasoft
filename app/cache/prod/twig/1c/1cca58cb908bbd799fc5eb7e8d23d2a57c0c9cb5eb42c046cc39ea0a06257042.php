<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_eb0cbc64e6191d2393151140f3ab2f33289ff2333ab169fe23356a68abe40089 extends Twig_Template
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
        $__internal_018228d15a4c8189eaa15e4ae0424a5adfab8059ca1bba3cd9defeadd9de7949 = $this->env->getExtension("native_profiler");
        $__internal_018228d15a4c8189eaa15e4ae0424a5adfab8059ca1bba3cd9defeadd9de7949->enter($__internal_018228d15a4c8189eaa15e4ae0424a5adfab8059ca1bba3cd9defeadd9de7949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_018228d15a4c8189eaa15e4ae0424a5adfab8059ca1bba3cd9defeadd9de7949->leave($__internal_018228d15a4c8189eaa15e4ae0424a5adfab8059ca1bba3cd9defeadd9de7949_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d561b61361a79e0c6a8cf0fe683fc6478a08196f3b724562a8130156f6ef7a3 = $this->env->getExtension("native_profiler");
        $__internal_5d561b61361a79e0c6a8cf0fe683fc6478a08196f3b724562a8130156f6ef7a3->enter($__internal_5d561b61361a79e0c6a8cf0fe683fc6478a08196f3b724562a8130156f6ef7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5d561b61361a79e0c6a8cf0fe683fc6478a08196f3b724562a8130156f6ef7a3->leave($__internal_5d561b61361a79e0c6a8cf0fe683fc6478a08196f3b724562a8130156f6ef7a3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b96697555b58792ec6c2e0e24b3f8e59745ec952336527e60b2daff624f069e = $this->env->getExtension("native_profiler");
        $__internal_4b96697555b58792ec6c2e0e24b3f8e59745ec952336527e60b2daff624f069e->enter($__internal_4b96697555b58792ec6c2e0e24b3f8e59745ec952336527e60b2daff624f069e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b96697555b58792ec6c2e0e24b3f8e59745ec952336527e60b2daff624f069e->leave($__internal_4b96697555b58792ec6c2e0e24b3f8e59745ec952336527e60b2daff624f069e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8a8fc5eb83fc54f7bff38da53293ff0d23d6bde80dcf24aec2e993a37d77de9 = $this->env->getExtension("native_profiler");
        $__internal_b8a8fc5eb83fc54f7bff38da53293ff0d23d6bde80dcf24aec2e993a37d77de9->enter($__internal_b8a8fc5eb83fc54f7bff38da53293ff0d23d6bde80dcf24aec2e993a37d77de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b8a8fc5eb83fc54f7bff38da53293ff0d23d6bde80dcf24aec2e993a37d77de9->leave($__internal_b8a8fc5eb83fc54f7bff38da53293ff0d23d6bde80dcf24aec2e993a37d77de9_prof);

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
