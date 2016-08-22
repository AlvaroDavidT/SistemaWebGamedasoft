<?php

/* LoginfirstBundle:Login:Login.html.twig */
class __TwigTemplate_75247c15d93a8d337e14c30c38ee922d1ec9686566f6af8fad21bbe0715d5ad6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Login.html.twig", "LoginfirstBundle:Login:Login.html.twig", 2);
        $this->blocks = array(
            'content2' => array($this, 'block_content2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::Layout_Login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content2($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["Perfiles"]) ? $context["Perfiles"] : null));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
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
        return array (  91 => 36,  82 => 33,  79 => 32,  75 => 31,  55 => 13,  46 => 11,  42 => 10,  35 => 6,  28 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Login/Login.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Login.html.twig' %}*/
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
