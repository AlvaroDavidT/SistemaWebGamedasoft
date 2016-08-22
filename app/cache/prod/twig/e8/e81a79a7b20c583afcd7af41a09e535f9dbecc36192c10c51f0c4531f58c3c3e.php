<?php

/* LoginfirstBundle:Admin:ConsultaDatos.html.twig */
class __TwigTemplate_c649c080e6e401158f9812bac8ac0772c96e7847f5e6f1e7bf78cc71700bc832 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        // line 4
        echo "   
";
    }

    // line 6
    public function block_section3($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["Administradores"]) ? $context["Administradores"] : null));
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
        return array (  94 => 36,  85 => 33,  81 => 32,  77 => 31,  73 => 30,  69 => 29,  66 => 28,  62 => 27,  40 => 7,  37 => 6,  32 => 4,  29 => 3,  11 => 2,);
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
