<?php

/* LoginfirstBundle:Clientes:indexCliente.html.twig */
class __TwigTemplate_aa7ee3db1a24128623d3db874d2193cf9076233aa653fb520ee2952fcab25546 extends Twig_Template
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
        $__internal_4c9fc2a78bee47ddbf3322ead081d1001e1dcdd1806d97a0a75d14b49d033800 = $this->env->getExtension("native_profiler");
        $__internal_4c9fc2a78bee47ddbf3322ead081d1001e1dcdd1806d97a0a75d14b49d033800->enter($__internal_4c9fc2a78bee47ddbf3322ead081d1001e1dcdd1806d97a0a75d14b49d033800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Clientes:indexCliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c9fc2a78bee47ddbf3322ead081d1001e1dcdd1806d97a0a75d14b49d033800->leave($__internal_4c9fc2a78bee47ddbf3322ead081d1001e1dcdd1806d97a0a75d14b49d033800_prof);

    }

    // line 3
    public function block_section3($context, array $blocks = array())
    {
        $__internal_6f84f84a0454cc5f66c8ec83fbfaa58ca7998ca7b5dbddbc43c11ba1c78ce6ca = $this->env->getExtension("native_profiler");
        $__internal_6f84f84a0454cc5f66c8ec83fbfaa58ca7998ca7b5dbddbc43c11ba1c78ce6ca->enter($__internal_6f84f84a0454cc5f66c8ec83fbfaa58ca7998ca7b5dbddbc43c11ba1c78ce6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        
        $__internal_6f84f84a0454cc5f66c8ec83fbfaa58ca7998ca7b5dbddbc43c11ba1c78ce6ca->leave($__internal_6f84f84a0454cc5f66c8ec83fbfaa58ca7998ca7b5dbddbc43c11ba1c78ce6ca_prof);

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
