<?php

/* ::base.html.twig */
class __TwigTemplate_b531eb6cb50f1de3590578f7dae9f00b5f9d68cef706395045cc54abca7f107c extends Twig_Template
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
        $__internal_68ae7fd0d587aa11eee83e36f3fe06e1c73a70205e67739e3d8e3aa071e218af = $this->env->getExtension("native_profiler");
        $__internal_68ae7fd0d587aa11eee83e36f3fe06e1c73a70205e67739e3d8e3aa071e218af->enter($__internal_68ae7fd0d587aa11eee83e36f3fe06e1c73a70205e67739e3d8e3aa071e218af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_68ae7fd0d587aa11eee83e36f3fe06e1c73a70205e67739e3d8e3aa071e218af->leave($__internal_68ae7fd0d587aa11eee83e36f3fe06e1c73a70205e67739e3d8e3aa071e218af_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b0cd2237b86a7c9aef0935c1f51f0b87274e02a5468aea205afe55b051cb4e1 = $this->env->getExtension("native_profiler");
        $__internal_6b0cd2237b86a7c9aef0935c1f51f0b87274e02a5468aea205afe55b051cb4e1->enter($__internal_6b0cd2237b86a7c9aef0935c1f51f0b87274e02a5468aea205afe55b051cb4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gamedasoft ";
        
        $__internal_6b0cd2237b86a7c9aef0935c1f51f0b87274e02a5468aea205afe55b051cb4e1->leave($__internal_6b0cd2237b86a7c9aef0935c1f51f0b87274e02a5468aea205afe55b051cb4e1_prof);

    }

    // line 8
    public function block_metadesc($context, array $blocks = array())
    {
        $__internal_257c930018e466de29e467c91179dcde47c74efaef05bb6bce3460c74eea84eb = $this->env->getExtension("native_profiler");
        $__internal_257c930018e466de29e467c91179dcde47c74efaef05bb6bce3460c74eea84eb->enter($__internal_257c930018e466de29e467c91179dcde47c74efaef05bb6bce3460c74eea84eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metadesc"));

        echo "Medadescripion comun";
        
        $__internal_257c930018e466de29e467c91179dcde47c74efaef05bb6bce3460c74eea84eb->leave($__internal_257c930018e466de29e467c91179dcde47c74efaef05bb6bce3460c74eea84eb_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e045714bd6fa2f490f2959acfc5b7921a65bec7e2cf9054ef772854f468e5dd6 = $this->env->getExtension("native_profiler");
        $__internal_e045714bd6fa2f490f2959acfc5b7921a65bec7e2cf9054ef772854f468e5dd6->enter($__internal_e045714bd6fa2f490f2959acfc5b7921a65bec7e2cf9054ef772854f468e5dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e045714bd6fa2f490f2959acfc5b7921a65bec7e2cf9054ef772854f468e5dd6->leave($__internal_e045714bd6fa2f490f2959acfc5b7921a65bec7e2cf9054ef772854f468e5dd6_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_c07730f26e3e00db53b968eb3708eba6175791a16a231ecd65599987ca6409d7 = $this->env->getExtension("native_profiler");
        $__internal_c07730f26e3e00db53b968eb3708eba6175791a16a231ecd65599987ca6409d7->enter($__internal_c07730f26e3e00db53b968eb3708eba6175791a16a231ecd65599987ca6409d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "        ";
        $this->displayBlock('content1', $context, $blocks);
        // line 47
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    ";
        
        $__internal_c07730f26e3e00db53b968eb3708eba6175791a16a231ecd65599987ca6409d7->leave($__internal_c07730f26e3e00db53b968eb3708eba6175791a16a231ecd65599987ca6409d7_prof);

    }

    // line 22
    public function block_content1($context, array $blocks = array())
    {
        $__internal_3c83cf00b59fcd13dd8de06d606786a36f9215e3e964099fdebda2e751516107 = $this->env->getExtension("native_profiler");
        $__internal_3c83cf00b59fcd13dd8de06d606786a36f9215e3e964099fdebda2e751516107->enter($__internal_3c83cf00b59fcd13dd8de06d606786a36f9215e3e964099fdebda2e751516107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

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
        
        $__internal_3c83cf00b59fcd13dd8de06d606786a36f9215e3e964099fdebda2e751516107->leave($__internal_3c83cf00b59fcd13dd8de06d606786a36f9215e3e964099fdebda2e751516107_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_8acb98ca6a905ac5b83bd474be25f96a07cce8aa72e37d9d4f0aabfa11d6881c = $this->env->getExtension("native_profiler");
        $__internal_8acb98ca6a905ac5b83bd474be25f96a07cce8aa72e37d9d4f0aabfa11d6881c->enter($__internal_8acb98ca6a905ac5b83bd474be25f96a07cce8aa72e37d9d4f0aabfa11d6881c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 24
        echo "                Encabezado
            ";
        
        $__internal_8acb98ca6a905ac5b83bd474be25f96a07cce8aa72e37d9d4f0aabfa11d6881c->leave($__internal_8acb98ca6a905ac5b83bd474be25f96a07cce8aa72e37d9d4f0aabfa11d6881c_prof);

    }

    // line 26
    public function block_content2($context, array $blocks = array())
    {
        $__internal_7c91ada6fa4642f1438b06b269d21cb4a930624c4631ae2190fb4025a8cc0ca9 = $this->env->getExtension("native_profiler");
        $__internal_7c91ada6fa4642f1438b06b269d21cb4a930624c4631ae2190fb4025a8cc0ca9->enter($__internal_7c91ada6fa4642f1438b06b269d21cb4a930624c4631ae2190fb4025a8cc0ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        // line 27
        echo "                ";
        $this->displayBlock('asideLeft', $context, $blocks);
        // line 33
        echo "                ";
        $this->displayBlock('asideRight', $context, $blocks);
        // line 42
        echo "            ";
        
        $__internal_7c91ada6fa4642f1438b06b269d21cb4a930624c4631ae2190fb4025a8cc0ca9->leave($__internal_7c91ada6fa4642f1438b06b269d21cb4a930624c4631ae2190fb4025a8cc0ca9_prof);

    }

    // line 27
    public function block_asideLeft($context, array $blocks = array())
    {
        $__internal_ce1560a74736cf95f9db4969a2e90cef1cb0e4315756b89c8a0ff55fd5d51495 = $this->env->getExtension("native_profiler");
        $__internal_ce1560a74736cf95f9db4969a2e90cef1cb0e4315756b89c8a0ff55fd5d51495->enter($__internal_ce1560a74736cf95f9db4969a2e90cef1cb0e4315756b89c8a0ff55fd5d51495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideLeft"));

        // line 28
        echo "                    Lado Izquierda
                    ";
        // line 29
        $this->displayBlock('section1', $context, $blocks);
        // line 32
        echo "                ";
        
        $__internal_ce1560a74736cf95f9db4969a2e90cef1cb0e4315756b89c8a0ff55fd5d51495->leave($__internal_ce1560a74736cf95f9db4969a2e90cef1cb0e4315756b89c8a0ff55fd5d51495_prof);

    }

    // line 29
    public function block_section1($context, array $blocks = array())
    {
        $__internal_f06d52af6bf3f539a86ee5a082f953db6e7ec06f9dea94991f9953377447c2ec = $this->env->getExtension("native_profiler");
        $__internal_f06d52af6bf3f539a86ee5a082f953db6e7ec06f9dea94991f9953377447c2ec->enter($__internal_f06d52af6bf3f539a86ee5a082f953db6e7ec06f9dea94991f9953377447c2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 30
        echo "                        Barra navegacion 
                    ";
        
        $__internal_f06d52af6bf3f539a86ee5a082f953db6e7ec06f9dea94991f9953377447c2ec->leave($__internal_f06d52af6bf3f539a86ee5a082f953db6e7ec06f9dea94991f9953377447c2ec_prof);

    }

    // line 33
    public function block_asideRight($context, array $blocks = array())
    {
        $__internal_1b5314b01e7079935c66e424fc322c9b3cdf3b153ad37a131d0434199bf64d86 = $this->env->getExtension("native_profiler");
        $__internal_1b5314b01e7079935c66e424fc322c9b3cdf3b153ad37a131d0434199bf64d86->enter($__internal_1b5314b01e7079935c66e424fc322c9b3cdf3b153ad37a131d0434199bf64d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideRight"));

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
        
        $__internal_1b5314b01e7079935c66e424fc322c9b3cdf3b153ad37a131d0434199bf64d86->leave($__internal_1b5314b01e7079935c66e424fc322c9b3cdf3b153ad37a131d0434199bf64d86_prof);

    }

    // line 35
    public function block_section2($context, array $blocks = array())
    {
        $__internal_fa0e0440e2883f7972c189161a074841b1a67f491c9c01ff5a24be57b866da6e = $this->env->getExtension("native_profiler");
        $__internal_fa0e0440e2883f7972c189161a074841b1a67f491c9c01ff5a24be57b866da6e->enter($__internal_fa0e0440e2883f7972c189161a074841b1a67f491c9c01ff5a24be57b866da6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 36
        echo "                        content header
                    ";
        
        $__internal_fa0e0440e2883f7972c189161a074841b1a67f491c9c01ff5a24be57b866da6e->leave($__internal_fa0e0440e2883f7972c189161a074841b1a67f491c9c01ff5a24be57b866da6e_prof);

    }

    // line 38
    public function block_section3($context, array $blocks = array())
    {
        $__internal_51d1e6982b35295f9eb500fe3ebfbf9d973cadf9f6600f5639d07b852ca70038 = $this->env->getExtension("native_profiler");
        $__internal_51d1e6982b35295f9eb500fe3ebfbf9d973cadf9f6600f5639d07b852ca70038->enter($__internal_51d1e6982b35295f9eb500fe3ebfbf9d973cadf9f6600f5639d07b852ca70038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 39
        echo "                        content 
                    ";
        
        $__internal_51d1e6982b35295f9eb500fe3ebfbf9d973cadf9f6600f5639d07b852ca70038->leave($__internal_51d1e6982b35295f9eb500fe3ebfbf9d973cadf9f6600f5639d07b852ca70038_prof);

    }

    // line 43
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_267ce20424f29f709fb2b2f4c184d871a477ec3e1e7a7fcef5bba60a97c571b1 = $this->env->getExtension("native_profiler");
        $__internal_267ce20424f29f709fb2b2f4c184d871a477ec3e1e7a7fcef5bba60a97c571b1->enter($__internal_267ce20424f29f709fb2b2f4c184d871a477ec3e1e7a7fcef5bba60a97c571b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        // line 44
        echo "                pie de pagina 
            ";
        
        $__internal_267ce20424f29f709fb2b2f4c184d871a477ec3e1e7a7fcef5bba60a97c571b1->leave($__internal_267ce20424f29f709fb2b2f4c184d871a477ec3e1e7a7fcef5bba60a97c571b1_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c4eeaa24de7c70df5feda4c65186547284834c8354a5fefbc9a7e23049899d5 = $this->env->getExtension("native_profiler");
        $__internal_1c4eeaa24de7c70df5feda4c65186547284834c8354a5fefbc9a7e23049899d5->enter($__internal_1c4eeaa24de7c70df5feda4c65186547284834c8354a5fefbc9a7e23049899d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
        ";
        
        $__internal_1c4eeaa24de7c70df5feda4c65186547284834c8354a5fefbc9a7e23049899d5->leave($__internal_1c4eeaa24de7c70df5feda4c65186547284834c8354a5fefbc9a7e23049899d5_prof);

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
