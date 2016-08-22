<?php

/* ::base.html.twig */
class __TwigTemplate_0c9615967ad106914731b1933448bf372ec78d900fd7cce80029b500b0cd965f extends Twig_Template
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
        $__internal_b5b14ac504d164c2d838029afd84205ad99952af03fd05d7685f3b50f167f74e = $this->env->getExtension("native_profiler");
        $__internal_b5b14ac504d164c2d838029afd84205ad99952af03fd05d7685f3b50f167f74e->enter($__internal_b5b14ac504d164c2d838029afd84205ad99952af03fd05d7685f3b50f167f74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b5b14ac504d164c2d838029afd84205ad99952af03fd05d7685f3b50f167f74e->leave($__internal_b5b14ac504d164c2d838029afd84205ad99952af03fd05d7685f3b50f167f74e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed060433bab67adc24987c5d65e2fb3c9f2855ef0014e519db6472cbae12c2c3 = $this->env->getExtension("native_profiler");
        $__internal_ed060433bab67adc24987c5d65e2fb3c9f2855ef0014e519db6472cbae12c2c3->enter($__internal_ed060433bab67adc24987c5d65e2fb3c9f2855ef0014e519db6472cbae12c2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gamedasoft ";
        
        $__internal_ed060433bab67adc24987c5d65e2fb3c9f2855ef0014e519db6472cbae12c2c3->leave($__internal_ed060433bab67adc24987c5d65e2fb3c9f2855ef0014e519db6472cbae12c2c3_prof);

    }

    // line 8
    public function block_metadesc($context, array $blocks = array())
    {
        $__internal_7553ac43349282629b0dbfebb3f2b5de378ed43b63c5cf7afdbe6c285c600be4 = $this->env->getExtension("native_profiler");
        $__internal_7553ac43349282629b0dbfebb3f2b5de378ed43b63c5cf7afdbe6c285c600be4->enter($__internal_7553ac43349282629b0dbfebb3f2b5de378ed43b63c5cf7afdbe6c285c600be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metadesc"));

        echo "Medadescripion comun";
        
        $__internal_7553ac43349282629b0dbfebb3f2b5de378ed43b63c5cf7afdbe6c285c600be4->leave($__internal_7553ac43349282629b0dbfebb3f2b5de378ed43b63c5cf7afdbe6c285c600be4_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7f3e3e4b3ce809553a46fc989c3649ab60e278a1ba0475387d39b1bd6ce3657 = $this->env->getExtension("native_profiler");
        $__internal_d7f3e3e4b3ce809553a46fc989c3649ab60e278a1ba0475387d39b1bd6ce3657->enter($__internal_d7f3e3e4b3ce809553a46fc989c3649ab60e278a1ba0475387d39b1bd6ce3657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d7f3e3e4b3ce809553a46fc989c3649ab60e278a1ba0475387d39b1bd6ce3657->leave($__internal_d7f3e3e4b3ce809553a46fc989c3649ab60e278a1ba0475387d39b1bd6ce3657_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0800361a25b0b102656127ee013a439b580c7c70f5d6fc753186480acc2b691 = $this->env->getExtension("native_profiler");
        $__internal_e0800361a25b0b102656127ee013a439b580c7c70f5d6fc753186480acc2b691->enter($__internal_e0800361a25b0b102656127ee013a439b580c7c70f5d6fc753186480acc2b691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "        ";
        $this->displayBlock('content1', $context, $blocks);
        // line 47
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    ";
        
        $__internal_e0800361a25b0b102656127ee013a439b580c7c70f5d6fc753186480acc2b691->leave($__internal_e0800361a25b0b102656127ee013a439b580c7c70f5d6fc753186480acc2b691_prof);

    }

    // line 22
    public function block_content1($context, array $blocks = array())
    {
        $__internal_03bbaa4022b88920f7597dd683594e387918f5a956b5577ec50eedc438370cc8 = $this->env->getExtension("native_profiler");
        $__internal_03bbaa4022b88920f7597dd683594e387918f5a956b5577ec50eedc438370cc8->enter($__internal_03bbaa4022b88920f7597dd683594e387918f5a956b5577ec50eedc438370cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

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
        
        $__internal_03bbaa4022b88920f7597dd683594e387918f5a956b5577ec50eedc438370cc8->leave($__internal_03bbaa4022b88920f7597dd683594e387918f5a956b5577ec50eedc438370cc8_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_7ad08811548e0ccd0679da5a855f1a457f43d64b3cf444621b1ae3b3d06d88cb = $this->env->getExtension("native_profiler");
        $__internal_7ad08811548e0ccd0679da5a855f1a457f43d64b3cf444621b1ae3b3d06d88cb->enter($__internal_7ad08811548e0ccd0679da5a855f1a457f43d64b3cf444621b1ae3b3d06d88cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 24
        echo "                Encabezado
            ";
        
        $__internal_7ad08811548e0ccd0679da5a855f1a457f43d64b3cf444621b1ae3b3d06d88cb->leave($__internal_7ad08811548e0ccd0679da5a855f1a457f43d64b3cf444621b1ae3b3d06d88cb_prof);

    }

    // line 26
    public function block_content2($context, array $blocks = array())
    {
        $__internal_89738abc0ad496976882f8c560fa856aeea4c785b68822822401bce0d8966522 = $this->env->getExtension("native_profiler");
        $__internal_89738abc0ad496976882f8c560fa856aeea4c785b68822822401bce0d8966522->enter($__internal_89738abc0ad496976882f8c560fa856aeea4c785b68822822401bce0d8966522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        // line 27
        echo "                ";
        $this->displayBlock('asideLeft', $context, $blocks);
        // line 33
        echo "                ";
        $this->displayBlock('asideRight', $context, $blocks);
        // line 42
        echo "            ";
        
        $__internal_89738abc0ad496976882f8c560fa856aeea4c785b68822822401bce0d8966522->leave($__internal_89738abc0ad496976882f8c560fa856aeea4c785b68822822401bce0d8966522_prof);

    }

    // line 27
    public function block_asideLeft($context, array $blocks = array())
    {
        $__internal_5f0856643b62ef7dcc86909096e803b1d84e5244572c6c772bd6cf920ac10139 = $this->env->getExtension("native_profiler");
        $__internal_5f0856643b62ef7dcc86909096e803b1d84e5244572c6c772bd6cf920ac10139->enter($__internal_5f0856643b62ef7dcc86909096e803b1d84e5244572c6c772bd6cf920ac10139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideLeft"));

        // line 28
        echo "                    Lado Izquierda
                    ";
        // line 29
        $this->displayBlock('section1', $context, $blocks);
        // line 32
        echo "                ";
        
        $__internal_5f0856643b62ef7dcc86909096e803b1d84e5244572c6c772bd6cf920ac10139->leave($__internal_5f0856643b62ef7dcc86909096e803b1d84e5244572c6c772bd6cf920ac10139_prof);

    }

    // line 29
    public function block_section1($context, array $blocks = array())
    {
        $__internal_ad3f09967a52f852055b0cd1ef99b5433e071553cc7d8ed491ab355d5ee083f1 = $this->env->getExtension("native_profiler");
        $__internal_ad3f09967a52f852055b0cd1ef99b5433e071553cc7d8ed491ab355d5ee083f1->enter($__internal_ad3f09967a52f852055b0cd1ef99b5433e071553cc7d8ed491ab355d5ee083f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 30
        echo "                        Barra navegacion 
                    ";
        
        $__internal_ad3f09967a52f852055b0cd1ef99b5433e071553cc7d8ed491ab355d5ee083f1->leave($__internal_ad3f09967a52f852055b0cd1ef99b5433e071553cc7d8ed491ab355d5ee083f1_prof);

    }

    // line 33
    public function block_asideRight($context, array $blocks = array())
    {
        $__internal_77d938cd256e0d7309b6d37a301a948bbbea2d6e54e81e84d74fcb49db0ee662 = $this->env->getExtension("native_profiler");
        $__internal_77d938cd256e0d7309b6d37a301a948bbbea2d6e54e81e84d74fcb49db0ee662->enter($__internal_77d938cd256e0d7309b6d37a301a948bbbea2d6e54e81e84d74fcb49db0ee662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideRight"));

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
        
        $__internal_77d938cd256e0d7309b6d37a301a948bbbea2d6e54e81e84d74fcb49db0ee662->leave($__internal_77d938cd256e0d7309b6d37a301a948bbbea2d6e54e81e84d74fcb49db0ee662_prof);

    }

    // line 35
    public function block_section2($context, array $blocks = array())
    {
        $__internal_de1149b12231c8b0f11fbf112828aacd85f841c45a3751e7dba01ebe77a997c3 = $this->env->getExtension("native_profiler");
        $__internal_de1149b12231c8b0f11fbf112828aacd85f841c45a3751e7dba01ebe77a997c3->enter($__internal_de1149b12231c8b0f11fbf112828aacd85f841c45a3751e7dba01ebe77a997c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 36
        echo "                        content header
                    ";
        
        $__internal_de1149b12231c8b0f11fbf112828aacd85f841c45a3751e7dba01ebe77a997c3->leave($__internal_de1149b12231c8b0f11fbf112828aacd85f841c45a3751e7dba01ebe77a997c3_prof);

    }

    // line 38
    public function block_section3($context, array $blocks = array())
    {
        $__internal_4a6ba0fbbd5c3e4d3f90de3ac05824af3b2c6566ccd2f379180167240101baf0 = $this->env->getExtension("native_profiler");
        $__internal_4a6ba0fbbd5c3e4d3f90de3ac05824af3b2c6566ccd2f379180167240101baf0->enter($__internal_4a6ba0fbbd5c3e4d3f90de3ac05824af3b2c6566ccd2f379180167240101baf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 39
        echo "                        content 
                    ";
        
        $__internal_4a6ba0fbbd5c3e4d3f90de3ac05824af3b2c6566ccd2f379180167240101baf0->leave($__internal_4a6ba0fbbd5c3e4d3f90de3ac05824af3b2c6566ccd2f379180167240101baf0_prof);

    }

    // line 43
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_af19f50f083bf324c357dc205c8bee6409a1f1dda05561913a1bfd8c0b2ef8f5 = $this->env->getExtension("native_profiler");
        $__internal_af19f50f083bf324c357dc205c8bee6409a1f1dda05561913a1bfd8c0b2ef8f5->enter($__internal_af19f50f083bf324c357dc205c8bee6409a1f1dda05561913a1bfd8c0b2ef8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        // line 44
        echo "                pie de pagina 
            ";
        
        $__internal_af19f50f083bf324c357dc205c8bee6409a1f1dda05561913a1bfd8c0b2ef8f5->leave($__internal_af19f50f083bf324c357dc205c8bee6409a1f1dda05561913a1bfd8c0b2ef8f5_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_693554f082f7fac74c134c217840dfb8cb32430471db920876c113a544fc35a0 = $this->env->getExtension("native_profiler");
        $__internal_693554f082f7fac74c134c217840dfb8cb32430471db920876c113a544fc35a0->enter($__internal_693554f082f7fac74c134c217840dfb8cb32430471db920876c113a544fc35a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
        ";
        
        $__internal_693554f082f7fac74c134c217840dfb8cb32430471db920876c113a544fc35a0->leave($__internal_693554f082f7fac74c134c217840dfb8cb32430471db920876c113a544fc35a0_prof);

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
        return array (  301 => 47,  293 => 44,  287 => 43,  279 => 39,  273 => 38,  265 => 36,  259 => 35,  252 => 41,  249 => 38,  247 => 35,  244 => 34,  238 => 33,  230 => 30,  224 => 29,  217 => 32,  215 => 29,  212 => 28,  206 => 27,  199 => 42,  196 => 33,  193 => 27,  187 => 26,  179 => 24,  173 => 23,  166 => 46,  163 => 43,  160 => 26,  157 => 23,  151 => 22,  144 => 49,  141 => 47,  138 => 22,  132 => 21,  123 => 15,  119 => 14,  115 => 13,  111 => 12,  107 => 11,  102 => 10,  96 => 9,  84 => 8,  72 => 7,  64 => 50,  62 => 21,  54 => 17,  52 => 9,  48 => 8,  44 => 7,  36 => 1,);
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
