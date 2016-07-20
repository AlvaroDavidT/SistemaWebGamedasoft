<?php

/* LoginfirstBundle::Layout_AdminConsultas.html.twig */
class __TwigTemplate_62aabb65badcb1e952ec9a9e52280f05a9383ea913ea69b0f60c70d23a87a91b extends Twig_Template
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
        $__internal_0cb2fdbad86273c93af2840d5dc3ceaf0a05f92434286950505f659a8b84b64b = $this->env->getExtension("native_profiler");
        $__internal_0cb2fdbad86273c93af2840d5dc3ceaf0a05f92434286950505f659a8b84b64b->enter($__internal_0cb2fdbad86273c93af2840d5dc3ceaf0a05f92434286950505f659a8b84b64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle::Layout_AdminConsultas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cb2fdbad86273c93af2840d5dc3ceaf0a05f92434286950505f659a8b84b64b->leave($__internal_0cb2fdbad86273c93af2840d5dc3ceaf0a05f92434286950505f659a8b84b64b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a50fc4d04330746edfd877b5fca067a768ef22caa9275bbb8ade2f4a41d6e886 = $this->env->getExtension("native_profiler");
        $__internal_a50fc4d04330746edfd877b5fca067a768ef22caa9275bbb8ade2f4a41d6e886->enter($__internal_a50fc4d04330746edfd877b5fca067a768ef22caa9275bbb8ade2f4a41d6e886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a50fc4d04330746edfd877b5fca067a768ef22caa9275bbb8ade2f4a41d6e886->leave($__internal_a50fc4d04330746edfd877b5fca067a768ef22caa9275bbb8ade2f4a41d6e886_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_27c9351388a130f5f55f3c79bf29cb46d7ac998bd69b63cbe4d0805eb5f33ea0 = $this->env->getExtension("native_profiler");
        $__internal_27c9351388a130f5f55f3c79bf29cb46d7ac998bd69b63cbe4d0805eb5f33ea0->enter($__internal_27c9351388a130f5f55f3c79bf29cb46d7ac998bd69b63cbe4d0805eb5f33ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <body class=\"skin-black\">
        ";
        // line 18
        $this->displayBlock('content1', $context, $blocks);
        // line 111
        echo "        ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 118
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 129
        echo "    </body>
";
        
        $__internal_27c9351388a130f5f55f3c79bf29cb46d7ac998bd69b63cbe4d0805eb5f33ea0->leave($__internal_27c9351388a130f5f55f3c79bf29cb46d7ac998bd69b63cbe4d0805eb5f33ea0_prof);

    }

    // line 18
    public function block_content1($context, array $blocks = array())
    {
        $__internal_3b6eddbba891da2af07f619a68ba43b07be0c3dc1e4c9083fd2c52365d80cb90 = $this->env->getExtension("native_profiler");
        $__internal_3b6eddbba891da2af07f619a68ba43b07be0c3dc1e4c9083fd2c52365d80cb90->enter($__internal_3b6eddbba891da2af07f619a68ba43b07be0c3dc1e4c9083fd2c52365d80cb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        // line 19
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 80
        echo "            ";
        $this->displayBlock('content2', $context, $blocks);
        // line 110
        echo "        ";
        
        $__internal_3b6eddbba891da2af07f619a68ba43b07be0c3dc1e4c9083fd2c52365d80cb90->leave($__internal_3b6eddbba891da2af07f619a68ba43b07be0c3dc1e4c9083fd2c52365d80cb90_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_86850e21c4558389f55033d52ef0a645a1e827d7ec9a1c0d11e8eb47c5b8cf05 = $this->env->getExtension("native_profiler");
        $__internal_86850e21c4558389f55033d52ef0a645a1e827d7ec9a1c0d11e8eb47c5b8cf05->enter($__internal_86850e21c4558389f55033d52ef0a645a1e827d7ec9a1c0d11e8eb47c5b8cf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
                                <!-- Messages: style can be found in dropdown.less-->                               
                                <!-- Notifications: style can be found in dropdown.less -->                             
                                <!-- Tasks: style can be found in dropdown.less -->

                                <!-- User Account: style can be found in dropdown.less -->
                                <li class=\"dropdown user user-menu\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <i class=\"glyphicon glyphicon-user\"></i>
                                        <span>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "Nombre"), "method"), "html", null, true);
        echo "<i class=\"caret\"></i></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <!-- User image -->
                                        <li class=\"user-header bg-light-blue\">
                                          <!--  <img src=\"";
        // line 49
        echo "bundles/loginfirst/Imagenes/avatar5.png";
        echo "\"  class=\"img-circle\" alt=\"User Image\" />-->
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
        // line 70
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
        
        $__internal_86850e21c4558389f55033d52ef0a645a1e827d7ec9a1c0d11e8eb47c5b8cf05->leave($__internal_86850e21c4558389f55033d52ef0a645a1e827d7ec9a1c0d11e8eb47c5b8cf05_prof);

    }

    // line 80
    public function block_content2($context, array $blocks = array())
    {
        $__internal_c5399ac61bf94be73b101019b5dce564bcb9d34d8c97376f5077b0e73ade5e7c = $this->env->getExtension("native_profiler");
        $__internal_c5399ac61bf94be73b101019b5dce564bcb9d34d8c97376f5077b0e73ade5e7c->enter($__internal_c5399ac61bf94be73b101019b5dce564bcb9d34d8c97376f5077b0e73ade5e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        // line 81
        echo "                <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                    <!-- Left side column. contains the logo and sidebar -->
                    ";
        // line 83
        $this->displayBlock('asideLeft', $context, $blocks);
        // line 96
        echo "                    ";
        $this->displayBlock('asideRight', $context, $blocks);
        // line 108
        echo "                </div><!-- ./wrapper -->
            ";
        
        $__internal_c5399ac61bf94be73b101019b5dce564bcb9d34d8c97376f5077b0e73ade5e7c->leave($__internal_c5399ac61bf94be73b101019b5dce564bcb9d34d8c97376f5077b0e73ade5e7c_prof);

    }

    // line 83
    public function block_asideLeft($context, array $blocks = array())
    {
        $__internal_12548b3a52b7727c77abfe50d678237db191695cce1f43d0d87d7bec42bf8c99 = $this->env->getExtension("native_profiler");
        $__internal_12548b3a52b7727c77abfe50d678237db191695cce1f43d0d87d7bec42bf8c99->enter($__internal_12548b3a52b7727c77abfe50d678237db191695cce1f43d0d87d7bec42bf8c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideLeft"));

        // line 84
        echo "                        <aside class=\"\">
                            <!-- sidebar: style can be found in sidebar.less -->
                            ";
        // line 86
        $this->displayBlock('section1', $context, $blocks);
        // line 93
        echo "                            <!-- /.sidebar -->
                        </aside>
                    ";
        
        $__internal_12548b3a52b7727c77abfe50d678237db191695cce1f43d0d87d7bec42bf8c99->leave($__internal_12548b3a52b7727c77abfe50d678237db191695cce1f43d0d87d7bec42bf8c99_prof);

    }

    // line 86
    public function block_section1($context, array $blocks = array())
    {
        $__internal_750be616b6ccba05b295cc5773c2a63d3632ad847a920f800fe262038af9fbcb = $this->env->getExtension("native_profiler");
        $__internal_750be616b6ccba05b295cc5773c2a63d3632ad847a920f800fe262038af9fbcb->enter($__internal_750be616b6ccba05b295cc5773c2a63d3632ad847a920f800fe262038af9fbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 87
        echo "
                                <!-- Sidebar user panel -->

                                <!-- sidebar menu: : style can be found in sidebar.less -->

                            ";
        
        $__internal_750be616b6ccba05b295cc5773c2a63d3632ad847a920f800fe262038af9fbcb->leave($__internal_750be616b6ccba05b295cc5773c2a63d3632ad847a920f800fe262038af9fbcb_prof);

    }

    // line 96
    public function block_asideRight($context, array $blocks = array())
    {
        $__internal_a9b84320b59152ae5c9f5f9b80062aa2406598dc537fc13cf53d49cbbae1257d = $this->env->getExtension("native_profiler");
        $__internal_a9b84320b59152ae5c9f5f9b80062aa2406598dc537fc13cf53d49cbbae1257d->enter($__internal_a9b84320b59152ae5c9f5f9b80062aa2406598dc537fc13cf53d49cbbae1257d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideRight"));

        // line 97
        echo "                        <!-- Right side column. Contains the navbar and content of the page -->

                        <!-- Content Header (Page header) -->
                        ";
        // line 100
        $this->displayBlock('section2', $context, $blocks);
        // line 103
        echo "                        ";
        $this->displayBlock('section3', $context, $blocks);
        // line 106
        echo "                        <!-- /.right-side -->
                    ";
        
        $__internal_a9b84320b59152ae5c9f5f9b80062aa2406598dc537fc13cf53d49cbbae1257d->leave($__internal_a9b84320b59152ae5c9f5f9b80062aa2406598dc537fc13cf53d49cbbae1257d_prof);

    }

    // line 100
    public function block_section2($context, array $blocks = array())
    {
        $__internal_14e9cd656ba9a522cc6dea45b2b17de77fc99c46e3b859045c18fec709064313 = $this->env->getExtension("native_profiler");
        $__internal_14e9cd656ba9a522cc6dea45b2b17de77fc99c46e3b859045c18fec709064313->enter($__internal_14e9cd656ba9a522cc6dea45b2b17de77fc99c46e3b859045c18fec709064313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 101
        echo "
                        ";
        
        $__internal_14e9cd656ba9a522cc6dea45b2b17de77fc99c46e3b859045c18fec709064313->leave($__internal_14e9cd656ba9a522cc6dea45b2b17de77fc99c46e3b859045c18fec709064313_prof);

    }

    // line 103
    public function block_section3($context, array $blocks = array())
    {
        $__internal_78da424be59ea927e182a885b003026be9d20676b0cd30feb8518ccf9946b5ea = $this->env->getExtension("native_profiler");
        $__internal_78da424be59ea927e182a885b003026be9d20676b0cd30feb8518ccf9946b5ea->enter($__internal_78da424be59ea927e182a885b003026be9d20676b0cd30feb8518ccf9946b5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 104
        echo "
                        ";
        
        $__internal_78da424be59ea927e182a885b003026be9d20676b0cd30feb8518ccf9946b5ea->leave($__internal_78da424be59ea927e182a885b003026be9d20676b0cd30feb8518ccf9946b5ea_prof);

    }

    // line 111
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_08cb10d7dccbc63a06d4304e948a0dba86b7fea39bc6ea79745d1f7ab49e2845 = $this->env->getExtension("native_profiler");
        $__internal_08cb10d7dccbc63a06d4304e948a0dba86b7fea39bc6ea79745d1f7ab49e2845->enter($__internal_08cb10d7dccbc63a06d4304e948a0dba86b7fea39bc6ea79745d1f7ab49e2845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo "        

            <div class=\"container-fluid\"  id=\"Desarrollo\">
                Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.
            </div>

        ";
        
        $__internal_08cb10d7dccbc63a06d4304e948a0dba86b7fea39bc6ea79745d1f7ab49e2845->leave($__internal_08cb10d7dccbc63a06d4304e948a0dba86b7fea39bc6ea79745d1f7ab49e2845_prof);

    }

    // line 118
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32c88c58636144ccdfed77d703cdd476087e17404362054f2355af35baf6b88c = $this->env->getExtension("native_profiler");
        $__internal_32c88c58636144ccdfed77d703cdd476087e17404362054f2355af35baf6b88c->enter($__internal_32c88c58636144ccdfed77d703cdd476087e17404362054f2355af35baf6b88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
            <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/AdminLTE/app.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery-2.1.3.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jspdf.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/main.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/mainconsultas.js"), "html", null, true);
        echo "\"></script>
             <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js\"></script>
        ";
        
        $__internal_32c88c58636144ccdfed77d703cdd476087e17404362054f2355af35baf6b88c->leave($__internal_32c88c58636144ccdfed77d703cdd476087e17404362054f2355af35baf6b88c_prof);

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
        return array (  387 => 125,  383 => 124,  379 => 123,  375 => 122,  371 => 121,  367 => 120,  363 => 119,  355 => 118,  337 => 111,  329 => 104,  323 => 103,  315 => 101,  309 => 100,  301 => 106,  298 => 103,  296 => 100,  291 => 97,  285 => 96,  273 => 87,  267 => 86,  258 => 93,  256 => 86,  252 => 84,  246 => 83,  238 => 108,  235 => 96,  233 => 83,  229 => 81,  223 => 80,  206 => 70,  182 => 49,  174 => 44,  149 => 22,  145 => 20,  139 => 19,  132 => 110,  129 => 80,  126 => 19,  120 => 18,  112 => 129,  109 => 118,  106 => 111,  104 => 18,  101 => 17,  95 => 16,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  51 => 4,  45 => 3,  11 => 2,);
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
/*                                 <!-- Messages: style can be found in dropdown.less-->                               */
/*                                 <!-- Notifications: style can be found in dropdown.less -->                             */
/*                                 <!-- Tasks: style can be found in dropdown.less -->*/
/* */
/*                                 <!-- User Account: style can be found in dropdown.less -->*/
/*                                 <li class="dropdown user user-menu">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                         <i class="glyphicon glyphicon-user"></i>*/
/*                                         <span>{{app.session.get('Nombre')}}<i class="caret"></i></span>*/
/*                                     </a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <!-- User image -->*/
/*                                         <li class="user-header bg-light-blue">*/
/*                                           <!--  <img src="{{('bundles/loginfirst/Imagenes/avatar5.png')}}"  class="img-circle" alt="User Image" />-->*/
/*                                             <p> ADMINISTRADOR*/
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
/*                 <div class="wrapper row-offcanvas row-offcanvas-left">*/
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
