<?php

/* LoginfirstBundle::Layout_Login.html.twig */
class __TwigTemplate_cab7880be85817b11d862c18d15dae8858b17a6f270b822cc93972b31a41c92a extends Twig_Template
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
        $__internal_272a2e7a8b8e4bb876123e14c853108439e2d46c9dabd97e86d73c1caf0a341b = $this->env->getExtension("native_profiler");
        $__internal_272a2e7a8b8e4bb876123e14c853108439e2d46c9dabd97e86d73c1caf0a341b->enter($__internal_272a2e7a8b8e4bb876123e14c853108439e2d46c9dabd97e86d73c1caf0a341b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle::Layout_Login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_272a2e7a8b8e4bb876123e14c853108439e2d46c9dabd97e86d73c1caf0a341b->leave($__internal_272a2e7a8b8e4bb876123e14c853108439e2d46c9dabd97e86d73c1caf0a341b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1debaadf3eeb8857ff2ffa25432834fc9275047df1980ead2ec8754d21894828 = $this->env->getExtension("native_profiler");
        $__internal_1debaadf3eeb8857ff2ffa25432834fc9275047df1980ead2ec8754d21894828->enter($__internal_1debaadf3eeb8857ff2ffa25432834fc9275047df1980ead2ec8754d21894828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1debaadf3eeb8857ff2ffa25432834fc9275047df1980ead2ec8754d21894828->leave($__internal_1debaadf3eeb8857ff2ffa25432834fc9275047df1980ead2ec8754d21894828_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_0da130e076523f62ca27f91f0e827f944a3bc2198d9325626f2cda82f7ba6ec2 = $this->env->getExtension("native_profiler");
        $__internal_0da130e076523f62ca27f91f0e827f944a3bc2198d9325626f2cda82f7ba6ec2->enter($__internal_0da130e076523f62ca27f91f0e827f944a3bc2198d9325626f2cda82f7ba6ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <body class=\"skin-black\">
        ";
        // line 19
        $this->displayBlock('content1', $context, $blocks);
        // line 49
        echo "    </body>
";
        
        $__internal_0da130e076523f62ca27f91f0e827f944a3bc2198d9325626f2cda82f7ba6ec2->leave($__internal_0da130e076523f62ca27f91f0e827f944a3bc2198d9325626f2cda82f7ba6ec2_prof);

    }

    // line 19
    public function block_content1($context, array $blocks = array())
    {
        $__internal_5f5843e7a29f01ae05edef1c014e301f646799b60be7dd1a1553a42682f67122 = $this->env->getExtension("native_profiler");
        $__internal_5f5843e7a29f01ae05edef1c014e301f646799b60be7dd1a1553a42682f67122->enter($__internal_5f5843e7a29f01ae05edef1c014e301f646799b60be7dd1a1553a42682f67122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content1"));

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
        
        $__internal_5f5843e7a29f01ae05edef1c014e301f646799b60be7dd1a1553a42682f67122->leave($__internal_5f5843e7a29f01ae05edef1c014e301f646799b60be7dd1a1553a42682f67122_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_72bb421acdae5dad6f23fdb96cf709295c62be4842091a04107421cd7b4e1f25 = $this->env->getExtension("native_profiler");
        $__internal_72bb421acdae5dad6f23fdb96cf709295c62be4842091a04107421cd7b4e1f25->enter($__internal_72bb421acdae5dad6f23fdb96cf709295c62be4842091a04107421cd7b4e1f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "
            ";
        
        $__internal_72bb421acdae5dad6f23fdb96cf709295c62be4842091a04107421cd7b4e1f25->leave($__internal_72bb421acdae5dad6f23fdb96cf709295c62be4842091a04107421cd7b4e1f25_prof);

    }

    // line 23
    public function block_content2($context, array $blocks = array())
    {
        $__internal_c0c8bc9f0ac8cb0258449ac9bec0058e9e6e128238ce6952d3d4cefb66b7450a = $this->env->getExtension("native_profiler");
        $__internal_c0c8bc9f0ac8cb0258449ac9bec0058e9e6e128238ce6952d3d4cefb66b7450a->enter($__internal_c0c8bc9f0ac8cb0258449ac9bec0058e9e6e128238ce6952d3d4cefb66b7450a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content2"));

        // line 24
        echo "
            ";
        
        $__internal_c0c8bc9f0ac8cb0258449ac9bec0058e9e6e128238ce6952d3d4cefb66b7450a->leave($__internal_c0c8bc9f0ac8cb0258449ac9bec0058e9e6e128238ce6952d3d4cefb66b7450a_prof);

    }

    // line 26
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_7f1d117e994d667fbc52b1de479487f0fa490765a2e9b06bd37e937e5495b879 = $this->env->getExtension("native_profiler");
        $__internal_7f1d117e994d667fbc52b1de479487f0fa490765a2e9b06bd37e937e5495b879->enter($__internal_7f1d117e994d667fbc52b1de479487f0fa490765a2e9b06bd37e937e5495b879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo "        
                <nav class=\"navbar navbar-inverse navbar-fixed-bottom\">
                    <div class=\"container-fluid\"  id=\"Desarrollo\">
                        Desarrollado por Alvaro Tuso G. | Gamedasoft © Todos los Derechos Reservados, 2016.
                    </div>
                </nav>
            ";
        
        $__internal_7f1d117e994d667fbc52b1de479487f0fa490765a2e9b06bd37e937e5495b879->leave($__internal_7f1d117e994d667fbc52b1de479487f0fa490765a2e9b06bd37e937e5495b879_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_702bc094ac48d47b3d9deb9eeb90dc0f8da19202d2f7570422cc9ab1a0892031 = $this->env->getExtension("native_profiler");
        $__internal_702bc094ac48d47b3d9deb9eeb90dc0f8da19202d2f7570422cc9ab1a0892031->enter($__internal_702bc094ac48d47b3d9deb9eeb90dc0f8da19202d2f7570422cc9ab1a0892031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_702bc094ac48d47b3d9deb9eeb90dc0f8da19202d2f7570422cc9ab1a0892031->leave($__internal_702bc094ac48d47b3d9deb9eeb90dc0f8da19202d2f7570422cc9ab1a0892031_prof);

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
