<?php

/* LoginfirstBundle:Clientes:indexCliente.html.twig */
class __TwigTemplate_8e07e0619202123d7c92d0fd26391c8913946d2603eda6d1a5334793312c7cdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout_Cliente.html.twig", "LoginfirstBundle:Clientes:indexCliente.html.twig", 2);
        $this->blocks = array(
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::layout_Cliente.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52cef4f53fa262f1243d0b626c72bf24e3b81dce7ed67a272f797ed622e3f16e = $this->env->getExtension("native_profiler");
        $__internal_52cef4f53fa262f1243d0b626c72bf24e3b81dce7ed67a272f797ed622e3f16e->enter($__internal_52cef4f53fa262f1243d0b626c72bf24e3b81dce7ed67a272f797ed622e3f16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Clientes:indexCliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52cef4f53fa262f1243d0b626c72bf24e3b81dce7ed67a272f797ed622e3f16e->leave($__internal_52cef4f53fa262f1243d0b626c72bf24e3b81dce7ed67a272f797ed622e3f16e_prof);

    }

    // line 3
    public function block_section3($context, array $blocks = array())
    {
        $__internal_7392169fc3dd07b47788917063516e49f93836ded11e63622a9f24c2ebc9d943 = $this->env->getExtension("native_profiler");
        $__internal_7392169fc3dd07b47788917063516e49f93836ded11e63622a9f24c2ebc9d943->enter($__internal_7392169fc3dd07b47788917063516e49f93836ded11e63622a9f24c2ebc9d943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 4
        echo "    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">BIENVENIDOS AL SISTEMA DE INGRESO DE REQUERIMIENTOS</h3>                                    
                    </div><!-- /.box-header -->
                    <div class=\"box-body table-responsive\">
                        <div class=\"imagenIndex\">
                            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/Imagenes/ControlT/Clientes.jpg"), "html", null, true);
        echo "\" alt=\"!\"  />
                        </div> 
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
";
        
        $__internal_7392169fc3dd07b47788917063516e49f93836ded11e63622a9f24c2ebc9d943->leave($__internal_7392169fc3dd07b47788917063516e49f93836ded11e63622a9f24c2ebc9d943_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Clientes:indexCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::layout_Cliente.html.twig' %}*/
/* {%block section3 %}*/
/*     <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <div class="box">*/
/*                     <div class="box-header">*/
/*                         <h3 class="box-title">BIENVENIDOS AL SISTEMA DE INGRESO DE REQUERIMIENTOS</h3>                                    */
/*                     </div><!-- /.box-header -->*/
/*                     <div class="box-body table-responsive">*/
/*                         <div class="imagenIndex">*/
/*                             <img src="{{asset('bundles/loginfirst/Imagenes/ControlT/Clientes.jpg')}}" alt="!"  />*/
/*                         </div> */
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/*             </div>*/
/*         </div>*/
/*     </section><!-- /.content -->*/
/* {% endblock %}*/
/* */
