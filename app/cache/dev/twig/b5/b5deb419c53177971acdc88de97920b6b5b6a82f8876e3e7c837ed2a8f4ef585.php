<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_8dba14fff7091c5d83c89226f920de38ff7acba0c96965f1647e452d292ef8da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator/Step:secret.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ba15d814c031a1af9a62f94c78d4e1233cd725a470c64b531575b5a18baf975 = $this->env->getExtension("native_profiler");
        $__internal_7ba15d814c031a1af9a62f94c78d4e1233cd725a470c64b531575b5a18baf975->enter($__internal_7ba15d814c031a1af9a62f94c78d4e1233cd725a470c64b531575b5a18baf975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator/Step:secret.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ba15d814c031a1af9a62f94c78d4e1233cd725a470c64b531575b5a18baf975->leave($__internal_7ba15d814c031a1af9a62f94c78d4e1233cd725a470c64b531575b5a18baf975_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d94493260f142bbadf9fdd3459faf564d4c5e4d40913ac93d839b4db875cc0ad = $this->env->getExtension("native_profiler");
        $__internal_d94493260f142bbadf9fdd3459faf564d4c5e4d40913ac93d839b4db875cc0ad->enter($__internal_d94493260f142bbadf9fdd3459faf564d4c5e4d40913ac93d839b4db875cc0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Configure global Secret";
        
        $__internal_d94493260f142bbadf9fdd3459faf564d4c5e4d40913ac93d839b4db875cc0ad->leave($__internal_d94493260f142bbadf9fdd3459faf564d4c5e4d40913ac93d839b4db875cc0ad_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_192e04909f93c2567fda165cd08b5c53735d81fccfb40a947935b0e1ca811e7e = $this->env->getExtension("native_profiler");
        $__internal_192e04909f93c2567fda165cd08b5c53735d81fccfb40a947935b0e1ca811e7e->enter($__internal_192e04909f93c2567fda165cd08b5c53735d81fccfb40a947935b0e1ca811e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig", "SensioDistributionBundle:Configurator/Step:secret.html.twig", 9)->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website:</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret", array()), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret", array()), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret", array()), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
        
        $__internal_192e04909f93c2567fda165cd08b5c53735d81fccfb40a947935b0e1ca811e7e->leave($__internal_192e04909f93c2567fda165cd08b5c53735d81fccfb40a947935b0e1ca811e7e_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  96 => 30,  84 => 21,  79 => 19,  74 => 17,  69 => 15,  62 => 10,  60 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SensioDistributionBundle::Configurator/layout.html.twig" %}*/
/* */
/* {% block title %}Symfony - Configure global Secret{% endblock %}*/
/* */
/* {% block content %}*/
/*     {% form_theme form "SensioDistributionBundle::Configurator/form.html.twig" %}*/
/* */
/*     <div class="step">*/
/*         {% include "SensioDistributionBundle::Configurator/steps.html.twig" with { "index": index, "count": count } %}*/
/* */
/*         <h1>Global Secret</h1>*/
/*         <p>Configure the global secret for your website:</p>*/
/* */
/*         <div class="symfony-form-errors">*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*         <form action="{{ path('_configurator_step', { 'index': index }) }} " method="POST">*/
/*             <div class="symfony-form-row">*/
/*                 {{ form_label(form.secret) }}*/
/*                 <div class="symfony-form-field">*/
/*                     {{ form_widget(form.secret) }}*/
/*                     <a href="#" onclick="generateSecret(); return false;" class="sf-button">*/
/*                         <span class="border-l">*/
/*                             <span class="border-r">*/
/*                                 <span class="btn-bg">Generate</span>*/
/*                             </span>*/
/*                         </span>*/
/*                     </a>*/
/*                     <div class="symfony-form-errors">*/
/*                         {{ form_errors(form.secret) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {{ form_rest(form) }}*/
/* */
/*             <div class="symfony-form-footer">*/
/*                 <p>*/
/*                     <button type="submit" class="sf-button">*/
/*                         <span class="border-l">*/
/*                             <span class="border-r">*/
/*                                 <span class="btn-bg">NEXT STEP</span>*/
/*                             </span>*/
/*                         </span>*/
/*                     </button>*/
/*                 </p>*/
/*                 <p>* mandatory fields</p>*/
/*             </div>*/
/* */
/*         </form>*/
/* */
/*         <script type="text/javascript">*/
/*             function generateSecret()*/
/*             {*/
/*                 var result = '';*/
/*                 for (i=0; i < 32; i++) {*/
/*                     result += Math.round(Math.random()*16).toString(16);*/
/*                 }*/
/*                 document.getElementById('distributionbundle_secret_step_secret').value = result;*/
/*             }*/
/*         </script>*/
/*     </div>*/
/* {% endblock %}*/
/* */
