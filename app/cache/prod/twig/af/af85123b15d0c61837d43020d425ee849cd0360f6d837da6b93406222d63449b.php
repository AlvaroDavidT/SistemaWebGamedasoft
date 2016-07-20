<?php

/* LoginfirstBundle:Empleados:indexEmpleado.html.twig */
class __TwigTemplate_cf045373f973338bc14939a5ad0fcb397f6d242c5fc694a0752aaa2006aa7b14 extends Twig_Template
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
        $__internal_640538d7d4eb7f162617ec10d0acdb4389dc8d83adc110663d6d67fc3d8d89fc = $this->env->getExtension("native_profiler");
        $__internal_640538d7d4eb7f162617ec10d0acdb4389dc8d83adc110663d6d67fc3d8d89fc->enter($__internal_640538d7d4eb7f162617ec10d0acdb4389dc8d83adc110663d6d67fc3d8d89fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Empleados:indexEmpleado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_640538d7d4eb7f162617ec10d0acdb4389dc8d83adc110663d6d67fc3d8d89fc->leave($__internal_640538d7d4eb7f162617ec10d0acdb4389dc8d83adc110663d6d67fc3d8d89fc_prof);

    }

    // line 4
    public function block_section3($context, array $blocks = array())
    {
        $__internal_22e72fdcf89253918b38bf3c7b6ffb522c945949b4f4fc6fd9b5d1408929ee11 = $this->env->getExtension("native_profiler");
        $__internal_22e72fdcf89253918b38bf3c7b6ffb522c945949b4f4fc6fd9b5d1408929ee11->enter($__internal_22e72fdcf89253918b38bf3c7b6ffb522c945949b4f4fc6fd9b5d1408929ee11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        
        $__internal_22e72fdcf89253918b38bf3c7b6ffb522c945949b4f4fc6fd9b5d1408929ee11->leave($__internal_22e72fdcf89253918b38bf3c7b6ffb522c945949b4f4fc6fd9b5d1408929ee11_prof);

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
