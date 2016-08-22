<?php

/* LoginfirstBundle::Layout_Empleado.html.twig */
class __TwigTemplate_25523f1469876efee270d33242539f3e074066d103d7fde41e4669839f59fa27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "LoginfirstBundle::Layout_Empleado.html.twig", 2);
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
        $__internal_e93e01ea848eedfc7755478238238483b8bfb4b9b6fe08749f6dedc32245e97b = $this->env->getExtension("native_profiler");
        $__internal_e93e01ea848eedfc7755478238238483b8bfb4b9b6fe08749f6dedc32245e97b->enter($__internal_e93e01ea848eedfc7755478238238483b8bfb4b9b6fe08749f6dedc32245e97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle::Layout_Empleado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e93e01ea848eedfc7755478238238483b8bfb4b9b6fe08749f6dedc32245e97b->leave($__internal_e93e01ea848eedfc7755478238238483b8bfb4b9b6fe08749f6dedc32245e97b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dae32cb53263ae1ca298a067e7b6181989b3bf0f45a69cc885229d847e71264a = $this->env->getExtension("native_profiler");
        $__internal_dae32cb53263ae1ca298a067e7b6181989b3bf0f45a69cc885229d847e71264a->enter($__internal_dae32cb53263ae1ca298a067e7b6181989b3bf0f45a69cc885229d847e71264a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo " <link href=\"";
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
     <link href=\"http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css\" rel=\"stylesheet\"/>

";
        
        $__internal_dae32cb53263ae1ca298a067e7b6181989b3bf0f45a69cc885229d847e71264a->leave($__internal_dae32cb53263ae1ca298a067e7b6181989b3bf0f45a69cc885229d847e71264a_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_211100eaad0b777fbee964a05af2f849e34a2ac903a09d8f1d5d101d3b1c37e4 = $this->env->getExtension("native_profiler");
        $__internal_211100eaad0b777fbee964a05af2f849e34a2ac903a09d8f1d5d101d3b1c37e4->enter($__internal_211100eaad0b777fbee964a05af2f849e34a2ac903a09d8f1d5d101d3b1c37e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <body class=\"skin-black\">
        ";
        // line 18
        $this->displayBlock('content1', $context, $blocks);
        // line 158
        echo "                            ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 165
        echo "                            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 182
        echo "                        </body>
                        ";
        
        $__internal_211100eaad0b777fbee964a05af2f849e34a2ac903a09d8f1d5d101d3b1c37e4->leave($__internal_211100eaad0b777fbee964a05af2f849e34a2ac903a09d8f1d5d101d3b1c37e4_prof);

    }

    // line 18
    public function block_content1($context, array $blocks = array())
    {
        $__internal_0322680dfdaaa783513f13d0134cc8a32d3e03de384977bdb2d02ccfbb8b14fb = $this->env->getExtension("native_profiler");
        $__internal_0322680dfdaaa783513f13d0134cc8a32d3e03de384977bdb2d02ccfbb8b14fb->enter($__internal_0322680dfdaaa783513f13d0134cc8a32d3e03de384977bdb2d02ccfbb8b14fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        // line 19
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 80
        echo "                        ";
        $this->displayBlock('content2', $context, $blocks);
        // line 157
        echo "                        ";
        
        $__internal_0322680dfdaaa783513f13d0134cc8a32d3e03de384977bdb2d02ccfbb8b14fb->leave($__internal_0322680dfdaaa783513f13d0134cc8a32d3e03de384977bdb2d02ccfbb8b14fb_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_9ee0e09f90d6adf44cf116c0bff06916bb85fb5347c9909e157e0c0cf0dde29c = $this->env->getExtension("native_profiler");
        $__internal_9ee0e09f90d6adf44cf116c0bff06916bb85fb5347c9909e157e0c0cf0dde29c->enter($__internal_9ee0e09f90d6adf44cf116c0bff06916bb85fb5347c9909e157e0c0cf0dde29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
                                            <p> EMPLEADO
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
        
        $__internal_9ee0e09f90d6adf44cf116c0bff06916bb85fb5347c9909e157e0c0cf0dde29c->leave($__internal_9ee0e09f90d6adf44cf116c0bff06916bb85fb5347c9909e157e0c0cf0dde29c_prof);

    }

    // line 80
    public function block_content2($context, array $blocks = array())
    {
        $__internal_2f1a79e3480cc45fc7a53cffbdad5d55d66934c175fabde01b609a6d932b03e9 = $this->env->getExtension("native_profiler");
        $__internal_2f1a79e3480cc45fc7a53cffbdad5d55d66934c175fabde01b609a6d932b03e9->enter($__internal_2f1a79e3480cc45fc7a53cffbdad5d55d66934c175fabde01b609a6d932b03e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        // line 81
        echo "                            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                                <!-- Left side column. contains the logo and sidebar -->
                                ";
        // line 83
        $this->displayBlock('asideLeft', $context, $blocks);
        // line 145
        echo "                                ";
        $this->displayBlock('asideRight', $context, $blocks);
        // line 155
        echo "                            </div><!-- ./wrapper -->
                        ";
        
        $__internal_2f1a79e3480cc45fc7a53cffbdad5d55d66934c175fabde01b609a6d932b03e9->leave($__internal_2f1a79e3480cc45fc7a53cffbdad5d55d66934c175fabde01b609a6d932b03e9_prof);

    }

    // line 83
    public function block_asideLeft($context, array $blocks = array())
    {
        $__internal_1555a3a4eae5fddfea12311b413b16516d47988347eded5a0ea4ddb6fcafa730 = $this->env->getExtension("native_profiler");
        $__internal_1555a3a4eae5fddfea12311b413b16516d47988347eded5a0ea4ddb6fcafa730->enter($__internal_1555a3a4eae5fddfea12311b413b16516d47988347eded5a0ea4ddb6fcafa730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideLeft"));

        // line 84
        echo "                                    <aside class=\"left-side sidebar-offcanvas\">
                                        <!-- sidebar: style can be found in sidebar.less -->
                                        ";
        // line 86
        $this->displayBlock('section1', $context, $blocks);
        // line 142
        echo "                                        <!-- /.sidebar -->
                                    </aside>
                                ";
        
        $__internal_1555a3a4eae5fddfea12311b413b16516d47988347eded5a0ea4ddb6fcafa730->leave($__internal_1555a3a4eae5fddfea12311b413b16516d47988347eded5a0ea4ddb6fcafa730_prof);

    }

    // line 86
    public function block_section1($context, array $blocks = array())
    {
        $__internal_00911816168d97df4f54b06a139e01de1a4cda5c87dfb13c1a3aa28a9814488b = $this->env->getExtension("native_profiler");
        $__internal_00911816168d97df4f54b06a139e01de1a4cda5c87dfb13c1a3aa28a9814488b->enter($__internal_00911816168d97df4f54b06a139e01de1a4cda5c87dfb13c1a3aa28a9814488b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 87
        echo "                                            <section class=\"sidebar\">
                                                <!-- Sidebar user panel -->
                                                <div class=\"user-panel\">
                                                    <div class=\"pull-left image\">
                                                            <!--<img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/avatar5.png"), "html", null, true);
        echo "\"  class=\"img-circle\" alt=\"User Image\" />-->

                                                    </div>
                                                    <div class=\"pull-left info\">
                                                        <h5> Bienvenido   <span>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "Nombre"), "method"), "html", null, true);
        echo "<i class=\"\"></i></span></h5>

                                                    </div>
                                                </div>
                                                <!-- sidebar menu: : style can be found in sidebar.less -->
                                                <ul class=\"sidebar-menu\">
                                                    <li class=\"active\">
                                                        <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("Empleado");
        echo "\">
                                                            <i class=\"fa fa-home\"></i> <span>MENU PRINCIPAL</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"treeview\">
                                                        <a href=\"#\">
                                                            <i class=\"fa fa-user\"></i>
                                                            <span>Mi Usuario</span>
                                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                                        </a>
                                                        <ul class=\"treeview-menu\">
                                                            <li><a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("UpdateEmpleado");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Actualizar Datos</a></li>
                                                            <li><a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("CambiarClaveEmpleado");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Cambiar Contraseña</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class=\"treeview\">
                                                        <a href=\"#\">
                                                            <i class=\"fa fa-edit\"></i> 
                                                            <span>Operaciones</span>
                                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                                        </a>
                                                        <ul class=\"treeview-menu\">
                                                            <li><a href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("RegistroT");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Ingreso Tiempos</a></li>
                                                         </ul>
                                                    </li>
                                                    <li class=\"treeview\">
                                                        <a href=\"#\">
                                                            <i class=\"fa fa-search\"></i>
                                                            <span>Consultas</span>
                                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                                        </a>
                                                        <ul class=\"treeview-menu\">
                                                            <li><a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("ConsulReqTiempos");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Tiempos</a></li>
                                                            <li><a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("ConsulReqEmp");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Requemientos</a></li>
                                                         </ul>
                                                    </li>
                                                   
                                                </ul>
                                            </section>
                                        ";
        
        $__internal_00911816168d97df4f54b06a139e01de1a4cda5c87dfb13c1a3aa28a9814488b->leave($__internal_00911816168d97df4f54b06a139e01de1a4cda5c87dfb13c1a3aa28a9814488b_prof);

    }

    // line 145
    public function block_asideRight($context, array $blocks = array())
    {
        $__internal_c063439a373da1dc315bb14caf09bf9dafd3cfb2cc86f3018f54b5c4579386fa = $this->env->getExtension("native_profiler");
        $__internal_c063439a373da1dc315bb14caf09bf9dafd3cfb2cc86f3018f54b5c4579386fa->enter($__internal_c063439a373da1dc315bb14caf09bf9dafd3cfb2cc86f3018f54b5c4579386fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideRight"));

        // line 146
        echo "                                    <!-- Right side column. Contains the navbar and content of the page -->
                                    <aside class=\"right-side\">
                                        <!-- Content Header (Page header) -->
                                        ";
        // line 149
        $this->displayBlock('section2', $context, $blocks);
        // line 151
        echo "                                        ";
        $this->displayBlock('section3', $context, $blocks);
        // line 153
        echo "                                    </aside><!-- /.right-side -->
                                ";
        
        $__internal_c063439a373da1dc315bb14caf09bf9dafd3cfb2cc86f3018f54b5c4579386fa->leave($__internal_c063439a373da1dc315bb14caf09bf9dafd3cfb2cc86f3018f54b5c4579386fa_prof);

    }

    // line 149
    public function block_section2($context, array $blocks = array())
    {
        $__internal_948c76e13531df5f16dc2aa0e768057e50e6ef2d98ad392ccfd040f69e9b6eea = $this->env->getExtension("native_profiler");
        $__internal_948c76e13531df5f16dc2aa0e768057e50e6ef2d98ad392ccfd040f69e9b6eea->enter($__internal_948c76e13531df5f16dc2aa0e768057e50e6ef2d98ad392ccfd040f69e9b6eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 150
        echo "                                        ";
        
        $__internal_948c76e13531df5f16dc2aa0e768057e50e6ef2d98ad392ccfd040f69e9b6eea->leave($__internal_948c76e13531df5f16dc2aa0e768057e50e6ef2d98ad392ccfd040f69e9b6eea_prof);

    }

    // line 151
    public function block_section3($context, array $blocks = array())
    {
        $__internal_51a349fea1d57dc0d4720eb9a00b889adf09b6099d791075cb6941a7114a4f25 = $this->env->getExtension("native_profiler");
        $__internal_51a349fea1d57dc0d4720eb9a00b889adf09b6099d791075cb6941a7114a4f25->enter($__internal_51a349fea1d57dc0d4720eb9a00b889adf09b6099d791075cb6941a7114a4f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 152
        echo "                                        ";
        
        $__internal_51a349fea1d57dc0d4720eb9a00b889adf09b6099d791075cb6941a7114a4f25->leave($__internal_51a349fea1d57dc0d4720eb9a00b889adf09b6099d791075cb6941a7114a4f25_prof);

    }

    // line 158
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_4c985c843a37f37d8bbed611a72dab731fe9d83016ad4b7031799e8df673252e = $this->env->getExtension("native_profiler");
        $__internal_4c985c843a37f37d8bbed611a72dab731fe9d83016ad4b7031799e8df673252e->enter($__internal_4c985c843a37f37d8bbed611a72dab731fe9d83016ad4b7031799e8df673252e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo "        
                               
                                    <div class=\"container-fluid\"  id=\"Desarrollo\">
                                        Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.
                                    </div>
                               
                            ";
        
        $__internal_4c985c843a37f37d8bbed611a72dab731fe9d83016ad4b7031799e8df673252e->leave($__internal_4c985c843a37f37d8bbed611a72dab731fe9d83016ad4b7031799e8df673252e_prof);

    }

    // line 165
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_732e45d0a532e564103a5c22ce26d11a66db5252b1b3fbad82a1d387cb626b5e = $this->env->getExtension("native_profiler");
        $__internal_732e45d0a532e564103a5c22ce26d11a66db5252b1b3fbad82a1d387cb626b5e->enter($__internal_732e45d0a532e564103a5c22ce26d11a66db5252b1b3fbad82a1d387cb626b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
                                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
                                <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery-ui-1.10.3.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
                                <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/jqueryKnob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/AdminLTE/app.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/mainEmpleado.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
                        <script src=\"http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js\"></script>
                            ";
        
        $__internal_732e45d0a532e564103a5c22ce26d11a66db5252b1b3fbad82a1d387cb626b5e->leave($__internal_732e45d0a532e564103a5c22ce26d11a66db5252b1b3fbad82a1d387cb626b5e_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle::Layout_Empleado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 179,  476 => 178,  472 => 177,  468 => 176,  464 => 175,  460 => 174,  456 => 173,  452 => 172,  448 => 171,  444 => 170,  439 => 168,  435 => 167,  426 => 165,  408 => 158,  401 => 152,  395 => 151,  388 => 150,  382 => 149,  374 => 153,  371 => 151,  369 => 149,  364 => 146,  358 => 145,  344 => 135,  340 => 134,  327 => 124,  314 => 114,  310 => 113,  296 => 102,  286 => 95,  279 => 91,  273 => 87,  267 => 86,  258 => 142,  256 => 86,  252 => 84,  246 => 83,  238 => 155,  235 => 145,  233 => 83,  229 => 81,  223 => 80,  206 => 70,  182 => 49,  174 => 44,  149 => 22,  145 => 20,  139 => 19,  132 => 157,  129 => 80,  126 => 19,  120 => 18,  112 => 182,  109 => 165,  106 => 158,  104 => 18,  101 => 17,  95 => 16,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  51 => 4,  45 => 3,  11 => 2,);
    }
}
/* {# src/Login/firstBundle/Resources/views/Layout_RegistroTiempos.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*  <link href="{{asset('bundles/loginfirst/css/bootstrap.min.css')}}" rel="stylesheet"/>  */
/*     <link href="{{asset('bundles/loginfirst/css/docs.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/font-awesome.min.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/morris/morris.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/fullcalendar/fullcalendar.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/AdminLTE.css')}}" rel="stylesheet"/>*/
/*      <link href="{{asset('bundles/loginfirst/css/Req-Tiempos.css')}}" rel="stylesheet"/>*/
/*      <link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>*/
/* */
/* {% endblock %}*/
/* {%block body %}*/
/*     <body class="skin-black">*/
/*         {%block content1 %}*/
/*             {% block header %}*/
/*                 <header class="header">*/
/*                     <div  class="logo" >*/
/*                                         <img id="img_logoP" src="{{asset('bundles/loginfirst/Imagenes/logo-gameda.png')}}" />*/
/*                 */
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
/*                               */
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
/*                                             <p> EMPLEADO*/
/*                                                     <small> Desarrollador Web <br>*/
/*                                                          <script>*/
/*                                                     var f = new Date();*/
/*                                                     var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");*/
/*                                                     var dias = new Array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");*/
/*                                                     document.write('<div class="mifecha">' + "Quito, ");*/
/*                                                     document.write(dias[f.getDay()] + " ");*/
/*                                                     document.write(f.getDate() + " ");*/
/*                                                     document.write(meses[f.getMonth()] + " ");*/
/*                                                     document.write(f.getFullYear());*/
/*                                                     document.write('</div>');*/
/*                                                 </script></small>*/
/*                                             </p>*/
/*                                             </li>*/
/*                                             <!-- Menu Body -->*/
/*                                             <!-- Menu Footer-->*/
/*                                             <li class="user-footer">*/
/* */
/*                                                 <div class="pull-left">*/
/*                                                     <a href="{{path('Logout')}}" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Cerrar Sesion</a>*/
/*                                                 </div>*/
/*                                             </li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </nav>*/
/*                     </header>*/
/*                     {%endblock%}*/
/*                         {%block content2 %}*/
/*                             <div class="wrapper row-offcanvas row-offcanvas-left">*/
/*                                 <!-- Left side column. contains the logo and sidebar -->*/
/*                                 {%block asideLeft %}*/
/*                                     <aside class="left-side sidebar-offcanvas">*/
/*                                         <!-- sidebar: style can be found in sidebar.less -->*/
/*                                         {%block section1 %}*/
/*                                             <section class="sidebar">*/
/*                                                 <!-- Sidebar user panel -->*/
/*                                                 <div class="user-panel">*/
/*                                                     <div class="pull-left image">*/
/*                                                             <!--<img src="{{asset('bundles/loginfirst/Imagenes/avatar5.png')}}"  class="img-circle" alt="User Image" />-->*/
/* */
/*                                                     </div>*/
/*                                                     <div class="pull-left info">*/
/*                                                         <h5> Bienvenido   <span>{{app.session.get('Nombre')}}<i class=""></i></span></h5>*/
/* */
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*                                                 <ul class="sidebar-menu">*/
/*                                                     <li class="active">*/
/*                                                         <a href="{{path('Empleado')}}">*/
/*                                                             <i class="fa fa-home"></i> <span>MENU PRINCIPAL</span>*/
/*                                                         </a>*/
/*                                                     </li>*/
/*                                                     <li class="treeview">*/
/*                                                         <a href="#">*/
/*                                                             <i class="fa fa-user"></i>*/
/*                                                             <span>Mi Usuario</span>*/
/*                                                             <i class="fa fa-angle-left pull-right"></i>*/
/*                                                         </a>*/
/*                                                         <ul class="treeview-menu">*/
/*                                                             <li><a href="{{path('UpdateEmpleado')}}"><i class="fa fa-angle-double-right"></i>Actualizar Datos</a></li>*/
/*                                                             <li><a href="{{path('CambiarClaveEmpleado')}}"><i class="fa fa-angle-double-right"></i>Cambiar Contraseña</a></li>*/
/*                                                         </ul>*/
/*                                                     </li>*/
/*                                                     <li class="treeview">*/
/*                                                         <a href="#">*/
/*                                                             <i class="fa fa-edit"></i> */
/*                                                             <span>Operaciones</span>*/
/*                                                             <i class="fa fa-angle-left pull-right"></i>*/
/*                                                         </a>*/
/*                                                         <ul class="treeview-menu">*/
/*                                                             <li><a href="{{path('RegistroT')}}"><i class="fa fa-angle-double-right"></i>Ingreso Tiempos</a></li>*/
/*                                                          </ul>*/
/*                                                     </li>*/
/*                                                     <li class="treeview">*/
/*                                                         <a href="#">*/
/*                                                             <i class="fa fa-search"></i>*/
/*                                                             <span>Consultas</span>*/
/*                                                             <i class="fa fa-angle-left pull-right"></i>*/
/*                                                         </a>*/
/*                                                         <ul class="treeview-menu">*/
/*                                                             <li><a href="{{path('ConsulReqTiempos')}}"><i class="fa fa-angle-double-right"></i>Tiempos</a></li>*/
/*                                                             <li><a href="{{path('ConsulReqEmp')}}"><i class="fa fa-angle-double-right"></i>Requemientos</a></li>*/
/*                                                          </ul>*/
/*                                                     </li>*/
/*                                                    */
/*                                                 </ul>*/
/*                                             </section>*/
/*                                         {%endblock%}*/
/*                                         <!-- /.sidebar -->*/
/*                                     </aside>*/
/*                                 {%endblock%}*/
/*                                 {%block asideRight %}*/
/*                                     <!-- Right side column. Contains the navbar and content of the page -->*/
/*                                     <aside class="right-side">*/
/*                                         <!-- Content Header (Page header) -->*/
/*                                         {%block section2 %}*/
/*                                         {%endblock%}*/
/*                                         {%block section3 %}*/
/*                                         {%endblock%}*/
/*                                     </aside><!-- /.right-side -->*/
/*                                 {%endblock%}*/
/*                             </div><!-- ./wrapper -->*/
/*                         {%endblock%}*/
/*                         {% endblock %}*/
/*                             {% block Footer %}        */
/*                                */
/*                                     <div class="container-fluid"  id="Desarrollo">*/
/*                                         Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.*/
/*                                     </div>*/
/*                                */
/*                             {% endblock%}*/
/*                             {% block javascripts %} */
/*                                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/jquery-ui-1.10.3.js') }}"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/bootstrap.min.js') }}"></script>*/
/*                                 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/plugins/morris/morris.min.js') }}"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/plugins/fullcalendar/fullcalendar.min.js') }}"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/plugins/jqueryKnob/jquery.knob.js') }}"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/plugins/daterangepicker/daterangepicker.js') }}"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/plugins/iCheck/icheck.min.js') }}"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/AdminLTE/app.js') }}"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/mainEmpleado.js') }}"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/jquery.validate.js') }}"></script>*/
/*                         <script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>*/
/*                             {% endblock %}*/
/*                         </body>*/
/*                         {% endblock %}*/
/* */
