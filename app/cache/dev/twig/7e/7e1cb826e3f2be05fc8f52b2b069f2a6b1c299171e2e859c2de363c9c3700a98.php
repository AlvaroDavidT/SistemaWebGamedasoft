<?php

/* LoginfirstBundle:Admin:ConsultaDatos.html.twig */
class __TwigTemplate_a363cd8d4a511ad9d7053cf4bf8133131b64f5818bc269d5995d12f1d6b190c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout_Admin.html.twig", "LoginfirstBundle:Admin:ConsultaDatos.html.twig", 2);
        $this->blocks = array(
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::layout_Admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e0f800abc8c24d66d9ada9baaebc4a0e5b8862e7a0e2be2fd18ffe95f322289 = $this->env->getExtension("native_profiler");
        $__internal_1e0f800abc8c24d66d9ada9baaebc4a0e5b8862e7a0e2be2fd18ffe95f322289->enter($__internal_1e0f800abc8c24d66d9ada9baaebc4a0e5b8862e7a0e2be2fd18ffe95f322289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:ConsultaDatos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e0f800abc8c24d66d9ada9baaebc4a0e5b8862e7a0e2be2fd18ffe95f322289->leave($__internal_1e0f800abc8c24d66d9ada9baaebc4a0e5b8862e7a0e2be2fd18ffe95f322289_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_0746e6f89d82e8c00aa64032ce66c01c174a7314aa0e36b8b0c56877a6205cad = $this->env->getExtension("native_profiler");
        $__internal_0746e6f89d82e8c00aa64032ce66c01c174a7314aa0e36b8b0c56877a6205cad->enter($__internal_0746e6f89d82e8c00aa64032ce66c01c174a7314aa0e36b8b0c56877a6205cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 4
        echo "   
";
        
        $__internal_0746e6f89d82e8c00aa64032ce66c01c174a7314aa0e36b8b0c56877a6205cad->leave($__internal_0746e6f89d82e8c00aa64032ce66c01c174a7314aa0e36b8b0c56877a6205cad_prof);

    }

    // line 6
    public function block_section3($context, array $blocks = array())
    {
        $__internal_27872c1429687e3f86d5ec7af0c45e44ec0e2c0906f6d2f8d4e773581ccc8285 = $this->env->getExtension("native_profiler");
        $__internal_27872c1429687e3f86d5ec7af0c45e44ec0e2c0906f6d2f8d4e773581ccc8285->enter($__internal_27872c1429687e3f86d5ec7af0c45e44ec0e2c0906f6d2f8d4e773581ccc8285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        
        $__internal_27872c1429687e3f86d5ec7af0c45e44ec0e2c0906f6d2f8d4e773581ccc8285->leave($__internal_27872c1429687e3f86d5ec7af0c45e44ec0e2c0906f6d2f8d4e773581ccc8285_prof);

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
/* {% extends 'LoginfirstBundle::layout_Admin.html.twig' %}*/
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
