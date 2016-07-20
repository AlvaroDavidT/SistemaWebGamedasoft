<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_874c58ee88476354b686f8054ec6a2348f597789d6c89fdf899f081281d9a759 extends Twig_Template
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
        $__internal_080e48feb36a911b43ba1bbe9e69ece790970b44b329dab41ebd814fa600f702 = $this->env->getExtension("native_profiler");
        $__internal_080e48feb36a911b43ba1bbe9e69ece790970b44b329dab41ebd814fa600f702->enter($__internal_080e48feb36a911b43ba1bbe9e69ece790970b44b329dab41ebd814fa600f702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_080e48feb36a911b43ba1bbe9e69ece790970b44b329dab41ebd814fa600f702->leave($__internal_080e48feb36a911b43ba1bbe9e69ece790970b44b329dab41ebd814fa600f702_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd44420ceaf3b05e034f4c86cf44777ac167eb94a6c81a9da7d3191a8a135876 = $this->env->getExtension("native_profiler");
        $__internal_bd44420ceaf3b05e034f4c86cf44777ac167eb94a6c81a9da7d3191a8a135876->enter($__internal_bd44420ceaf3b05e034f4c86cf44777ac167eb94a6c81a9da7d3191a8a135876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bd44420ceaf3b05e034f4c86cf44777ac167eb94a6c81a9da7d3191a8a135876->leave($__internal_bd44420ceaf3b05e034f4c86cf44777ac167eb94a6c81a9da7d3191a8a135876_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b093d321ae7050ad86f851723135de90ffa36f8589ec1c478dd8efde76b5fe6f = $this->env->getExtension("native_profiler");
        $__internal_b093d321ae7050ad86f851723135de90ffa36f8589ec1c478dd8efde76b5fe6f->enter($__internal_b093d321ae7050ad86f851723135de90ffa36f8589ec1c478dd8efde76b5fe6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b093d321ae7050ad86f851723135de90ffa36f8589ec1c478dd8efde76b5fe6f->leave($__internal_b093d321ae7050ad86f851723135de90ffa36f8589ec1c478dd8efde76b5fe6f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a377907cb43b1a46e86fb9356610f00f9f12bf6cad06c7ff7c60e635dc8034b = $this->env->getExtension("native_profiler");
        $__internal_7a377907cb43b1a46e86fb9356610f00f9f12bf6cad06c7ff7c60e635dc8034b->enter($__internal_7a377907cb43b1a46e86fb9356610f00f9f12bf6cad06c7ff7c60e635dc8034b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7a377907cb43b1a46e86fb9356610f00f9f12bf6cad06c7ff7c60e635dc8034b->leave($__internal_7a377907cb43b1a46e86fb9356610f00f9f12bf6cad06c7ff7c60e635dc8034b_prof);

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
