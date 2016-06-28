<?php

/* LoginfirstBundle:Empleados:indexEmpleado.html.twig */
class __TwigTemplate_354c257d10bd227f9d97b905227679640b7259ba820b63cff03c0cc20ba2dcdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout_Empleado.html.twig", "LoginfirstBundle:Empleados:indexEmpleado.html.twig", 2);
        $this->blocks = array(
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::layout_Empleado.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_897534b4676e1b700858e0216fb0990ec535a6ec29efb41163e520546ae05875 = $this->env->getExtension("native_profiler");
        $__internal_897534b4676e1b700858e0216fb0990ec535a6ec29efb41163e520546ae05875->enter($__internal_897534b4676e1b700858e0216fb0990ec535a6ec29efb41163e520546ae05875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Empleados:indexEmpleado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_897534b4676e1b700858e0216fb0990ec535a6ec29efb41163e520546ae05875->leave($__internal_897534b4676e1b700858e0216fb0990ec535a6ec29efb41163e520546ae05875_prof);

    }

    // line 4
    public function block_section3($context, array $blocks = array())
    {
        $__internal_27197ede19b9cfe56a261e2116c80b839e2107c43c05968dbcdbd066c70a0212 = $this->env->getExtension("native_profiler");
        $__internal_27197ede19b9cfe56a261e2116c80b839e2107c43c05968dbcdbd066c70a0212->enter($__internal_27197ede19b9cfe56a261e2116c80b839e2107c43c05968dbcdbd066c70a0212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 5
        echo "
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">BIENVENIDOS AL SISTEMA</h3>                                    
                    </div><!-- /.box-header -->
                    <div class=\"box-body table-responsive\">
                        <div class=\"imagenIndex\">
                            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/ControlT/Empleados.jpg"), "html", null, true);
        echo "\" alt=\"!\"  />
                        </div> 
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
";
        
        $__internal_27197ede19b9cfe56a261e2116c80b839e2107c43c05968dbcdbd066c70a0212->leave($__internal_27197ede19b9cfe56a261e2116c80b839e2107c43c05968dbcdbd066c70a0212_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Empleados:indexEmpleado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::layout_Empleado.html.twig' %}*/
/* */
/* {%block section3 %}*/
/* */
/*     <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <div class="box">*/
/*                     <div class="box-header">*/
/*                         <h3 class="box-title">BIENVENIDOS AL SISTEMA</h3>                                    */
/*                     </div><!-- /.box-header -->*/
/*                     <div class="box-body table-responsive">*/
/*                         <div class="imagenIndex">*/
/*                             <img src="{{asset('bundles/loginfirst/Imagenes/ControlT/Empleados.jpg')}}" alt="!"  />*/
/*                         </div> */
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/*             </div>*/
/*         </div>*/
/*     </section><!-- /.content -->*/
/* {% endblock %}*/
/* */
