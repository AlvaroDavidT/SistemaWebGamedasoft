<?php

/* LoginfirstBundle::Layout_Cliente.html.twig */
class __TwigTemplate_df32c1dfad843f92bceb463d6f2f5b9ffe3cc90ac5d80838af0cae6a2acc1951 extends Twig_Template
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
        $__internal_8f781f6f7099a1ca66fbd462c6d1de9f54806d0e478ded5be1191c5564907450 = $this->env->getExtension("native_profiler");
        $__internal_8f781f6f7099a1ca66fbd462c6d1de9f54806d0e478ded5be1191c5564907450->enter($__internal_8f781f6f7099a1ca66fbd462c6d1de9f54806d0e478ded5be1191c5564907450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle::Layout_Cliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f781f6f7099a1ca66fbd462c6d1de9f54806d0e478ded5be1191c5564907450->leave($__internal_8f781f6f7099a1ca66fbd462c6d1de9f54806d0e478ded5be1191c5564907450_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1d2597b305068bc4d3ef564f51e3e6aca934102e6adfe1592c611f72962d19b = $this->env->getExtension("native_profiler");
        $__internal_b1d2597b305068bc4d3ef564f51e3e6aca934102e6adfe1592c611f72962d19b->enter($__internal_b1d2597b305068bc4d3ef564f51e3e6aca934102e6adfe1592c611f72962d19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b1d2597b305068bc4d3ef564f51e3e6aca934102e6adfe1592c611f72962d19b->leave($__internal_b1d2597b305068bc4d3ef564f51e3e6aca934102e6adfe1592c611f72962d19b_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_85159598b9364a69e7520226b429f6333ead7e15682d5db5f2121be2827d552b = $this->env->getExtension("native_profiler");
        $__internal_85159598b9364a69e7520226b429f6333ead7e15682d5db5f2121be2827d552b->enter($__internal_85159598b9364a69e7520226b429f6333ead7e15682d5db5f2121be2827d552b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_85159598b9364a69e7520226b429f6333ead7e15682d5db5f2121be2827d552b->leave($__internal_85159598b9364a69e7520226b429f6333ead7e15682d5db5f2121be2827d552b_prof);

    }

    // line 16
    public function block_content1($context, array $blocks = array())
    {
        $__internal_be57e962a03a80a2bac3a5c06666cc8c3e1d7e60603c5f2e1ff99ad97490bf29 = $this->env->getExtension("native_profiler");
        $__internal_be57e962a03a80a2bac3a5c06666cc8c3e1d7e60603c5f2e1ff99ad97490bf29->enter($__internal_be57e962a03a80a2bac3a5c06666cc8c3e1d7e60603c5f2e1ff99ad97490bf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        // line 17
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 77
        echo "                        ";
        $this->displayBlock('content2', $context, $blocks);
        // line 153
        echo "                        ";
        
        $__internal_be57e962a03a80a2bac3a5c06666cc8c3e1d7e60603c5f2e1ff99ad97490bf29->leave($__internal_be57e962a03a80a2bac3a5c06666cc8c3e1d7e60603c5f2e1ff99ad97490bf29_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_a8a774959fbb5acde2262061cea70ba5557bf3ad402831711d0396d0cd17da29 = $this->env->getExtension("native_profiler");
        $__internal_a8a774959fbb5acde2262061cea70ba5557bf3ad402831711d0396d0cd17da29->enter($__internal_a8a774959fbb5acde2262061cea70ba5557bf3ad402831711d0396d0cd17da29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_a8a774959fbb5acde2262061cea70ba5557bf3ad402831711d0396d0cd17da29->leave($__internal_a8a774959fbb5acde2262061cea70ba5557bf3ad402831711d0396d0cd17da29_prof);

    }

    // line 77
    public function block_content2($context, array $blocks = array())
    {
        $__internal_c30713c564c2eac61e6a02159c278d6ba87224cfa68fc012f2014f41f57ae47f = $this->env->getExtension("native_profiler");
        $__internal_c30713c564c2eac61e6a02159c278d6ba87224cfa68fc012f2014f41f57ae47f->enter($__internal_c30713c564c2eac61e6a02159c278d6ba87224cfa68fc012f2014f41f57ae47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

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
        
        $__internal_c30713c564c2eac61e6a02159c278d6ba87224cfa68fc012f2014f41f57ae47f->leave($__internal_c30713c564c2eac61e6a02159c278d6ba87224cfa68fc012f2014f41f57ae47f_prof);

    }

    // line 80
    public function block_asideLeft($context, array $blocks = array())
    {
        $__internal_558e46d215b9f1885a6af91b95ed140a75f9baefebcde9f1f2b41d534b47c420 = $this->env->getExtension("native_profiler");
        $__internal_558e46d215b9f1885a6af91b95ed140a75f9baefebcde9f1f2b41d534b47c420->enter($__internal_558e46d215b9f1885a6af91b95ed140a75f9baefebcde9f1f2b41d534b47c420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideLeft"));

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
        
        $__internal_558e46d215b9f1885a6af91b95ed140a75f9baefebcde9f1f2b41d534b47c420->leave($__internal_558e46d215b9f1885a6af91b95ed140a75f9baefebcde9f1f2b41d534b47c420_prof);

    }

    // line 83
    public function block_section1($context, array $blocks = array())
    {
        $__internal_8cf1a6f50c783bc819a4305d087eef45a118ceda28f9d7013933b2c9bc708560 = $this->env->getExtension("native_profiler");
        $__internal_8cf1a6f50c783bc819a4305d087eef45a118ceda28f9d7013933b2c9bc708560->enter($__internal_8cf1a6f50c783bc819a4305d087eef45a118ceda28f9d7013933b2c9bc708560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

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
        
        $__internal_8cf1a6f50c783bc819a4305d087eef45a118ceda28f9d7013933b2c9bc708560->leave($__internal_8cf1a6f50c783bc819a4305d087eef45a118ceda28f9d7013933b2c9bc708560_prof);

    }

    // line 141
    public function block_asideRight($context, array $blocks = array())
    {
        $__internal_84ddd3311ae1b325d3155bda3fd7df7d70e17eba6e6b5e5b02d58c5cc80d0891 = $this->env->getExtension("native_profiler");
        $__internal_84ddd3311ae1b325d3155bda3fd7df7d70e17eba6e6b5e5b02d58c5cc80d0891->enter($__internal_84ddd3311ae1b325d3155bda3fd7df7d70e17eba6e6b5e5b02d58c5cc80d0891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideRight"));

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
        
        $__internal_84ddd3311ae1b325d3155bda3fd7df7d70e17eba6e6b5e5b02d58c5cc80d0891->leave($__internal_84ddd3311ae1b325d3155bda3fd7df7d70e17eba6e6b5e5b02d58c5cc80d0891_prof);

    }

    // line 145
    public function block_section2($context, array $blocks = array())
    {
        $__internal_2a51b927c291886d5c816846e28945c99c62f00e46c56d694f766de3e8e48f9b = $this->env->getExtension("native_profiler");
        $__internal_2a51b927c291886d5c816846e28945c99c62f00e46c56d694f766de3e8e48f9b->enter($__internal_2a51b927c291886d5c816846e28945c99c62f00e46c56d694f766de3e8e48f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 146
        echo "                                        ";
        
        $__internal_2a51b927c291886d5c816846e28945c99c62f00e46c56d694f766de3e8e48f9b->leave($__internal_2a51b927c291886d5c816846e28945c99c62f00e46c56d694f766de3e8e48f9b_prof);

    }

    // line 147
    public function block_section3($context, array $blocks = array())
    {
        $__internal_1801faf795f135a66065f2e818cdd2583b6cc8bf5b29edf45cb35d48550cfd75 = $this->env->getExtension("native_profiler");
        $__internal_1801faf795f135a66065f2e818cdd2583b6cc8bf5b29edf45cb35d48550cfd75->enter($__internal_1801faf795f135a66065f2e818cdd2583b6cc8bf5b29edf45cb35d48550cfd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 148
        echo "                                        ";
        
        $__internal_1801faf795f135a66065f2e818cdd2583b6cc8bf5b29edf45cb35d48550cfd75->leave($__internal_1801faf795f135a66065f2e818cdd2583b6cc8bf5b29edf45cb35d48550cfd75_prof);

    }

    // line 154
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_fc5c5b307270af9745c153776a77bd73ac8b2caddd056f81eb280708a3471956 = $this->env->getExtension("native_profiler");
        $__internal_fc5c5b307270af9745c153776a77bd73ac8b2caddd056f81eb280708a3471956->enter($__internal_fc5c5b307270af9745c153776a77bd73ac8b2caddd056f81eb280708a3471956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo "        
                                    <div class=\"container-fluid\"  id=\"Desarrollo\">
                                        Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.
                                    </div>
                                
                            ";
        
        $__internal_fc5c5b307270af9745c153776a77bd73ac8b2caddd056f81eb280708a3471956->leave($__internal_fc5c5b307270af9745c153776a77bd73ac8b2caddd056f81eb280708a3471956_prof);

    }

    // line 160
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc67b7b5206360fef034eaacdca65f3e510da73503b4c120fc4645d19a8d91cc = $this->env->getExtension("native_profiler");
        $__internal_fc67b7b5206360fef034eaacdca65f3e510da73503b4c120fc4645d19a8d91cc->enter($__internal_fc67b7b5206360fef034eaacdca65f3e510da73503b4c120fc4645d19a8d91cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_fc67b7b5206360fef034eaacdca65f3e510da73503b4c120fc4645d19a8d91cc->leave($__internal_fc67b7b5206360fef034eaacdca65f3e510da73503b4c120fc4645d19a8d91cc_prof);

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
