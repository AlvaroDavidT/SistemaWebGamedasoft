<?php

/* LoginfirstBundle:Clientes:Consultas.html.twig */
class __TwigTemplate_42b77d088d7051bd2385a64a8168d3979e72320385b0bb02b1c000fe13fa1635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Cliente.html.twig", "LoginfirstBundle:Clientes:Consultas.html.twig", 2);
        $this->blocks = array(
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::Layout_Cliente.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section2($context, array $blocks = array())
    {
        // line 5
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Cliente");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Consulta Requerimentos</li>
        </ol>
    </section>
";
    }

    // line 12
    public function block_section3($context, array $blocks = array())
    {
        // line 13
        echo "    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "                    <strong class=\"alert-success\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " Exitosamente!!!!</strong> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                <!-- Trigger the modal with a button -->

             
                       
                          
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class='row'>
                            <div class='col-xs-6 '>Lista de Requerimientos</div><div class='col-xs-6 text-right'><button id=\"DescargarPdf\" type=\"button\" class=\"btn btn-success btn-sm text-right\" ><i class=\"fa fa-print\"></i> Generar Pdf</button></div>
                        </div>
                        <hr>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <div class=\"navigation\">
                                <small><strong> TOTAL DE REQUERIMIENTOS: ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array()), "html", null, true);
        echo "</strong></small>
                            </div>
                            <div id=\"reporte\">
                            <table id=\"example2\" class=\"table table-hover table-condensed\">
                                <thead class='bg-success'>
                                    <tr> 
                                        <th>#</th>
                                        <th>Fecha</th>
                                        <th>Id-Requerimiento</th>
                                        <th>Descripcion</th>
                                     
                                   </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Req"]) {
            // line 49
            echo "                                        <tr>
                                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Req"], "Fecha", array()), "Y/m/d", false), "html", null, true);
            echo "</td>
                                            <td>Req-";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "id", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "Descripcion", array()), "html", null, true);
            echo "</td>                    
                                            </tr>
                                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Req'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                                            </tbody>
                                        </table>
                            </div>
                                             <div class=\"navigation\">
                                               ";
        // line 60
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
                                               
                                           </div>
                                    </div>
                                </div>
                                               
                            </div>
                        </div><!-- /.box -->
                    </div>
                </section><!-- /.content -->
                ";
    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Clientes:Consultas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 60,  149 => 56,  132 => 53,  128 => 52,  124 => 51,  120 => 50,  117 => 49,  100 => 48,  83 => 34,  66 => 19,  57 => 17,  53 => 16,  48 => 13,  45 => 12,  36 => 7,  32 => 5,  29 => 4,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Cliente.html.twig' %}*/
/* */
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Cliente')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Consulta Requerimentos</li>*/
/*         </ol>*/
/*     </section>*/
/* {%endblock%}*/
/* {%block section3 %}*/
/*     <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 {% for flashMessage in app.session.flashbag.get('mensaje')%}*/
/*                     <strong class="alert-success">{{ flashMessage }} Exitosamente!!!!</strong> */
/*                 {% endfor%}*/
/*                 <!-- Trigger the modal with a button -->*/
/* */
/*              */
/*                        */
/*                           */
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <div class='row'>*/
/*                             <div class='col-xs-6 '>Lista de Requerimientos</div><div class='col-xs-6 text-right'><button id="DescargarPdf" type="button" class="btn btn-success btn-sm text-right" ><i class="fa fa-print"></i> Generar Pdf</button></div>*/
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <div class="navigation">*/
/*                                 <small><strong> TOTAL DE REQUERIMIENTOS: {{pagination.getTotalItemCount}}</strong></small>*/
/*                             </div>*/
/*                             <div id="reporte">*/
/*                             <table id="example2" class="table table-hover table-condensed">*/
/*                                 <thead class='bg-success'>*/
/*                                     <tr> */
/*                                         <th>#</th>*/
/*                                         <th>Fecha</th>*/
/*                                         <th>Id-Requerimiento</th>*/
/*                                         <th>Descripcion</th>*/
/*                                      */
/*                                    </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for Req in pagination%}*/
/*                                         <tr>*/
/*                                             <td>{{ loop.index }}</td>*/
/*                                             <td>{{ Req.Fecha |date("Y/m/d", false)}}</td>*/
/*                                             <td>Req-{{ Req.id }}</td>*/
/*                                             <td>{{Req.Descripcion}}</td>                    */
/*                                             </tr>*/
/*                                             {% endfor %}*/
/*                                             </tbody>*/
/*                                         </table>*/
/*                             </div>*/
/*                                              <div class="navigation">*/
/*                                                {{knp_pagination_render(pagination)}}*/
/*                                                */
/*                                            </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                                */
/*                             </div>*/
/*                         </div><!-- /.box -->*/
/*                     </div>*/
/*                 </section><!-- /.content -->*/
/*                 {% endblock %}*/
/* */
