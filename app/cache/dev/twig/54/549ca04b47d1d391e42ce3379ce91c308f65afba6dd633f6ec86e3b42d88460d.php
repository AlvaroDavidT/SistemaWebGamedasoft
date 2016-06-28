<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_68e334e8c0f53bf1934b583979cd08b45b6e35c5c67305489f4faf6dd71bf894 extends Twig_Template
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
        $__internal_55dedf1bbf61a5c578a230e7ecc3362c263554dcc8a85e6d1a63ce5814f76b5c = $this->env->getExtension("native_profiler");
        $__internal_55dedf1bbf61a5c578a230e7ecc3362c263554dcc8a85e6d1a63ce5814f76b5c->enter($__internal_55dedf1bbf61a5c578a230e7ecc3362c263554dcc8a85e6d1a63ce5814f76b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55dedf1bbf61a5c578a230e7ecc3362c263554dcc8a85e6d1a63ce5814f76b5c->leave($__internal_55dedf1bbf61a5c578a230e7ecc3362c263554dcc8a85e6d1a63ce5814f76b5c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e6124d622b4e305012319f8b098a9601cb0bdc8e1764a0b9db7841846558552 = $this->env->getExtension("native_profiler");
        $__internal_8e6124d622b4e305012319f8b098a9601cb0bdc8e1764a0b9db7841846558552->enter($__internal_8e6124d622b4e305012319f8b098a9601cb0bdc8e1764a0b9db7841846558552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_8e6124d622b4e305012319f8b098a9601cb0bdc8e1764a0b9db7841846558552->leave($__internal_8e6124d622b4e305012319f8b098a9601cb0bdc8e1764a0b9db7841846558552_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd7cf60227b3ca4dd56228ec6966ddd5ad583ab871adf03bf12df719a844fe8b = $this->env->getExtension("native_profiler");
        $__internal_fd7cf60227b3ca4dd56228ec6966ddd5ad583ab871adf03bf12df719a844fe8b->enter($__internal_fd7cf60227b3ca4dd56228ec6966ddd5ad583ab871adf03bf12df719a844fe8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_fd7cf60227b3ca4dd56228ec6966ddd5ad583ab871adf03bf12df719a844fe8b->leave($__internal_fd7cf60227b3ca4dd56228ec6966ddd5ad583ab871adf03bf12df719a844fe8b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b536d9ea2a30f11adca40898a8d7f2cd48d0579ff1224228c5adb52e9ec1e61 = $this->env->getExtension("native_profiler");
        $__internal_2b536d9ea2a30f11adca40898a8d7f2cd48d0579ff1224228c5adb52e9ec1e61->enter($__internal_2b536d9ea2a30f11adca40898a8d7f2cd48d0579ff1224228c5adb52e9ec1e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2b536d9ea2a30f11adca40898a8d7f2cd48d0579ff1224228c5adb52e9ec1e61->leave($__internal_2b536d9ea2a30f11adca40898a8d7f2cd48d0579ff1224228c5adb52e9ec1e61_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a25e726bd83490e7cc1655df12dca37aa4ce68897fa15ace86245b8042ce3fd5 = $this->env->getExtension("native_profiler");
        $__internal_a25e726bd83490e7cc1655df12dca37aa4ce68897fa15ace86245b8042ce3fd5->enter($__internal_a25e726bd83490e7cc1655df12dca37aa4ce68897fa15ace86245b8042ce3fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a25e726bd83490e7cc1655df12dca37aa4ce68897fa15ace86245b8042ce3fd5->leave($__internal_a25e726bd83490e7cc1655df12dca37aa4ce68897fa15ace86245b8042ce3fd5_prof);

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
