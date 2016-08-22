<?php

/* LoginfirstBundle::Layout_EmpleadosConsultas.html.twig */
class __TwigTemplate_cedd2357c1ba0180de09b48d2202aa024e24e55c1b49d7d3828636a14f0057ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "LoginfirstBundle::Layout_EmpleadosConsultas.html.twig", 2);
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
        $__internal_33cf1442e3ab0216b048da32bb55812d6ea9bef7e08eb9656353f39d701a7c7d = $this->env->getExtension("native_profiler");
        $__internal_33cf1442e3ab0216b048da32bb55812d6ea9bef7e08eb9656353f39d701a7c7d->enter($__internal_33cf1442e3ab0216b048da32bb55812d6ea9bef7e08eb9656353f39d701a7c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle::Layout_EmpleadosConsultas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33cf1442e3ab0216b048da32bb55812d6ea9bef7e08eb9656353f39d701a7c7d->leave($__internal_33cf1442e3ab0216b048da32bb55812d6ea9bef7e08eb9656353f39d701a7c7d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fdf9ff0d41d96c0e6f75b139ce063969e065e4fa569cd517f9451d017795e38d = $this->env->getExtension("native_profiler");
        $__internal_fdf9ff0d41d96c0e6f75b139ce063969e065e4fa569cd517f9451d017795e38d->enter($__internal_fdf9ff0d41d96c0e6f75b139ce063969e065e4fa569cd517f9451d017795e38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fdf9ff0d41d96c0e6f75b139ce063969e065e4fa569cd517f9451d017795e38d->leave($__internal_fdf9ff0d41d96c0e6f75b139ce063969e065e4fa569cd517f9451d017795e38d_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_080dcfc82a297b51e9a7176d541e5b84ae58ebabbdb9cd077ccafc381fdc9b60 = $this->env->getExtension("native_profiler");
        $__internal_080dcfc82a297b51e9a7176d541e5b84ae58ebabbdb9cd077ccafc381fdc9b60->enter($__internal_080dcfc82a297b51e9a7176d541e5b84ae58ebabbdb9cd077ccafc381fdc9b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <body class=\"skin-black\">
        ";
        // line 18
        $this->displayBlock('content1', $context, $blocks);
        // line 104
        echo "        ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 111
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 121
        echo "    </body>
";
        
        $__internal_080dcfc82a297b51e9a7176d541e5b84ae58ebabbdb9cd077ccafc381fdc9b60->leave($__internal_080dcfc82a297b51e9a7176d541e5b84ae58ebabbdb9cd077ccafc381fdc9b60_prof);

    }

    // line 18
    public function block_content1($context, array $blocks = array())
    {
        $__internal_fc2e9952f2bff0bff98e869e97b294991537242b464dd042a3dd64c51dc737a6 = $this->env->getExtension("native_profiler");
        $__internal_fc2e9952f2bff0bff98e869e97b294991537242b464dd042a3dd64c51dc737a6->enter($__internal_fc2e9952f2bff0bff98e869e97b294991537242b464dd042a3dd64c51dc737a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        // line 19
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 74
        echo "            ";
        $this->displayBlock('content2', $context, $blocks);
        // line 103
        echo "        ";
        
        $__internal_fc2e9952f2bff0bff98e869e97b294991537242b464dd042a3dd64c51dc737a6->leave($__internal_fc2e9952f2bff0bff98e869e97b294991537242b464dd042a3dd64c51dc737a6_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_e4271e9de535997e22528b7f26240fc8487315de6fcb809f68f329255031d68a = $this->env->getExtension("native_profiler");
        $__internal_e4271e9de535997e22528b7f26240fc8487315de6fcb809f68f329255031d68a->enter($__internal_e4271e9de535997e22528b7f26240fc8487315de6fcb809f68f329255031d68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
                                <li class=\"dropdown user user-menu\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                        <i class=\"glyphicon glyphicon-user\"></i>
                                        <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "Nombre"), "method"), "html", null, true);
        echo "<i class=\"caret\"></i></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <!-- User image -->
                                        <li class=\"user-header bg-light-blue\">
                                             <p> EMPLEADO
                                                <small> 
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
        // line 64
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
        
        $__internal_e4271e9de535997e22528b7f26240fc8487315de6fcb809f68f329255031d68a->leave($__internal_e4271e9de535997e22528b7f26240fc8487315de6fcb809f68f329255031d68a_prof);

    }

    // line 74
    public function block_content2($context, array $blocks = array())
    {
        $__internal_b6dda3db157dc438ce7787f0746c3f1e1dea650df047b219fa587d679ef8d178 = $this->env->getExtension("native_profiler");
        $__internal_b6dda3db157dc438ce7787f0746c3f1e1dea650df047b219fa587d679ef8d178->enter($__internal_b6dda3db157dc438ce7787f0746c3f1e1dea650df047b219fa587d679ef8d178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        // line 75
        echo "                <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                    <!-- Left side column. contains the logo and sidebar -->
                    ";
        // line 77
        $this->displayBlock('asideLeft', $context, $blocks);
        // line 88
        echo "                    ";
        $this->displayBlock('asideRight', $context, $blocks);
        // line 101
        echo "                </div><!-- ./wrapper -->
            ";
        
        $__internal_b6dda3db157dc438ce7787f0746c3f1e1dea650df047b219fa587d679ef8d178->leave($__internal_b6dda3db157dc438ce7787f0746c3f1e1dea650df047b219fa587d679ef8d178_prof);

    }

    // line 77
    public function block_asideLeft($context, array $blocks = array())
    {
        $__internal_d0665ae390626c448424adc10018160a605c00a35321b8dab8005411c48f58f8 = $this->env->getExtension("native_profiler");
        $__internal_d0665ae390626c448424adc10018160a605c00a35321b8dab8005411c48f58f8->enter($__internal_d0665ae390626c448424adc10018160a605c00a35321b8dab8005411c48f58f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideLeft"));

        // line 78
        echo "
                        <!-- sidebar: style can be found in sidebar.less -->
                        ";
        // line 80
        $this->displayBlock('section1', $context, $blocks);
        // line 85
        echo "                        <!-- /.sidebar -->

                    ";
        
        $__internal_d0665ae390626c448424adc10018160a605c00a35321b8dab8005411c48f58f8->leave($__internal_d0665ae390626c448424adc10018160a605c00a35321b8dab8005411c48f58f8_prof);

    }

    // line 80
    public function block_section1($context, array $blocks = array())
    {
        $__internal_0b4da4a8bbc8c197db08c905dba9dd6d20f16f07e88a94690afd7d1f5544a2b2 = $this->env->getExtension("native_profiler");
        $__internal_0b4da4a8bbc8c197db08c905dba9dd6d20f16f07e88a94690afd7d1f5544a2b2->enter($__internal_0b4da4a8bbc8c197db08c905dba9dd6d20f16f07e88a94690afd7d1f5544a2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section1"));

        // line 81
        echo "


                        ";
        
        $__internal_0b4da4a8bbc8c197db08c905dba9dd6d20f16f07e88a94690afd7d1f5544a2b2->leave($__internal_0b4da4a8bbc8c197db08c905dba9dd6d20f16f07e88a94690afd7d1f5544a2b2_prof);

    }

    // line 88
    public function block_asideRight($context, array $blocks = array())
    {
        $__internal_b5f256ca488eb7f99a0a5003e1da089c12c67093bffd13043ce3627ed81ac34b = $this->env->getExtension("native_profiler");
        $__internal_b5f256ca488eb7f99a0a5003e1da089c12c67093bffd13043ce3627ed81ac34b->enter($__internal_b5f256ca488eb7f99a0a5003e1da089c12c67093bffd13043ce3627ed81ac34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "asideRight"));

        // line 89
        echo "                        <!-- Right side column. Contains the navbar and content of the page -->
                       
                            <!-- Content Header (Page header) -->
                            ";
        // line 92
        $this->displayBlock('section2', $context, $blocks);
        // line 95
        echo "                            ";
        $this->displayBlock('section3', $context, $blocks);
        // line 98
        echo "                       
                        <!-- /.right-side -->
                    ";
        
        $__internal_b5f256ca488eb7f99a0a5003e1da089c12c67093bffd13043ce3627ed81ac34b->leave($__internal_b5f256ca488eb7f99a0a5003e1da089c12c67093bffd13043ce3627ed81ac34b_prof);

    }

    // line 92
    public function block_section2($context, array $blocks = array())
    {
        $__internal_a1445bc12949860a8bdd3cfed0bc93aacff4aa1b19fbb5fe345ebee7f933994f = $this->env->getExtension("native_profiler");
        $__internal_a1445bc12949860a8bdd3cfed0bc93aacff4aa1b19fbb5fe345ebee7f933994f->enter($__internal_a1445bc12949860a8bdd3cfed0bc93aacff4aa1b19fbb5fe345ebee7f933994f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 93
        echo "
                            ";
        
        $__internal_a1445bc12949860a8bdd3cfed0bc93aacff4aa1b19fbb5fe345ebee7f933994f->leave($__internal_a1445bc12949860a8bdd3cfed0bc93aacff4aa1b19fbb5fe345ebee7f933994f_prof);

    }

    // line 95
    public function block_section3($context, array $blocks = array())
    {
        $__internal_bbe000a9dffa7ac830800cbe4a00c7113bb6ae7ba8f6180e7e0886a5edac44dc = $this->env->getExtension("native_profiler");
        $__internal_bbe000a9dffa7ac830800cbe4a00c7113bb6ae7ba8f6180e7e0886a5edac44dc->enter($__internal_bbe000a9dffa7ac830800cbe4a00c7113bb6ae7ba8f6180e7e0886a5edac44dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 96
        echo "
                            ";
        
        $__internal_bbe000a9dffa7ac830800cbe4a00c7113bb6ae7ba8f6180e7e0886a5edac44dc->leave($__internal_bbe000a9dffa7ac830800cbe4a00c7113bb6ae7ba8f6180e7e0886a5edac44dc_prof);

    }

    // line 104
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_48d71ae85af4240223d481a1bf0699cf862cbf3b8a24ea504ee49b4722579216 = $this->env->getExtension("native_profiler");
        $__internal_48d71ae85af4240223d481a1bf0699cf862cbf3b8a24ea504ee49b4722579216->enter($__internal_48d71ae85af4240223d481a1bf0699cf862cbf3b8a24ea504ee49b4722579216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo "        

            <div class=\"container-fluid\"  id=\"Desarrollo\">
                Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.
            </div>

        ";
        
        $__internal_48d71ae85af4240223d481a1bf0699cf862cbf3b8a24ea504ee49b4722579216->leave($__internal_48d71ae85af4240223d481a1bf0699cf862cbf3b8a24ea504ee49b4722579216_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_90b139edadc29ea2ba9f38ab9533dfdb5751e61546806677364ad339d4536a25 = $this->env->getExtension("native_profiler");
        $__internal_90b139edadc29ea2ba9f38ab9533dfdb5751e61546806677364ad339d4536a25->enter($__internal_90b139edadc29ea2ba9f38ab9533dfdb5751e61546806677364ad339d4536a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
            <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/AdminLTE/app.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery-2.1.3.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jspdf.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/mainconsultas.js"), "html", null, true);
        echo "\"></script>
             <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js\"></script>
        ";
        
        $__internal_90b139edadc29ea2ba9f38ab9533dfdb5751e61546806677364ad339d4536a25->leave($__internal_90b139edadc29ea2ba9f38ab9533dfdb5751e61546806677364ad339d4536a25_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle::Layout_EmpleadosConsultas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 117,  369 => 116,  365 => 115,  361 => 114,  357 => 113,  353 => 112,  345 => 111,  327 => 104,  319 => 96,  313 => 95,  305 => 93,  299 => 92,  290 => 98,  287 => 95,  285 => 92,  280 => 89,  274 => 88,  264 => 81,  258 => 80,  249 => 85,  247 => 80,  243 => 78,  237 => 77,  229 => 101,  226 => 88,  224 => 77,  220 => 75,  214 => 74,  197 => 64,  169 => 39,  149 => 22,  145 => 20,  139 => 19,  132 => 103,  129 => 74,  126 => 19,  120 => 18,  112 => 121,  109 => 111,  106 => 104,  104 => 18,  101 => 17,  95 => 16,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  51 => 4,  45 => 3,  11 => 2,);
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
/*                                 <li class="dropdown user user-menu">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                         <i class="glyphicon glyphicon-user"></i>*/
/*                                         <span>{{app.session.get('Nombre')}}<i class="caret"></i></span>*/
/*                                     </a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <!-- User image -->*/
/*                                         <li class="user-header bg-light-blue">*/
/*                                              <p> EMPLEADO*/
/*                                                 <small> */
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
/* */
/*                         <!-- sidebar: style can be found in sidebar.less -->*/
/*                         {%block section1 %}*/
/* */
/* */
/* */
/*                         {%endblock%}*/
/*                         <!-- /.sidebar -->*/
/* */
/*                     {%endblock%}*/
/*                     {%block asideRight %}*/
/*                         <!-- Right side column. Contains the navbar and content of the page -->*/
/*                        */
/*                             <!-- Content Header (Page header) -->*/
/*                             {%block section2 %}*/
/* */
/*                             {%endblock%}*/
/*                             {%block section3 %}*/
/* */
/*                             {%endblock%}*/
/*                        */
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
/*             <script src="{{asset('bundles/loginfirst/js/mainconsultas.js') }}"></script>*/
/*              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*             <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* {% endblock %}*/
/* */
