<?php

/* LoginfirstBundle:Admin:indexAdmin.html.twig */
class __TwigTemplate_0cc30a9045538ffa0a96525d924444577b176bb0d19f2b7f1b418ea894ba45ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout_Admin.html.twig", "LoginfirstBundle:Admin:indexAdmin.html.twig", 2);
        $this->blocks = array(
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::layout_Admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1902877fcaa94319fd637a1614f1dd271da8a840cce2587e3bb20f72ca987e1 = $this->env->getExtension("native_profiler");
        $__internal_f1902877fcaa94319fd637a1614f1dd271da8a840cce2587e3bb20f72ca987e1->enter($__internal_f1902877fcaa94319fd637a1614f1dd271da8a840cce2587e3bb20f72ca987e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1902877fcaa94319fd637a1614f1dd271da8a840cce2587e3bb20f72ca987e1->leave($__internal_f1902877fcaa94319fd637a1614f1dd271da8a840cce2587e3bb20f72ca987e1_prof);

    }

    // line 7
    public function block_section3($context, array $blocks = array())
    {
        $__internal_df77aaae7b7defea2992030e7d48487143ff6327b83b6023528ed11ae3569948 = $this->env->getExtension("native_profiler");
        $__internal_df77aaae7b7defea2992030e7d48487143ff6327b83b6023528ed11ae3569948->enter($__internal_df77aaae7b7defea2992030e7d48487143ff6327b83b6023528ed11ae3569948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        
        $__internal_df77aaae7b7defea2992030e7d48487143ff6327b83b6023528ed11ae3569948->leave($__internal_df77aaae7b7defea2992030e7d48487143ff6327b83b6023528ed11ae3569948_prof);

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
/* {% extends 'LoginfirstBundle::layout_Admin.html.twig' %}*/
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
