<?php

/* LoginfirstBundle:Admin:indexAdmin.html.twig */
class __TwigTemplate_16c455f492d9294cdf5e90782e2d381c534406217065585141f6a5fbeed7d047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Admin.html.twig", "LoginfirstBundle:Admin:indexAdmin.html.twig", 2);
        $this->blocks = array(
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::Layout_Admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a18ed334f995734bf3c98b38e93072b93fe45b84ce3bfec6926cc50c254e05a2 = $this->env->getExtension("native_profiler");
        $__internal_a18ed334f995734bf3c98b38e93072b93fe45b84ce3bfec6926cc50c254e05a2->enter($__internal_a18ed334f995734bf3c98b38e93072b93fe45b84ce3bfec6926cc50c254e05a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a18ed334f995734bf3c98b38e93072b93fe45b84ce3bfec6926cc50c254e05a2->leave($__internal_a18ed334f995734bf3c98b38e93072b93fe45b84ce3bfec6926cc50c254e05a2_prof);

    }

    // line 7
    public function block_section3($context, array $blocks = array())
    {
        $__internal_f4c9d68a53756f9fa8cd2598b5a75cad5f81bf32001c6639e1e061029421d617 = $this->env->getExtension("native_profiler");
        $__internal_f4c9d68a53756f9fa8cd2598b5a75cad5f81bf32001c6639e1e061029421d617->enter($__internal_f4c9d68a53756f9fa8cd2598b5a75cad5f81bf32001c6639e1e061029421d617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 8
        echo "
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">ADMINISTRADOR DEL SISTEMA</h3>                                    
                    </div><!-- /.box-header -->
                    <div class=\"box-body table-responsive\">
                        <div class=\"imagenIndex\">
                            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/ControlT/Admin.jpg"), "html", null, true);
        echo "\" alt=\"!\"  />
                        </div> 
                    </div><!-- /.box-body -->
                </div><!-- /.box -->


            </div>
        </div>

    </section><!-- /.content -->




";
        
        $__internal_f4c9d68a53756f9fa8cd2598b5a75cad5f81bf32001c6639e1e061029421d617->leave($__internal_f4c9d68a53756f9fa8cd2598b5a75cad5f81bf32001c6639e1e061029421d617_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Admin:indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 18,  40 => 8,  34 => 7,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Admin.html.twig' %}*/
/* */
/* */
/* */
/* */
/* {%block section3 %}*/
/* */
/*     <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <div class="box">*/
/*                     <div class="box-header">*/
/*                         <h3 class="box-title">ADMINISTRADOR DEL SISTEMA</h3>                                    */
/*                     </div><!-- /.box-header -->*/
/*                     <div class="box-body table-responsive">*/
/*                         <div class="imagenIndex">*/
/*                             <img src="{{asset('bundles/loginfirst/Imagenes/ControlT/Admin.jpg')}}" alt="!"  />*/
/*                         </div> */
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/* */
/* */
/*             </div>*/
/*         </div>*/
/* */
/*     </section><!-- /.content -->*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
