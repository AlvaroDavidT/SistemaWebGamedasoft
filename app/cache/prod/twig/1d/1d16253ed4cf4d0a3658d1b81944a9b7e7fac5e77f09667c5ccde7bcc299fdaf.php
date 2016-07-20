<?php

/* LoginfirstBundle:Admin:Requerimientos.html.twig */
class __TwigTemplate_3719dfefc85f7ad4bc51f8105df1e4eccccdd6bf65420a8d8743236cce8e4e2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Admin.html.twig", "LoginfirstBundle:Admin:Requerimientos.html.twig", 2);
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
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Requerimientos</li>
        </ol>
    </section>
";
    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        // line 12
        echo "    <section class=\"content\">
      <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "                    <strong class=\"alert-success\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " Exitosamente!!!!</strong> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo " 
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\"><strong><i class=\"fa fa-bars\" aria-hidden=\"true\"></i>  Requerimientos pendientes por asignar </strong></div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table id=\"example2\" class=\"table table-hover table-condensed\">
                                <thead class='bg-success'>
                                    <tr> 
                                        <th>#</th>
                                        <th>Fecha</th>
                                        <th>Id Requerimiento</th>
                                        <th>Cliente</th>
                                        <th>Estado</th>
                                        <th>Módulo</th>
                                        <th>Asignación</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Requerimientos"]) ? $context["Requerimientos"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["RequeP"]) {
            // line 36
            echo "                                        
                                        <tr>
                                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["RequeP"], "RqFecha", array()), "Y/m/d", false), "html", null, true);
            echo "</td>
                                            <td>Rq-";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "RqId", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "Cliente", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "Estado", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "Modulo", array()), "html", null, true);
            echo "</td>
                                            <td>
                                                <button type=\"button\" id=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "Modulo", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger\" data-toggle=\"modal\" data-target=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "RqId", array()), "html", null, true);
            echo "\" data-whatever=\"@mdo\">Asignación</button>
                                                <div class=\"modal\" id=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "RqId", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\">
                                                    <div class=\"modal-dialog modal-sm\" role=\"document\">
                                                        <form id=\"Asignacion\" method=\"POST\" action='";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GuardarAsignacion", array("idRq" => $this->getAttribute($context["RequeP"], "RqId", array()))), "html", null, true);
            echo "'>                          
                                                                                
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header btn-primary\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-times-circle\"></i></span></button>
                                                                <h5 class=\"modal-title\" id=\"exampleModalLabel\"><strong> Asignación Requerimiento</strong></h5>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <div class='row'>
                                                                    <div class='col-sm-12'>
                                                                        <strong>Id Requerimiento:</strong>
                                                                        <div class='row'>
                                                                            <div class='col-xs-12 col-sm-12'>
                                                                                <span
                                                                                    <span>Rq-";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "RqId", array()), "html", null, true);
            echo "</span> 
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                   <div class='col-sm-12'>
                                                                        <strong>Modulo:</strong>
                                                                        <div class='row'>
                                                                          <div class='col-xs-12 col-sm-12'>
                                                                                <span> ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "Modulo", array()), "html", null, true);
            echo " </span>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class='col-sm-12'>
                                                                        <strong>Menu:</strong>
                                                                        <div class='row'>
                                                                            <div class='col-xs-12 col-sm-12'>
                                                                                <span> ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "Menu", array()), "html", null, true);
            echo " </span>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                   <div class='col-sm-12'>
                                                                        <strong>Submenu:</strong>
                                                                        <div class='row'>
                                                                            <div class='col-xs-12 col-sm-12'>
                                                                                <span> ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "Submenu", array()), "html", null, true);
            echo " </span>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                     <div class='col-sm-12'>
                                                                        <strong>Descripcion:</strong>
                                                                        <div class='row'>
                                                                            <div class='col-xs-12 col-sm-12'>
                                                                                <span> ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "RqDescripcion", array()), "html", null, true);
            echo " </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>        
                                                                    <div class='col-sm-12'>
                                                                        <strong>Empleado:</strong>
                                                                        <div class='row'>
                                                                            <div class='col-xs-12 col-sm-12'>
                                                                                    <div class=\"form-group\">
                                                                                        <select class=\"form-control input-sm\" name='Empleado' id='Empleado'>
                                                                                            <option value=''selected>Seleccione Empleado</option>
                                                                                            ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Empleados"]) ? $context["Empleados"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["Empleado"]) {
                echo "                                                
                                                                                                <option value='";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["Empleado"], "Id", array()), "html", null, true);
                echo "' name='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Empleado"], "Id", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Empleado"], "Nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Empleado"], "Apellido", array()), "html", null, true);
                echo "</option>
                                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Empleado'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                                                                                        </select>
                                                                                    </div>
                                                                                    <div class=\"errors\">
                                                                                        
                                                                                    </div>
                                                                               
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                            
                                                                </div>                                                    

                                                            </div>
                                                            <div class=\"modal-footer bg-gray\">
                                                                <button type=\"button\" class=\"btn btn-danger btn-xs\" data-dismiss=\"modal\"><span class=\"fa fa-times-circle-o\"></span> Cancelar</button>
                                                                <button type=\"submit\" id=\"asignar\" class=\"btn btn-success btn-xs\"><span class=\"fa fa-check-circle\"></span> Asignar</button>
                                                            </div>
                                                        </div>
                                                             </form>                            
                                                    </div>
                                                </div>
                                            </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RequeP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                                </tbody>
                            </table>
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
        return "LoginfirstBundle:Admin:Requerimientos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 134,  241 => 111,  227 => 109,  221 => 108,  207 => 97,  195 => 88,  183 => 79,  171 => 70,  160 => 62,  143 => 48,  138 => 46,  132 => 45,  127 => 43,  123 => 42,  119 => 41,  115 => 40,  111 => 39,  107 => 38,  103 => 36,  86 => 35,  66 => 17,  57 => 16,  53 => 15,  48 => 12,  45 => 11,  36 => 6,  32 => 4,  29 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Admin.html.twig' %}*/
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Admin')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Requerimientos</li>*/
/*         </ol>*/
/*     </section>*/
/* {%endblock%}*/
/* {%block section3 %}*/
/*     <section class="content">*/
/*       <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 {% for flashMessage in app.session.flashbag.get('mensaje')%}*/
/*                     <strong class="alert-success">{{ flashMessage }} Exitosamente!!!!</strong> */
/*                 {% endfor%} */
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading"><strong><i class="fa fa-bars" aria-hidden="true"></i>  Requerimientos pendientes por asignar </strong></div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table id="example2" class="table table-hover table-condensed">*/
/*                                 <thead class='bg-success'>*/
/*                                     <tr> */
/*                                         <th>#</th>*/
/*                                         <th>Fecha</th>*/
/*                                         <th>Id Requerimiento</th>*/
/*                                         <th>Cliente</th>*/
/*                                         <th>Estado</th>*/
/*                                         <th>Módulo</th>*/
/*                                         <th>Asignación</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for RequeP in Requerimientos %}*/
/*                                         */
/*                                         <tr>*/
/*                                             <td>{{ loop.index }}</td>*/
/*                                             <td>{{ RequeP.RqFecha|date("Y/m/d", false)}}</td>*/
/*                                             <td>Rq-{{ RequeP.RqId }}</td>*/
/*                                             <td>{{ RequeP.Cliente }}</td>*/
/*                                             <td>{{ RequeP.Estado }}</td>*/
/*                                             <td>{{ RequeP.Modulo }}</td>*/
/*                                             <td>*/
/*                                                 <button type="button" id="{{ RequeP.Modulo }}" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#{{RequeP.RqId}}" data-whatever="@mdo">Asignación</button>*/
/*                                                 <div class="modal" id="{{RequeP.RqId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">*/
/*                                                     <div class="modal-dialog modal-sm" role="document">*/
/*                                                         <form id="Asignacion" method="POST" action='{{ path('GuardarAsignacion',{'idRq': RequeP.RqId}) }}'>                          */
/*                                                                                 */
/*                                                         <div class="modal-content">*/
/*                                                             <div class="modal-header btn-primary">*/
/*                                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>*/
/*                                                                 <h5 class="modal-title" id="exampleModalLabel"><strong> Asignación Requerimiento</strong></h5>*/
/*                                                             </div>*/
/*                                                             <div class="modal-body">*/
/*                                                                 <div class='row'>*/
/*                                                                     <div class='col-sm-12'>*/
/*                                                                         <strong>Id Requerimiento:</strong>*/
/*                                                                         <div class='row'>*/
/*                                                                             <div class='col-xs-12 col-sm-12'>*/
/*                                                                                 <span*/
/*                                                                                     <span>Rq-{{ RequeP.RqId }}</span> */
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                     </div>*/
/*                                                                    <div class='col-sm-12'>*/
/*                                                                         <strong>Modulo:</strong>*/
/*                                                                         <div class='row'>*/
/*                                                                           <div class='col-xs-12 col-sm-12'>*/
/*                                                                                 <span> {{ RequeP.Modulo}} </span>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/* */
/*                                                                     </div>*/
/*                                                                     <div class='col-sm-12'>*/
/*                                                                         <strong>Menu:</strong>*/
/*                                                                         <div class='row'>*/
/*                                                                             <div class='col-xs-12 col-sm-12'>*/
/*                                                                                 <span> {{ RequeP.Menu}} </span>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/* */
/*                                                                     </div>*/
/*                                                                    <div class='col-sm-12'>*/
/*                                                                         <strong>Submenu:</strong>*/
/*                                                                         <div class='row'>*/
/*                                                                             <div class='col-xs-12 col-sm-12'>*/
/*                                                                                 <span> {{ RequeP.Submenu}} </span>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/* */
/*                                                                     </div>*/
/*                                                                      <div class='col-sm-12'>*/
/*                                                                         <strong>Descripcion:</strong>*/
/*                                                                         <div class='row'>*/
/*                                                                             <div class='col-xs-12 col-sm-12'>*/
/*                                                                                 <span> {{ RequeP.RqDescripcion }} </span>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                     </div>        */
/*                                                                     <div class='col-sm-12'>*/
/*                                                                         <strong>Empleado:</strong>*/
/*                                                                         <div class='row'>*/
/*                                                                             <div class='col-xs-12 col-sm-12'>*/
/*                                                                                     <div class="form-group">*/
/*                                                                                         <select class="form-control input-sm" name='Empleado' id='Empleado'>*/
/*                                                                                             <option value=''selected>Seleccione Empleado</option>*/
/*                                                                                             {% for Empleado in Empleados %}                                                */
/*                                                                                                 <option value='{{Empleado.Id}}' name='{{Empleado.Id }}'>{{Empleado.Nombre }} {{Empleado.Apellido }}</option>*/
/*                                                                                             {% endfor %}*/
/*                                                                                         </select>*/
/*                                                                                     </div>*/
/*                                                                                     <div class="errors">*/
/*                                                                                         */
/*                                                                                     </div>*/
/*                                                                                */
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                     </div>                                                                            */
/*                                                                 </div>                                                    */
/* */
/*                                                             </div>*/
/*                                                             <div class="modal-footer bg-gray">*/
/*                                                                 <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><span class="fa fa-times-circle-o"></span> Cancelar</button>*/
/*                                                                 <button type="submit" id="asignar" class="btn btn-success btn-xs"><span class="fa fa-check-circle"></span> Asignar</button>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                              </form>                            */
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/* */
/* */
/*             </div><!-- /.box -->*/
/*         </div>*/
/*     </section><!-- /.content -->*/
/* {% endblock %}*/
/* */
