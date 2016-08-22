<?php

/* LoginfirstBundle:Estaticas:index.html.twig */
class __TwigTemplate_895d00ee1465d924e0e37771fab9d29daaf411adb9a9f72d1399333b6d85e4cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout.html.twig", "LoginfirstBundle:Estaticas:index.html.twig", 2);
        $this->blocks = array(
            'content2' => array($this, 'block_content2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content2($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- Header Carousel -->
    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/slider/slide1.png"), "html", null, true);
        echo "\" alt=\"!\"  />
                <div class=\"carousel-caption\">
                    <h3></h3>
                </div>
            </div>
            <div class=\"item\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/slider/slide2.png"), "html", null, true);
        echo "\" alt=\"!\"  />
                <div class=\"carousel-caption\">
                    <h3></h3>
                </div>
            </div>
            <div class=\"item\">
                <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/slider/slide1.png"), "html", null, true);
        echo "\" alt=\"!\"  />
                <div class=\"carousel-caption\">
                    <h3></h3>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
        </a>
    </div>
    <!--  End Carousel -->
    <!-- Page Content -->
    <div class=\"container\">
        <hr> 
        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <div class=\"row\" >
                    <div class=\" col-sm-12 col-md-1\">                       
                    </div>
                    <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("estatica_QS");
        echo "\">
                        <div class=\" col-sm-12 col-md-3 enlaces\">
                            QUIENES SOMOS<hr>
                            <i class=\"fa fa-users fa-3x\"></i>
                        </div>
                    </a>
                    <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("estatica_MV");
        echo "\">
                        <div class=\" col-sm-12 col-md-3 enlaces\">
                            MISIÓN Y VISIÓN <hr>
                            <i class=\"fa fa-external-link-square fa-3x\"></i>
                        </div>
                    </a>
                    <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("estatica_Productos");
        echo "\">
                        <div class=\" col-sm-12 col-md-3 enlaces\">
                            PRODUCTOS<HR>
                            <i class=\"fa  fa-bar-chart fa-3x\"></i>
                        </div>
                    </a>
                    <div class=\" col-sm-12 col-md-1\">       
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\" col-sm-12 col-md-1\">        
                    </div>
                    <a href=\"\">
                        <div class=\" col-sm-12 col-md-3 enlaces\">
                            COMPROBANTES ELECTRÓNICOS<hr>
                            <i class=\"fa fa-download fa-3x\"></i>
                        </div>
                    </a>
                   <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("Login");
        echo "\">
                        <div class=\" col-sm-12 col-md-3 enlaces\">
                            INGRESO REQUERIMIENTOS <hr>
                            <i class=\"fa fa-pencil-square-o fa-3x\"></i>
                        </div>
                    </a>
                    <a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("Login");
        echo "\">
                        <div class=\" col-sm-12 col-md-3 enlaces\">
                            REGISTRO TIEMPOS
                            <HR>
                            <i class=\"fa fa-clock-o fa-3x\"></i>       
                        </div>
                    </a>   
                      <div class=\" col-sm-12 col-md-1\">   
                    </div>
                </div>
            </div>
        </div> 
    </div>
";
    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Estaticas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 86,  127 => 80,  106 => 62,  97 => 56,  88 => 50,  62 => 27,  53 => 21,  44 => 15,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Estaticas/index.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout.html.twig' %}*/
/* {% block content2 %}*/
/*     <!-- Header Carousel -->*/
/*     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">*/
/*         <!-- Indicators -->*/
/*         <ol class="carousel-indicators">*/
/*             <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/*             <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/*             <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*         </ol>*/
/*         <!-- Wrapper for slides -->*/
/*         <div class="carousel-inner">*/
/*             <div class="item active">*/
/*                 <img src="{{asset('bundles/loginfirst/Imagenes/slider/slide1.png')}}" alt="!"  />*/
/*                 <div class="carousel-caption">*/
/*                     <h3></h3>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="item">*/
/*                 <img src="{{asset('bundles/loginfirst/Imagenes/slider/slide2.png')}}" alt="!"  />*/
/*                 <div class="carousel-caption">*/
/*                     <h3></h3>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="item">*/
/*                 <img src="{{asset('bundles/loginfirst/Imagenes/slider/slide1.png')}}" alt="!"  />*/
/*                 <div class="carousel-caption">*/
/*                     <h3></h3>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- Controls -->*/
/*         <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">*/
/*             <span class="glyphicon glyphicon-chevron-left"></span>*/
/*         </a>*/
/*         <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">*/
/*             <span class="glyphicon glyphicon-chevron-right"></span>*/
/*         </a>*/
/*     </div>*/
/*     <!--  End Carousel -->*/
/*     <!-- Page Content -->*/
/*     <div class="container">*/
/*         <hr> */
/*         <div class="panel panel-default">*/
/*             <div class="panel-body">*/
/*                 <div class="row" >*/
/*                     <div class=" col-sm-12 col-md-1">                       */
/*                     </div>*/
/*                     <a href="{{path('estatica_QS')}}">*/
/*                         <div class=" col-sm-12 col-md-3 enlaces">*/
/*                             QUIENES SOMOS<hr>*/
/*                             <i class="fa fa-users fa-3x"></i>*/
/*                         </div>*/
/*                     </a>*/
/*                     <a href="{{path('estatica_MV')}}">*/
/*                         <div class=" col-sm-12 col-md-3 enlaces">*/
/*                             MISIÓN Y VISIÓN <hr>*/
/*                             <i class="fa fa-external-link-square fa-3x"></i>*/
/*                         </div>*/
/*                     </a>*/
/*                     <a href="{{path('estatica_Productos')}}">*/
/*                         <div class=" col-sm-12 col-md-3 enlaces">*/
/*                             PRODUCTOS<HR>*/
/*                             <i class="fa  fa-bar-chart fa-3x"></i>*/
/*                         </div>*/
/*                     </a>*/
/*                     <div class=" col-sm-12 col-md-1">       */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class=" col-sm-12 col-md-1">        */
/*                     </div>*/
/*                     <a href="">*/
/*                         <div class=" col-sm-12 col-md-3 enlaces">*/
/*                             COMPROBANTES ELECTRÓNICOS<hr>*/
/*                             <i class="fa fa-download fa-3x"></i>*/
/*                         </div>*/
/*                     </a>*/
/*                    <a href="{{path('Login')}}">*/
/*                         <div class=" col-sm-12 col-md-3 enlaces">*/
/*                             INGRESO REQUERIMIENTOS <hr>*/
/*                             <i class="fa fa-pencil-square-o fa-3x"></i>*/
/*                         </div>*/
/*                     </a>*/
/*                     <a href="{{path('Login')}}">*/
/*                         <div class=" col-sm-12 col-md-3 enlaces">*/
/*                             REGISTRO TIEMPOS*/
/*                             <HR>*/
/*                             <i class="fa fa-clock-o fa-3x"></i>       */
/*                         </div>*/
/*                     </a>   */
/*                       <div class=" col-sm-12 col-md-1">   */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div> */
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
