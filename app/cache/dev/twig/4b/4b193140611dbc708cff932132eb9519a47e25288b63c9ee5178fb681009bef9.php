<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_62a90d12f6a1a7db0575c356ae4a1c4a82618b87d2a4a57c3ff2bbc587352df6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator:final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d7e802d80dc1f8d215ae7c3283d10f385919619ef225f23692f9dd461be95f5 = $this->env->getExtension("native_profiler");
        $__internal_0d7e802d80dc1f8d215ae7c3283d10f385919619ef225f23692f9dd461be95f5->enter($__internal_0d7e802d80dc1f8d215ae7c3283d10f385919619ef225f23692f9dd461be95f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d7e802d80dc1f8d215ae7c3283d10f385919619ef225f23692f9dd461be95f5->leave($__internal_0d7e802d80dc1f8d215ae7c3283d10f385919619ef225f23692f9dd461be95f5_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_ca335ce5c1992f4aa27d5721fbd71054eb4c3e3cd1719f0996451ed49b6635be = $this->env->getExtension("native_profiler");
        $__internal_ca335ce5c1992f4aa27d5721fbd71054eb4c3e3cd1719f0996451ed49b6635be->enter($__internal_ca335ce5c1992f4aa27d5721fbd71054eb4c3e3cd1719f0996451ed49b6635be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_ca335ce5c1992f4aa27d5721fbd71054eb4c3e3cd1719f0996451ed49b6635be->leave($__internal_ca335ce5c1992f4aa27d5721fbd71054eb4c3e3cd1719f0996451ed49b6635be_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_8474ca6073c74ae7cea304d62bbee77d4dfdd4c41065b257676ff5316b6610ad = $this->env->getExtension("native_profiler");
        $__internal_8474ca6073c74ae7cea304d62bbee77d4dfdd4c41065b257676ff5316b6610ad->enter($__internal_8474ca6073c74ae7cea304d62bbee77d4dfdd4c41065b257676ff5316b6610ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_8474ca6073c74ae7cea304d62bbee77d4dfdd4c41065b257676ff5316b6610ad->leave($__internal_8474ca6073c74ae7cea304d62bbee77d4dfdd4c41065b257676ff5316b6610ad_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  85 => 19,  79 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SensioDistributionBundle::Configurator/layout.html.twig" %}*/
/* */
/* {% block content_class %}config_done{% endblock %}*/
/* {% block content %}*/
/*     <div class="step">*/
/*         <h1>Well done!</h1>*/
/*         {% if is_writable %}*/
/*         <h2>Your distribution is configured!</h2>*/
/*         {% else %}*/
/*         <h2 class="configure-error">Your distribution is almost configured but...</h2>*/
/*         {% endif %}*/
/*         <h3>*/
/*             <span>*/
/*                 {% if is_writable %}*/
/*                     Your parameters.yml file has been overwritten with these parameters (in <em>{{ yml_path }}</em>):*/
/*                 {% else %}*/
/*                     Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>{{ yml_path }}</em>:*/
/*                 {% endif %}*/
/*             </span>*/
/*         </h3>*/
/* */
/*         <textarea class="symfony-configuration">{{ parameters }}</textarea>*/
/* */
/*         {% if welcome_url %}*/
/*             <ul>*/
/*                 <li><a href="{{ welcome_url }}">Go to the Welcome page</a></li>*/
/*             </ul>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
