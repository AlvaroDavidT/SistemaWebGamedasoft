<?php

/* LoginfirstBundle::Layout_Empleado.html.twig */
class __TwigTemplate_020755b0b213a9ad3277b99b6548e3e88f47c7e22a1a41c35a3a1f2628e782f2 extends Twig_Template
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
        $__internal_70cc72ca64abd12f2551884da7a23781c3c0660f26899dbd35e52ca25bb960f2 = $this->env->getExtension("native_profiler");
        $__internal_70cc72ca64abd12f2551884da7a23781c3c0660f26899dbd35e52ca25bb960f2->enter($__internal_70cc72ca64abd12f2551884da7a23781c3c0660f26899dbd35e52ca25bb960f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle::Layout_Empleado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70cc72ca64abd12f2551884da7a23781c3c0660f26899dbd35e52ca25bb960f2->leave($__internal_70cc72ca64abd12f2551884da7a23781c3c0660f26899dbd35e52ca25bb960f2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_71fc09ce913f85822176b43c7caa04dc0b1d2ad585b022e51571c62fde57331d = $this->env->getExtension("native_profiler");
        $__internal_71fc09ce913f85822176b43c7caa04dc0b1d2ad585b022e51571c62fde57331d->enter($__internal_71fc09ce913f85822176b43c7caa04dc0b1d2ad585b022e51571c62fde57331d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_71fc09ce913f85822176b43c7caa04dc0b1d2ad585b022e51571c62fde57331d->leave($__internal_71fc09ce913f85822176b43c7caa04dc0b1d2ad585b022e51571c62fde57331d_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_8296a7680553f7e9fd9eaad3a9ffd9fbe5d74e8763cf7ec19ccb31c57b96a3d7 = $this->env->getExtension("native_profiler");
        $__internal_8296a7680553f7e9fd9eaad3a9ffd9fbe5d74e8763cf7ec19ccb31c57b96a3d7->enter($__internal_8296a7680553f7e9fd9eaad3a9ffd9fbe5d74e8763cf7ec19ccb31c57b96a3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8296a7680553f7e9fd9eaad3a9ffd9fbe5d74e8763cf7ec19ccb31c57b96a3d7->leave($__internal_8296a7680553f7e9fd9eaad3a9ffd9fbe5d74e8763cf7ec19ccb31c57b96a3d7_prof);

    }

    // line 18
    public function block_content1($context, array $blocks = array())
    {
        $__internal_2933cce430b55c41c595443f0217ee8dda1b6878622461052491c31ed88eaac5 = $this->env->getExtension("native_profiler");
        $__internal_2933cce430b55c41c595443f0217ee8dda1b6878622461052491c31ed88eaac5->enter($__internal_2933cce430b55c41c595443f0217ee8dda1b6878622461052491c31ed88eaac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        // line 19
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 80
        echo "                        ";
        $this->displayBlock('content2', $context, $blocks);
        // line 157
        echo "                        ";
        
        $__internal_2933cce430b55c41c595443f0217ee8dda1b6878622461052491c31ed88eaac5->leave($__internal_2933cce430b55c41c595443f0217ee8dda1b6878622461052491c31ed88eaac5_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_2da38822b46ec0a9a9ab332268223533e7c92e15addb74164c44b42d59d642be = $this->env->getExtension("native_profiler");
        $__internal_2da38822b46ec0a9a9ab332268223533e7c92e15addb74164c44b42d59d642be->enter($__internal_2da38822b46ec0a9a9ab332268223533e7c92e15addb74164c44b42d59d642be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_2da38822b46ec0a9a9ab332268223533e7c92e15addb74164c44b42d59d642be->leave($__internal_2da38822b46ec0a9a9ab332268223533e7c92e15addb74164c44b42d59d642be_prof);

    }

    // line 80
    public function block_content2($context, array $blocks = array())
    {
        $__internal_b99eefc858ac7fab81e65b411885c62a304d3c4cae8b1adbc3511c66a9cce9cc = $this->env->getExtension("native_profiler");
        $__internal_b99eefc858ac7fab81e65b411885c62a304d3c4cae8b1adbc3511c66a9cce9cc->enter($__internal_b99eefc858ac7fab81e65b411885c62a304d3c4cae8b1adbc3511c66a9cce9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

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
        
        $__internal_b99eefc858ac7fab81e65b411885c62a304d3c4cae8b1adbc3511c66a9cce9cc->leave($__internal_b99eefc858ac7fab81e65b411885c62a304d3c4cae8b1adbc3511c66a9cce9cc_prof);

    }

    // line 83
    public function block_asideLeft($context, array $blocks = array())
    {
        $__internal_2455228f5619c433e0940abc2c4eb6a011d153a544cb39a7a1da3b6eed6736d2 = $this->env->getExtension("native_profiler");
        $__internal_2455228f5619c433e0940abc2c4eb6a011d153a544cb39a7a1da3b6eed6736d2->enter($__internal_2455228f5619c433e0940abc2c4eb6a011d153a544cb39a7a1da3b6eed6736d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideLeft"));

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
        
        $__internal_2455228f5619c433e0940abc2c4eb6a011d153a544cb39a7a1da3b6eed6736d2->leave($__internal_2455228f5619c433e0940abc2c4eb6a011d153a544cb39a7a1da3b6eed6736d2_prof);

    }

    // line 86
    public function block_section1($context, array $blocks = array())
    {
        $__internal_05b3d93ff4da982724ee19a3eb9d0456bf13602b2c653173d8b741bb20aa812b = $this->env->getExtension("native_profiler");
        $__internal_05b3d93ff4da982724ee19a3eb9d0456bf13602b2c653173d8b741bb20aa812b->enter($__internal_05b3d93ff4da982724ee19a3eb9d0456bf13602b2c653173d8b741bb20aa812b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

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
                                                            <li><a href=\"pages/charts/inline.html\"><i class=\"fa fa-angle-double-right\"></i>Cambiar Contraseña</a></li>
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
                                                            <li><a href=\"pages/forms/general.html\"><i class=\"fa fa-angle-double-right\"></i>Tiempos</a></li>
                                                            <li><a href=\"pages/forms/editors.html\"><i class=\"fa fa-angle-double-right\"></i>Requemientos</a></li>
                                                         </ul>
                                                    </li>
                                                   
                                                </ul>
                                            </section>
                                        ";
        
        $__internal_05b3d93ff4da982724ee19a3eb9d0456bf13602b2c653173d8b741bb20aa812b->leave($__internal_05b3d93ff4da982724ee19a3eb9d0456bf13602b2c653173d8b741bb20aa812b_prof);

    }

    // line 145
    public function block_asideRight($context, array $blocks = array())
    {
        $__internal_6c008e204fada40f76a68cf7d9718caae4a59a3d18d6b0f33f7f9d20214e53e0 = $this->env->getExtension("native_profiler");
        $__internal_6c008e204fada40f76a68cf7d9718caae4a59a3d18d6b0f33f7f9d20214e53e0->enter($__internal_6c008e204fada40f76a68cf7d9718caae4a59a3d18d6b0f33f7f9d20214e53e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideRight"));

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
        
        $__internal_6c008e204fada40f76a68cf7d9718caae4a59a3d18d6b0f33f7f9d20214e53e0->leave($__internal_6c008e204fada40f76a68cf7d9718caae4a59a3d18d6b0f33f7f9d20214e53e0_prof);

    }

    // line 149
    public function block_section2($context, array $blocks = array())
    {
        $__internal_55c4079d3061185c572ca3f19e759ddddc319e81ab83cd417b9f8beb1cb15ba0 = $this->env->getExtension("native_profiler");
        $__internal_55c4079d3061185c572ca3f19e759ddddc319e81ab83cd417b9f8beb1cb15ba0->enter($__internal_55c4079d3061185c572ca3f19e759ddddc319e81ab83cd417b9f8beb1cb15ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 150
        echo "                                        ";
        
        $__internal_55c4079d3061185c572ca3f19e759ddddc319e81ab83cd417b9f8beb1cb15ba0->leave($__internal_55c4079d3061185c572ca3f19e759ddddc319e81ab83cd417b9f8beb1cb15ba0_prof);

    }

    // line 151
    public function block_section3($context, array $blocks = array())
    {
        $__internal_95a0d2b1a0805529b221914f6ac500909ac033a1ed039fa16512a127df437843 = $this->env->getExtension("native_profiler");
        $__internal_95a0d2b1a0805529b221914f6ac500909ac033a1ed039fa16512a127df437843->enter($__internal_95a0d2b1a0805529b221914f6ac500909ac033a1ed039fa16512a127df437843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 152
        echo "                                        ";
        
        $__internal_95a0d2b1a0805529b221914f6ac500909ac033a1ed039fa16512a127df437843->leave($__internal_95a0d2b1a0805529b221914f6ac500909ac033a1ed039fa16512a127df437843_prof);

    }

    // line 158
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_de59d37bcf5951c33267cf657983b98b47a1b32ae4b90b8fdbd041953ef02802 = $this->env->getExtension("native_profiler");
        $__internal_de59d37bcf5951c33267cf657983b98b47a1b32ae4b90b8fdbd041953ef02802->enter($__internal_de59d37bcf5951c33267cf657983b98b47a1b32ae4b90b8fdbd041953ef02802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo "        
                               
                                    <div class=\"container-fluid\"  id=\"Desarrollo\">
                                        Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.
                                    </div>
                               
                            ";
        
        $__internal_de59d37bcf5951c33267cf657983b98b47a1b32ae4b90b8fdbd041953ef02802->leave($__internal_de59d37bcf5951c33267cf657983b98b47a1b32ae4b90b8fdbd041953ef02802_prof);

    }

    // line 165
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_47c345e577b5943357b521e3c5a9f9374bcf3c8e7af5a094c114c98f0257cc0f = $this->env->getExtension("native_profiler");
        $__internal_47c345e577b5943357b521e3c5a9f9374bcf3c8e7af5a094c114c98f0257cc0f->enter($__internal_47c345e577b5943357b521e3c5a9f9374bcf3c8e7af5a094c114c98f0257cc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_47c345e577b5943357b521e3c5a9f9374bcf3c8e7af5a094c114c98f0257cc0f->leave($__internal_47c345e577b5943357b521e3c5a9f9374bcf3c8e7af5a094c114c98f0257cc0f_prof);

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
        return array (  471 => 179,  467 => 178,  463 => 177,  459 => 176,  455 => 175,  451 => 174,  447 => 173,  443 => 172,  439 => 171,  435 => 170,  430 => 168,  426 => 167,  417 => 165,  399 => 158,  392 => 152,  386 => 151,  379 => 150,  373 => 149,  365 => 153,  362 => 151,  360 => 149,  355 => 146,  349 => 145,  324 => 124,  310 => 113,  296 => 102,  286 => 95,  279 => 91,  273 => 87,  267 => 86,  258 => 142,  256 => 86,  252 => 84,  246 => 83,  238 => 155,  235 => 145,  233 => 83,  229 => 81,  223 => 80,  206 => 70,  182 => 49,  174 => 44,  149 => 22,  145 => 20,  139 => 19,  132 => 157,  129 => 80,  126 => 19,  120 => 18,  112 => 182,  109 => 165,  106 => 158,  104 => 18,  101 => 17,  95 => 16,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  51 => 4,  45 => 3,  11 => 2,);
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
/*                                                             <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i>Cambiar Contraseña</a></li>*/
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
/*                                                             <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i>Tiempos</a></li>*/
/*                                                             <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i>Requemientos</a></li>*/
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