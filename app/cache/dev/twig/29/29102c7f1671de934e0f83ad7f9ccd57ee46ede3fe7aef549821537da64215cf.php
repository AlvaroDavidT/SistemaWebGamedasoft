<?php

/* LoginfirstBundle:Login:Login.html.twig */
class __TwigTemplate_6eda1da4efc3dbd6ad4644a358195d3d71cdc53ed684e1d919a32c0a6687beeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout_Login.html.twig", "LoginfirstBundle:Login:Login.html.twig", 2);
        $this->blocks = array(
            'content2' => array($this, 'block_content2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::layout_Login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85e0f4f4c778eda3271a840b47f1888806c123755bc446f1ae37784a82385409 = $this->env->getExtension("native_profiler");
        $__internal_85e0f4f4c778eda3271a840b47f1888806c123755bc446f1ae37784a82385409->enter($__internal_85e0f4f4c778eda3271a840b47f1888806c123755bc446f1ae37784a82385409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Login:Login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85e0f4f4c778eda3271a840b47f1888806c123755bc446f1ae37784a82385409->leave($__internal_85e0f4f4c778eda3271a840b47f1888806c123755bc446f1ae37784a82385409_prof);

    }

    // line 3
    public function block_content2($context, array $blocks = array())
    {
        $__internal_a79edb34f5f6949d8c4d59bad7b8bd1bc2380dcab3368fb343a946290a7b3251 = $this->env->getExtension("native_profiler");
        $__internal_a79edb34f5f6949d8c4d59bad7b8bd1bc2380dcab3368fb343a946290a7b3251->enter($__internal_a79edb34f5f6949d8c4d59bad7b8bd1bc2380dcab3368fb343a946290a7b3251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        echo "   
    <div class=\"form-box\" id=\"login-box\">
        <div class=\"header\">Inicio de Sesión</div>
        <form  id=\"LoginUsuario\" method=\"Post\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Login");
        echo "\">
            <div class=\"body bg-gray\">
               <div class=\"form-group\">
                    <select id=\"Perfil\" name=\"_perfil\" class=\"form-control input-sm\" >
                       ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Perfiles"]) ? $context["Perfiles"] : $this->getContext($context, "Perfiles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Nombres"]) {
            // line 11
            echo "                            <option>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["Nombres"], "nombre", array())), "html", null, true);
            echo "  </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Nombres'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
                    </select>
                </div>
                        
                            <div class=\"form-group\">
                    <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"Cedula/RUC\"/>
                </div>
            

                <div class=\"form-group\">
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\"/>
                </div>          
            </div>
            <div class=\"footer\">
                
                <button type=\"submit\" class=\"btn-block\"> <i class=\"fa fa-sign-in\"></i> INGRESAR AL SISTEMA</button>
            </div>
        </form>
                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 32
            echo "                               <h1> <span class=\"alert-warning\">
                                   ";
            // line 33
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                               </span></h1>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</div>
";
        
        $__internal_a79edb34f5f6949d8c4d59bad7b8bd1bc2380dcab3368fb343a946290a7b3251->leave($__internal_a79edb34f5f6949d8c4d59bad7b8bd1bc2380dcab3368fb343a946290a7b3251_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Login:Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  91 => 33,  88 => 32,  84 => 31,  64 => 13,  55 => 11,  51 => 10,  44 => 6,  34 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Login/Login.html.twig #}*/
/* {% extends 'LoginfirstBundle::layout_Login.html.twig' %}*/
/* {% block content2 %}   */
/*     <div class="form-box" id="login-box">*/
/*         <div class="header">Inicio de Sesión</div>*/
/*         <form  id="LoginUsuario" method="Post" action="{{ path('Login') }}">*/
/*             <div class="body bg-gray">*/
/*                <div class="form-group">*/
/*                     <select id="Perfil" name="_perfil" class="form-control input-sm" >*/
/*                        {% for Nombres in Perfiles %}*/
/*                             <option>{{ Nombres.nombre|upper }}  </option>*/
/*                         {% endfor %}*/
/* */
/*                     </select>*/
/*                 </div>*/
/*                         */
/*                             <div class="form-group">*/
/*                     <input type="text" id="username" name="_username" class="form-control" placeholder="Cedula/RUC"/>*/
/*                 </div>*/
/*             */
/* */
/*                 <div class="form-group">*/
/*                     <input type="password" id="password" name="_password" class="form-control" placeholder="Password"/>*/
/*                 </div>          */
/*             </div>*/
/*             <div class="footer">*/
/*                 */
/*                 <button type="submit" class="btn-block"> <i class="fa fa-sign-in"></i> INGRESAR AL SISTEMA</button>*/
/*             </div>*/
/*         </form>*/
/*                             {% for flashMessage in app.session.flashbag.get('mensaje')%}*/
/*                                <h1> <span class="alert-warning">*/
/*                                    {{ flashMessage }}*/
/*                                </span></h1>*/
/*                         {% endfor%}*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
