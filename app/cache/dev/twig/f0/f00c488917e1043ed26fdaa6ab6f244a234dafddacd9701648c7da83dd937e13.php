<?php

/* LoginfirstBundle:Empleados:Consultas.html.twig */
class __TwigTemplate_ea5a41c7320351ab4b6db9a5fb0d6677e5825e35570e2391e12281a3e7dab316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout_Cliente.html.twig", "LoginfirstBundle:Empleados:Consultas.html.twig", 2);
        $this->blocks = array(
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::layout_Cliente.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0c24a92e7f9ce0ab77203a712e989bb98186546b22ea7367938feabcd9c8836 = $this->env->getExtension("native_profiler");
        $__internal_c0c24a92e7f9ce0ab77203a712e989bb98186546b22ea7367938feabcd9c8836->enter($__internal_c0c24a92e7f9ce0ab77203a712e989bb98186546b22ea7367938feabcd9c8836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Empleados:Consultas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0c24a92e7f9ce0ab77203a712e989bb98186546b22ea7367938feabcd9c8836->leave($__internal_c0c24a92e7f9ce0ab77203a712e989bb98186546b22ea7367938feabcd9c8836_prof);

    }

    // line 4
    public function block_section2($context, array $blocks = array())
    {
        $__internal_fcc8afa5820a7cfd4cb2d44f271f6449a79b33b177305f4dbab2fd035afaabe9 = $this->env->getExtension("native_profiler");
        $__internal_fcc8afa5820a7cfd4cb2d44f271f6449a79b33b177305f4dbab2fd035afaabe9->enter($__internal_fcc8afa5820a7cfd4cb2d44f271f6449a79b33b177305f4dbab2fd035afaabe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

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
        
        $__internal_fcc8afa5820a7cfd4cb2d44f271f6449a79b33b177305f4dbab2fd035afaabe9->leave($__internal_fcc8afa5820a7cfd4cb2d44f271f6449a79b33b177305f4dbab2fd035afaabe9_prof);

    }

    // line 12
    public function block_section3($context, array $blocks = array())
    {
        $__internal_800448c94f994361a732b2a33067dcf11c2e4e816a292627b037a660132c0bb8 = $this->env->getExtension("native_profiler");
        $__internal_800448c94f994361a732b2a33067dcf11c2e4e816a292627b037a660132c0bb8->enter($__internal_800448c94f994361a732b2a33067dcf11c2e4e816a292627b037a660132c0bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 13
        echo "    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
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
                            <div class='col-xs-6 '>Lista de Requerimientos</div><div class='col-xs-6 text-right'><button type=\"button\" class=\"btn btn-success btn-sm text-right\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-circle\"></i> Nuevo</button></div>
                        </div>
                        <hr>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <div class=\"navigation\">
                                <small><strong> TOTAL DE REQUERIMIENTOS: ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</strong></small>
                            </div>
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
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
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
            // line 48
            echo "                                        <tr>
                                            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Req"], "Fecha", array()), "Y/m/d", false), "html", null, true);
            echo "</td>
                                            <td>Req-";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "id", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 52
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
        // line 55
        echo "                                            </tbody>
                                        </table>
                                             <div class=\"navigation\">
                                               ";
        // line 58
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                                               
                                           </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box -->
                    </div>
                </section><!-- /.content -->
                ";
        
        $__internal_800448c94f994361a732b2a33067dcf11c2e4e816a292627b037a660132c0bb8->leave($__internal_800448c94f994361a732b2a33067dcf11c2e4e816a292627b037a660132c0bb8_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Empleados:Consultas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 58,  163 => 55,  146 => 52,  142 => 51,  138 => 50,  134 => 49,  131 => 48,  114 => 47,  98 => 34,  81 => 19,  72 => 17,  68 => 16,  63 => 13,  57 => 12,  45 => 7,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::layout_Cliente.html.twig' %}*/
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
/*                             <div class='col-xs-6 '>Lista de Requerimientos</div><div class='col-xs-6 text-right'><button type="button" class="btn btn-success btn-sm text-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuevo</button></div>*/
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <div class="navigation">*/
/*                                 <small><strong> TOTAL DE REQUERIMIENTOS: {{pagination.getTotalItemCount}}</strong></small>*/
/*                             </div>*/
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
/*                                              <div class="navigation">*/
/*                                                {{knp_pagination_render(pagination)}}*/
/*                                                */
/*                                            </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!-- /.box -->*/
/*                     </div>*/
/*                 </section><!-- /.content -->*/
/*                 {% endblock %}*/
/* */
