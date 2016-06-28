<?php

/* LoginfirstBundle::layout_Admin.html.twig */
class __TwigTemplate_b1931e481e2606e8e1fd901ae7454ccef9f7f800fa21c60bd451c5b198c0387f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "LoginfirstBundle::layout_Admin.html.twig", 2);
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
        $__internal_86603d0d3e01fe74a36e5dc2d73df10a2a30fe68f13e3a0985bf6f2ed6a948d8 = $this->env->getExtension("native_profiler");
        $__internal_86603d0d3e01fe74a36e5dc2d73df10a2a30fe68f13e3a0985bf6f2ed6a948d8->enter($__internal_86603d0d3e01fe74a36e5dc2d73df10a2a30fe68f13e3a0985bf6f2ed6a948d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle::layout_Admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86603d0d3e01fe74a36e5dc2d73df10a2a30fe68f13e3a0985bf6f2ed6a948d8->leave($__internal_86603d0d3e01fe74a36e5dc2d73df10a2a30fe68f13e3a0985bf6f2ed6a948d8_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a52ce5d06ee094fcfed3c50fc7a342c62bd5d331954ffb2257120df73c2c5738 = $this->env->getExtension("native_profiler");
        $__internal_a52ce5d06ee094fcfed3c50fc7a342c62bd5d331954ffb2257120df73c2c5738->enter($__internal_a52ce5d06ee094fcfed3c50fc7a342c62bd5d331954ffb2257120df73c2c5738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a52ce5d06ee094fcfed3c50fc7a342c62bd5d331954ffb2257120df73c2c5738->leave($__internal_a52ce5d06ee094fcfed3c50fc7a342c62bd5d331954ffb2257120df73c2c5738_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_991818178f7924aec937022aa1889f2203c0d11d77ccba5ac2b110c0858372ab = $this->env->getExtension("native_profiler");
        $__internal_991818178f7924aec937022aa1889f2203c0d11d77ccba5ac2b110c0858372ab->enter($__internal_991818178f7924aec937022aa1889f2203c0d11d77ccba5ac2b110c0858372ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_991818178f7924aec937022aa1889f2203c0d11d77ccba5ac2b110c0858372ab->leave($__internal_991818178f7924aec937022aa1889f2203c0d11d77ccba5ac2b110c0858372ab_prof);

    }

    // line 17
    public function block_content1($context, array $blocks = array())
    {
        $__internal_b44cae6618140181df63959ca8cc8fd5a70f8ea8f4b6312fb51e5fb10e594e58 = $this->env->getExtension("native_profiler");
        $__internal_b44cae6618140181df63959ca8cc8fd5a70f8ea8f4b6312fb51e5fb10e594e58->enter($__internal_b44cae6618140181df63959ca8cc8fd5a70f8ea8f4b6312fb51e5fb10e594e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        // line 18
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "                        ";
        $this->displayBlock('content2', $context, $blocks);
        // line 175
        echo "                        ";
        
        $__internal_b44cae6618140181df63959ca8cc8fd5a70f8ea8f4b6312fb51e5fb10e594e58->leave($__internal_b44cae6618140181df63959ca8cc8fd5a70f8ea8f4b6312fb51e5fb10e594e58_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_c775b9cca1de2d4ba38a68d5501f2d641c5d76f7a10dcd61d9e452d4db30e837 = $this->env->getExtension("native_profiler");
        $__internal_c775b9cca1de2d4ba38a68d5501f2d641c5d76f7a10dcd61d9e452d4db30e837->enter($__internal_c775b9cca1de2d4ba38a68d5501f2d641c5d76f7a10dcd61d9e452d4db30e837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_c775b9cca1de2d4ba38a68d5501f2d641c5d76f7a10dcd61d9e452d4db30e837->leave($__internal_c775b9cca1de2d4ba38a68d5501f2d641c5d76f7a10dcd61d9e452d4db30e837_prof);

    }

    // line 79
    public function block_content2($context, array $blocks = array())
    {
        $__internal_2a02bf5d98e9eb9b3a8c9f6f3b284d1d7279257728b7dc0308ed299036bbf976 = $this->env->getExtension("native_profiler");
        $__internal_2a02bf5d98e9eb9b3a8c9f6f3b284d1d7279257728b7dc0308ed299036bbf976->enter($__internal_2a02bf5d98e9eb9b3a8c9f6f3b284d1d7279257728b7dc0308ed299036bbf976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

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
        
        $__internal_2a02bf5d98e9eb9b3a8c9f6f3b284d1d7279257728b7dc0308ed299036bbf976->leave($__internal_2a02bf5d98e9eb9b3a8c9f6f3b284d1d7279257728b7dc0308ed299036bbf976_prof);

    }

    // line 82
    public function block_asideLeft($context, array $blocks = array())
    {
        $__internal_260b38bccc1661052f53fbbe432095d0614c9a6ce96a120023f48e4ea439c4b4 = $this->env->getExtension("native_profiler");
        $__internal_260b38bccc1661052f53fbbe432095d0614c9a6ce96a120023f48e4ea439c4b4->enter($__internal_260b38bccc1661052f53fbbe432095d0614c9a6ce96a120023f48e4ea439c4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideLeft"));

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
        
        $__internal_260b38bccc1661052f53fbbe432095d0614c9a6ce96a120023f48e4ea439c4b4->leave($__internal_260b38bccc1661052f53fbbe432095d0614c9a6ce96a120023f48e4ea439c4b4_prof);

    }

    // line 85
    public function block_section1($context, array $blocks = array())
    {
        $__internal_b626cd7962a7df107348e198608e9c4f8e900476aa02520185e3c7d472bc4ac5 = $this->env->getExtension("native_profiler");
        $__internal_b626cd7962a7df107348e198608e9c4f8e900476aa02520185e3c7d472bc4ac5->enter($__internal_b626cd7962a7df107348e198608e9c4f8e900476aa02520185e3c7d472bc4ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

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
        
        $__internal_b626cd7962a7df107348e198608e9c4f8e900476aa02520185e3c7d472bc4ac5->leave($__internal_b626cd7962a7df107348e198608e9c4f8e900476aa02520185e3c7d472bc4ac5_prof);

    }

    // line 163
    public function block_asideRight($context, array $blocks = array())
    {
        $__internal_39d0392da03c974b367d828ba0c8bb0a0639cb32a23dbceca728f2ba091db7d8 = $this->env->getExtension("native_profiler");
        $__internal_39d0392da03c974b367d828ba0c8bb0a0639cb32a23dbceca728f2ba091db7d8->enter($__internal_39d0392da03c974b367d828ba0c8bb0a0639cb32a23dbceca728f2ba091db7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideRight"));

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
        
        $__internal_39d0392da03c974b367d828ba0c8bb0a0639cb32a23dbceca728f2ba091db7d8->leave($__internal_39d0392da03c974b367d828ba0c8bb0a0639cb32a23dbceca728f2ba091db7d8_prof);

    }

    // line 167
    public function block_section2($context, array $blocks = array())
    {
        $__internal_09bdd8ae5741bee2bcc4569de922d345e3eadadb4914c17dd6340be4eb81d990 = $this->env->getExtension("native_profiler");
        $__internal_09bdd8ae5741bee2bcc4569de922d345e3eadadb4914c17dd6340be4eb81d990->enter($__internal_09bdd8ae5741bee2bcc4569de922d345e3eadadb4914c17dd6340be4eb81d990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 168
        echo "                                        ";
        
        $__internal_09bdd8ae5741bee2bcc4569de922d345e3eadadb4914c17dd6340be4eb81d990->leave($__internal_09bdd8ae5741bee2bcc4569de922d345e3eadadb4914c17dd6340be4eb81d990_prof);

    }

    // line 169
    public function block_section3($context, array $blocks = array())
    {
        $__internal_d0918071a3b07130a62eba12fe2a4cb36069b640a6cce9817a6939ff308e28b7 = $this->env->getExtension("native_profiler");
        $__internal_d0918071a3b07130a62eba12fe2a4cb36069b640a6cce9817a6939ff308e28b7->enter($__internal_d0918071a3b07130a62eba12fe2a4cb36069b640a6cce9817a6939ff308e28b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 170
        echo "                                        ";
        
        $__internal_d0918071a3b07130a62eba12fe2a4cb36069b640a6cce9817a6939ff308e28b7->leave($__internal_d0918071a3b07130a62eba12fe2a4cb36069b640a6cce9817a6939ff308e28b7_prof);

    }

    // line 176
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_bb221bf5091bb7ce6f1731ff3ae274ef3ed74a8e54a171f1091f078b7a422498 = $this->env->getExtension("native_profiler");
        $__internal_bb221bf5091bb7ce6f1731ff3ae274ef3ed74a8e54a171f1091f078b7a422498->enter($__internal_bb221bf5091bb7ce6f1731ff3ae274ef3ed74a8e54a171f1091f078b7a422498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo "        
                              
                                    <div class=\"container-fluid\"  id=\"Desarrollo\">
                                        Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.
                                    </div>
                            
                            ";
        
        $__internal_bb221bf5091bb7ce6f1731ff3ae274ef3ed74a8e54a171f1091f078b7a422498->leave($__internal_bb221bf5091bb7ce6f1731ff3ae274ef3ed74a8e54a171f1091f078b7a422498_prof);

    }

    // line 183
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a9da8983668bf7776bce440d2a2c242f78ee7d1b94e4cc8f9d85a464c5e56677 = $this->env->getExtension("native_profiler");
        $__internal_a9da8983668bf7776bce440d2a2c242f78ee7d1b94e4cc8f9d85a464c5e56677->enter($__internal_a9da8983668bf7776bce440d2a2c242f78ee7d1b94e4cc8f9d85a464c5e56677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a9da8983668bf7776bce440d2a2c242f78ee7d1b94e4cc8f9d85a464c5e56677->leave($__internal_a9da8983668bf7776bce440d2a2c242f78ee7d1b94e4cc8f9d85a464c5e56677_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle::layout_Admin.html.twig";
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
