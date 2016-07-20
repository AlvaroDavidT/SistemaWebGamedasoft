<?php

/* LoginfirstBundle:Clientes:indexCliente.html.twig */
class __TwigTemplate_9b87981a88005847aed821bcbd459768b5c4f403d6d16fc06f27dbc513e67476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Cliente.html.twig", "LoginfirstBundle:Clientes:indexCliente.html.twig", 2);
        $this->blocks = array(
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::Layout_Cliente.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e5719826ee4780fe537cd3f0ccd0cd9cb2ea6c741f0413ec318fb37c738e503 = $this->env->getExtension("native_profiler");
        $__internal_7e5719826ee4780fe537cd3f0ccd0cd9cb2ea6c741f0413ec318fb37c738e503->enter($__internal_7e5719826ee4780fe537cd3f0ccd0cd9cb2ea6c741f0413ec318fb37c738e503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Clientes:indexCliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e5719826ee4780fe537cd3f0ccd0cd9cb2ea6c741f0413ec318fb37c738e503->leave($__internal_7e5719826ee4780fe537cd3f0ccd0cd9cb2ea6c741f0413ec318fb37c738e503_prof);

    }

    // line 3
    public function block_section3($context, array $blocks = array())
    {
        $__internal_417693181144c1bfdbab8f5344bd3dfd2f7c44c109eb6fd7b892d608f4d0345f = $this->env->getExtension("native_profiler");
        $__internal_417693181144c1bfdbab8f5344bd3dfd2f7c44c109eb6fd7b892d608f4d0345f->enter($__internal_417693181144c1bfdbab8f5344bd3dfd2f7c44c109eb6fd7b892d608f4d0345f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        
        $__internal_417693181144c1bfdbab8f5344bd3dfd2f7c44c109eb6fd7b892d608f4d0345f->leave($__internal_417693181144c1bfdbab8f5344bd3dfd2f7c44c109eb6fd7b892d608f4d0345f_prof);

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
/* {% extends 'LoginfirstBundle::Layout_Cliente.html.twig' %}*/
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
