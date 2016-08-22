<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_80e8ece205a2c08af9455c71d363f235cd30e0fcfb03f8beae5a1dbc733a9d23 extends Twig_Template
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
        $__internal_636a048ef89cdf03ae0fc1bb55152cf609f319eca0f1891b3c3a22fe62ffec49 = $this->env->getExtension("native_profiler");
        $__internal_636a048ef89cdf03ae0fc1bb55152cf609f319eca0f1891b3c3a22fe62ffec49->enter($__internal_636a048ef89cdf03ae0fc1bb55152cf609f319eca0f1891b3c3a22fe62ffec49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_636a048ef89cdf03ae0fc1bb55152cf609f319eca0f1891b3c3a22fe62ffec49->leave($__internal_636a048ef89cdf03ae0fc1bb55152cf609f319eca0f1891b3c3a22fe62ffec49_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
