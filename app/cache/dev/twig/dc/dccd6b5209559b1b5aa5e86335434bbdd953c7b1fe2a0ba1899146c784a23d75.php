<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_1f8b4348552e5182e68d5266b32b071815236894de8ff6d1fbf1f57520c3dcd1 extends Twig_Template
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
        $__internal_61f062d953250a5fd08466d20fdca53257a806cec0765ad84f7b2ff4a9f680cb = $this->env->getExtension("native_profiler");
        $__internal_61f062d953250a5fd08466d20fdca53257a806cec0765ad84f7b2ff4a9f680cb->enter($__internal_61f062d953250a5fd08466d20fdca53257a806cec0765ad84f7b2ff4a9f680cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:bag.html.twig"));

        // line 1
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\" style=\"width: 25%\">Key</th>
            <th scope=\"col\" style=\"width: 75%\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "keys", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td><pre>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "get", array(0 => $context["key"]), "method")), "html", null, true);
            echo "</pre></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
        
        $__internal_61f062d953250a5fd08466d20fdca53257a806cec0765ad84f7b2ff4a9f680cb->leave($__internal_61f062d953250a5fd08466d20fdca53257a806cec0765ad84f7b2ff4a9f680cb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  49 => 12,  45 => 11,  42 => 10,  38 => 9,  22 => 1,);
    }
}
/* <table {% if class is defined %}class='{{ class }}'{% endif %} >*/
/*     <thead>*/
/*         <tr>*/
/*             <th scope="col" style="width: 25%">Key</th>*/
/*             <th scope="col" style="width: 75%">Value</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% for key in bag.keys|sort %}*/
/*             <tr>*/
/*                 <th>{{ key }}</th>*/
/*                 <td><pre>{{ profiler_dump(bag.get(key)) }}</pre></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
