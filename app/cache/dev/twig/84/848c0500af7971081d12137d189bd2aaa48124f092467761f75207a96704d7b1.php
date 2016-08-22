<?php

/* LoginfirstBundle::Layout_Cliente.html.twig */
class __TwigTemplate_98f57197ec456e649ed162c22c574841fa67027e9fd2e9982871907b1b7054c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "LoginfirstBundle::Layout_Cliente.html.twig", 2);
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
        $__internal_1a30571736194300aff082ca446394f63d04a83fc06dcddf5c74d7e4ab460772 = $this->env->getExtension("native_profiler");
        $__internal_1a30571736194300aff082ca446394f63d04a83fc06dcddf5c74d7e4ab460772->enter($__internal_1a30571736194300aff082ca446394f63d04a83fc06dcddf5c74d7e4ab460772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle::Layout_Cliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a30571736194300aff082ca446394f63d04a83fc06dcddf5c74d7e4ab460772->leave($__internal_1a30571736194300aff082ca446394f63d04a83fc06dcddf5c74d7e4ab460772_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_45a1eac0a014bfb704fc34a8fdd8d87514074a42a732eb446378dad5f53b2f57 = $this->env->getExtension("native_profiler");
        $__internal_45a1eac0a014bfb704fc34a8fdd8d87514074a42a732eb446378dad5f53b2f57->enter($__internal_45a1eac0a014bfb704fc34a8fdd8d87514074a42a732eb446378dad5f53b2f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css\" />

";
        
        $__internal_45a1eac0a014bfb704fc34a8fdd8d87514074a42a732eb446378dad5f53b2f57->leave($__internal_45a1eac0a014bfb704fc34a8fdd8d87514074a42a732eb446378dad5f53b2f57_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_98b46ee984299b4a272870c30e2c9a49465c4ac62e8da39600524c9a3656fd42 = $this->env->getExtension("native_profiler");
        $__internal_98b46ee984299b4a272870c30e2c9a49465c4ac62e8da39600524c9a3656fd42->enter($__internal_98b46ee984299b4a272870c30e2c9a49465c4ac62e8da39600524c9a3656fd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <body class=\"skin-black\">
        ";
        // line 18
        $this->displayBlock('content1', $context, $blocks);
        // line 156
        echo "                            ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 162
        echo "                            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 180
        echo "                        </body>
                        ";
        
        $__internal_98b46ee984299b4a272870c30e2c9a49465c4ac62e8da39600524c9a3656fd42->leave($__internal_98b46ee984299b4a272870c30e2c9a49465c4ac62e8da39600524c9a3656fd42_prof);

    }

    // line 18
    public function block_content1($context, array $blocks = array())
    {
        $__internal_fd40eef04190939110d826c78eefcf10681e7a5d2db1f8db795f5ef4b2c6a63e = $this->env->getExtension("native_profiler");
        $__internal_fd40eef04190939110d826c78eefcf10681e7a5d2db1f8db795f5ef4b2c6a63e->enter($__internal_fd40eef04190939110d826c78eefcf10681e7a5d2db1f8db795f5ef4b2c6a63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        // line 19
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "                        ";
        $this->displayBlock('content2', $context, $blocks);
        // line 155
        echo "                        ";
        
        $__internal_fd40eef04190939110d826c78eefcf10681e7a5d2db1f8db795f5ef4b2c6a63e->leave($__internal_fd40eef04190939110d826c78eefcf10681e7a5d2db1f8db795f5ef4b2c6a63e_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_7c82e10a6f8999303bc86c5f4e175d2f81da1a44076dc8e84de168eba0fa8c31 = $this->env->getExtension("native_profiler");
        $__internal_7c82e10a6f8999303bc86c5f4e175d2f81da1a44076dc8e84de168eba0fa8c31->enter($__internal_7c82e10a6f8999303bc86c5f4e175d2f81da1a44076dc8e84de168eba0fa8c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "usuario"), "method"), "html", null, true);
        echo "<i class=\"caret\"></i></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <!-- User image -->
                                        <li class=\"user-header bg-light-blue\">
                                          <!--  <img src=\"";
        // line 49
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
        
        $__internal_7c82e10a6f8999303bc86c5f4e175d2f81da1a44076dc8e84de168eba0fa8c31->leave($__internal_7c82e10a6f8999303bc86c5f4e175d2f81da1a44076dc8e84de168eba0fa8c31_prof);

    }

    // line 79
    public function block_content2($context, array $blocks = array())
    {
        $__internal_fa6ac0986f32aca018bbef98c9914a443e41ed4eeeac135739ebf10cea5188a5 = $this->env->getExtension("native_profiler");
        $__internal_fa6ac0986f32aca018bbef98c9914a443e41ed4eeeac135739ebf10cea5188a5->enter($__internal_fa6ac0986f32aca018bbef98c9914a443e41ed4eeeac135739ebf10cea5188a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        // line 80
        echo "                            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                                <!-- Left side column. contains the logo and sidebar -->
                                ";
        // line 82
        $this->displayBlock('asideLeft', $context, $blocks);
        // line 143
        echo "                                ";
        $this->displayBlock('asideRight', $context, $blocks);
        // line 153
        echo "                            </div><!-- ./wrapper -->
                        ";
        
        $__internal_fa6ac0986f32aca018bbef98c9914a443e41ed4eeeac135739ebf10cea5188a5->leave($__internal_fa6ac0986f32aca018bbef98c9914a443e41ed4eeeac135739ebf10cea5188a5_prof);

    }

    // line 82
    public function block_asideLeft($context, array $blocks = array())
    {
        $__internal_09a258b4b7668d99a6460520995a10f5181785942d079fd83b771d9baa00ba2f = $this->env->getExtension("native_profiler");
        $__internal_09a258b4b7668d99a6460520995a10f5181785942d079fd83b771d9baa00ba2f->enter($__internal_09a258b4b7668d99a6460520995a10f5181785942d079fd83b771d9baa00ba2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideLeft"));

        // line 83
        echo "                                    <aside class=\"left-side sidebar-offcanvas\">
                                        <!-- sidebar: style can be found in sidebar.less -->
                                        ";
        // line 85
        $this->displayBlock('section1', $context, $blocks);
        // line 140
        echo "                                        <!-- /.sidebar -->
                                    </aside>
                                ";
        
        $__internal_09a258b4b7668d99a6460520995a10f5181785942d079fd83b771d9baa00ba2f->leave($__internal_09a258b4b7668d99a6460520995a10f5181785942d079fd83b771d9baa00ba2f_prof);

    }

    // line 85
    public function block_section1($context, array $blocks = array())
    {
        $__internal_e00bd33109b10addd25372eec4323e345846d7a29ebf894dc82884ed6d1a0d3f = $this->env->getExtension("native_profiler");
        $__internal_e00bd33109b10addd25372eec4323e345846d7a29ebf894dc82884ed6d1a0d3f->enter($__internal_e00bd33109b10addd25372eec4323e345846d7a29ebf894dc82884ed6d1a0d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "usuario"), "method"), "html", null, true);
        echo "<i class=\"\"></i></span></h5>

                                                    </div>
                                                </div>
                                                <!-- sidebar menu: : style can be found in sidebar.less -->
                                                <ul class=\"sidebar-menu\">
                                                    <li class=\"active\">
                                                        <a href=\"";
        // line 101
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
        // line 112
        echo $this->env->getExtension('routing')->getPath("UpdateCliente");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Actualizar Datos</a></li>
                                                            <li><a href=\"";
        // line 113
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
        // line 123
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
                                                            <li><a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("RequerimientosC");
        echo "\"><i class=\"fa fa-angle-double-right\"></i>Mis Requerimientos</a></li>
                                                        </ul>
                                                    </li>
                                                   
                                                </ul>
                                            </section>
                                        ";
        
        $__internal_e00bd33109b10addd25372eec4323e345846d7a29ebf894dc82884ed6d1a0d3f->leave($__internal_e00bd33109b10addd25372eec4323e345846d7a29ebf894dc82884ed6d1a0d3f_prof);

    }

    // line 143
    public function block_asideRight($context, array $blocks = array())
    {
        $__internal_c911bab0d84edc42b9fbaf52c780a56dee455cff30228b47f28faf449753dcca = $this->env->getExtension("native_profiler");
        $__internal_c911bab0d84edc42b9fbaf52c780a56dee455cff30228b47f28faf449753dcca->enter($__internal_c911bab0d84edc42b9fbaf52c780a56dee455cff30228b47f28faf449753dcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideRight"));

        // line 144
        echo "                                    <!-- Right side column. Contains the navbar and content of the page -->
                                    <aside class=\"right-side\">
                                        <!-- Content Header (Page header) -->
                                        ";
        // line 147
        $this->displayBlock('section2', $context, $blocks);
        // line 149
        echo "                                        ";
        $this->displayBlock('section3', $context, $blocks);
        // line 151
        echo "                                    </aside><!-- /.right-side -->
                                ";
        
        $__internal_c911bab0d84edc42b9fbaf52c780a56dee455cff30228b47f28faf449753dcca->leave($__internal_c911bab0d84edc42b9fbaf52c780a56dee455cff30228b47f28faf449753dcca_prof);

    }

    // line 147
    public function block_section2($context, array $blocks = array())
    {
        $__internal_057e090cc52bfdb5f90f50748976591a9371c1691b9bd695bb0dda86ba1c7554 = $this->env->getExtension("native_profiler");
        $__internal_057e090cc52bfdb5f90f50748976591a9371c1691b9bd695bb0dda86ba1c7554->enter($__internal_057e090cc52bfdb5f90f50748976591a9371c1691b9bd695bb0dda86ba1c7554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 148
        echo "                                        ";
        
        $__internal_057e090cc52bfdb5f90f50748976591a9371c1691b9bd695bb0dda86ba1c7554->leave($__internal_057e090cc52bfdb5f90f50748976591a9371c1691b9bd695bb0dda86ba1c7554_prof);

    }

    // line 149
    public function block_section3($context, array $blocks = array())
    {
        $__internal_efffb213c17e37953664f3e4b8a6550023b33a104da3a9e7c86c43301f6648fe = $this->env->getExtension("native_profiler");
        $__internal_efffb213c17e37953664f3e4b8a6550023b33a104da3a9e7c86c43301f6648fe->enter($__internal_efffb213c17e37953664f3e4b8a6550023b33a104da3a9e7c86c43301f6648fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 150
        echo "                                        ";
        
        $__internal_efffb213c17e37953664f3e4b8a6550023b33a104da3a9e7c86c43301f6648fe->leave($__internal_efffb213c17e37953664f3e4b8a6550023b33a104da3a9e7c86c43301f6648fe_prof);

    }

    // line 156
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_a32eb38630628a2ccad2176caa1326d41b209cc6212e80f41fad8daac05fdff8 = $this->env->getExtension("native_profiler");
        $__internal_a32eb38630628a2ccad2176caa1326d41b209cc6212e80f41fad8daac05fdff8->enter($__internal_a32eb38630628a2ccad2176caa1326d41b209cc6212e80f41fad8daac05fdff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo "        
                                    <div class=\"container-fluid\"  id=\"Desarrollo\">
                                        Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.
                                    </div>
                                
                            ";
        
        $__internal_a32eb38630628a2ccad2176caa1326d41b209cc6212e80f41fad8daac05fdff8->leave($__internal_a32eb38630628a2ccad2176caa1326d41b209cc6212e80f41fad8daac05fdff8_prof);

    }

    // line 162
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e816df0a6911758ec503db886f9e5748abdd29a0bdfbb512f6953f7d217e8f79 = $this->env->getExtension("native_profiler");
        $__internal_e816df0a6911758ec503db886f9e5748abdd29a0bdfbb512f6953f7d217e8f79->enter($__internal_e816df0a6911758ec503db886f9e5748abdd29a0bdfbb512f6953f7d217e8f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
                               <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
                                <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery-ui-1.10.3.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
                                <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/jqueryKnob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/AdminLTE/app.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/mainCliente.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
                                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js\"></script>
       
                            ";
        
        $__internal_e816df0a6911758ec503db886f9e5748abdd29a0bdfbb512f6953f7d217e8f79->leave($__internal_e816df0a6911758ec503db886f9e5748abdd29a0bdfbb512f6953f7d217e8f79_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle::Layout_Cliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 176,  470 => 175,  466 => 174,  462 => 173,  458 => 172,  454 => 171,  450 => 170,  446 => 169,  442 => 168,  438 => 167,  433 => 165,  429 => 164,  420 => 162,  403 => 156,  396 => 150,  390 => 149,  383 => 148,  377 => 147,  369 => 151,  366 => 149,  364 => 147,  359 => 144,  353 => 143,  339 => 133,  326 => 123,  313 => 113,  309 => 112,  295 => 101,  285 => 94,  278 => 90,  272 => 86,  266 => 85,  257 => 140,  255 => 85,  251 => 83,  245 => 82,  237 => 153,  234 => 143,  232 => 82,  228 => 80,  222 => 79,  205 => 69,  182 => 49,  174 => 44,  149 => 22,  145 => 20,  139 => 19,  132 => 155,  129 => 79,  126 => 19,  120 => 18,  112 => 180,  109 => 162,  106 => 156,  104 => 18,  101 => 17,  95 => 16,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  51 => 4,  45 => 3,  11 => 2,);
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
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />*/
/* */
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
/*                                                             <li><a href="{{path('RequerimientosC')}}"><i class="fa fa-angle-double-right"></i>Mis Requerimientos</a></li>*/
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
/*                                 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>*/
/*        */
/*                             {% endblock %}*/
/*                         </body>*/
/*                         {% endblock %}*/
/* */
