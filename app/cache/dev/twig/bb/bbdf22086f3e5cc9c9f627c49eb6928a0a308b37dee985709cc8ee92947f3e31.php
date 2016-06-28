<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d725bfcd1d65a1fd533b066b8353acdf943bb6ed0879930cd1881552c137e0ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_794e1ab72a4a2c0fbf4e32cc844946a2221600324e56f67d0050a4cb2a6d81c2 = $this->env->getExtension("native_profiler");
        $__internal_794e1ab72a4a2c0fbf4e32cc844946a2221600324e56f67d0050a4cb2a6d81c2->enter($__internal_794e1ab72a4a2c0fbf4e32cc844946a2221600324e56f67d0050a4cb2a6d81c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_794e1ab72a4a2c0fbf4e32cc844946a2221600324e56f67d0050a4cb2a6d81c2->leave($__internal_794e1ab72a4a2c0fbf4e32cc844946a2221600324e56f67d0050a4cb2a6d81c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e123bbd293c709ecd532c68b461a669da5b0a9c822275b45526d2cbdb6a2ca4 = $this->env->getExtension("native_profiler");
        $__internal_2e123bbd293c709ecd532c68b461a669da5b0a9c822275b45526d2cbdb6a2ca4->enter($__internal_2e123bbd293c709ecd532c68b461a669da5b0a9c822275b45526d2cbdb6a2ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->loadTemplate("@WebProfiler/Profiler/header.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 5)->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->loadTemplate("@WebProfiler/Profiler/admin.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 38)->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_2e123bbd293c709ecd532c68b461a669da5b0a9c822275b45526d2cbdb6a2ca4->leave($__internal_2e123bbd293c709ecd532c68b461a669da5b0a9c822275b45526d2cbdb6a2ca4_prof);

    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d83c0709bec0006a54b6a5eea337a6c89efcf99b21e4f5bd4b694d9583ea4c36 = $this->env->getExtension("native_profiler");
        $__internal_d83c0709bec0006a54b6a5eea337a6c89efcf99b21e4f5bd4b694d9583ea4c36->enter($__internal_d83c0709bec0006a54b6a5eea337a6c89efcf99b21e4f5bd4b694d9583ea4c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif ((        // line 17
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif ((        // line 22
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif ((        // line 27
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
        
        $__internal_d83c0709bec0006a54b6a5eea337a6c89efcf99b21e4f5bd4b694d9583ea4c36->leave($__internal_d83c0709bec0006a54b6a5eea337a6c89efcf99b21e4f5bd4b694d9583ea4c36_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  114 => 30,  110 => 28,  108 => 27,  102 => 23,  100 => 22,  94 => 18,  92 => 17,  86 => 13,  83 => 12,  77 => 11,  66 => 39,  64 => 38,  60 => 37,  55 => 34,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="content">*/
/*         {% include '@WebProfiler/Profiler/header.html.twig' only %}*/
/* */
/*         <div id="main">*/
/*             <div class="clear-fix">*/
/*                 <div id="collector-wrapper">*/
/*                     <div id="collector-content">*/
/*                         {% block panel %}*/
/*                             {% if about == 'purge' %}*/
/*                                 <h2>The profiler database was purged successfully</h2>*/
/*                                 <p>*/
/*                                     <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>*/
/*                                 </p>*/
/*                             {% elseif about == 'upload_error' %}*/
/*                                 <h2>A problem occurred when uploading the data</h2>*/
/*                                 <p>*/
/*                                     <em>No file given or the file was not uploaded successfully.</em>*/
/*                                 </p>*/
/*                             {% elseif about == 'already_exists' %}*/
/*                                 <h2>A problem occurred when uploading the data</h2>*/
/*                                 <p>*/
/*                                     <em>The token already exists in the database.</em>*/
/*                                 </p>*/
/*                             {% elseif about == 'no_token' %}*/
/*                                 <h2>Token not found</h2>*/
/*                                 <p>*/
/*                                     <em>Token "{{ token }}" was not found in the database.</em>*/
/*                                 </p>*/
/*                             {% endif %}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="navigation">*/
/*                     {{ render(path('_profiler_search_bar')) }}*/
/*                     {% include '@WebProfiler/Profiler/admin.html.twig' with { 'token': '' } only %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
