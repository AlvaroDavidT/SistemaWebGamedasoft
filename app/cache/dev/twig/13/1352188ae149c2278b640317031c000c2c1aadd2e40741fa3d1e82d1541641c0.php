<?php

/* LoginfirstBundle::Layout_Admin.html.twig */
class __TwigTemplate_073eadfd5b12ee3755d85f27b2569ebe2be1cc90af60554ff1e195cb90ad8a39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "LoginfirstBundle::Layout_Admin.html.twig", 2);
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
        $__internal_52f68b1a7be6223c14254a109c34f8a964282e60c5ba72177336ac35b734701f = $this->env->getExtension("native_profiler");
        $__internal_52f68b1a7be6223c14254a109c34f8a964282e60c5ba72177336ac35b734701f->enter($__internal_52f68b1a7be6223c14254a109c34f8a964282e60c5ba72177336ac35b734701f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle::Layout_Admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52f68b1a7be6223c14254a109c34f8a964282e60c5ba72177336ac35b734701f->leave($__internal_52f68b1a7be6223c14254a109c34f8a964282e60c5ba72177336ac35b734701f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_103385ad7e47be9a6cd171d14d4b64a2e0c99b0b5d0a81e5be06c929617f3680 = $this->env->getExtension("native_profiler");
        $__internal_103385ad7e47be9a6cd171d14d4b64a2e0c99b0b5d0a81e5be06c929617f3680->enter($__internal_103385ad7e47be9a6cd171d14d4b64a2e0c99b0b5d0a81e5be06c929617f3680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
   
";
        
        $__internal_103385ad7e47be9a6cd171d14d4b64a2e0c99b0b5d0a81e5be06c929617f3680->leave($__internal_103385ad7e47be9a6cd171d14d4b64a2e0c99b0b5d0a81e5be06c929617f3680_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_08735721786882eb60fe31a13acdc42311133f5231f7fd2cb0b710758f468abb = $this->env->getExtension("native_profiler");
        $__internal_08735721786882eb60fe31a13acdc42311133f5231f7fd2cb0b710758f468abb->enter($__internal_08735721786882eb60fe31a13acdc42311133f5231f7fd2cb0b710758f468abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <body class=\"skin-black\">
        ";
        // line 17
        $this->displayBlock('content1', $context, $blocks);
        // line 173
        echo "                            ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 180
        echo "                            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 193
        echo "                        </body>
                        ";
        
        $__internal_08735721786882eb60fe31a13acdc42311133f5231f7fd2cb0b710758f468abb->leave($__internal_08735721786882eb60fe31a13acdc42311133f5231f7fd2cb0b710758f468abb_prof);

    }

    // line 17
    public function block_content1($context, array $blocks = array())
    {
        $__internal_7e6468748e168514effcecc924f88c6271a96b1098685b5c1da52bbfbb4833b8 = $this->env->getExtension("native_profiler");
        $__internal_7e6468748e168514effcecc924f88c6271a96b1098685b5c1da52bbfbb4833b8->enter($__internal_7e6468748e168514effcecc924f88c6271a96b1098685b5c1da52bbfbb4833b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        // line 18
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "                        ";
        $this->displayBlock('content2', $context, $blocks);
        // line 172
        echo "                        ";
        
        $__internal_7e6468748e168514effcecc924f88c6271a96b1098685b5c1da52bbfbb4833b8->leave($__internal_7e6468748e168514effcecc924f88c6271a96b1098685b5c1da52bbfbb4833b8_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_e7151b5b0dbf381a1e5a8ec1f969323488a56b662989f1abbd880c82dffaf912 = $this->env->getExtension("native_profiler");
        $__internal_e7151b5b0dbf381a1e5a8ec1f969323488a56b662989f1abbd880c82dffaf912->enter($__internal_e7151b5b0dbf381a1e5a8ec1f969323488a56b662989f1abbd880c82dffaf912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "                <header class=\"header\">
                    <div  class=\"logo\" >
                        <img id=\"img_logoP\" src=\"";
        // line 21
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
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "Nombre"), "method"), "html", null, true);
        echo "<i class=\"caret\"></i></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <!-- User image -->
                                        <li class=\"user-header bg-light-blue\">
                                          <!--  <img src=\"";
        // line 48
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
        // line 69
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
        
        $__internal_e7151b5b0dbf381a1e5a8ec1f969323488a56b662989f1abbd880c82dffaf912->leave($__internal_e7151b5b0dbf381a1e5a8ec1f969323488a56b662989f1abbd880c82dffaf912_prof);

    }

    // line 79
    public function block_content2($context, array $blocks = array())
    {
        $__internal_ae806c300984be54c6770d574f9f357b484b799c616873e23aa9e701a3c9c4b9 = $this->env->getExtension("native_profiler");
        $__internal_ae806c300984be54c6770d574f9f357b484b799c616873e23aa9e701a3c9c4b9->enter($__internal_ae806c300984be54c6770d574f9f357b484b799c616873e23aa9e701a3c9c4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        // line 80
        echo "                            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                                <!-- Left side column. contains the logo and sidebar -->
                                ";
        // line 82
        $this->displayBlock('asideLeft', $context, $blocks);
        // line 160
        echo "                                ";
        $this->displayBlock('asideRight', $context, $blocks);
        // line 170
        echo "                            </div><!-- ./wrapper -->
                        ";
        
        $__internal_ae806c300984be54c6770d574f9f357b484b799c616873e23aa9e701a3c9c4b9->leave($__internal_ae806c300984be54c6770d574f9f357b484b799c616873e23aa9e701a3c9c4b9_prof);

    }

    // line 82
    public function block_asideLeft($context, array $blocks = array())
    {
        $__internal_4d6c1b478068b01bf75a347bc04a6915fa5f4a96425e6ae844b791e3ce1ea57f = $this->env->getExtension("native_profiler");
        $__internal_4d6c1b478068b01bf75a347bc04a6915fa5f4a96425e6ae844b791e3ce1ea57f->enter($__internal_4d6c1b478068b01bf75a347bc04a6915fa5f4a96425e6ae844b791e3ce1ea57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideLeft"));

        // line 83
        echo "                                    <aside class=\"left-side sidebar-offcanvas\">
                                        <!-- sidebar: style can be found in sidebar.less -->
                                        ";
        // line 85
        $this->displayBlock('section1', $context, $blocks);
        // line 157
        echo "                                        <!-- /.sidebar -->
                                    </aside>
                                ";
        
        $__internal_4d6c1b478068b01bf75a347bc04a6915fa5f4a96425e6ae844b791e3ce1ea57f->leave($__internal_4d6c1b478068b01bf75a347bc04a6915fa5f4a96425e6ae844b791e3ce1ea57f_prof);

    }

    // line 85
    public function block_section1($context, array $blocks = array())
    {
        $__internal_7716ed99fd925af11895f0c1902b4b5ab3989caefff9c8149aae5c5a0168a316 = $this->env->getExtension("native_profiler");
        $__internal_7716ed99fd925af11895f0c1902b4b5ab3989caefff9c8149aae5c5a0168a316->enter($__internal_7716ed99fd925af11895f0c1902b4b5ab3989caefff9c8149aae5c5a0168a316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 86
        echo "                                            <section class=\"sidebar\">
                                                <!-- Sidebar user panel -->
                                                <div class=\"user-panel\">
                                                    <div class=\"pull-left image\">
                                                            <!--<img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/avatar5.png"), "html", null, true);
        echo "\"  class=\"img-circle\" alt=\"User Image\" />-->

                                                    </div>
                                                    <div class=\"pull-left info\">
                                                        <h5> Bienvenido   <span>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "Nombre"), "method"), "html", null, true);
        echo "<i class=\"\"></i></span></h5>

                                                    </div>
                                                </div>
                                                <!-- sidebar menu: : style can be found in sidebar.less -->
                                                <ul class=\"sidebar-menu\">
                                                    <li class=\"active\">
                                                        <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("Admin");
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
        // line 112
        echo $this->env->getExtension('routing')->getPath("ActualizaDatos");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Actualizar Datos</a></li>
                                                             <li><a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("ActualizaClaveAdmin");
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
        // line 123
        echo $this->env->getExtension('routing')->getPath("ConsultaEmpleados");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Empleados</a></li>
                                                            <li><a href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("ConsultaClientes");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Clientes</a></li>
                                                            <li><a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("ConsultaModulos");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Módulos</a></li>
                                                            <li><a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("ConsultaMenus");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Menus</a></li>
                                                            <li><a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("ConsultaSubMenus");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Submenus</a></li>
                                                         </ul>
                                                    </li>
                                                    <li class=\"treeview\">
                                                        <a href=\"#\">
                                                            <i class=\"fa fa-check-square\"></i>
                                                            <span>Asignación Tareas</span>
                                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                                        </a>
                                                        <ul class=\"treeview-menu\">
                                                            <li><a href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("ConsultarRequerimientos");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Requerimientos</a></li>
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
        // line 147
        echo $this->env->getExtension('routing')->getPath("Requerimientos");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Requemientos</a></li>
                                                              <li><a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("ConsultaTiempos");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Tiempos</a></li>
                                                             
                                                               
                                                        </ul>
                                                    </li>
                                                     
                                                </ul>
                                            </section>
                                        ";
        
        $__internal_7716ed99fd925af11895f0c1902b4b5ab3989caefff9c8149aae5c5a0168a316->leave($__internal_7716ed99fd925af11895f0c1902b4b5ab3989caefff9c8149aae5c5a0168a316_prof);

    }

    // line 160
    public function block_asideRight($context, array $blocks = array())
    {
        $__internal_89072d2a63144758a5d51aaa90641cfc1505e387982d6d599ca51514b1e37ed2 = $this->env->getExtension("native_profiler");
        $__internal_89072d2a63144758a5d51aaa90641cfc1505e387982d6d599ca51514b1e37ed2->enter($__internal_89072d2a63144758a5d51aaa90641cfc1505e387982d6d599ca51514b1e37ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideRight"));

        // line 161
        echo "                                    <!-- Right side column. Contains the navbar and content of the page -->
                                    <aside class=\"right-side\">
                                        <!-- Content Header (Page header) -->
                                        ";
        // line 164
        $this->displayBlock('section2', $context, $blocks);
        // line 166
        echo "                                        ";
        $this->displayBlock('section3', $context, $blocks);
        // line 168
        echo "                                    </aside><!-- /.right-side -->
                                ";
        
        $__internal_89072d2a63144758a5d51aaa90641cfc1505e387982d6d599ca51514b1e37ed2->leave($__internal_89072d2a63144758a5d51aaa90641cfc1505e387982d6d599ca51514b1e37ed2_prof);

    }

    // line 164
    public function block_section2($context, array $blocks = array())
    {
        $__internal_e4ddd0f5422f9e8c42811ce53e0f5084655680155934dc7004c0fea80a3d78d1 = $this->env->getExtension("native_profiler");
        $__internal_e4ddd0f5422f9e8c42811ce53e0f5084655680155934dc7004c0fea80a3d78d1->enter($__internal_e4ddd0f5422f9e8c42811ce53e0f5084655680155934dc7004c0fea80a3d78d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 165
        echo "                                        ";
        
        $__internal_e4ddd0f5422f9e8c42811ce53e0f5084655680155934dc7004c0fea80a3d78d1->leave($__internal_e4ddd0f5422f9e8c42811ce53e0f5084655680155934dc7004c0fea80a3d78d1_prof);

    }

    // line 166
    public function block_section3($context, array $blocks = array())
    {
        $__internal_772c05afd10b113ec04db76af848a46e18765884e931d2cd909c4d59afdebc21 = $this->env->getExtension("native_profiler");
        $__internal_772c05afd10b113ec04db76af848a46e18765884e931d2cd909c4d59afdebc21->enter($__internal_772c05afd10b113ec04db76af848a46e18765884e931d2cd909c4d59afdebc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 167
        echo "                                        ";
        
        $__internal_772c05afd10b113ec04db76af848a46e18765884e931d2cd909c4d59afdebc21->leave($__internal_772c05afd10b113ec04db76af848a46e18765884e931d2cd909c4d59afdebc21_prof);

    }

    // line 173
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_643dc8bfaeb4e22ce9b4bd2de591942fa2724289c7b82614f02f18ac5928964a = $this->env->getExtension("native_profiler");
        $__internal_643dc8bfaeb4e22ce9b4bd2de591942fa2724289c7b82614f02f18ac5928964a->enter($__internal_643dc8bfaeb4e22ce9b4bd2de591942fa2724289c7b82614f02f18ac5928964a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo "        
                              
                                    <div class=\"container-fluid\"  id=\"Desarrollo\">
                                        Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.
                                    </div>
                            
                            ";
        
        $__internal_643dc8bfaeb4e22ce9b4bd2de591942fa2724289c7b82614f02f18ac5928964a->leave($__internal_643dc8bfaeb4e22ce9b4bd2de591942fa2724289c7b82614f02f18ac5928964a_prof);

    }

    // line 180
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_622ad7c97c58df79a5a62d4f8d0726f5468efad4da115bd833501824f8ad7c80 = $this->env->getExtension("native_profiler");
        $__internal_622ad7c97c58df79a5a62d4f8d0726f5468efad4da115bd833501824f8ad7c80->enter($__internal_622ad7c97c58df79a5a62d4f8d0726f5468efad4da115bd833501824f8ad7c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
                                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
                                <script src=\"http://code.jquery.com/jquery-1.10.2.min.js\"></script>
                                <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
                                <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/AdminLTE/app.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/main.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/validaciones.js"), "html", null, true);
        echo "\"></script>                             
                                ";
        // line 191
        echo "                            
                               ";
        
        $__internal_622ad7c97c58df79a5a62d4f8d0726f5468efad4da115bd833501824f8ad7c80->leave($__internal_622ad7c97c58df79a5a62d4f8d0726f5468efad4da115bd833501824f8ad7c80_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle::Layout_Admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 191,  483 => 188,  479 => 187,  475 => 186,  471 => 185,  466 => 183,  456 => 180,  438 => 173,  431 => 167,  425 => 166,  418 => 165,  412 => 164,  404 => 168,  401 => 166,  399 => 164,  394 => 161,  388 => 160,  372 => 148,  368 => 147,  355 => 137,  342 => 127,  338 => 126,  334 => 125,  330 => 124,  326 => 123,  313 => 113,  309 => 112,  295 => 101,  285 => 94,  278 => 90,  272 => 86,  266 => 85,  257 => 157,  255 => 85,  251 => 83,  245 => 82,  237 => 170,  234 => 160,  232 => 82,  228 => 80,  222 => 79,  205 => 69,  181 => 48,  173 => 43,  148 => 21,  144 => 19,  138 => 18,  131 => 172,  128 => 79,  125 => 18,  119 => 17,  111 => 193,  108 => 180,  105 => 173,  103 => 17,  100 => 16,  94 => 15,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  51 => 4,  45 => 3,  11 => 2,);
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
/*      <link href="{{asset('bundles/loginfirst/css/Req-Tiempos.css')}}" rel="stylesheet"/>*/
/*    */
/* {% endblock %}*/
/* {%block body %}*/
/*     <body class="skin-black">*/
/*         {%block content1 %}*/
/*             {% block header %}*/
/*                 <header class="header">*/
/*                     <div  class="logo" >*/
/*                         <img id="img_logoP" src="{{asset('bundles/loginfirst/Imagenes/logo-gameda.png')}}" />*/
/*                                          */
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
/*                                */
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
/*                                                     <small> Desarrollador Web <br>*/
/*                                                       <script>*/
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
/*                                                         <a href="{{path('Admin')}}">*/
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
/*                                                             <li><a href="{{path('ActualizaDatos')}}"><i class="fa fa-angle-double-right"></i>Actualizar Datos</a></li>*/
/*                                                              <li><a href="{{path('ActualizaClaveAdmin')}}"><i class="fa fa-angle-double-right"></i>Cambiar Contraseña</a></li>*/
/*                                                         </ul>*/
/*                                                     </li>*/
/*                                                     <li class="treeview">*/
/*                                                         <a href="#">*/
/*                                                             <i class="fa fa-edit"></i> */
/*                                                             <span>Operaciones</span>*/
/*                                                             <i class="fa fa-angle-left pull-right"></i>*/
/*                                                         </a>*/
/*                                                         <ul class="treeview-menu">*/
/*                                                             <li><a href="{{path('ConsultaEmpleados')}}"><i class="fa fa-angle-double-right"></i>Empleados</a></li>*/
/*                                                             <li><a href="{{path('ConsultaClientes')}}"><i class="fa fa-angle-double-right"></i>Clientes</a></li>*/
/*                                                             <li><a href="{{path('ConsultaModulos')}}"><i class="fa fa-angle-double-right"></i>Módulos</a></li>*/
/*                                                             <li><a href="{{path('ConsultaMenus')}}"><i class="fa fa-angle-double-right"></i>Menus</a></li>*/
/*                                                             <li><a href="{{path('ConsultaSubMenus')}}"><i class="fa fa-angle-double-right"></i>Submenus</a></li>*/
/*                                                          </ul>*/
/*                                                     </li>*/
/*                                                     <li class="treeview">*/
/*                                                         <a href="#">*/
/*                                                             <i class="fa fa-check-square"></i>*/
/*                                                             <span>Asignación Tareas</span>*/
/*                                                             <i class="fa fa-angle-left pull-right"></i>*/
/*                                                         </a>*/
/*                                                         <ul class="treeview-menu">*/
/*                                                             <li><a href="{{path('ConsultarRequerimientos')}}"><i class="fa fa-angle-double-right"></i>Requerimientos</a></li>*/
/*                                                         </ul>*/
/*                                                     </li>*/
/*                                                     <li class="treeview">*/
/*                                                         <a href="#">*/
/*                                                             <i class="fa fa-search"></i> */
/*                                                             <span>Consultas</span>*/
/*                                                             <i class="fa fa-angle-left pull-right"></i>*/
/*                                                         </a>*/
/*                                                         <ul class="treeview-menu">*/
/*                                                               <li><a href="{{path('Requerimientos')}}"><i class="fa fa-angle-double-right"></i>Requemientos</a></li>*/
/*                                                               <li><a href="{{path('ConsultaTiempos')}}"><i class="fa fa-angle-double-right"></i>Tiempos</a></li>*/
/*                                                              */
/*                                                                */
/*                                                         </ul>*/
/*                                                     </li>*/
/*                                                      */
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
/*                               */
/*                                     <div class="container-fluid"  id="Desarrollo">*/
/*                                         Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.*/
/*                                     </div>*/
/*                             */
/*                             {% endblock%}*/
/*                             {% block javascripts %} */
/*                                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>*/
/*                                 <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/bootstrap.min.js') }}"></script>*/
/*                                 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/AdminLTE/app.js') }}"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/jquery.validate.js') }}"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/main.js') }}"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/validaciones.js') }}"></script>                             */
/*                                 {#   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*                                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>*/
/*                                  #}                            */
/*                                {% endblock %}*/
/*                         </body>*/
/*                         {% endblock %}*/
/* */
