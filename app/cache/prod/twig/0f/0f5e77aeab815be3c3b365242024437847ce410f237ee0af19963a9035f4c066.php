<?php

/* LoginfirstBundle:Admin:indexAdmin.html.twig */
class __TwigTemplate_0e5b9c11b57f289d01fbbdc9376d62cfd53cbffafcc7e0672aefd485ee527642 extends Twig_Template
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
        $__internal_6987ee4aba45b16dfed6b043ac8c5c22aef7512551965d8fee5f6974616bd537 = $this->env->getExtension("native_profiler");
        $__internal_6987ee4aba45b16dfed6b043ac8c5c22aef7512551965d8fee5f6974616bd537->enter($__internal_6987ee4aba45b16dfed6b043ac8c5c22aef7512551965d8fee5f6974616bd537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6987ee4aba45b16dfed6b043ac8c5c22aef7512551965d8fee5f6974616bd537->leave($__internal_6987ee4aba45b16dfed6b043ac8c5c22aef7512551965d8fee5f6974616bd537_prof);

    }

    // line 7
    public function block_section3($context, array $blocks = array())
    {
        $__internal_a05f844980fdf0930745bcb7926a8028031003a91695c3e51921d865e9ea5ec7 = $this->env->getExtension("native_profiler");
        $__internal_a05f844980fdf0930745bcb7926a8028031003a91695c3e51921d865e9ea5ec7->enter($__internal_a05f844980fdf0930745bcb7926a8028031003a91695c3e51921d865e9ea5ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        
        $__internal_a05f844980fdf0930745bcb7926a8028031003a91695c3e51921d865e9ea5ec7->leave($__internal_a05f844980fdf0930745bcb7926a8028031003a91695c3e51921d865e9ea5ec7_prof);

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
