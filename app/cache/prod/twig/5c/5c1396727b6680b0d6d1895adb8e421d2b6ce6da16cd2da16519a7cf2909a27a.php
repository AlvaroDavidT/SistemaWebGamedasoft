<?php

/* ::base.html.twig */
class __TwigTemplate_2a8f9fce30f796fb0a451bf8f946871d55a18a625bb7ecde8984a0d42f3e7835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metadesc' => array($this, 'block_metadesc'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content1' => array($this, 'block_content1'),
            'header' => array($this, 'block_header'),
            'content2' => array($this, 'block_content2'),
            'asideLeft' => array($this, 'block_asideLeft'),
            'section1' => array($this, 'block_section1'),
            'asideRight' => array($this, 'block_asideRight'),
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
            'Footer' => array($this, 'block_Footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\"/>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">  
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "| Control Tiempos</title>
        <meta name=\"description\" content=\"";
        // line 8
        $this->displayBlock('metadesc', $context, $blocks);
        echo "\"/>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"http://code.jquery.com/jquery-latest.js\"></script>
    </head>
    ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Gamedasoft ";
    }

    // line 8
    public function block_metadesc($context, array $blocks = array())
    {
        echo "Medadescripion comun";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>  
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/index.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/bootstrap-social.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/docs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        $this->displayBlock('content1', $context, $blocks);
        // line 47
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    ";
    }

    // line 22
    public function block_content1($context, array $blocks = array())
    {
        // line 23
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "            ";
        $this->displayBlock('content2', $context, $blocks);
        // line 43
        echo "            ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 46
        echo "        ";
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        // line 24
        echo "                Encabezado
            ";
    }

    // line 26
    public function block_content2($context, array $blocks = array())
    {
        // line 27
        echo "                ";
        $this->displayBlock('asideLeft', $context, $blocks);
        // line 33
        echo "                ";
        $this->displayBlock('asideRight', $context, $blocks);
        // line 42
        echo "            ";
    }

    // line 27
    public function block_asideLeft($context, array $blocks = array())
    {
        // line 28
        echo "                    Lado Izquierda
                    ";
        // line 29
        $this->displayBlock('section1', $context, $blocks);
        // line 32
        echo "                ";
    }

    // line 29
    public function block_section1($context, array $blocks = array())
    {
        // line 30
        echo "                        Barra navegacion 
                    ";
    }

    // line 33
    public function block_asideRight($context, array $blocks = array())
    {
        // line 34
        echo "                    Lado Derecho 
                    ";
        // line 35
        $this->displayBlock('section2', $context, $blocks);
        // line 38
        echo "                    ";
        $this->displayBlock('section3', $context, $blocks);
        // line 41
        echo "                ";
    }

    // line 35
    public function block_section2($context, array $blocks = array())
    {
        // line 36
        echo "                        content header
                    ";
    }

    // line 38
    public function block_section3($context, array $blocks = array())
    {
        // line 39
        echo "                        content 
                    ";
    }

    // line 43
    public function block_Footer($context, array $blocks = array())
    {
        // line 44
        echo "                pie de pagina 
            ";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 47,  212 => 44,  209 => 43,  204 => 39,  201 => 38,  196 => 36,  193 => 35,  189 => 41,  186 => 38,  184 => 35,  181 => 34,  178 => 33,  173 => 30,  170 => 29,  166 => 32,  164 => 29,  161 => 28,  158 => 27,  154 => 42,  151 => 33,  148 => 27,  145 => 26,  140 => 24,  137 => 23,  133 => 46,  130 => 43,  127 => 26,  124 => 23,  121 => 22,  117 => 49,  114 => 47,  111 => 22,  108 => 21,  102 => 15,  98 => 14,  94 => 13,  90 => 12,  86 => 11,  81 => 10,  78 => 9,  72 => 8,  66 => 7,  61 => 50,  59 => 21,  51 => 17,  49 => 9,  45 => 8,  41 => 7,  33 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="UTF-8"/>*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">  */
/*         <title>{% block title %}Gamedasoft {% endblock %}| Control Tiempos</title>*/
/*         <meta name="description" content="{% block metadesc %}Medadescripion comun{% endblock %}"/>*/
/*         {% block stylesheets %}*/
/*             <link href="{{asset('bundles/loginfirst/css/bootstrap.min.css')}}" rel="stylesheet"/>  */
/*             <link href="{{asset('bundles/loginfirst/css/index.css')}}" rel="stylesheet"/>*/
/*             <link href="{{asset('bundles/loginfirst/css/bootstrap-social.css')}}" rel="stylesheet"/>*/
/*             <link href="{{asset('bundles/loginfirst/css/bootstrap.css')}}" rel="stylesheet"/>*/
/*             <link href="{{asset('bundles/loginfirst/css/docs.css')}}" rel="stylesheet"/>*/
/*             <link href="{{asset('bundles/loginfirst/css/font-awesome.css')}}" rel="stylesheet"/>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*         <script src="http://code.jquery.com/jquery-latest.js"></script>*/
/*     </head>*/
/*     {%block body %}*/
/*         {%block content1 %}*/
/*             {% block header %}*/
/*                 Encabezado*/
/*             {% endblock %}*/
/*             {%block content2 %}*/
/*                 {% block asideLeft %}*/
/*                     Lado Izquierda*/
/*                     {%block section1 %}*/
/*                         Barra navegacion */
/*                     {%endblock%}*/
/*                 {% endblock %}*/
/*                 {% block asideRight %}*/
/*                     Lado Derecho */
/*                     {%block section2 %}*/
/*                         content header*/
/*                     {%endblock%}*/
/*                     {%block section3 %}*/
/*                         content */
/*                     {%endblock%}*/
/*                 {% endblock %}*/
/*             {%endblock%}*/
/*             {% block Footer %}*/
/*                 pie de pagina */
/*             {% endblock%}*/
/*         {% endblock %}*/
/*         {% block javascripts %} */
/*         {% endblock %}*/
/*     {% endblock %}*/
/* </html>*/
/* */
