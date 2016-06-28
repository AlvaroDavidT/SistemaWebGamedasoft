<?php

/* LoginfirstBundle::layout_Cliente.html.twig */
class __TwigTemplate_38bda6b834bbc1c1399a6de2a9d76e64a78fec6a228877f19eda83c8e17740f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "LoginfirstBundle::layout_Cliente.html.twig", 2);
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
        $__internal_300705bd1013016923d1ad2dc70dfb7df7d13003e4affe583e5748a64d21cb08 = $this->env->getExtension("native_profiler");
        $__internal_300705bd1013016923d1ad2dc70dfb7df7d13003e4affe583e5748a64d21cb08->enter($__internal_300705bd1013016923d1ad2dc70dfb7df7d13003e4affe583e5748a64d21cb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle::layout_Cliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_300705bd1013016923d1ad2dc70dfb7df7d13003e4affe583e5748a64d21cb08->leave($__internal_300705bd1013016923d1ad2dc70dfb7df7d13003e4affe583e5748a64d21cb08_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cda8358f040a7239fc5718fc73fe6133f5cb3327ac444ef9c439761d2575cc1c = $this->env->getExtension("native_profiler");
        $__internal_cda8358f040a7239fc5718fc73fe6133f5cb3327ac444ef9c439761d2575cc1c->enter($__internal_cda8358f040a7239fc5718fc73fe6133f5cb3327ac444ef9c439761d2575cc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "   <link href=\"";
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
        
        $__internal_cda8358f040a7239fc5718fc73fe6133f5cb3327ac444ef9c439761d2575cc1c->leave($__internal_cda8358f040a7239fc5718fc73fe6133f5cb3327ac444ef9c439761d2575cc1c_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c2c0f5b976f5e4f29f9fc963075979775f857212f6c943124ce23596ddec313 = $this->env->getExtension("native_profiler");
        $__internal_7c2c0f5b976f5e4f29f9fc963075979775f857212f6c943124ce23596ddec313->enter($__internal_7c2c0f5b976f5e4f29f9fc963075979775f857212f6c943124ce23596ddec313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <body class=\"skin-black\">
        ";
        // line 16
        $this->displayBlock('content1', $context, $blocks);
        // line 154
        echo "                            ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 160
        echo "                            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 177
        echo "                        </body>
                        ";
        
        $__internal_7c2c0f5b976f5e4f29f9fc963075979775f857212f6c943124ce23596ddec313->leave($__internal_7c2c0f5b976f5e4f29f9fc963075979775f857212f6c943124ce23596ddec313_prof);

    }

    // line 16
    public function block_content1($context, array $blocks = array())
    {
        $__internal_45ec919eaad74c43e1132c39658a35017903ecc0e654d4847197153bba09a8d4 = $this->env->getExtension("native_profiler");
        $__internal_45ec919eaad74c43e1132c39658a35017903ecc0e654d4847197153bba09a8d4->enter($__internal_45ec919eaad74c43e1132c39658a35017903ecc0e654d4847197153bba09a8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        // line 17
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 77
        echo "                        ";
        $this->displayBlock('content2', $context, $blocks);
        // line 153
        echo "                        ";
        
        $__internal_45ec919eaad74c43e1132c39658a35017903ecc0e654d4847197153bba09a8d4->leave($__internal_45ec919eaad74c43e1132c39658a35017903ecc0e654d4847197153bba09a8d4_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_b1a8081465de44cde67a86175feace9ead14f2219e2aaa267cf49a1225030f66 = $this->env->getExtension("native_profiler");
        $__internal_b1a8081465de44cde67a86175feace9ead14f2219e2aaa267cf49a1225030f66->enter($__internal_b1a8081465de44cde67a86175feace9ead14f2219e2aaa267cf49a1225030f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 18
        echo "                <header class=\"header\">
                    <div  class=\"logo\" >
                                    <img id=\"img_logoP\" src=\"";
        // line 20
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
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "usuario"), "method"), "html", null, true);
        echo "<i class=\"caret\"></i></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <!-- User image -->
                                        <li class=\"user-header bg-light-blue\">
                                          <!--  <img src=\"";
        // line 47
        echo "bundles/loginfirst/Imagenes/avatar5.png";
        echo "\"  class=\"img-circle\" alt=\"User Image\" />-->
                                            <p> CLIENTE
                                                    <small> <script>
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
        // line 67
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
        
        $__internal_b1a8081465de44cde67a86175feace9ead14f2219e2aaa267cf49a1225030f66->leave($__internal_b1a8081465de44cde67a86175feace9ead14f2219e2aaa267cf49a1225030f66_prof);

    }

    // line 77
    public function block_content2($context, array $blocks = array())
    {
        $__internal_fa39f3e029dfa7788f50b0d58b8a36e2d6994f1a973c18ca853201d9c7e9d5e5 = $this->env->getExtension("native_profiler");
        $__internal_fa39f3e029dfa7788f50b0d58b8a36e2d6994f1a973c18ca853201d9c7e9d5e5->enter($__internal_fa39f3e029dfa7788f50b0d58b8a36e2d6994f1a973c18ca853201d9c7e9d5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        // line 78
        echo "                            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                                <!-- Left side column. contains the logo and sidebar -->
                                ";
        // line 80
        $this->displayBlock('asideLeft', $context, $blocks);
        // line 141
        echo "                                ";
        $this->displayBlock('asideRight', $context, $blocks);
        // line 151
        echo "                            </div><!-- ./wrapper -->
                        ";
        
        $__internal_fa39f3e029dfa7788f50b0d58b8a36e2d6994f1a973c18ca853201d9c7e9d5e5->leave($__internal_fa39f3e029dfa7788f50b0d58b8a36e2d6994f1a973c18ca853201d9c7e9d5e5_prof);

    }

    // line 80
    public function block_asideLeft($context, array $blocks = array())
    {
        $__internal_f23e0e704560cb0ebdde4269a7f92546d2135638b4f333e40706f63a9a5c0561 = $this->env->getExtension("native_profiler");
        $__internal_f23e0e704560cb0ebdde4269a7f92546d2135638b4f333e40706f63a9a5c0561->enter($__internal_f23e0e704560cb0ebdde4269a7f92546d2135638b4f333e40706f63a9a5c0561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideLeft"));

        // line 81
        echo "                                    <aside class=\"left-side sidebar-offcanvas\">
                                        <!-- sidebar: style can be found in sidebar.less -->
                                        ";
        // line 83
        $this->displayBlock('section1', $context, $blocks);
        // line 138
        echo "                                        <!-- /.sidebar -->
                                    </aside>
                                ";
        
        $__internal_f23e0e704560cb0ebdde4269a7f92546d2135638b4f333e40706f63a9a5c0561->leave($__internal_f23e0e704560cb0ebdde4269a7f92546d2135638b4f333e40706f63a9a5c0561_prof);

    }

    // line 83
    public function block_section1($context, array $blocks = array())
    {
        $__internal_b183fd1a531e25ed1c3dcebbcec86e125b302b81f86d3941b13e5cbbdb2bde77 = $this->env->getExtension("native_profiler");
        $__internal_b183fd1a531e25ed1c3dcebbcec86e125b302b81f86d3941b13e5cbbdb2bde77->enter($__internal_b183fd1a531e25ed1c3dcebbcec86e125b302b81f86d3941b13e5cbbdb2bde77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 84
        echo "                                            <section class=\"sidebar\">
                                                <!-- Sidebar user panel -->
                                                <div class=\"user-panel\">
                                                    <div class=\"pull-left image\">
                                                            <!--<img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/avatar5.png"), "html", null, true);
        echo "\"  class=\"img-circle\" alt=\"User Image\" />-->

                                                    </div>
                                                    <div class=\"pull-left info\">
                                                        <h5> Bienvenido   <span>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "usuario"), "method"), "html", null, true);
        echo "<i class=\"\"></i></span></h5>

                                                    </div>
                                                </div>
                                                <!-- sidebar menu: : style can be found in sidebar.less -->
                                                <ul class=\"sidebar-menu\">
                                                    <li class=\"active\">
                                                        <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("Cliente");
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
        // line 110
        echo $this->env->getExtension('routing')->getPath("UpdateCliente");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Actualizar Datos</a></li>
                                                            <li><a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("CambiarClaveCliente");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Cambiar Contraseña</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class=\"treeview\">
                                                        <a href=\"#\">
                                                            <i class=\"fa fa-edit\"></i> 
                                                            <span>Operación</span>
                                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                                        </a>
                                                        <ul class=\"treeview-menu\">
                                                            <li><a href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("NuevoReq");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Ingreso Requerimiento</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class=\"treeview\">
                                                        <a href=\"#\">
                                                            <i class=\"fa fa-search\"></i>
                                                            <span>Consultas</span>
                                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                                        </a>
                                                        <ul class=\"treeview-menu\">
                                                            <li><a href=\"ConsultaRq\"><i class=\"fa fa-angle-double-right\"></i>Requerimientos</a></li>
                                                        </ul>
                                                    </li>
                                                   
                                                </ul>
                                            </section>
                                        ";
        
        $__internal_b183fd1a531e25ed1c3dcebbcec86e125b302b81f86d3941b13e5cbbdb2bde77->leave($__internal_b183fd1a531e25ed1c3dcebbcec86e125b302b81f86d3941b13e5cbbdb2bde77_prof);

    }

    // line 141
    public function block_asideRight($context, array $blocks = array())
    {
        $__internal_7123eb25601ea6934d87e41cd791af109417ac59f3c6dc39d33a0267c3e696ea = $this->env->getExtension("native_profiler");
        $__internal_7123eb25601ea6934d87e41cd791af109417ac59f3c6dc39d33a0267c3e696ea->enter($__internal_7123eb25601ea6934d87e41cd791af109417ac59f3c6dc39d33a0267c3e696ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideRight"));

        // line 142
        echo "                                    <!-- Right side column. Contains the navbar and content of the page -->
                                    <aside class=\"right-side\">
                                        <!-- Content Header (Page header) -->
                                        ";
        // line 145
        $this->displayBlock('section2', $context, $blocks);
        // line 147
        echo "                                        ";
        $this->displayBlock('section3', $context, $blocks);
        // line 149
        echo "                                    </aside><!-- /.right-side -->
                                ";
        
        $__internal_7123eb25601ea6934d87e41cd791af109417ac59f3c6dc39d33a0267c3e696ea->leave($__internal_7123eb25601ea6934d87e41cd791af109417ac59f3c6dc39d33a0267c3e696ea_prof);

    }

    // line 145
    public function block_section2($context, array $blocks = array())
    {
        $__internal_3ed88f5daa8215a2e8690fc9f73294d64dbb2ae810bda4b271d1fb9edcff94cf = $this->env->getExtension("native_profiler");
        $__internal_3ed88f5daa8215a2e8690fc9f73294d64dbb2ae810bda4b271d1fb9edcff94cf->enter($__internal_3ed88f5daa8215a2e8690fc9f73294d64dbb2ae810bda4b271d1fb9edcff94cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 146
        echo "                                        ";
        
        $__internal_3ed88f5daa8215a2e8690fc9f73294d64dbb2ae810bda4b271d1fb9edcff94cf->leave($__internal_3ed88f5daa8215a2e8690fc9f73294d64dbb2ae810bda4b271d1fb9edcff94cf_prof);

    }

    // line 147
    public function block_section3($context, array $blocks = array())
    {
        $__internal_1b37abebd79bf0ef91906ef587e31bf905b5c6155e6222a166b132cb4105ab5f = $this->env->getExtension("native_profiler");
        $__internal_1b37abebd79bf0ef91906ef587e31bf905b5c6155e6222a166b132cb4105ab5f->enter($__internal_1b37abebd79bf0ef91906ef587e31bf905b5c6155e6222a166b132cb4105ab5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 148
        echo "                                        ";
        
        $__internal_1b37abebd79bf0ef91906ef587e31bf905b5c6155e6222a166b132cb4105ab5f->leave($__internal_1b37abebd79bf0ef91906ef587e31bf905b5c6155e6222a166b132cb4105ab5f_prof);

    }

    // line 154
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_25047c4ccc500429882675685ff15ccd784f58e3cec328a36ceac267aeaa18eb = $this->env->getExtension("native_profiler");
        $__internal_25047c4ccc500429882675685ff15ccd784f58e3cec328a36ceac267aeaa18eb->enter($__internal_25047c4ccc500429882675685ff15ccd784f58e3cec328a36ceac267aeaa18eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo "        
                                    <div class=\"container-fluid\"  id=\"Desarrollo\">
                                        Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.
                                    </div>
                                
                            ";
        
        $__internal_25047c4ccc500429882675685ff15ccd784f58e3cec328a36ceac267aeaa18eb->leave($__internal_25047c4ccc500429882675685ff15ccd784f58e3cec328a36ceac267aeaa18eb_prof);

    }

    // line 160
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb16623a4e3a0c7a020abc5a98efaf5ddf15925561fc3347272976c7859c6097 = $this->env->getExtension("native_profiler");
        $__internal_eb16623a4e3a0c7a020abc5a98efaf5ddf15925561fc3347272976c7859c6097->enter($__internal_eb16623a4e3a0c7a020abc5a98efaf5ddf15925561fc3347272976c7859c6097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
                               <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
                                <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery-ui-1.10.3.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
                                <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/jqueryKnob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/AdminLTE/app.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/mainCliente.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
                            
                            ";
        
        $__internal_eb16623a4e3a0c7a020abc5a98efaf5ddf15925561fc3347272976c7859c6097->leave($__internal_eb16623a4e3a0c7a020abc5a98efaf5ddf15925561fc3347272976c7859c6097_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle::layout_Cliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 174,  465 => 173,  461 => 172,  457 => 171,  453 => 170,  449 => 169,  445 => 168,  441 => 167,  437 => 166,  433 => 165,  428 => 163,  424 => 162,  415 => 160,  398 => 154,  391 => 148,  385 => 147,  378 => 146,  372 => 145,  364 => 149,  361 => 147,  359 => 145,  354 => 142,  348 => 141,  324 => 121,  311 => 111,  307 => 110,  293 => 99,  283 => 92,  276 => 88,  270 => 84,  264 => 83,  255 => 138,  253 => 83,  249 => 81,  243 => 80,  235 => 151,  232 => 141,  230 => 80,  226 => 78,  220 => 77,  203 => 67,  180 => 47,  172 => 42,  147 => 20,  143 => 18,  137 => 17,  130 => 153,  127 => 77,  124 => 17,  118 => 16,  110 => 177,  107 => 160,  104 => 154,  102 => 16,  99 => 15,  93 => 14,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  51 => 4,  45 => 3,  11 => 2,);
    }
}
/* {# src/Login/firstBundle/Resources/views/Layout_RegistroTiempos.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*    <link href="{{asset('bundles/loginfirst/css/bootstrap.min.css')}}" rel="stylesheet"/>  */
/*     <link href="{{asset('bundles/loginfirst/css/docs.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/font-awesome.min.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/morris/morris.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/fullcalendar/fullcalendar.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/AdminLTE.css')}}" rel="stylesheet"/>*/
/*      <link href="{{asset('bundles/loginfirst/css/Req-Tiempos.css')}}" rel="stylesheet"/>*/
/* {% endblock %}*/
/* {%block body %}*/
/*     <body class="skin-black">*/
/*         {%block content1 %}*/
/*             {% block header %}*/
/*                 <header class="header">*/
/*                     <div  class="logo" >*/
/*                                     <img id="img_logoP" src="{{asset('bundles/loginfirst/Imagenes/logo-gameda.png')}}" />*/
/*                                  */
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
/*                              */
/*                                 <!-- User Account: style can be found in dropdown.less -->*/
/*                                 <li class="dropdown user user-menu">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                         <i class="glyphicon glyphicon-user"></i>*/
/*                                         <span>{{app.session.get('usuario')}}<i class="caret"></i></span>*/
/*                                     </a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <!-- User image -->*/
/*                                         <li class="user-header bg-light-blue">*/
/*                                           <!--  <img src="{{('bundles/loginfirst/Imagenes/avatar5.png')}}"  class="img-circle" alt="User Image" />-->*/
/*                                             <p> CLIENTE*/
/*                                                     <small> <script>*/
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
/*                                                         <h5> Bienvenido   <span>{{app.session.get('usuario')}}<i class=""></i></span></h5>*/
/* */
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*                                                 <ul class="sidebar-menu">*/
/*                                                     <li class="active">*/
/*                                                         <a href="{{path('Cliente')}}">*/
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
/*                                                             <li><a href="{{path('UpdateCliente')}}"><i class="fa fa-angle-double-right"></i>Actualizar Datos</a></li>*/
/*                                                             <li><a href="{{path('CambiarClaveCliente')}}"><i class="fa fa-angle-double-right"></i>Cambiar Contraseña</a></li>*/
/*                                                         </ul>*/
/*                                                     </li>*/
/*                                                     <li class="treeview">*/
/*                                                         <a href="#">*/
/*                                                             <i class="fa fa-edit"></i> */
/*                                                             <span>Operación</span>*/
/*                                                             <i class="fa fa-angle-left pull-right"></i>*/
/*                                                         </a>*/
/*                                                         <ul class="treeview-menu">*/
/*                                                             <li><a href="{{path('NuevoReq')}}"><i class="fa fa-angle-double-right"></i>Ingreso Requerimiento</a></li>*/
/*                                                         </ul>*/
/*                                                     </li>*/
/*                                                     <li class="treeview">*/
/*                                                         <a href="#">*/
/*                                                             <i class="fa fa-search"></i>*/
/*                                                             <span>Consultas</span>*/
/*                                                             <i class="fa fa-angle-left pull-right"></i>*/
/*                                                         </a>*/
/*                                                         <ul class="treeview-menu">*/
/*                                                             <li><a href="ConsultaRq"><i class="fa fa-angle-double-right"></i>Requerimientos</a></li>*/
/*                                                         </ul>*/
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
/*                                     <div class="container-fluid"  id="Desarrollo">*/
/*                                         Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.*/
/*                                     </div>*/
/*                                 */
/*                             {% endblock%}*/
/*                             {% block javascripts %} */
/*                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>*/
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
/*                                 <script src="{{asset('bundles/loginfirst/js/mainCliente.js') }}"></script>*/
/*                                 <script src="{{asset('bundles/loginfirst/js/jquery.validate.js') }}"></script>*/
/*                             */
/*                             {% endblock %}*/
/*                         </body>*/
/*                         {% endblock %}*/
/* */
