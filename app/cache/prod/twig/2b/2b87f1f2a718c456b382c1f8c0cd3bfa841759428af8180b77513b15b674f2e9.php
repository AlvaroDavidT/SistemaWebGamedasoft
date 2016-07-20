<?php

/* LoginfirstBundle::Layout_AdminConsultas.html.twig */
class __TwigTemplate_ee77cb841011fa4e223c899bad304286f1b2b9c5f56d76b5e802ec7516c77bf7 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 18
    public function block_content1($context, array $blocks = array())
    {
        // line 19
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 80
        echo "            ";
        $this->displayBlock('content2', $context, $blocks);
        // line 110
        echo "        ";
    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "Nombre"), "method"), "html", null, true);
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
    }

    // line 80
    public function block_content2($context, array $blocks = array())
    {
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
    }

    // line 83
    public function block_asideLeft($context, array $blocks = array())
    {
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
    }

    // line 86
    public function block_section1($context, array $blocks = array())
    {
        // line 87
        echo "
                                <!-- Sidebar user panel -->

                                <!-- sidebar menu: : style can be found in sidebar.less -->

                            ";
    }

    // line 96
    public function block_asideRight($context, array $blocks = array())
    {
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
    }

    // line 100
    public function block_section2($context, array $blocks = array())
    {
        // line 101
        echo "
                        ";
    }

    // line 103
    public function block_section3($context, array $blocks = array())
    {
        // line 104
        echo "
                        ";
    }

    // line 111
    public function block_Footer($context, array $blocks = array())
    {
        echo "        

            <div class=\"container-fluid\"  id=\"Desarrollo\">
                Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.
            </div>

        ";
    }

    // line 118
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  312 => 125,  308 => 124,  304 => 123,  300 => 122,  296 => 121,  292 => 120,  288 => 119,  283 => 118,  271 => 111,  266 => 104,  263 => 103,  258 => 101,  255 => 100,  250 => 106,  247 => 103,  245 => 100,  240 => 97,  237 => 96,  228 => 87,  225 => 86,  219 => 93,  217 => 86,  213 => 84,  210 => 83,  205 => 108,  202 => 96,  200 => 83,  196 => 81,  193 => 80,  179 => 70,  155 => 49,  147 => 44,  122 => 22,  118 => 20,  115 => 19,  111 => 110,  108 => 80,  105 => 19,  102 => 18,  97 => 129,  94 => 118,  91 => 111,  89 => 18,  86 => 17,  83 => 16,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  42 => 4,  39 => 3,  11 => 2,);
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
