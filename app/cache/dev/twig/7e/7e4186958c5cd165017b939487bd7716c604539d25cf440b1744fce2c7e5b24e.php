<?php

/* LoginfirstBundle:Clientes:NuevoReq.html.twig */
class __TwigTemplate_706984c5a55378a92043cd687293b44d899d99a2add2196577ca679c034302d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout_Cliente.html.twig", "LoginfirstBundle:Clientes:NuevoReq.html.twig", 2);
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
        $__internal_5a7aaa98bebb6bf3b3eff620f6012a72f498e1b2a4dfbf7c294214e91fbed11e = $this->env->getExtension("native_profiler");
        $__internal_5a7aaa98bebb6bf3b3eff620f6012a72f498e1b2a4dfbf7c294214e91fbed11e->enter($__internal_5a7aaa98bebb6bf3b3eff620f6012a72f498e1b2a4dfbf7c294214e91fbed11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Clientes:NuevoReq.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a7aaa98bebb6bf3b3eff620f6012a72f498e1b2a4dfbf7c294214e91fbed11e->leave($__internal_5a7aaa98bebb6bf3b3eff620f6012a72f498e1b2a4dfbf7c294214e91fbed11e_prof);

    }

    // line 4
    public function block_section2($context, array $blocks = array())
    {
        $__internal_49366bb85bc7f99df2a8925ae016d32b444aa80132797b7d924c3959dfd87d61 = $this->env->getExtension("native_profiler");
        $__internal_49366bb85bc7f99df2a8925ae016d32b444aa80132797b7d924c3959dfd87d61->enter($__internal_49366bb85bc7f99df2a8925ae016d32b444aa80132797b7d924c3959dfd87d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 5
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Cliente");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Requerimentos</li>
        </ol>
    </section>
";
        
        $__internal_49366bb85bc7f99df2a8925ae016d32b444aa80132797b7d924c3959dfd87d61->leave($__internal_49366bb85bc7f99df2a8925ae016d32b444aa80132797b7d924c3959dfd87d61_prof);

    }

    // line 12
    public function block_section3($context, array $blocks = array())
    {
        $__internal_636571b2fa0f958b03cab1ee04296ea34f3f45e80f4a5ee4b73beba829897d88 = $this->env->getExtension("native_profiler");
        $__internal_636571b2fa0f958b03cab1ee04296ea34f3f45e80f4a5ee4b73beba829897d88->enter($__internal_636571b2fa0f958b03cab1ee04296ea34f3f45e80f4a5ee4b73beba829897d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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

                <!-- Modal -->
                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">

                        <!-- Modal content-->
                        <div class=\"modal-content\">
                            <div class=\"modal-header btn-primary \">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span><i class=\"fa fa-times-circle\"></i></span></button>
                                <h4 class=\"modal-title\" align=\"center\">INGRESO NUEVO REQUERIMIENTO</h4>
                            </div>
                            <form id=\"NuevoReqC\" method=\"Post\" class=\"form-horizontal\" action='";
        // line 31
        echo $this->env->getExtension('routing')->getPath("GuardarReqCliente");
        echo "'>
                                <div class=\"modal-body\">                               
                                  
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"Modulo\">Modulo:</label>
                                        <div class=\"input-group col-sm-6\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-bars\"></i>
                                            </div>
                                             <div id=\"PathMod\" data-path=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("Menus1");
        echo "\"></div>  
                                             <div id=\"PathMenu\" data-path=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("SubMenus1");
        echo "\"></div>  
                                            <select class=\"form-control input-sm\" name='Modulo' id='Modulo'>
                                                 <option value=''selected>Seleccione Modulo</option>
                                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Modulos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Modulos"]) {
            echo "                                                
                                                    <option value='";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "id", array()), "html", null, true);
            echo "' name='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "Nombre", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "Nombre", array()), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modulos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                                            </select>
                                        </div>
                                    </div><!-- Code snippet -->
                                    <div class=\"form-group\">
                                        <div class=\"col-xs-12 text-center\"><div class=\"loading\"></div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"Menu\">Menu:</label>
                                        <div class=\"input-group col-sm-6\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-bars\"></i>
                                            </div>
                                            <select class=\"form-control input-sm\" name='Menu' id='Menu'>
                                                <option value=''selected>Seleccione Menu</option>
                                            </select>
                                         </div>  
                                    </div> 
                                     <div class=\"form-group\">
                                        <div class=\"col-xs-12 text-center\"><div class=\"loading\"></div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"SubMenu\">SubMenu:</label>
                                        <div class=\"input-group col-sm-6\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-bars\"></i>
                                            </div>
                                            <select class=\"form-control input-sm\" name='SubMenu' id='SubMenu'>
                                                <option value=''selected>Seleccione SubMenu</option>
                                            </select>
                                         </div>  
                                    </div> 
                                      <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"Detalle\">Detalle:</label>
                                        <div class=\"input-group col-sm-6\">
                                            ​<textarea id=\"txtArea\" name=\"txtArea\" rows=\"5\" cols=\"50\"></textarea>
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
                            <div class='col-xs-6 '>Lista de Requerimientos</div><div class='col-xs-6 text-right'><button type=\"button\" class=\"btn btn-success btn-sm text-right\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-circle\"></i> Nuevo</button></div>
                        </div>
                        <hr>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <div class=\"navigation\">
                                <small><strong> TOTAL DE REGISTROS: ";
        // line 107
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))), "html", null, true);
        echo "</strong></small>
                            </div>
                            <table id=\"example2\" class=\"table table-hover table-condensed\">
                                <thead class='bg-success'>
                                    <tr> 
                                        <th>#</th>
                                        <th>Fecha</th>
                                        <th>Id-Requerimiento</th>
                                        <th>Estado</th>
                                        <th>Modulo</th>  
                                        <th>Menu</th>
                                        <th>SubMenu</th>  
                                   </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 122
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
            // line 123
            echo "                                        <tr>
                                            <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 125
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Req"], "Fecha", array()), "Y/m/d", false), "html", null, true);
            echo "</td>
                                            <td>Req-";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "IdReq", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "Estado", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "Modulo", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "Menu", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "SubMenu", array()), "html", null, true);
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
        // line 133
        echo "                                            </tbody>
                                        </table>
                                             
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box -->
                    </div>
                </section><!-- /.content -->
                ";
        
        $__internal_636571b2fa0f958b03cab1ee04296ea34f3f45e80f4a5ee4b73beba829897d88->leave($__internal_636571b2fa0f958b03cab1ee04296ea34f3f45e80f4a5ee4b73beba829897d88_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Clientes:NuevoReq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 133,  259 => 130,  255 => 129,  251 => 128,  247 => 127,  243 => 126,  239 => 125,  235 => 124,  232 => 123,  215 => 122,  197 => 107,  135 => 47,  123 => 45,  117 => 44,  111 => 41,  107 => 40,  95 => 31,  81 => 19,  72 => 17,  68 => 16,  63 => 13,  57 => 12,  45 => 7,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::layout_Cliente.html.twig' %}*/
/* */
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Cliente')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Requerimentos</li>*/
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
/*                 <!-- Modal -->*/
/*                 <div id="myModal" class="modal fade" role="dialog">*/
/*                     <div class="modal-dialog">*/
/* */
/*                         <!-- Modal content-->*/
/*                         <div class="modal-content">*/
/*                             <div class="modal-header btn-primary ">*/
/*                                 <button type="button" class="close" data-dismiss="modal"><span><i class="fa fa-times-circle"></i></span></button>*/
/*                                 <h4 class="modal-title" align="center">INGRESO NUEVO REQUERIMIENTO</h4>*/
/*                             </div>*/
/*                             <form id="NuevoReqC" method="Post" class="form-horizontal" action='{{ path('GuardarReqCliente') }}'>*/
/*                                 <div class="modal-body">                               */
/*                                   */
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-3 control-label" for="Modulo">Modulo:</label>*/
/*                                         <div class="input-group col-sm-6">*/
/*                                             <div class="input-group-addon">*/
/*                                                 <i class="fa fa-bars"></i>*/
/*                                             </div>*/
/*                                              <div id="PathMod" data-path="{{path('Menus1')}}"></div>  */
/*                                              <div id="PathMenu" data-path="{{path('SubMenus1')}}"></div>  */
/*                                             <select class="form-control input-sm" name='Modulo' id='Modulo'>*/
/*                                                  <option value=''selected>Seleccione Modulo</option>*/
/*                                                 {% for Modulos in Modulos %}                                                */
/*                                                     <option value='{{Modulos.id }}' name='{{Modulos.Nombre }}'>{{Modulos.Nombre }}</option>*/
/*                                                 {% endfor %}*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div><!-- Code snippet -->*/
/*                                     <div class="form-group">*/
/*                                         <div class="col-xs-12 text-center"><div class="loading"></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-3 control-label" for="Menu">Menu:</label>*/
/*                                         <div class="input-group col-sm-6">*/
/*                                             <div class="input-group-addon">*/
/*                                                 <i class="fa fa-bars"></i>*/
/*                                             </div>*/
/*                                             <select class="form-control input-sm" name='Menu' id='Menu'>*/
/*                                                 <option value=''selected>Seleccione Menu</option>*/
/*                                             </select>*/
/*                                          </div>  */
/*                                     </div> */
/*                                      <div class="form-group">*/
/*                                         <div class="col-xs-12 text-center"><div class="loading"></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-3 control-label" for="SubMenu">SubMenu:</label>*/
/*                                         <div class="input-group col-sm-6">*/
/*                                             <div class="input-group-addon">*/
/*                                                 <i class="fa fa-bars"></i>*/
/*                                             </div>*/
/*                                             <select class="form-control input-sm" name='SubMenu' id='SubMenu'>*/
/*                                                 <option value=''selected>Seleccione SubMenu</option>*/
/*                                             </select>*/
/*                                          </div>  */
/*                                     </div> */
/*                                       <div class="form-group">*/
/*                                         <label class="col-sm-3 control-label" for="Detalle">Detalle:</label>*/
/*                                         <div class="input-group col-sm-6">*/
/*                                             ​<textarea id="txtArea" name="txtArea" rows="5" cols="50"></textarea>*/
/*                                         </div>  */
/*                                     </div> */
/*                                     */
/*                                 </div>*/
/*                                 <div class="modal-footer">*/
/*                                     <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>*/
/*                                     <button type="submit" class="btn btn-primary" id="btn-envia">Guardar</button>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>  */
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
/*                                 <small><strong> TOTAL DE REGISTROS: {{pagination|length}}</strong></small>*/
/*                             </div>*/
/*                             <table id="example2" class="table table-hover table-condensed">*/
/*                                 <thead class='bg-success'>*/
/*                                     <tr> */
/*                                         <th>#</th>*/
/*                                         <th>Fecha</th>*/
/*                                         <th>Id-Requerimiento</th>*/
/*                                         <th>Estado</th>*/
/*                                         <th>Modulo</th>  */
/*                                         <th>Menu</th>*/
/*                                         <th>SubMenu</th>  */
/*                                    </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for Req in pagination%}*/
/*                                         <tr>*/
/*                                             <td>{{ loop.index }}</td>*/
/*                                             <td>{{ Req.Fecha |date("Y/m/d", false)}}</td>*/
/*                                             <td>Req-{{ Req.IdReq }}</td>*/
/*                                             <td>{{ Req.Estado }}</td>*/
/*                                             <td>{{ Req.Modulo}}</td>*/
/*                                             <td>{{ Req.Menu }}</td>*/
/*                                             <td>{{Req.SubMenu}}</td>                    */
/*                                             </tr>*/
/*                                             {% endfor %}*/
/*                                             </tbody>*/
/*                                         </table>*/
/*                                              */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!-- /.box -->*/
/*                     </div>*/
/*                 </section><!-- /.content -->*/
/*                 {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
