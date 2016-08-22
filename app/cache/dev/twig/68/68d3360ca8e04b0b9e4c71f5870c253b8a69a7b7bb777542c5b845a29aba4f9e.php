<?php

/* LoginfirstBundle:Empleados:indexEmpleado.html.twig */
class __TwigTemplate_143e0a21bd8c4d8f9902fd00de9399a4dda67fa905b8652f54f0dc80b3d805f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Empleado.html.twig", "LoginfirstBundle:Empleados:indexEmpleado.html.twig", 2);
        $this->blocks = array(
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::Layout_Empleado.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26789556e44cd6ae7bd2bc5963d9e70b137bc69e1267fb8c2a6a096b47e546e0 = $this->env->getExtension("native_profiler");
        $__internal_26789556e44cd6ae7bd2bc5963d9e70b137bc69e1267fb8c2a6a096b47e546e0->enter($__internal_26789556e44cd6ae7bd2bc5963d9e70b137bc69e1267fb8c2a6a096b47e546e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Empleados:indexEmpleado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26789556e44cd6ae7bd2bc5963d9e70b137bc69e1267fb8c2a6a096b47e546e0->leave($__internal_26789556e44cd6ae7bd2bc5963d9e70b137bc69e1267fb8c2a6a096b47e546e0_prof);

    }

    // line 4
    public function block_section3($context, array $blocks = array())
    {
        $__internal_6110cb36455627209c7aac1e7d372c87818f7224806356c2979bd68738a62427 = $this->env->getExtension("native_profiler");
        $__internal_6110cb36455627209c7aac1e7d372c87818f7224806356c2979bd68738a62427->enter($__internal_6110cb36455627209c7aac1e7d372c87818f7224806356c2979bd68738a62427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        
        $__internal_6110cb36455627209c7aac1e7d372c87818f7224806356c2979bd68738a62427->leave($__internal_6110cb36455627209c7aac1e7d372c87818f7224806356c2979bd68738a62427_prof);

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
/* {% extends 'LoginfirstBundle::Layout_Empleado.html.twig' %}*/
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
