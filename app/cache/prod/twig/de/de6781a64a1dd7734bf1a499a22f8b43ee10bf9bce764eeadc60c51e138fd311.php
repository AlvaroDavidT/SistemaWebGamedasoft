<?php

/* LoginfirstBundle::Layout_Admin.html.twig */
class __TwigTemplate_565f70bf1d29e2d524b200e87ced12d3e37ec4d47ee7ab1506a8ae7cca894797 extends Twig_Template
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
        $__internal_67d3ab0a50239d127f616651ca7300cc29af720c48db21d8cf6edab59f0a245e = $this->env->getExtension("native_profiler");
        $__internal_67d3ab0a50239d127f616651ca7300cc29af720c48db21d8cf6edab59f0a245e->enter($__internal_67d3ab0a50239d127f616651ca7300cc29af720c48db21d8cf6edab59f0a245e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle::Layout_Admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67d3ab0a50239d127f616651ca7300cc29af720c48db21d8cf6edab59f0a245e->leave($__internal_67d3ab0a50239d127f616651ca7300cc29af720c48db21d8cf6edab59f0a245e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2313ab3a6acb4acd91f0697f025da219a8260dc3313d698eb5ac0662a55ba004 = $this->env->getExtension("native_profiler");
        $__internal_2313ab3a6acb4acd91f0697f025da219a8260dc3313d698eb5ac0662a55ba004->enter($__internal_2313ab3a6acb4acd91f0697f025da219a8260dc3313d698eb5ac0662a55ba004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2313ab3a6acb4acd91f0697f025da219a8260dc3313d698eb5ac0662a55ba004->leave($__internal_2313ab3a6acb4acd91f0697f025da219a8260dc3313d698eb5ac0662a55ba004_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_400315605191d17b2a2327df995e4f0796f7e6db85b891327ffe2fc7687d586e = $this->env->getExtension("native_profiler");
        $__internal_400315605191d17b2a2327df995e4f0796f7e6db85b891327ffe2fc7687d586e->enter($__internal_400315605191d17b2a2327df995e4f0796f7e6db85b891327ffe2fc7687d586e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <body class=\"skin-black\">
        ";
        // line 17
        $this->displayBlock('content1', $context, $blocks);
        // line 176
        echo "                            ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 183
        echo "                            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 196
        echo "                        </body>
                        ";
        
        $__internal_400315605191d17b2a2327df995e4f0796f7e6db85b891327ffe2fc7687d586e->leave($__internal_400315605191d17b2a2327df995e4f0796f7e6db85b891327ffe2fc7687d586e_prof);

    }

    // line 17
    public function block_content1($context, array $blocks = array())
    {
        $__internal_59834155275845de0701b0eb2b985bceb4ea6fbcf575fbec4c528d5d1f8fb937 = $this->env->getExtension("native_profiler");
        $__internal_59834155275845de0701b0eb2b985bceb4ea6fbcf575fbec4c528d5d1f8fb937->enter($__internal_59834155275845de0701b0eb2b985bceb4ea6fbcf575fbec4c528d5d1f8fb937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        // line 18
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "                        ";
        $this->displayBlock('content2', $context, $blocks);
        // line 175
        echo "                        ";
        
        $__internal_59834155275845de0701b0eb2b985bceb4ea6fbcf575fbec4c528d5d1f8fb937->leave($__internal_59834155275845de0701b0eb2b985bceb4ea6fbcf575fbec4c528d5d1f8fb937_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_5ca1a46fefd62a2361af0c4443e9a7c56ce5aa3f10f5765d34342151714d4ddb = $this->env->getExtension("native_profiler");
        $__internal_5ca1a46fefd62a2361af0c4443e9a7c56ce5aa3f10f5765d34342151714d4ddb->enter($__internal_5ca1a46fefd62a2361af0c4443e9a7c56ce5aa3f10f5765d34342151714d4ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_5ca1a46fefd62a2361af0c4443e9a7c56ce5aa3f10f5765d34342151714d4ddb->leave($__internal_5ca1a46fefd62a2361af0c4443e9a7c56ce5aa3f10f5765d34342151714d4ddb_prof);

    }

    // line 79
    public function block_content2($context, array $blocks = array())
    {
        $__internal_bb04463c9caa19a7dc83606d8a413e6d48e682373e4dddaedac63937b0db9320 = $this->env->getExtension("native_profiler");
        $__internal_bb04463c9caa19a7dc83606d8a413e6d48e682373e4dddaedac63937b0db9320->enter($__internal_bb04463c9caa19a7dc83606d8a413e6d48e682373e4dddaedac63937b0db9320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        // line 80
        echo "                            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                                <!-- Left side column. contains the logo and sidebar -->
                                ";
        // line 82
        $this->displayBlock('asideLeft', $context, $blocks);
        // line 163
        echo "                                ";
        $this->displayBlock('asideRight', $context, $blocks);
        // line 173
        echo "                            </div><!-- ./wrapper -->
                        ";
        
        $__internal_bb04463c9caa19a7dc83606d8a413e6d48e682373e4dddaedac63937b0db9320->leave($__internal_bb04463c9caa19a7dc83606d8a413e6d48e682373e4dddaedac63937b0db9320_prof);

    }

    // line 82
    public function block_asideLeft($context, array $blocks = array())
    {
        $__internal_6a39c892a379d08d3beb4abcc0286116f284eaee4d6cd5f5f9b2e44cbdd431ef = $this->env->getExtension("native_profiler");
        $__internal_6a39c892a379d08d3beb4abcc0286116f284eaee4d6cd5f5f9b2e44cbdd431ef->enter($__internal_6a39c892a379d08d3beb4abcc0286116f284eaee4d6cd5f5f9b2e44cbdd431ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideLeft"));

        // line 83
        echo "                                    <aside class=\"left-side sidebar-offcanvas\">
                                        <!-- sidebar: style can be found in sidebar.less -->
                                        ";
        // line 85
        $this->displayBlock('section1', $context, $blocks);
        // line 160
        echo "                                        <!-- /.sidebar -->
                                    </aside>
                                ";
        
        $__internal_6a39c892a379d08d3beb4abcc0286116f284eaee4d6cd5f5f9b2e44cbdd431ef->leave($__internal_6a39c892a379d08d3beb4abcc0286116f284eaee4d6cd5f5f9b2e44cbdd431ef_prof);

    }

    // line 85
    public function block_section1($context, array $blocks = array())
    {
        $__internal_6b5f83b199948dce2d4d3170e9c300330d2ebdf62ab4c68c05570bc165bed738 = $this->env->getExtension("native_profiler");
        $__internal_6b5f83b199948dce2d4d3170e9c300330d2ebdf62ab4c68c05570bc165bed738->enter($__internal_6b5f83b199948dce2d4d3170e9c300330d2ebdf62ab4c68c05570bc165bed738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

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
                                                              <li><a href=\"pages/UI/general.html\"><i class=\"fa fa-angle-double-right\"></i>Empleados</a></li>
                                                            <li><a href=\"pages/UI/icons.html\"><i class=\"fa fa-angle-double-right\"></i>Clientes</a></li>
                                                            <li><a href=\"pages/UI/buttons.html\"><i class=\"fa fa-angle-double-right\"></i>Módulos</a></li>
                                                            <li><a href=\"pages/UI/buttons.html\"><i class=\"fa fa-angle-double-right\"></i>Menus</a></li>
                                                            <li><a href=\"pages/UI/buttons.html\"><i class=\"fa fa-angle-double-right\"></i>Submenus</a></li>
                                                             
                                                        </ul>
                                                    </li>
                                                     
                                                </ul>
                                            </section>
                                        ";
        
        $__internal_6b5f83b199948dce2d4d3170e9c300330d2ebdf62ab4c68c05570bc165bed738->leave($__internal_6b5f83b199948dce2d4d3170e9c300330d2ebdf62ab4c68c05570bc165bed738_prof);

    }

    // line 163
    public function block_asideRight($context, array $blocks = array())
    {
        $__internal_4735b2f8c162fc6ac2c368f67a8d67168021ff2138f4c393156a254c38dadd9a = $this->env->getExtension("native_profiler");
        $__internal_4735b2f8c162fc6ac2c368f67a8d67168021ff2138f4c393156a254c38dadd9a->enter($__internal_4735b2f8c162fc6ac2c368f67a8d67168021ff2138f4c393156a254c38dadd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideRight"));

        // line 164
        echo "                                    <!-- Right side column. Contains the navbar and content of the page -->
                                    <aside class=\"right-side\">
                                        <!-- Content Header (Page header) -->
                                        ";
        // line 167
        $this->displayBlock('section2', $context, $blocks);
        // line 169
        echo "                                        ";
        $this->displayBlock('section3', $context, $blocks);
        // line 171
        echo "                                    </aside><!-- /.right-side -->
                                ";
        
        $__internal_4735b2f8c162fc6ac2c368f67a8d67168021ff2138f4c393156a254c38dadd9a->leave($__internal_4735b2f8c162fc6ac2c368f67a8d67168021ff2138f4c393156a254c38dadd9a_prof);

    }

    // line 167
    public function block_section2($context, array $blocks = array())
    {
        $__internal_9c9a3be039739dcffc52c0cc3377428720cf27e8aa3ad0296d2ccdd77734043f = $this->env->getExtension("native_profiler");
        $__internal_9c9a3be039739dcffc52c0cc3377428720cf27e8aa3ad0296d2ccdd77734043f->enter($__internal_9c9a3be039739dcffc52c0cc3377428720cf27e8aa3ad0296d2ccdd77734043f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 168
        echo "                                        ";
        
        $__internal_9c9a3be039739dcffc52c0cc3377428720cf27e8aa3ad0296d2ccdd77734043f->leave($__internal_9c9a3be039739dcffc52c0cc3377428720cf27e8aa3ad0296d2ccdd77734043f_prof);

    }

    // line 169
    public function block_section3($context, array $blocks = array())
    {
        $__internal_d991b3fafc972693677719dbb441584b0af014e49b271c2a9b66112a9b9fb90f = $this->env->getExtension("native_profiler");
        $__internal_d991b3fafc972693677719dbb441584b0af014e49b271c2a9b66112a9b9fb90f->enter($__internal_d991b3fafc972693677719dbb441584b0af014e49b271c2a9b66112a9b9fb90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 170
        echo "                                        ";
        
        $__internal_d991b3fafc972693677719dbb441584b0af014e49b271c2a9b66112a9b9fb90f->leave($__internal_d991b3fafc972693677719dbb441584b0af014e49b271c2a9b66112a9b9fb90f_prof);

    }

    // line 176
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_5dda4dd5c55a90012bd6a826ff6bbf8130bea8bb6811e8fc365eae98d26d560c = $this->env->getExtension("native_profiler");
        $__internal_5dda4dd5c55a90012bd6a826ff6bbf8130bea8bb6811e8fc365eae98d26d560c->enter($__internal_5dda4dd5c55a90012bd6a826ff6bbf8130bea8bb6811e8fc365eae98d26d560c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo "        
                              
                                    <div class=\"container-fluid\"  id=\"Desarrollo\">
                                        Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.
                                    </div>
                            
                            ";
        
        $__internal_5dda4dd5c55a90012bd6a826ff6bbf8130bea8bb6811e8fc365eae98d26d560c->leave($__internal_5dda4dd5c55a90012bd6a826ff6bbf8130bea8bb6811e8fc365eae98d26d560c_prof);

    }

    // line 183
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_531d9ccb136146c0834383e2edc48972e629f9d96edfc1a28435684bb0014ff4 = $this->env->getExtension("native_profiler");
        $__internal_531d9ccb136146c0834383e2edc48972e629f9d96edfc1a28435684bb0014ff4->enter($__internal_531d9ccb136146c0834383e2edc48972e629f9d96edfc1a28435684bb0014ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
                                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
                                <script src=\"http://code.jquery.com/jquery-1.10.2.min.js\"></script>
                                <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
                                <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/AdminLTE/app.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/main.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/validaciones.js"), "html", null, true);
        echo "\"></script>                             
   ";
        // line 194
        echo "                            
                               ";
        
        $__internal_531d9ccb136146c0834383e2edc48972e629f9d96edfc1a28435684bb0014ff4->leave($__internal_531d9ccb136146c0834383e2edc48972e629f9d96edfc1a28435684bb0014ff4_prof);

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
        return array (  487 => 194,  483 => 191,  479 => 190,  475 => 189,  471 => 188,  466 => 186,  456 => 183,  438 => 176,  431 => 170,  425 => 169,  418 => 168,  412 => 167,  404 => 171,  401 => 169,  399 => 167,  394 => 164,  388 => 163,  368 => 147,  355 => 137,  342 => 127,  338 => 126,  334 => 125,  330 => 124,  326 => 123,  313 => 113,  309 => 112,  295 => 101,  285 => 94,  278 => 90,  272 => 86,  266 => 85,  257 => 160,  255 => 85,  251 => 83,  245 => 82,  237 => 173,  234 => 163,  232 => 82,  228 => 80,  222 => 79,  205 => 69,  181 => 48,  173 => 43,  148 => 21,  144 => 19,  138 => 18,  131 => 175,  128 => 79,  125 => 18,  119 => 17,  111 => 196,  108 => 183,  105 => 176,  103 => 17,  100 => 16,  94 => 15,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  51 => 4,  45 => 3,  11 => 2,);
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
/*                                                               <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i>Empleados</a></li>*/
/*                                                             <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i>Clientes</a></li>*/
/*                                                             <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i>Módulos</a></li>*/
/*                                                             <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i>Menus</a></li>*/
/*                                                             <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i>Submenus</a></li>*/
/*                                                              */
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
/*    {#   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>*/
/*     #}                            */
/*                                {% endblock %}*/
/*                         </body>*/
/*                         {% endblock %}*/
/* */
