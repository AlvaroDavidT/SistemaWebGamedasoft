<?php

/* LoginfirstBundle::Layout_Login.html.twig */
class __TwigTemplate_8a3d027f77d794aef7d26abbd9c18c273cb31c2ae9c958c82abb7b9eb55ae67d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "LoginfirstBundle::Layout_Login.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_45d1f55bf1f5f856b6e93ec0e9d95384106b7ac507e0eec823e0f177326d1d05 = $this->env->getExtension("native_profiler");
        $__internal_45d1f55bf1f5f856b6e93ec0e9d95384106b7ac507e0eec823e0f177326d1d05->enter($__internal_45d1f55bf1f5f856b6e93ec0e9d95384106b7ac507e0eec823e0f177326d1d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle::Layout_Login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45d1f55bf1f5f856b6e93ec0e9d95384106b7ac507e0eec823e0f177326d1d05->leave($__internal_45d1f55bf1f5f856b6e93ec0e9d95384106b7ac507e0eec823e0f177326d1d05_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_889c3dbec779b0985eacf4d4fe848f6ee8b041d667b66a5c73cbf93e58260079 = $this->env->getExtension("native_profiler");
        $__internal_889c3dbec779b0985eacf4d4fe848f6ee8b041d667b66a5c73cbf93e58260079->enter($__internal_889c3dbec779b0985eacf4d4fe848f6ee8b041d667b66a5c73cbf93e58260079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>  
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/bootstrap-social.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/docs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/AdminLTE.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/css/index.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
           
";
        
        $__internal_889c3dbec779b0985eacf4d4fe848f6ee8b041d667b66a5c73cbf93e58260079->leave($__internal_889c3dbec779b0985eacf4d4fe848f6ee8b041d667b66a5c73cbf93e58260079_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_97aeac3c34152b9d4b2b289ab8e52e13bbf6a5eedb4e3b2d1ba7dd1708b1c6f5 = $this->env->getExtension("native_profiler");
        $__internal_97aeac3c34152b9d4b2b289ab8e52e13bbf6a5eedb4e3b2d1ba7dd1708b1c6f5->enter($__internal_97aeac3c34152b9d4b2b289ab8e52e13bbf6a5eedb4e3b2d1ba7dd1708b1c6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <body class=\"skin-black\">
        ";
        // line 19
        $this->displayBlock('content1', $context, $blocks);
        // line 49
        echo "    </body>
";
        
        $__internal_97aeac3c34152b9d4b2b289ab8e52e13bbf6a5eedb4e3b2d1ba7dd1708b1c6f5->leave($__internal_97aeac3c34152b9d4b2b289ab8e52e13bbf6a5eedb4e3b2d1ba7dd1708b1c6f5_prof);

    }

    // line 19
    public function block_content1($context, array $blocks = array())
    {
        $__internal_a0cf0ce93c7479b1808a6c9cdd4eadf4457588f5032ee3056b4b24ca14e75887 = $this->env->getExtension("native_profiler");
        $__internal_a0cf0ce93c7479b1808a6c9cdd4eadf4457588f5032ee3056b4b24ca14e75887->enter($__internal_a0cf0ce93c7479b1808a6c9cdd4eadf4457588f5032ee3056b4b24ca14e75887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

        // line 20
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 23
        echo "            ";
        $this->displayBlock('content2', $context, $blocks);
        // line 26
        echo "            ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 33
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "        ";
        
        $__internal_a0cf0ce93c7479b1808a6c9cdd4eadf4457588f5032ee3056b4b24ca14e75887->leave($__internal_a0cf0ce93c7479b1808a6c9cdd4eadf4457588f5032ee3056b4b24ca14e75887_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_8402e1a293dd89189451d99a12d3aedddb20bb2ab9fbcb136baf31bbc333b4de = $this->env->getExtension("native_profiler");
        $__internal_8402e1a293dd89189451d99a12d3aedddb20bb2ab9fbcb136baf31bbc333b4de->enter($__internal_8402e1a293dd89189451d99a12d3aedddb20bb2ab9fbcb136baf31bbc333b4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "
            ";
        
        $__internal_8402e1a293dd89189451d99a12d3aedddb20bb2ab9fbcb136baf31bbc333b4de->leave($__internal_8402e1a293dd89189451d99a12d3aedddb20bb2ab9fbcb136baf31bbc333b4de_prof);

    }

    // line 23
    public function block_content2($context, array $blocks = array())
    {
        $__internal_24e299adfa86b5c709488427745e7d078f2840a1d817a2a3cdf5ceeaf0d88265 = $this->env->getExtension("native_profiler");
        $__internal_24e299adfa86b5c709488427745e7d078f2840a1d817a2a3cdf5ceeaf0d88265->enter($__internal_24e299adfa86b5c709488427745e7d078f2840a1d817a2a3cdf5ceeaf0d88265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        // line 24
        echo "
            ";
        
        $__internal_24e299adfa86b5c709488427745e7d078f2840a1d817a2a3cdf5ceeaf0d88265->leave($__internal_24e299adfa86b5c709488427745e7d078f2840a1d817a2a3cdf5ceeaf0d88265_prof);

    }

    // line 26
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_db3cc28ab5b96e8783a4ff6068406c7d08a02a5200f0ee55e794db40e783b323 = $this->env->getExtension("native_profiler");
        $__internal_db3cc28ab5b96e8783a4ff6068406c7d08a02a5200f0ee55e794db40e783b323->enter($__internal_db3cc28ab5b96e8783a4ff6068406c7d08a02a5200f0ee55e794db40e783b323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo "        
                <nav class=\"navbar navbar-inverse navbar-fixed-bottom\">
                    <div class=\"container-fluid\"  id=\"Desarrollo\">
                        Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.
                    </div>
                </nav>
            ";
        
        $__internal_db3cc28ab5b96e8783a4ff6068406c7d08a02a5200f0ee55e794db40e783b323->leave($__internal_db3cc28ab5b96e8783a4ff6068406c7d08a02a5200f0ee55e794db40e783b323_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f38d9c3f2d5fd03164ae6b1176915e93def2069abf2b4c83ba7831fd0275835 = $this->env->getExtension("native_profiler");
        $__internal_1f38d9c3f2d5fd03164ae6b1176915e93def2069abf2b4c83ba7831fd0275835->enter($__internal_1f38d9c3f2d5fd03164ae6b1176915e93def2069abf2b4c83ba7831fd0275835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
                <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery-ui-1.10.3.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
                <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/jqueryKnob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/AdminLTE/app.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/AdminLTE/dashboard.js"), "html", null, true);
        echo "\"></script>
            ";
        
        $__internal_1f38d9c3f2d5fd03164ae6b1176915e93def2069abf2b4c83ba7831fd0275835->leave($__internal_1f38d9c3f2d5fd03164ae6b1176915e93def2069abf2b4c83ba7831fd0275835_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle::Layout_Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 46,  233 => 45,  229 => 44,  225 => 43,  221 => 42,  217 => 41,  213 => 40,  209 => 39,  205 => 38,  200 => 36,  196 => 35,  187 => 33,  169 => 26,  161 => 24,  155 => 23,  147 => 21,  141 => 20,  134 => 48,  131 => 33,  128 => 26,  125 => 23,  122 => 20,  116 => 19,  108 => 49,  106 => 19,  103 => 18,  97 => 17,  87 => 14,  83 => 13,  79 => 12,  75 => 11,  71 => 10,  67 => 9,  63 => 8,  59 => 7,  55 => 6,  51 => 5,  46 => 4,  40 => 3,  11 => 2,);
    }
}
/* {# src/Login/firstBundle/Resources/views/Layout_RegistroTiempos.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <link href="{{asset('bundles/loginfirst/css/bootstrap.min.css')}}" rel="stylesheet"/>  */
/*     <link href="{{asset('bundles/loginfirst/css/bootstrap-social.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/bootstrap.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/docs.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/font-awesome.min.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/morris/morris.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/fullcalendar/fullcalendar.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/AdminLTE.css')}}" rel="stylesheet"/>*/
/*     <link href="{{asset('bundles/loginfirst/css/index.css')}}" rel="stylesheet"/>*/
/*            */
/* {% endblock %}*/
/* {% block body %}*/
/*     <body class="skin-black">*/
/*         {% block content1 %}*/
/*             {% block header %}*/
/* */
/*             {% endblock%}*/
/*             {% block content2 %}*/
/* */
/*             {% endblock %}*/
/*             {% block Footer %}        */
/*                 <nav class="navbar navbar-inverse navbar-fixed-bottom">*/
/*                     <div class="container-fluid"  id="Desarrollo">*/
/*                         Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.*/
/*                     </div>*/
/*                 </nav>*/
/*             {% endblock%}*/
/*             {% block javascripts %} */
/*                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>*/
/*                 <script src="{{asset('bundles/loginfirst/js/jquery-ui-1.10.3.js') }}"></script>*/
/*                 <script src="{{asset('bundles/loginfirst/js/bootstrap.min.js') }}"></script>*/
/*                 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>*/
/*                 <script src="{{asset('bundles/loginfirst/js/plugins/morris/morris.min.js') }}"></script>*/
/*                 <script src="{{asset('bundles/loginfirst/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>*/
/*                 <script src="{{asset('bundles/loginfirst/js/plugins/fullcalendar/fullcalendar.min.js') }}"></script>*/
/*                 <script src="{{asset('bundles/loginfirst/js/plugins/jqueryKnob/jquery.knob.js') }}"></script>*/
/*                 <script src="{{asset('bundles/loginfirst/js/plugins/daterangepicker/daterangepicker.js') }}"></script>*/
/*                 <script src="{{asset('bundles/loginfirst/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>*/
/*                 <script src="{{asset('bundles/loginfirst/js/plugins/iCheck/icheck.min.js') }}"></script>*/
/*                 <script src="{{asset('bundles/loginfirst/js/AdminLTE/app.js') }}"></script>*/
/*                 <script src="{{asset('bundles/loginfirst/js/AdminLTE/dashboard.js') }}"></script>*/
/*             {% endblock %}*/
/*         {% endblock %}*/
/*     </body>*/
/* {% endblock %}*/
/* */
