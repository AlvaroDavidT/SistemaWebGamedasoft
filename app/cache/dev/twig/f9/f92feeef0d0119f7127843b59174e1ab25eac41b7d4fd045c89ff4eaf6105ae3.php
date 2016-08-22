<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_12c626318eca0fde3682f72c2ac6644a1a0f11d9de6d61a452c347d4ce89dd62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73b11e1d94ac92717963218ef375866e5e9f374ac9665d6964b7a74fba914c89 = $this->env->getExtension("native_profiler");
        $__internal_73b11e1d94ac92717963218ef375866e5e9f374ac9665d6964b7a74fba914c89->enter($__internal_73b11e1d94ac92717963218ef375866e5e9f374ac9665d6964b7a74fba914c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73b11e1d94ac92717963218ef375866e5e9f374ac9665d6964b7a74fba914c89->leave($__internal_73b11e1d94ac92717963218ef375866e5e9f374ac9665d6964b7a74fba914c89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3054442e021784f7869b86659361cdc67b91294a5650d16e350c510c3a382a4c = $this->env->getExtension("native_profiler");
        $__internal_3054442e021784f7869b86659361cdc67b91294a5650d16e350c510c3a382a4c->enter($__internal_3054442e021784f7869b86659361cdc67b91294a5650d16e350c510c3a382a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_3054442e021784f7869b86659361cdc67b91294a5650d16e350c510c3a382a4c->leave($__internal_3054442e021784f7869b86659361cdc67b91294a5650d16e350c510c3a382a4c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_01404298f4f022c63fd10fdd39e73b3e6a98012ce421b79cdfa50a8682e81654 = $this->env->getExtension("native_profiler");
        $__internal_01404298f4f022c63fd10fdd39e73b3e6a98012ce421b79cdfa50a8682e81654->enter($__internal_01404298f4f022c63fd10fdd39e73b3e6a98012ce421b79cdfa50a8682e81654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_01404298f4f022c63fd10fdd39e73b3e6a98012ce421b79cdfa50a8682e81654->leave($__internal_01404298f4f022c63fd10fdd39e73b3e6a98012ce421b79cdfa50a8682e81654_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ee5c39af5c4829f2547e5fb95a7c9b551d2ca8b903516be71e53e1048f2a07c = $this->env->getExtension("native_profiler");
        $__internal_5ee5c39af5c4829f2547e5fb95a7c9b551d2ca8b903516be71e53e1048f2a07c->enter($__internal_5ee5c39af5c4829f2547e5fb95a7c9b551d2ca8b903516be71e53e1048f2a07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_5ee5c39af5c4829f2547e5fb95a7c9b551d2ca8b903516be71e53e1048f2a07c->leave($__internal_5ee5c39af5c4829f2547e5fb95a7c9b551d2ca8b903516be71e53e1048f2a07c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_21515daaf423c23ab19d96fb8ac43876ccfa8d0869afd4e530c92eb8fe64510c = $this->env->getExtension("native_profiler");
        $__internal_21515daaf423c23ab19d96fb8ac43876ccfa8d0869afd4e530c92eb8fe64510c->enter($__internal_21515daaf423c23ab19d96fb8ac43876ccfa8d0869afd4e530c92eb8fe64510c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_21515daaf423c23ab19d96fb8ac43876ccfa8d0869afd4e530c92eb8fe64510c->leave($__internal_21515daaf423c23ab19d96fb8ac43876ccfa8d0869afd4e530c92eb8fe64510c_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
