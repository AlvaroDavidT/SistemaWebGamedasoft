<?php

/* LoginfirstBundle:Clientes:indexClientePruebas.html.twig */
class __TwigTemplate_e134531f34d4e15085c33064563e5c22f711567748ccf8d2057980b66ffb0379 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee204c2d765fd0c6e8fbf923fea8c7cbe113503ab5ffe72cd4c6eb41f45a35b8 = $this->env->getExtension("native_profiler");
        $__internal_ee204c2d765fd0c6e8fbf923fea8c7cbe113503ab5ffe72cd4c6eb41f45a35b8->enter($__internal_ee204c2d765fd0c6e8fbf923fea8c7cbe113503ab5ffe72cd4c6eb41f45a35b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Clientes:indexClientePruebas.html.twig"));

        // line 2
        echo "
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Pruebas de funcionamiento</h3>                                    
                    </div><!-- /.box-header -->
                    <div class=\"box-body table-responsive\">
                        <div class=\"imagenIndex\">
                           ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formClientes"]) ? $context["formClientes"] : $this->getContext($context, "formClientes")), 'form_start');
        echo "
                         ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formClientes"]) ? $context["formClientes"] : $this->getContext($context, "formClientes")), 'form_end');
        echo "
                         
                 
                        </div> 
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
                 <div id=\"abc\" data-path=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("pruebaAjax1");
        echo "\"></div>        
        </div>
    </section><!-- /.content -->
     <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/jquery.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginfirst/js/main.js"), "html", null, true);
        echo "\"></script>

    

";
        
        $__internal_ee204c2d765fd0c6e8fbf923fea8c7cbe113503ab5ffe72cd4c6eb41f45a35b8->leave($__internal_ee204c2d765fd0c6e8fbf923fea8c7cbe113503ab5ffe72cd4c6eb41f45a35b8_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Clientes:indexClientePruebas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  58 => 24,  54 => 23,  48 => 20,  38 => 13,  34 => 12,  22 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* */
/*     <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <div class="box">*/
/*                     <div class="box-header">*/
/*                         <h3 class="box-title">Pruebas de funcionamiento</h3>                                    */
/*                     </div><!-- /.box-header -->*/
/*                     <div class="box-body table-responsive">*/
/*                         <div class="imagenIndex">*/
/*                            {{form_start(formClientes)}}*/
/*                          {{form_end(formClientes)}}*/
/*                          */
/*                  */
/*                         </div> */
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/*             </div>*/
/*                  <div id="abc" data-path="{{path('pruebaAjax1')}}"></div>        */
/*         </div>*/
/*     </section><!-- /.content -->*/
/*      <script src="{{asset('bundles/loginfirst/js/jquery-1.11.3.min.js') }}"></script>*/
/*      <script src="{{asset('bundles/loginfirst/js/jquery.js') }}"></script>*/
/*      <script src="{{asset('bundles/loginfirst/js/main.js') }}"></script>*/
/* */
/*     */
/* */
/* */
