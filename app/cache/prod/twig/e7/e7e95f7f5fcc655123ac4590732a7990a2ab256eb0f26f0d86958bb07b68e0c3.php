<?php

/* LoginfirstBundle:Admin:ListarModulos.html.twig */
class __TwigTemplate_c100f5473f0c5dd38ead784e4c058787f92512c0d2f398d1419050ef757a83aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Admin.html.twig", "LoginfirstBundle:Admin:ListarModulos.html.twig", 2);
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
            <li class=\"active\">Lista Módulos</li>
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
        // line 18
        echo "               <!-- Trigger the modal with a button -->
              
               <!-- Modal -->
               <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
                   <div class=\"modal-dialog\">

                       <!-- Modal content-->
                       <div class=\"modal-content\">
                           <div class=\"modal-header btn-primary \">
                               <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span><i class=\"fa fa-times-circle\"></i></span></button>
                               <h5 class=\"modal-title\">Nuevo Módulo</h5>
                           </div>
                           <form id=\"NuevoModulo\" method=\"Post\" class=\"form-horizontal\" action='";
        // line 30
        echo $this->env->getExtension('routing')->getPath("GuardarModulo");
        echo "'>

                           <div class=\"modal-body\">                               
                                   <div class=\"form-group\">
                                       <label class=\"col-sm-3 control-label\" for=\"ModNombre\">Nombre:</label>
                                       <div class=\"input-group col-sm-8\">
                                           <div class=\"input-group-addon\">
                                               <i class=\"fa fa-pencil\"></i>
                                           </div>
                                           <input type=\"Text\" id=\"ModNombre\" name=\"ModNombre\" class=\"form-control  input-sm\"/>
                                       </div>
                                   </div>
                                <div class=\"form-group\">
                                       <label class=\"col-sm-3 control-label\" for=\"ModDescripcion\">Descripcion:</label>
                                       <div class=\"input-group col-sm-8\">
                                           <div class=\"input-group-addon\">
                                               <i class=\"fa fa-align-justify\"></i>
                                           </div>
                                           <input type='Text' id=\"ModDescripcion\" name=\"ModDescripcion\" class=\"form-control  input-sm\"/>
                                       </div>
                                   </div>
                           </div>
                           <div class=\"modal-footer\">
                               <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                               <button type=\"submit\" class=\"btn btn-primary\" id=\"btn-envia\">Guardar</button>
                           </div>
                           </form>
                       </div>

                   </div>
               </div>  
               <div class=\"panel panel-primary\">
                   <div class=\"panel-heading\">
                    <div class='row'>
                        <div class='col-xs-6 '>Lista de Módulos</div><div class='col-xs-6 text-right'><button type=\"button\" class=\"btn btn-success btn-sm text-right\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-circle\"></i> Nuevo</button></div>
                    </div>
                       <hr>
                   </div>
                   <div class=\"panel-body\">
                       <div class=\"table-responsive\">
                           Total de registros:";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array()), "html", null, true);
        echo "
                           <table id=\"example2\" class=\"table table-hover table-condensed\">
                               <thead class='bg-success'>
                                   <tr> 
                                       <th>#</th>
                                       <th>Modulo</th>
                                       <th>Descripción</th>
                                       <th>Estado</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   ";
        // line 81
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
        foreach ($context['_seq'] as $context["_key"] => $context["Modulos"]) {
            // line 82
            echo "                                       <tr>
                                           <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                           <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "Nombre", array()), "html", null, true);
            echo "</td>
                                           <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "Descripcion", array()), "html", null, true);
            echo "</td>  
                                           <td class='text-center'> ";
            // line 86
            if (($this->getAttribute($context["Modulos"], "Estado", array()) == 1)) {
                // line 87
                echo "                                               <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DesactivaMod", array("idMod" => $this->getAttribute($context["Modulos"], "id", array()))), "html", null, true);
                echo "\" class='btn btn-xs btn-success'>Activado</a>
                                           ";
            } else {
                // line 89
                echo "                                               <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ActivaMod", array("idMod" => $this->getAttribute($context["Modulos"], "id", array()))), "html", null, true);
                echo "\" class='btn btn-xs btn-danger'>Desactivado</a>
                                               ";
            }
            // line 90
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modulos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                           </tbody>
                                       </table>
                                           <div class=\"navigation\">
                                               ";
        // line 96
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
        return "LoginfirstBundle:Admin:ListarModulos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 96,  199 => 93,  183 => 90,  177 => 89,  171 => 87,  169 => 86,  165 => 85,  161 => 84,  157 => 83,  154 => 82,  137 => 81,  123 => 70,  80 => 30,  66 => 18,  57 => 16,  53 => 15,  48 => 12,  45 => 11,  36 => 6,  32 => 4,  29 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Admin.html.twig' %}*/
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Admin')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Lista Módulos</li>*/
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
/*                <!-- Trigger the modal with a button -->*/
/*               */
/*                <!-- Modal -->*/
/*                <div id="myModal" class="modal fade" role="dialog">*/
/*                    <div class="modal-dialog">*/
/* */
/*                        <!-- Modal content-->*/
/*                        <div class="modal-content">*/
/*                            <div class="modal-header btn-primary ">*/
/*                                <button type="button" class="close" data-dismiss="modal"><span><i class="fa fa-times-circle"></i></span></button>*/
/*                                <h5 class="modal-title">Nuevo Módulo</h5>*/
/*                            </div>*/
/*                            <form id="NuevoModulo" method="Post" class="form-horizontal" action='{{ path('GuardarModulo') }}'>*/
/* */
/*                            <div class="modal-body">                               */
/*                                    <div class="form-group">*/
/*                                        <label class="col-sm-3 control-label" for="ModNombre">Nombre:</label>*/
/*                                        <div class="input-group col-sm-8">*/
/*                                            <div class="input-group-addon">*/
/*                                                <i class="fa fa-pencil"></i>*/
/*                                            </div>*/
/*                                            <input type="Text" id="ModNombre" name="ModNombre" class="form-control  input-sm"/>*/
/*                                        </div>*/
/*                                    </div>*/
/*                                 <div class="form-group">*/
/*                                        <label class="col-sm-3 control-label" for="ModDescripcion">Descripcion:</label>*/
/*                                        <div class="input-group col-sm-8">*/
/*                                            <div class="input-group-addon">*/
/*                                                <i class="fa fa-align-justify"></i>*/
/*                                            </div>*/
/*                                            <input type='Text' id="ModDescripcion" name="ModDescripcion" class="form-control  input-sm"/>*/
/*                                        </div>*/
/*                                    </div>*/
/*                            </div>*/
/*                            <div class="modal-footer">*/
/*                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>*/
/*                                <button type="submit" class="btn btn-primary" id="btn-envia">Guardar</button>*/
/*                            </div>*/
/*                            </form>*/
/*                        </div>*/
/* */
/*                    </div>*/
/*                </div>  */
/*                <div class="panel panel-primary">*/
/*                    <div class="panel-heading">*/
/*                     <div class='row'>*/
/*                         <div class='col-xs-6 '>Lista de Módulos</div><div class='col-xs-6 text-right'><button type="button" class="btn btn-success btn-sm text-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuevo</button></div>*/
/*                     </div>*/
/*                        <hr>*/
/*                    </div>*/
/*                    <div class="panel-body">*/
/*                        <div class="table-responsive">*/
/*                            Total de registros:{{pagination.getTotalItemCount}}*/
/*                            <table id="example2" class="table table-hover table-condensed">*/
/*                                <thead class='bg-success'>*/
/*                                    <tr> */
/*                                        <th>#</th>*/
/*                                        <th>Modulo</th>*/
/*                                        <th>Descripción</th>*/
/*                                        <th>Estado</th>*/
/*                                    </tr>*/
/*                                </thead>*/
/*                                <tbody>*/
/*                                    {% for Modulos in pagination %}*/
/*                                        <tr>*/
/*                                            <td>{{ loop.index }}</td>*/
/*                                            <td>{{ Modulos.Nombre }}</td>*/
/*                                            <td>{{ Modulos.Descripcion }}</td>  */
/*                                            <td class='text-center'> {% if Modulos.Estado == 1%}*/
/*                                                <a href="{{path('DesactivaMod',{'idMod': Modulos.id })}}" class='btn btn-xs btn-success'>Activado</a>*/
/*                                            {% else %}*/
/*                                                <a href="{{path('ActivaMod',{'idMod': Modulos.id })}}" class='btn btn-xs btn-danger'>Desactivado</a>*/
/*                                                {% endif %}</td>*/
/*                                            </tr>*/
/*                                            {% endfor %}*/
/*                                            </tbody>*/
/*                                        </table>*/
/*                                            <div class="navigation">*/
/*                                                {{knp_pagination_render(pagination)}}*/
/*                                                */
/*                                            </div>*/
/*                                    </div>*/
/*                                </div>*/
/*                            </div>*/
/*                        </div><!-- /.box -->*/
/*                    </div>*/
/*                </section><!-- /.content -->*/
/*                {% endblock %}*/
/* */
