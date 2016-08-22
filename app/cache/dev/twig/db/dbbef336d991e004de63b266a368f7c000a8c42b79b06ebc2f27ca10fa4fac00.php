<?php

/* LoginfirstBundle:Admin:ConsultaDatos.html.twig */
class __TwigTemplate_8b3900567582821db36f2d8b298f7dec105415e35b3318c9ebbce95ecb519454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Admin.html.twig", "LoginfirstBundle:Admin:ConsultaDatos.html.twig", 2);
        $this->blocks = array(
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::Layout_Admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa18f6b3345c1d054c66bc6991e463dc02db4ae7424c7b5d38280cb2e1d9cdb1 = $this->env->getExtension("native_profiler");
        $__internal_aa18f6b3345c1d054c66bc6991e463dc02db4ae7424c7b5d38280cb2e1d9cdb1->enter($__internal_aa18f6b3345c1d054c66bc6991e463dc02db4ae7424c7b5d38280cb2e1d9cdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:ConsultaDatos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa18f6b3345c1d054c66bc6991e463dc02db4ae7424c7b5d38280cb2e1d9cdb1->leave($__internal_aa18f6b3345c1d054c66bc6991e463dc02db4ae7424c7b5d38280cb2e1d9cdb1_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_cdebc8f4345ce75333b807f17cbb1c6fa00fed3f93de4d5615b25b7afb265a4c = $this->env->getExtension("native_profiler");
        $__internal_cdebc8f4345ce75333b807f17cbb1c6fa00fed3f93de4d5615b25b7afb265a4c->enter($__internal_cdebc8f4345ce75333b807f17cbb1c6fa00fed3f93de4d5615b25b7afb265a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 4
        echo "   
";
        
        $__internal_cdebc8f4345ce75333b807f17cbb1c6fa00fed3f93de4d5615b25b7afb265a4c->leave($__internal_cdebc8f4345ce75333b807f17cbb1c6fa00fed3f93de4d5615b25b7afb265a4c_prof);

    }

    // line 6
    public function block_section3($context, array $blocks = array())
    {
        $__internal_6f08bb3130fef43b201e99f502784bd1fc154324be64148b4e69b2273b08cba6 = $this->env->getExtension("native_profiler");
        $__internal_6f08bb3130fef43b201e99f502784bd1fc154324be64148b4e69b2273b08cba6->enter($__internal_6f08bb3130fef43b201e99f502784bd1fc154324be64148b4e69b2273b08cba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 7
        echo "  
         <section class=\"content\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"box\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\">ADMINISTRADORES DEL SISTEMA</h3>                                    
                                </div><!-- /.box-header -->
                                <div class=\"box-body table-responsive\">
                                    <table id=\"example2\" class=\"table table-bordered table-hover\">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>NOMBRE</th>
                                                <th>APELLIDO</th>
                                                <th>CEDULA DE IDENTIDAD</th>
                                                <th>EMAIL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Administradores"]) ? $context["Administradores"] : $this->getContext($context, "Administradores")));
        foreach ($context['_seq'] as $context["_key"] => $context["Admin"]) {
            // line 28
            echo "                                                  <tr>
                                                      <td>  <a href=\"\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["Admin"], "Id", array()), "html", null, true);
            echo "</a></td>
                                                      <td>  <a href=\"\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["Admin"], "Nombre", array()), "html", null, true);
            echo "</a></td>
                                                      <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["Admin"], "Apellido", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["Admin"], "CIdentidad", array()), "html", null, true);
            echo "</td>
                                                      <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["Admin"], "Email", array()), "html", null, true);
            echo "</td>
                                                  </tr>
                                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                           

                           
                        </div>
                    </div>

                </section><!-- /.content -->
              
           
  
";
        
        $__internal_6f08bb3130fef43b201e99f502784bd1fc154324be64148b4e69b2273b08cba6->leave($__internal_6f08bb3130fef43b201e99f502784bd1fc154324be64148b4e69b2273b08cba6_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Admin:ConsultaDatos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 36,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  81 => 28,  77 => 27,  55 => 7,  49 => 6,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Admin.html.twig' %}*/
/* {%block section2 %}*/
/*    */
/* {%endblock%}*/
/* {%block section3 %}*/
/*   */
/*          <section class="content">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-12">*/
/*                             <div class="box">*/
/*                                 <div class="box-header">*/
/*                                     <h3 class="box-title">ADMINISTRADORES DEL SISTEMA</h3>                                    */
/*                                 </div><!-- /.box-header -->*/
/*                                 <div class="box-body table-responsive">*/
/*                                     <table id="example2" class="table table-bordered table-hover">*/
/*                                         <thead>*/
/*                                             <tr>*/
/*                                                 <th>ID</th>*/
/*                                                 <th>NOMBRE</th>*/
/*                                                 <th>APELLIDO</th>*/
/*                                                 <th>CEDULA DE IDENTIDAD</th>*/
/*                                                 <th>EMAIL</th>*/
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                               {% for Admin in Administradores %}*/
/*                                                   <tr>*/
/*                                                       <td>  <a href="">{{ Admin.Id }}</a></td>*/
/*                                                       <td>  <a href="">{{ Admin.Nombre }}</a></td>*/
/*                                                       <td>{{ Admin.Apellido }}</td>*/
/*                                                         <td>{{ Admin.CIdentidad }}</td>*/
/*                                                       <td>{{ Admin.Email }}</td>*/
/*                                                   </tr>*/
/*                                               {% endfor %}*/
/*                                         </tbody>*/
/*                                         <tfoot>*/
/*                                             <tr>*/
/*                                                 <th></th>*/
/*                                                 <th></th>*/
/*                                                 <th></th>*/
/*                                                 <th></th>*/
/*                                                 <th></th>*/
/*                                             </tr>*/
/*                                         </tfoot>*/
/*                                     </table>*/
/*                                 </div><!-- /.box-body -->*/
/*                             </div><!-- /.box -->*/
/*                            */
/* */
/*                            */
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </section><!-- /.content -->*/
/*               */
/*            */
/*   */
/* {% endblock %}*/
/* */
