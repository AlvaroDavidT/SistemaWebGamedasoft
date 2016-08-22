<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_0bb40d8cfc55f070e0e8683b4c213f1137671e805da709d8129f0a79220c20d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_835d8db099b456e05c238a1a16eecca7319d3ce3668a00d00decfd4e02f6ee8f = $this->env->getExtension("native_profiler");
        $__internal_835d8db099b456e05c238a1a16eecca7319d3ce3668a00d00decfd4e02f6ee8f->enter($__internal_835d8db099b456e05c238a1a16eecca7319d3ce3668a00d00decfd4e02f6ee8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_835d8db099b456e05c238a1a16eecca7319d3ce3668a00d00decfd4e02f6ee8f->leave($__internal_835d8db099b456e05c238a1a16eecca7319d3ce3668a00d00decfd4e02f6ee8f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
