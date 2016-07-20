<?php

/* LoginfirstBundle::Layout.html.twig */
class __TwigTemplate_bacd16b9b8e641a48f8bc38188e2420906dc7e7a87261d60ffebfe4aa18f3b36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "LoginfirstBundle::Layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content1' => array($this, 'block_content1'),
            'header' => array($this, 'block_header'),
            'content2' => array($this, 'block_content2'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <body>
        ";
        // line 5
        $this->displayBlock('content1', $context, $blocks);
        // line 170
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 174
        echo "    </body>
";
    }

    // line 5
    public function block_content1($context, array $blocks = array())
    {
        // line 6
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 90
        echo "            ";
        $this->displayBlock('content2', $context, $blocks);
        // line 92
        echo "            ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 169
        echo "        ";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "                <div class=\"header\">
                    <div class=\"container\">
                        <div id=\"wra-nav\">
                            <div class=\"row\" id=\"toolbar\">
                                <div class=\"col-xs-12 col-md-8\"> <span class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></span><strong> QUITO-ECUADOR AV. COLON Y AMAZONAS EDIFICIO ESPAÑA</strong></div>
                                <div class=\"col-xs-12 col-md-4\"> <span class=\"glyphicon glyphicon-phone-alt\" aria-hidden=\"true\"> (02)-2345904</span> &nbsp; <span class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"> (02)-2345904</span></div>
                            </div>
                            <div class=\"wrapper\">
                                <header>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-8\">
                                            <img id=\"img_logo\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/logo-gameda.png"), "html", null, true);
        echo "\" />
                                        </div>
                                        <div class=\"col-xs-12 col-sm-12 col-md-4\"> 
                                            <div class=\"row\" id=\"social\">
                                                Siguenos en |
                                                <a class=\"btn btn-social-icon btn-twitter\">
                                                    <span class=\"fa fa-twitter\"></span>
                                                </a>                          
                                                <a class=\"btn btn-social-icon btn-facebook\">
                                                    <span class=\"fa fa-facebook\"></span>
                                                </a>
                                                <a class=\"btn btn-social-icon btn-google\">
                                                    <span class=\"fa fa-google\"></span>
                                                </a>
                                                <a class=\"btn btn-social-icon btn-\">
                                                    <span class=\"fa fa-youtube\"></span>
                                                </a>
                                                <a class=\"btn btn-social-icon\">
                                                    <span class=\"fa fa-skype\"></span>
                                                </a>|
                                            </div>
                                            <div class=\"row\">
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
                                                </script>
                                            </div>
                                            <div class=\"col-xs-12 col-sm-12 col-md-2\">
                                            </div>
                                        </div>
                                    </div>
                                </header> 
                            </div>
                            <nav class=\"navbar navbar-default\" id=\"navegacion\">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class=\"navbar-header\">
                                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                </div>
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav navbar-nav\">
                                        <li><a  href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">INICIO</a></li>
                                        <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("estatica_Nosotros");
        echo "\">NOSOTROS</a></li>
                                        <li class=\"dropdown\">
                                            <a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">SERVICIOS EN LINEA<span class=\"caret\"></span></a>
                                            <ul class=\"dropdown-menu\">
                                                <li><a href=\"#\">FACTURACION ELECTRONICA</a></li>
                                                <li role=\"separator\" class=\"divider\"></li>
                                                <li><a href=\"#\">SOLICITUD REQUERIMIENTOS</a></li>
                                                <li role=\"separator\" class=\"divider\"></li>
                                                <li><a href=\"#\">REGISTRO TIEMPOS</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("estatica_Contactos");
        echo "\">CONTACTOS</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            ";
    }

    // line 90
    public function block_content2($context, array $blocks = array())
    {
        // line 91
        echo "            ";
    }

    // line 92
    public function block_Footer($context, array $blocks = array())
    {
        // line 93
        echo "                <div class=\"container-fluid\">
                    <div class=\"row\" id=\"info\">
                        <div class=\"container\">
                            <div class=\"col-xs-12  col-md-4\">
                                <div class=\"row\"  id=\"footerTitle\" >
                                    <div class=\"col-xs-12\">
                                        SÍGUENOS
                                    </div>
                                </div>
                                <div class=\"row\" id=\"footercontent\">
                                    <div class=\"col-xs-12\">
                                        <a class=\"btn btn-social-icon btn-twitter\">
                                            <span class=\"fa fa-twitter\"></span>
                                        </a>                          
                                        <a class=\"btn btn-social-icon btn-facebook\">
                                            <span class=\"fa fa-facebook\"></span>
                                        </a>
                                        <a class=\"btn btn-social-icon btn-google\">
                                            <span class=\"fa fa-google\"></span>
                                        </a>
                                        <a class=\"btn btn-social-icon btn-pinterest\">
                                            <span class=\"fa fa-youtube\"></span>
                                        </a>
                                        <a class=\"btn btn-social-icon btn-vimeo\">
                                            <span class=\"fa fa-skype\"></span>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                            <div class=\"col-xs-12  col-md-4\">
                                <div class=\"row\"  id=\"footerTitle\">
                                    <div class=\"col-xs-12\">
                                        CONTÁCTANOS
                                    </div>
                                </div>
                                <div class=\"row\" id=\"footercontent\">
                                    <div class=\"col-xs-12\">
                                        <span class=\"glyphicon glyphicon-phone-alt\" aria-hidden=\"true\"> (02)-2345904</span>
                                    </div>
                                </div>
                                <div class=\"row\" id=\"footercontent\" >
                                    <div class=\"col-xs-12\">

                                        <span class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"> (02)-2345904</span>
                                    </div>
                                </div>
                                <div class=\"row\" id=\"footercontent\" >
                                    <div class=\"col-xs-12\">
                                        <span class=\"glyphicons glyphicon-envelope\"> </span> &nbsp; info@gamedasoft.com
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-12  col-md-4\">
                                <div class=\"row\" id=\"footerTitle\" >
                                    <div class=\"col-xs-12\">
                                        UBICACIÓN
                                    </div>
                                </div>
                                <div class=\"row\" id=\"footercontent\">
                                    <div class=\"col-xs-12\">
                                        <span class=\"glyphicon glyphicon-home\"> </span>&nbsp; Av. Amazonas N25-23 y Av. Colon Ed. España piso 7 of. 77<br>
                                        QUITO-ECUADOR
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\" id=\"Desarrollo\">
                        <div class=\"container\">
                            <div class=\"col-xs-12\">
                                Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.
                            </div>
                        </div>
                    </div>
                </div>
            ";
    }

    // line 170
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
            <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "LoginfirstBundle::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 172,  260 => 171,  255 => 170,  176 => 93,  173 => 92,  169 => 91,  166 => 90,  154 => 82,  140 => 71,  136 => 70,  81 => 18,  68 => 7,  65 => 6,  61 => 169,  58 => 92,  55 => 90,  52 => 6,  49 => 5,  44 => 174,  41 => 170,  39 => 5,  36 => 4,  33 => 3,  11 => 2,);
    }
}
/* {# src/Login/firstBundle/Resources/views/layout.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {%block body %}*/
/*     <body>*/
/*         {%block content1 %}*/
/*             {% block header %}*/
/*                 <div class="header">*/
/*                     <div class="container">*/
/*                         <div id="wra-nav">*/
/*                             <div class="row" id="toolbar">*/
/*                                 <div class="col-xs-12 col-md-8"> <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><strong> QUITO-ECUADOR AV. COLON Y AMAZONAS EDIFICIO ESPAÑA</strong></div>*/
/*                                 <div class="col-xs-12 col-md-4"> <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"> (02)-2345904</span> &nbsp; <span class="glyphicon glyphicon-earphone" aria-hidden="true"> (02)-2345904</span></div>*/
/*                             </div>*/
/*                             <div class="wrapper">*/
/*                                 <header>*/
/*                                     <div class="row">*/
/*                                         <div class="col-xs-12 col-sm-12 col-md-8">*/
/*                                             <img id="img_logo" src="{{asset('bundles/loginfirst/Imagenes/logo-gameda.png')}}" />*/
/*                                         </div>*/
/*                                         <div class="col-xs-12 col-sm-12 col-md-4"> */
/*                                             <div class="row" id="social">*/
/*                                                 Siguenos en |*/
/*                                                 <a class="btn btn-social-icon btn-twitter">*/
/*                                                     <span class="fa fa-twitter"></span>*/
/*                                                 </a>                          */
/*                                                 <a class="btn btn-social-icon btn-facebook">*/
/*                                                     <span class="fa fa-facebook"></span>*/
/*                                                 </a>*/
/*                                                 <a class="btn btn-social-icon btn-google">*/
/*                                                     <span class="fa fa-google"></span>*/
/*                                                 </a>*/
/*                                                 <a class="btn btn-social-icon btn-">*/
/*                                                     <span class="fa fa-youtube"></span>*/
/*                                                 </a>*/
/*                                                 <a class="btn btn-social-icon">*/
/*                                                     <span class="fa fa-skype"></span>*/
/*                                                 </a>|*/
/*                                             </div>*/
/*                                             <div class="row">*/
/*                                                 <script>*/
/*                                                     var f = new Date();*/
/*                                                     var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");*/
/*                                                     var dias = new Array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");*/
/*                                                     document.write('<div class="mifecha">' + "Quito, ");*/
/*                                                     document.write(dias[f.getDay()] + " ");*/
/*                                                     document.write(f.getDate() + " ");*/
/*                                                     document.write(meses[f.getMonth()] + " ");*/
/*                                                     document.write(f.getFullYear());*/
/*                                                     document.write('</div>');*/
/*                                                 </script>*/
/*                                             </div>*/
/*                                             <div class="col-xs-12 col-sm-12 col-md-2">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </header> */
/*                             </div>*/
/*                             <nav class="navbar navbar-default" id="navegacion">*/
/*                                 <!-- Brand and toggle get grouped for better mobile display -->*/
/*                                 <div class="navbar-header">*/
/*                                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                                         <span class="sr-only">Toggle navigation</span>*/
/*                                         <span class="icon-bar"></span>*/
/*                                         <span class="icon-bar"></span>*/
/*                                         <span class="icon-bar"></span>*/
/*                                     </button>*/
/*                                 </div>*/
/*                                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                                     <ul class="nav navbar-nav">*/
/*                                         <li><a  href="{{path('homepage')}}">INICIO</a></li>*/
/*                                         <li><a href="{{path('estatica_Nosotros')}}">NOSOTROS</a></li>*/
/*                                         <li class="dropdown">*/
/*                                             <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICIOS EN LINEA<span class="caret"></span></a>*/
/*                                             <ul class="dropdown-menu">*/
/*                                                 <li><a href="#">FACTURACION ELECTRONICA</a></li>*/
/*                                                 <li role="separator" class="divider"></li>*/
/*                                                 <li><a href="#">SOLICITUD REQUERIMIENTOS</a></li>*/
/*                                                 <li role="separator" class="divider"></li>*/
/*                                                 <li><a href="#">REGISTRO TIEMPOS</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li><a href="{{path('estatica_Contactos')}}">CONTACTOS</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </nav>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock %}*/
/*             {%block content2 %}*/
/*             {% endblock %}*/
/*             {% block Footer %}*/
/*                 <div class="container-fluid">*/
/*                     <div class="row" id="info">*/
/*                         <div class="container">*/
/*                             <div class="col-xs-12  col-md-4">*/
/*                                 <div class="row"  id="footerTitle" >*/
/*                                     <div class="col-xs-12">*/
/*                                         SÍGUENOS*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row" id="footercontent">*/
/*                                     <div class="col-xs-12">*/
/*                                         <a class="btn btn-social-icon btn-twitter">*/
/*                                             <span class="fa fa-twitter"></span>*/
/*                                         </a>                          */
/*                                         <a class="btn btn-social-icon btn-facebook">*/
/*                                             <span class="fa fa-facebook"></span>*/
/*                                         </a>*/
/*                                         <a class="btn btn-social-icon btn-google">*/
/*                                             <span class="fa fa-google"></span>*/
/*                                         </a>*/
/*                                         <a class="btn btn-social-icon btn-pinterest">*/
/*                                             <span class="fa fa-youtube"></span>*/
/*                                         </a>*/
/*                                         <a class="btn btn-social-icon btn-vimeo">*/
/*                                             <span class="fa fa-skype"></span>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div> */
/*                             <div class="col-xs-12  col-md-4">*/
/*                                 <div class="row"  id="footerTitle">*/
/*                                     <div class="col-xs-12">*/
/*                                         CONTÁCTANOS*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row" id="footercontent">*/
/*                                     <div class="col-xs-12">*/
/*                                         <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"> (02)-2345904</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row" id="footercontent" >*/
/*                                     <div class="col-xs-12">*/
/* */
/*                                         <span class="glyphicon glyphicon-earphone" aria-hidden="true"> (02)-2345904</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row" id="footercontent" >*/
/*                                     <div class="col-xs-12">*/
/*                                         <span class="glyphicons glyphicon-envelope"> </span> &nbsp; info@gamedasoft.com*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-xs-12  col-md-4">*/
/*                                 <div class="row" id="footerTitle" >*/
/*                                     <div class="col-xs-12">*/
/*                                         UBICACIÓN*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row" id="footercontent">*/
/*                                     <div class="col-xs-12">*/
/*                                         <span class="glyphicon glyphicon-home"> </span>&nbsp; Av. Amazonas N25-23 y Av. Colon Ed. España piso 7 of. 77<br>*/
/*                                         QUITO-ECUADOR*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row" id="Desarrollo">*/
/*                         <div class="container">*/
/*                             <div class="col-xs-12">*/
/*                                 Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock%}*/
/*         {% endblock%}*/
/*         {% block javascripts %} */
/*             <script src="{{asset('bundles/loginfirst/js/bootstrap.min.js') }}"></script>*/
/*             <script src="{{asset('bundles/loginfirst/js/jquery.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* {% endblock %}*/
