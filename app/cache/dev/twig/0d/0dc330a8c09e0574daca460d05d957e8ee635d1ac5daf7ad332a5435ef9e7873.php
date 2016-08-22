<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_86171d82a97038c747797c825650c1f7e47cda27927af088662f3073ca5ecc82 extends Twig_Template
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
        $__internal_9b6c9098f51ad6997ffb33d099f08abc1d0f36a94bd95c7c2e800805ba0bffb7 = $this->env->getExtension("native_profiler");
        $__internal_9b6c9098f51ad6997ffb33d099f08abc1d0f36a94bd95c7c2e800805ba0bffb7->enter($__internal_9b6c9098f51ad6997ffb33d099f08abc1d0f36a94bd95c7c2e800805ba0bffb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b6c9098f51ad6997ffb33d099f08abc1d0f36a94bd95c7c2e800805ba0bffb7->leave($__internal_9b6c9098f51ad6997ffb33d099f08abc1d0f36a94bd95c7c2e800805ba0bffb7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2f5720de1784cd286714aa0d147a7a5c996812644053a99d9c28da760a6be61 = $this->env->getExtension("native_profiler");
        $__internal_c2f5720de1784cd286714aa0d147a7a5c996812644053a99d9c28da760a6be61->enter($__internal_c2f5720de1784cd286714aa0d147a7a5c996812644053a99d9c28da760a6be61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c2f5720de1784cd286714aa0d147a7a5c996812644053a99d9c28da760a6be61->leave($__internal_c2f5720de1784cd286714aa0d147a7a5c996812644053a99d9c28da760a6be61_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1aec9fc1b274bb1dd28df84126cddbc605ad0bdc38f774756f12263128dcd4b6 = $this->env->getExtension("native_profiler");
        $__internal_1aec9fc1b274bb1dd28df84126cddbc605ad0bdc38f774756f12263128dcd4b6->enter($__internal_1aec9fc1b274bb1dd28df84126cddbc605ad0bdc38f774756f12263128dcd4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1aec9fc1b274bb1dd28df84126cddbc605ad0bdc38f774756f12263128dcd4b6->leave($__internal_1aec9fc1b274bb1dd28df84126cddbc605ad0bdc38f774756f12263128dcd4b6_prof);

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
