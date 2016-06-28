<?php

/* ::base.html.twig */
class __TwigTemplate_d9cfbce8448b8d18606965888296a31285056e962a5dd5e6f13a675a42b9f349 extends Twig_Template
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
        $__internal_1aee63158663c82d96e1f1116ea1e378e5effb12ef1590ea0f1af53099b9b605 = $this->env->getExtension("native_profiler");
        $__internal_1aee63158663c82d96e1f1116ea1e378e5effb12ef1590ea0f1af53099b9b605->enter($__internal_1aee63158663c82d96e1f1116ea1e378e5effb12ef1590ea0f1af53099b9b605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1aee63158663c82d96e1f1116ea1e378e5effb12ef1590ea0f1af53099b9b605->leave($__internal_1aee63158663c82d96e1f1116ea1e378e5effb12ef1590ea0f1af53099b9b605_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c59070f803d9694203c545e01a4d0846070f39aade3bafb06399bf71007f9430 = $this->env->getExtension("native_profiler");
        $__internal_c59070f803d9694203c545e01a4d0846070f39aade3bafb06399bf71007f9430->enter($__internal_c59070f803d9694203c545e01a4d0846070f39aade3bafb06399bf71007f9430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gamedasoft ";
        
        $__internal_c59070f803d9694203c545e01a4d0846070f39aade3bafb06399bf71007f9430->leave($__internal_c59070f803d9694203c545e01a4d0846070f39aade3bafb06399bf71007f9430_prof);

    }

    // line 8
    public function block_metadesc($context, array $blocks = array())
    {
        $__internal_854219b8a916763335b6b7103dbbd9cd86830685dbaf4a6512b8ac69fb60915e = $this->env->getExtension("native_profiler");
        $__internal_854219b8a916763335b6b7103dbbd9cd86830685dbaf4a6512b8ac69fb60915e->enter($__internal_854219b8a916763335b6b7103dbbd9cd86830685dbaf4a6512b8ac69fb60915e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metadesc"));

        echo "Medadescripion comun";
        
        $__internal_854219b8a916763335b6b7103dbbd9cd86830685dbaf4a6512b8ac69fb60915e->leave($__internal_854219b8a916763335b6b7103dbbd9cd86830685dbaf4a6512b8ac69fb60915e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef809ee30166030ff5bdb1282b437326987645ffb81e5e10f0e5184571d9546c = $this->env->getExtension("native_profiler");
        $__internal_ef809ee30166030ff5bdb1282b437326987645ffb81e5e10f0e5184571d9546c->enter($__internal_ef809ee30166030ff5bdb1282b437326987645ffb81e5e10f0e5184571d9546c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ef809ee30166030ff5bdb1282b437326987645ffb81e5e10f0e5184571d9546c->leave($__internal_ef809ee30166030ff5bdb1282b437326987645ffb81e5e10f0e5184571d9546c_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfd9b310cd8f2a9e9e5f87e1ec308919a0ed5cbea3a9989153c039f4574f7b18 = $this->env->getExtension("native_profiler");
        $__internal_dfd9b310cd8f2a9e9e5f87e1ec308919a0ed5cbea3a9989153c039f4574f7b18->enter($__internal_dfd9b310cd8f2a9e9e5f87e1ec308919a0ed5cbea3a9989153c039f4574f7b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "        ";
        $this->displayBlock('content1', $context, $blocks);
        // line 47
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    ";
        
        $__internal_dfd9b310cd8f2a9e9e5f87e1ec308919a0ed5cbea3a9989153c039f4574f7b18->leave($__internal_dfd9b310cd8f2a9e9e5f87e1ec308919a0ed5cbea3a9989153c039f4574f7b18_prof);

    }

    // line 22
    public function block_content1($context, array $blocks = array())
    {
        $__internal_3610763a3857c498bdc95b4047d3f34c9ed5f51d40902f662a695b040190a6de = $this->env->getExtension("native_profiler");
        $__internal_3610763a3857c498bdc95b4047d3f34c9ed5f51d40902f662a695b040190a6de->enter($__internal_3610763a3857c498bdc95b4047d3f34c9ed5f51d40902f662a695b040190a6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

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
        
        $__internal_3610763a3857c498bdc95b4047d3f34c9ed5f51d40902f662a695b040190a6de->leave($__internal_3610763a3857c498bdc95b4047d3f34c9ed5f51d40902f662a695b040190a6de_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_421f21292a422362e4a338a5cb2c3c344e9468a3a25eb1e8f582801e0722426d = $this->env->getExtension("native_profiler");
        $__internal_421f21292a422362e4a338a5cb2c3c344e9468a3a25eb1e8f582801e0722426d->enter($__internal_421f21292a422362e4a338a5cb2c3c344e9468a3a25eb1e8f582801e0722426d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 24
        echo "                Encabezado
            ";
        
        $__internal_421f21292a422362e4a338a5cb2c3c344e9468a3a25eb1e8f582801e0722426d->leave($__internal_421f21292a422362e4a338a5cb2c3c344e9468a3a25eb1e8f582801e0722426d_prof);

    }

    // line 26
    public function block_content2($context, array $blocks = array())
    {
        $__internal_164354de9401234abb79aa810af0af7db026663a22e159bec85ea7ef4eec8330 = $this->env->getExtension("native_profiler");
        $__internal_164354de9401234abb79aa810af0af7db026663a22e159bec85ea7ef4eec8330->enter($__internal_164354de9401234abb79aa810af0af7db026663a22e159bec85ea7ef4eec8330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        // line 27
        echo "                ";
        $this->displayBlock('asideLeft', $context, $blocks);
        // line 33
        echo "                ";
        $this->displayBlock('asideRight', $context, $blocks);
        // line 42
        echo "            ";
        
        $__internal_164354de9401234abb79aa810af0af7db026663a22e159bec85ea7ef4eec8330->leave($__internal_164354de9401234abb79aa810af0af7db026663a22e159bec85ea7ef4eec8330_prof);

    }

    // line 27
    public function block_asideLeft($context, array $blocks = array())
    {
        $__internal_c68e02c6586452b6d160263e56eaa5dd85236b917d4ed20fe4de55588481687f = $this->env->getExtension("native_profiler");
        $__internal_c68e02c6586452b6d160263e56eaa5dd85236b917d4ed20fe4de55588481687f->enter($__internal_c68e02c6586452b6d160263e56eaa5dd85236b917d4ed20fe4de55588481687f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideLeft"));

        // line 28
        echo "                    Lado Izquierda
                    ";
        // line 29
        $this->displayBlock('section1', $context, $blocks);
        // line 32
        echo "                ";
        
        $__internal_c68e02c6586452b6d160263e56eaa5dd85236b917d4ed20fe4de55588481687f->leave($__internal_c68e02c6586452b6d160263e56eaa5dd85236b917d4ed20fe4de55588481687f_prof);

    }

    // line 29
    public function block_section1($context, array $blocks = array())
    {
        $__internal_249a136ae9254851dff80810ca8ce368a78247111dc5cbe0ea64764123d3623b = $this->env->getExtension("native_profiler");
        $__internal_249a136ae9254851dff80810ca8ce368a78247111dc5cbe0ea64764123d3623b->enter($__internal_249a136ae9254851dff80810ca8ce368a78247111dc5cbe0ea64764123d3623b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 30
        echo "                        Barra navegacion 
                    ";
        
        $__internal_249a136ae9254851dff80810ca8ce368a78247111dc5cbe0ea64764123d3623b->leave($__internal_249a136ae9254851dff80810ca8ce368a78247111dc5cbe0ea64764123d3623b_prof);

    }

    // line 33
    public function block_asideRight($context, array $blocks = array())
    {
        $__internal_69d522aff81d4356628b18583331802f5bc0312d42c340b3e5bff3c8812df890 = $this->env->getExtension("native_profiler");
        $__internal_69d522aff81d4356628b18583331802f5bc0312d42c340b3e5bff3c8812df890->enter($__internal_69d522aff81d4356628b18583331802f5bc0312d42c340b3e5bff3c8812df890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideRight"));

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
        
        $__internal_69d522aff81d4356628b18583331802f5bc0312d42c340b3e5bff3c8812df890->leave($__internal_69d522aff81d4356628b18583331802f5bc0312d42c340b3e5bff3c8812df890_prof);

    }

    // line 35
    public function block_section2($context, array $blocks = array())
    {
        $__internal_71bba4253f04e386380e94799617b8b3489dba9f23795782e72ccfc47fceeca3 = $this->env->getExtension("native_profiler");
        $__internal_71bba4253f04e386380e94799617b8b3489dba9f23795782e72ccfc47fceeca3->enter($__internal_71bba4253f04e386380e94799617b8b3489dba9f23795782e72ccfc47fceeca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 36
        echo "                        content header
                    ";
        
        $__internal_71bba4253f04e386380e94799617b8b3489dba9f23795782e72ccfc47fceeca3->leave($__internal_71bba4253f04e386380e94799617b8b3489dba9f23795782e72ccfc47fceeca3_prof);

    }

    // line 38
    public function block_section3($context, array $blocks = array())
    {
        $__internal_43576b481ca6573c9d71415b80778c1897e044897664bbe60068d2accefcf970 = $this->env->getExtension("native_profiler");
        $__internal_43576b481ca6573c9d71415b80778c1897e044897664bbe60068d2accefcf970->enter($__internal_43576b481ca6573c9d71415b80778c1897e044897664bbe60068d2accefcf970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 39
        echo "                        content 
                    ";
        
        $__internal_43576b481ca6573c9d71415b80778c1897e044897664bbe60068d2accefcf970->leave($__internal_43576b481ca6573c9d71415b80778c1897e044897664bbe60068d2accefcf970_prof);

    }

    // line 43
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_2da1a88a593b412f9a1a8c6625d2d77e685842adc17ef481a91b0c3455aac1de = $this->env->getExtension("native_profiler");
        $__internal_2da1a88a593b412f9a1a8c6625d2d77e685842adc17ef481a91b0c3455aac1de->enter($__internal_2da1a88a593b412f9a1a8c6625d2d77e685842adc17ef481a91b0c3455aac1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        // line 44
        echo "                pie de pagina 
            ";
        
        $__internal_2da1a88a593b412f9a1a8c6625d2d77e685842adc17ef481a91b0c3455aac1de->leave($__internal_2da1a88a593b412f9a1a8c6625d2d77e685842adc17ef481a91b0c3455aac1de_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dbb865924e028c3644eb9349676261b20e520e5501efe197ca5347296ce99e10 = $this->env->getExtension("native_profiler");
        $__internal_dbb865924e028c3644eb9349676261b20e520e5501efe197ca5347296ce99e10->enter($__internal_dbb865924e028c3644eb9349676261b20e520e5501efe197ca5347296ce99e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
        ";
        
        $__internal_dbb865924e028c3644eb9349676261b20e520e5501efe197ca5347296ce99e10->leave($__internal_dbb865924e028c3644eb9349676261b20e520e5501efe197ca5347296ce99e10_prof);

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
