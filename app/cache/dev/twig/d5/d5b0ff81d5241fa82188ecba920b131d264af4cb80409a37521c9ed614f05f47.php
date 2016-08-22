<?php

/* LoginfirstBundle::Layout_AdminConsultas.html.twig */
class __TwigTemplate_c22c6805eb203845fb9de2c1875441e81b7dc09d087965e0313dd11dfe920c02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "LoginfirstBundle::Layout_AdminConsultas.html.twig", 2);
        $this->blocks = array(
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

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d641c1e122a1a5c340444bd36775e6f7c32fa16069150ef407bdcd9016510bb = $this->env->getExtension("native_profiler");
        $__internal_5d641c1e122a1a5c340444bd36775e6f7c32fa16069150ef407bdcd9016510bb->enter($__internal_5d641c1e122a1a5c340444bd36775e6f7c32fa16069150ef407bdcd9016510bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle::Layout_AdminConsultas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d641c1e122a1a5c340444bd36775e6f7c32fa16069150ef407bdcd9016510bb->leave($__internal_5d641c1e122a1a5c340444bd36775e6f7c32fa16069150ef407bdcd9016510bb_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e054453af2fe1b50172ffee74b481921ff665b0bb80e0f6460752e4e3108646 = $this->env->getExtension("native_profiler");
        $__internal_9e054453af2fe1b50172ffee74b481921ff665b0bb80e0f6460752e4e3108646->enter($__internal_9e054453af2fe1b50172ffee74b481921ff665b0bb80e0f6460752e4e3108646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>  
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/docs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/AdminLTE.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/Req-Tiempos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css\" />

";
        
        $__internal_9e054453af2fe1b50172ffee74b481921ff665b0bb80e0f6460752e4e3108646->leave($__internal_9e054453af2fe1b50172ffee74b481921ff665b0bb80e0f6460752e4e3108646_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_e23f95e60bd421cff43af0af5eb5ea4454d0557aa0b5eaf512b30fcce70450c7 = $this->env->getExtension("native_profiler");
        $__internal_e23f95e60bd421cff43af0af5eb5ea4454d0557aa0b5eaf512b30fcce70450c7->enter($__internal_e23f95e60bd421cff43af0af5eb5ea4454d0557aa0b5eaf512b30fcce70450c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <body class=\"skin-black\">
        ";
        // line 18
        $this->displayBlock('content1', $context, $blocks);
        // line 105
        echo "        ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 112
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "    </body>
";
        
        $__internal_e23f95e60bd421cff43af0af5eb5ea4454d0557aa0b5eaf512b30fcce70450c7->leave($__internal_e23f95e60bd421cff43af0af5eb5ea4454d0557aa0b5eaf512b30fcce70450c7_prof);

    }

    // line 18
    public function block_content1($context, array $blocks = array())
    {
        $__internal_8d434f731b881b88ad44bb84f8ac974311a5047e32cf76b2982038c38a66df7c = $this->env->getExtension("native_profiler");
        $__internal_8d434f731b881b88ad44bb84f8ac974311a5047e32cf76b2982038c38a66df7c->enter($__internal_8d434f731b881b88ad44bb84f8ac974311a5047e32cf76b2982038c38a66df7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        // line 19
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 74
        echo "            ";
        $this->displayBlock('content2', $context, $blocks);
        // line 104
        echo "        ";
        
        $__internal_8d434f731b881b88ad44bb84f8ac974311a5047e32cf76b2982038c38a66df7c->leave($__internal_8d434f731b881b88ad44bb84f8ac974311a5047e32cf76b2982038c38a66df7c_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_86e7abb7e65d117c46791a2c6e6cbe841f58b2478ad2aed3e90670fadce7b51f = $this->env->getExtension("native_profiler");
        $__internal_86e7abb7e65d117c46791a2c6e6cbe841f58b2478ad2aed3e90670fadce7b51f->enter($__internal_86e7abb7e65d117c46791a2c6e6cbe841f58b2478ad2aed3e90670fadce7b51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "                <header class=\"header\">
                    <div  class=\"logo\" >
                        <img id=\"img_logoP\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/logo-gameda.png"), "html", null, true);
        echo "\" />

                    </div>
                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <!-- Sidebar toggle button-->
                        <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </a>
                        <div class=\"navbar-right\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"dropdown user user-menu\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <i class=\"glyphicon glyphicon-user\"></i>
                                        <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "Nombre"), "method"), "html", null, true);
        echo "<i class=\"caret\"></i></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <!-- User image -->
                                        <li class=\"user-header bg-light-blue\">
                                             <p> ADMINISTRADOR
                                                <small> Desarrollador Web <br>
                                                    <script>
                                                        var f = new Date();
                                                        var meses = new Array(\"Enero\", \"Febrero\", \"Marzo\", \"Abril\", \"Mayo\", \"Junio\", \"Julio\", \"Agosto\", \"Septiembre\", \"Octubre\", \"Noviembre\", \"Diciembre\");
                                                        var dias = new Array(\"Domingo\", \"Lunes\", \"Martes\", \"Miercoles\", \"Jueves\", \"Viernes\", \"Sabado\");
                                                        document.write('<div class=\"mifecha\">' + \"Quito, \");
                                                        document.write(dias[f.getDay()] + \" \");
                                                        document.write(f.getDate() + \" \");
                                                        document.write(meses[f.getMonth()] + \" \");
                                                        document.write(f.getFullYear());
                                                        document.write('</div>');
                                                    </script></small>
                                            </p>
                                        </li>
                                        <!-- Menu Body -->
                                        <!-- Menu Footer-->
                                        <li class=\"user-footer\">

                                            <div class=\"pull-left\">
                                                <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("Logout");
        echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out\"></i> Cerrar Sesion</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
            ";
        
        $__internal_86e7abb7e65d117c46791a2c6e6cbe841f58b2478ad2aed3e90670fadce7b51f->leave($__internal_86e7abb7e65d117c46791a2c6e6cbe841f58b2478ad2aed3e90670fadce7b51f_prof);

    }

    // line 74
    public function block_content2($context, array $blocks = array())
    {
        $__internal_33a9e1cd62414194dd80c4227ff742987426e591aa230d38d7625b84c5469666 = $this->env->getExtension("native_profiler");
        $__internal_33a9e1cd62414194dd80c4227ff742987426e591aa230d38d7625b84c5469666->enter($__internal_33a9e1cd62414194dd80c4227ff742987426e591aa230d38d7625b84c5469666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        // line 75
        echo "                <div class=\"\">
                    <!-- Left side column. contains the logo and sidebar -->
                    ";
        // line 77
        $this->displayBlock('asideLeft', $context, $blocks);
        // line 90
        echo "                    ";
        $this->displayBlock('asideRight', $context, $blocks);
        // line 102
        echo "                </div><!-- ./wrapper -->
            ";
        
        $__internal_33a9e1cd62414194dd80c4227ff742987426e591aa230d38d7625b84c5469666->leave($__internal_33a9e1cd62414194dd80c4227ff742987426e591aa230d38d7625b84c5469666_prof);

    }

    // line 77
    public function block_asideLeft($context, array $blocks = array())
    {
        $__internal_bbdf442aa9047d651a57376086aa7069ff03a9ac7f075f94f4d526e86b2866c6 = $this->env->getExtension("native_profiler");
        $__internal_bbdf442aa9047d651a57376086aa7069ff03a9ac7f075f94f4d526e86b2866c6->enter($__internal_bbdf442aa9047d651a57376086aa7069ff03a9ac7f075f94f4d526e86b2866c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideLeft"));

        // line 78
        echo "                        <aside class=\"\">
                            <!-- sidebar: style can be found in sidebar.less -->
                            ";
        // line 80
        $this->displayBlock('section1', $context, $blocks);
        // line 87
        echo "                            <!-- /.sidebar -->
                        </aside>
                    ";
        
        $__internal_bbdf442aa9047d651a57376086aa7069ff03a9ac7f075f94f4d526e86b2866c6->leave($__internal_bbdf442aa9047d651a57376086aa7069ff03a9ac7f075f94f4d526e86b2866c6_prof);

    }

    // line 80
    public function block_section1($context, array $blocks = array())
    {
        $__internal_18db25c21b485ba79d37bedadcc01a97af9b704f24f7a0cc9dd1d203b490e2c6 = $this->env->getExtension("native_profiler");
        $__internal_18db25c21b485ba79d37bedadcc01a97af9b704f24f7a0cc9dd1d203b490e2c6->enter($__internal_18db25c21b485ba79d37bedadcc01a97af9b704f24f7a0cc9dd1d203b490e2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 81
        echo "
                                <!-- Sidebar user panel -->

                                <!-- sidebar menu: : style can be found in sidebar.less -->

                            ";
        
        $__internal_18db25c21b485ba79d37bedadcc01a97af9b704f24f7a0cc9dd1d203b490e2c6->leave($__internal_18db25c21b485ba79d37bedadcc01a97af9b704f24f7a0cc9dd1d203b490e2c6_prof);

    }

    // line 90
    public function block_asideRight($context, array $blocks = array())
    {
        $__internal_0fb4a791655e15d002acc90534e7f882ff77eb6e99b0df77496335c55d84e625 = $this->env->getExtension("native_profiler");
        $__internal_0fb4a791655e15d002acc90534e7f882ff77eb6e99b0df77496335c55d84e625->enter($__internal_0fb4a791655e15d002acc90534e7f882ff77eb6e99b0df77496335c55d84e625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideRight"));

        // line 91
        echo "                        <!-- Right side column. Contains the navbar and content of the page -->

                        <!-- Content Header (Page header) -->
                        ";
        // line 94
        $this->displayBlock('section2', $context, $blocks);
        // line 97
        echo "                        ";
        $this->displayBlock('section3', $context, $blocks);
        // line 100
        echo "                        <!-- /.right-side -->
                    ";
        
        $__internal_0fb4a791655e15d002acc90534e7f882ff77eb6e99b0df77496335c55d84e625->leave($__internal_0fb4a791655e15d002acc90534e7f882ff77eb6e99b0df77496335c55d84e625_prof);

    }

    // line 94
    public function block_section2($context, array $blocks = array())
    {
        $__internal_a578c4f4e698e1e132f33e7abf75d7dee74f8f35e555dc5d081d76545587f718 = $this->env->getExtension("native_profiler");
        $__internal_a578c4f4e698e1e132f33e7abf75d7dee74f8f35e555dc5d081d76545587f718->enter($__internal_a578c4f4e698e1e132f33e7abf75d7dee74f8f35e555dc5d081d76545587f718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 95
        echo "
                        ";
        
        $__internal_a578c4f4e698e1e132f33e7abf75d7dee74f8f35e555dc5d081d76545587f718->leave($__internal_a578c4f4e698e1e132f33e7abf75d7dee74f8f35e555dc5d081d76545587f718_prof);

    }

    // line 97
    public function block_section3($context, array $blocks = array())
    {
        $__internal_228b1f5f3d0c595abb2e24a23cdc145f1587dcdbba3ab7b1ddd93aa48f530089 = $this->env->getExtension("native_profiler");
        $__internal_228b1f5f3d0c595abb2e24a23cdc145f1587dcdbba3ab7b1ddd93aa48f530089->enter($__internal_228b1f5f3d0c595abb2e24a23cdc145f1587dcdbba3ab7b1ddd93aa48f530089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 98
        echo "
                        ";
        
        $__internal_228b1f5f3d0c595abb2e24a23cdc145f1587dcdbba3ab7b1ddd93aa48f530089->leave($__internal_228b1f5f3d0c595abb2e24a23cdc145f1587dcdbba3ab7b1ddd93aa48f530089_prof);

    }

    // line 105
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_cfc9e0279cebf7dde5ca030618028877d0b01235c7353933ec07b8ade2d44000 = $this->env->getExtension("native_profiler");
        $__internal_cfc9e0279cebf7dde5ca030618028877d0b01235c7353933ec07b8ade2d44000->enter($__internal_cfc9e0279cebf7dde5ca030618028877d0b01235c7353933ec07b8ade2d44000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo "        

            <div class=\"container-fluid\"  id=\"Desarrollo\">
                Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.
            </div>

        ";
        
        $__internal_cfc9e0279cebf7dde5ca030618028877d0b01235c7353933ec07b8ade2d44000->leave($__internal_cfc9e0279cebf7dde5ca030618028877d0b01235c7353933ec07b8ade2d44000_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4efe69672bc170906d31bd71f0afe1a90e2ec0c57ccde2c1aedba835073c8c0 = $this->env->getExtension("native_profiler");
        $__internal_b4efe69672bc170906d31bd71f0afe1a90e2ec0c57ccde2c1aedba835073c8c0->enter($__internal_b4efe69672bc170906d31bd71f0afe1a90e2ec0c57ccde2c1aedba835073c8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
            <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/AdminLTE/app.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery-2.1.3.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jspdf.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/main.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/mainconsultas.js"), "html", null, true);
        echo "\"></script>
             <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js\"></script>
        ";
        
        $__internal_b4efe69672bc170906d31bd71f0afe1a90e2ec0c57ccde2c1aedba835073c8c0->leave($__internal_b4efe69672bc170906d31bd71f0afe1a90e2ec0c57ccde2c1aedba835073c8c0_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle::Layout_AdminConsultas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 119,  374 => 118,  370 => 117,  366 => 116,  362 => 115,  358 => 114,  354 => 113,  346 => 112,  328 => 105,  320 => 98,  314 => 97,  306 => 95,  300 => 94,  292 => 100,  289 => 97,  287 => 94,  282 => 91,  276 => 90,  264 => 81,  258 => 80,  249 => 87,  247 => 80,  243 => 78,  237 => 77,  229 => 102,  226 => 90,  224 => 77,  220 => 75,  214 => 74,  197 => 64,  169 => 39,  149 => 22,  145 => 20,  139 => 19,  132 => 104,  129 => 74,  126 => 19,  120 => 18,  112 => 123,  109 => 112,  106 => 105,  104 => 18,  101 => 17,  95 => 16,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  51 => 4,  45 => 3,  11 => 2,);
    }
}
/* {# src/Login/firstBundle/Resources/views/Layout_RegistroTiempos.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <link href="{{asset('bundles/loginfirst/css/bootstrap.min.css')}}" rel="stylesheet"/>  */
/*     <link href="{{asset('bundles/loginfirst/css/docs.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/font-awesome.min.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/morris/morris.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/fullcalendar/fullcalendar.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/AdminLTE.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/Req-Tiempos.css')}}" rel="stylesheet"/>*/
/*     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />*/
/* */
/* {% endblock %}*/
/* {%block body %}*/
/*     <body class="skin-black">*/
/*         {%block content1 %}*/
/*             {% block header %}*/
/*                 <header class="header">*/
/*                     <div  class="logo" >*/
/*                         <img id="img_logoP" src="{{asset('bundles/loginfirst/Imagenes/logo-gameda.png')}}" />*/
/* */
/*                     </div>*/
/*                     <!-- Header Navbar: style can be found in header.less -->*/
/*                     <nav class="navbar navbar-static-top" role="navigation">*/
/*                         <!-- Sidebar toggle button-->*/
/*                         <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </a>*/
/*                         <div class="navbar-right">*/
/*                             <ul class="nav navbar-nav">*/
/*                                 <li class="dropdown user user-menu">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                         <i class="glyphicon glyphicon-user"></i>*/
/*                                         <span>{{app.session.get('Nombre')}}<i class="caret"></i></span>*/
/*                                     </a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <!-- User image -->*/
/*                                         <li class="user-header bg-light-blue">*/
/*                                              <p> ADMINISTRADOR*/
/*                                                 <small> Desarrollador Web <br>*/
/*                                                     <script>*/
/*                                                         var f = new Date();*/
/*                                                         var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");*/
/*                                                         var dias = new Array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");*/
/*                                                         document.write('<div class="mifecha">' + "Quito, ");*/
/*                                                         document.write(dias[f.getDay()] + " ");*/
/*                                                         document.write(f.getDate() + " ");*/
/*                                                         document.write(meses[f.getMonth()] + " ");*/
/*                                                         document.write(f.getFullYear());*/
/*                                                         document.write('</div>');*/
/*                                                     </script></small>*/
/*                                             </p>*/
/*                                         </li>*/
/*                                         <!-- Menu Body -->*/
/*                                         <!-- Menu Footer-->*/
/*                                         <li class="user-footer">*/
/* */
/*                                             <div class="pull-left">*/
/*                                                 <a href="{{path('Logout')}}" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Cerrar Sesion</a>*/
/*                                             </div>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </nav>*/
/*                 </header>*/
/*             {%endblock%}*/
/*             {%block content2 %}*/
/*                 <div class="">*/
/*                     <!-- Left side column. contains the logo and sidebar -->*/
/*                     {%block asideLeft %}*/
/*                         <aside class="">*/
/*                             <!-- sidebar: style can be found in sidebar.less -->*/
/*                             {%block section1 %}*/
/* */
/*                                 <!-- Sidebar user panel -->*/
/* */
/*                                 <!-- sidebar menu: : style can be found in sidebar.less -->*/
/* */
/*                             {%endblock%}*/
/*                             <!-- /.sidebar -->*/
/*                         </aside>*/
/*                     {%endblock%}*/
/*                     {%block asideRight %}*/
/*                         <!-- Right side column. Contains the navbar and content of the page -->*/
/* */
/*                         <!-- Content Header (Page header) -->*/
/*                         {%block section2 %}*/
/* */
/*                         {%endblock%}*/
/*                         {%block section3 %}*/
/* */
/*                         {%endblock%}*/
/*                         <!-- /.right-side -->*/
/*                     {%endblock%}*/
/*                 </div><!-- ./wrapper -->*/
/*             {%endblock%}*/
/*         {% endblock %}*/
/*         {% block Footer %}        */
/* */
/*             <div class="container-fluid"  id="Desarrollo">*/
/*                 Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.*/
/*             </div>*/
/* */
/*         {% endblock%}*/
/*         {% block javascripts %} */
/*             <script src="{{asset('bundles/loginfirst/js/bootstrap.min.js') }}"></script>*/
/*             <script src="{{asset('bundles/loginfirst/js/AdminLTE/app.js') }}"></script>*/
/*             <script src="{{asset('bundles/loginfirst/js/jquery.validate.js') }}"></script>*/
/*             <script src="{{asset('bundles/loginfirst/js/jquery-2.1.3.js') }}"></script>*/
/*             <script src="{{asset('bundles/loginfirst/js/jspdf.js') }}"></script>*/
/*             <script src="{{asset('bundles/loginfirst/js/main.js') }}"></script>*/
/*             <script src="{{asset('bundles/loginfirst/js/mainconsultas.js') }}"></script>*/
/*              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*             <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* {% endblock %}*/
/* */
