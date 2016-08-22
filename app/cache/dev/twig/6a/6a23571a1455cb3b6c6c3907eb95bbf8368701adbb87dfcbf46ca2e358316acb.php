<?php

/* LoginfirstBundle:Admin:Requerimientos.html.twig */
class __TwigTemplate_1823af69d9f2ba13e4463ba52a635db2da57dcbce5ce54edf15f9b3dd9e1eacf extends Twig_Template
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
        $__internal_fee0f66cfbb08620b600bd3da485fca911c9168c1a46e871076ac79daabb982f = $this->env->getExtension("native_profiler");
        $__internal_fee0f66cfbb08620b600bd3da485fca911c9168c1a46e871076ac79daabb982f->enter($__internal_fee0f66cfbb08620b600bd3da485fca911c9168c1a46e871076ac79daabb982f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:Requerimientos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fee0f66cfbb08620b600bd3da485fca911c9168c1a46e871076ac79daabb982f->leave($__internal_fee0f66cfbb08620b600bd3da485fca911c9168c1a46e871076ac79daabb982f_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_fa22fcb565c7ab0e1c56cac9c0ca518f270e65279aafde5d073f0488d7a652d4 = $this->env->getExtension("native_profiler");
        $__internal_fa22fcb565c7ab0e1c56cac9c0ca518f270e65279aafde5d073f0488d7a652d4->enter($__internal_fa22fcb565c7ab0e1c56cac9c0ca518f270e65279aafde5d073f0488d7a652d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

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
        
        $__internal_fa22fcb565c7ab0e1c56cac9c0ca518f270e65279aafde5d073f0488d7a652d4->leave($__internal_fa22fcb565c7ab0e1c56cac9c0ca518f270e65279aafde5d073f0488d7a652d4_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_553f02f83d5e1e714f2df987a7efc86a9392ea3234024089c105332041e15923 = $this->env->getExtension("native_profiler");
        $__internal_553f02f83d5e1e714f2df987a7efc86a9392ea3234024089c105332041e15923->enter($__internal_553f02f83d5e1e714f2df987a7efc86a9392ea3234024089c105332041e15923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 12
        echo "    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
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
                              <div class=\"col-md-12\">
                                <p class=\"text-info\">
                                    <br>
                                    <small><strong>TOTAL DE REGISTROS: <span class='badge'>";
        // line 25
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Requerimientos"]) ? $context["Requerimientos"] : $this->getContext($context, "Requerimientos"))), "html", null, true);
        echo "</span></strong></small>
                                    <br></p>                         
                            </div>
                            <table id=\"example2\" class=\"table table-bordered\">
                                <thead class='bg-success'>
                                    <tr> 
                                        <th class=\"text-center small\">N°</th>
                                        <th class=\"text-center small\">FECHA</th>
                                        <th class=\"text-center small\">REQUERIMIENTO ID</th>
                                        <th class=\"text-center small\">CLIENTE</th>
                                        <th class=\"text-center small\">ESTADO</th>
                                        <th class=\"text-center small\">MODULO</th>
                                        <th class=\"text-center small\">ASIGNACION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Requerimientos"]) ? $context["Requerimientos"] : $this->getContext($context, "Requerimientos")));
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
            // line 42
            echo "                                        <tr>
                                            <td class=\"text-center small\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\">";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["RequeP"], "RqFecha", array()), "Y/m/d", false), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\">Rq-";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "RqId", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "Cliente", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "Estado", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "Modulo", array()), "html", null, true);
            echo "</td>
                                            <td class=\"col-xs-1\">
                                                <button type=\"button\" id=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "Modulo", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger\" data-toggle=\"modal\" data-target=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "RqId", array()), "html", null, true);
            echo "\" data-whatever=\"@mdo\">Asignación</button>
                                                <div class=\"modal\" id=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "RqId", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\">
                                                    <div class=\"modal-dialog modal-sm\" role=\"document\">
                                                        <form id=\"Asignacion\" method=\"POST\" action='";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GuardarAsignacion", array("idRq" => $this->getAttribute($context["RequeP"], "RqId", array()))), "html", null, true);
            echo "'>                          

                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header btn-primary\">
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-times-circle\"></i></span></button>
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\"><strong><center> ASIGNAR REQUERIMIENTO</center></strong></h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <div class='row'>
                                                                        <div class='col-sm-12'>
                                                                            <strong>Id Requerimiento:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                    <span
                                                                                        <span>Rq-";
            // line 67
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
            // line 75
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
            // line 83
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
            // line 91
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
            // line 99
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
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Empleados"]) ? $context["Empleados"] : $this->getContext($context, "Empleados")));
            foreach ($context['_seq'] as $context["_key"] => $context["Empleado"]) {
                echo "                                                
                                                                                                <option value='";
                // line 111
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
            // line 113
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
        // line 133
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.box -->
        </div>
    </section><!-- /.content -->
";
        
        $__internal_553f02f83d5e1e714f2df987a7efc86a9392ea3234024089c105332041e15923->leave($__internal_553f02f83d5e1e714f2df987a7efc86a9392ea3234024089c105332041e15923_prof);

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
        return array (  294 => 133,  261 => 113,  247 => 111,  241 => 110,  227 => 99,  216 => 91,  205 => 83,  194 => 75,  183 => 67,  166 => 53,  161 => 51,  155 => 50,  150 => 48,  146 => 47,  142 => 46,  138 => 45,  134 => 44,  130 => 43,  127 => 42,  110 => 41,  91 => 25,  81 => 17,  72 => 16,  68 => 15,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
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
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 {% for flashMessage in app.session.flashbag.get('mensaje')%}*/
/*                     <strong class="alert-success">{{ flashMessage }} Exitosamente!!!!</strong> */
/*                 {% endfor%} */
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading"><strong><i class="fa fa-bars" aria-hidden="true"></i>  Requerimientos pendientes por asignar </strong></div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                               <div class="col-md-12">*/
/*                                 <p class="text-info">*/
/*                                     <br>*/
/*                                     <small><strong>TOTAL DE REGISTROS: <span class='badge'>{{Requerimientos|length}}</span></strong></small>*/
/*                                     <br></p>                         */
/*                             </div>*/
/*                             <table id="example2" class="table table-bordered">*/
/*                                 <thead class='bg-success'>*/
/*                                     <tr> */
/*                                         <th class="text-center small">N°</th>*/
/*                                         <th class="text-center small">FECHA</th>*/
/*                                         <th class="text-center small">REQUERIMIENTO ID</th>*/
/*                                         <th class="text-center small">CLIENTE</th>*/
/*                                         <th class="text-center small">ESTADO</th>*/
/*                                         <th class="text-center small">MODULO</th>*/
/*                                         <th class="text-center small">ASIGNACION</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for RequeP in Requerimientos %}*/
/*                                         <tr>*/
/*                                             <td class="text-center small">{{ loop.index }}</td>*/
/*                                             <td class="text-center small">{{ RequeP.RqFecha|date("Y/m/d", false)}}</td>*/
/*                                             <td class="text-center small">Rq-{{ RequeP.RqId }}</td>*/
/*                                             <td class="text-center small">{{ RequeP.Cliente }}</td>*/
/*                                             <td class="text-center small">{{ RequeP.Estado }}</td>*/
/*                                             <td class="text-center small">{{ RequeP.Modulo }}</td>*/
/*                                             <td class="col-xs-1">*/
/*                                                 <button type="button" id="{{ RequeP.Modulo }}" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#{{RequeP.RqId}}" data-whatever="@mdo">Asignación</button>*/
/*                                                 <div class="modal" id="{{RequeP.RqId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">*/
/*                                                     <div class="modal-dialog modal-sm" role="document">*/
/*                                                         <form id="Asignacion" method="POST" action='{{ path('GuardarAsignacion',{'idRq': RequeP.RqId}) }}'>                          */
/* */
/*                                                             <div class="modal-content">*/
/*                                                                 <div class="modal-header btn-primary">*/
/*                                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>*/
/*                                                                     <h5 class="modal-title" id="exampleModalLabel"><strong><center> ASIGNAR REQUERIMIENTO</center></strong></h5>*/
/*                                                                 </div>*/
/*                                                                 <div class="modal-body">*/
/*                                                                     <div class='row'>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Id Requerimiento:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                     <span*/
/*                                                                                         <span>Rq-{{ RequeP.RqId }}</span> */
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Modulo:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                     <span> {{ RequeP.Modulo}} </span>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Menu:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                     <span> {{ RequeP.Menu}} </span>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Submenu:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                     <span> {{ RequeP.Submenu}} </span>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Descripcion:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                     <span> {{ RequeP.RqDescripcion }} </span>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>        */
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Empleado:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                     <div class="form-group">*/
/*                                                                                         <select class="form-control input-sm" name='Empleado' id='Empleado'>*/
/*                                                                                             <option value=''selected>Seleccione Empleado</option>*/
/*                                                                                             {% for Empleado in Empleados %}                                                */
/*                                                                                                 <option value='{{Empleado.Id}}' name='{{Empleado.Id }}'>{{Empleado.Nombre }} {{Empleado.Apellido }}</option>*/
/*                                                                                             {% endfor %}*/
/*                                                                                         </select>*/
/*                                                                                     </div>*/
/*                                                                                     <div class="errors">*/
/*                                                                                     </div>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>                                                                            */
/*                                                                     </div>                                                    */
/*                                                                 </div>*/
/*                                                                 <div class="modal-footer bg-gray">*/
/*                                                                     <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><span class="fa fa-times-circle-o"></span> Cancelar</button>*/
/*                                                                     <button type="submit" id="asignar" class="btn btn-success btn-xs"><span class="fa fa-check-circle"></span> Asignar</button>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </form>                            */
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /.box -->*/
/*         </div>*/
/*     </section><!-- /.content -->*/
/* {% endblock %}*/
/* */
