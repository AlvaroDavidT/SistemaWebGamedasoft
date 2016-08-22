<?php

/* LoginfirstBundle:Clientes:NuevoReq.html.twig */
class __TwigTemplate_7f4f5e46333910d864df5d734f0bc6df8de46df1a5ff0dfbe133856d607b38d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Cliente.html.twig", "LoginfirstBundle:Clientes:NuevoReq.html.twig", 2);
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
        $__internal_fa1602a8d736d357aaeaed87e2acd478db035a362ff7929d4ed84e100bb97f72 = $this->env->getExtension("native_profiler");
        $__internal_fa1602a8d736d357aaeaed87e2acd478db035a362ff7929d4ed84e100bb97f72->enter($__internal_fa1602a8d736d357aaeaed87e2acd478db035a362ff7929d4ed84e100bb97f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Clientes:NuevoReq.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa1602a8d736d357aaeaed87e2acd478db035a362ff7929d4ed84e100bb97f72->leave($__internal_fa1602a8d736d357aaeaed87e2acd478db035a362ff7929d4ed84e100bb97f72_prof);

    }

    // line 4
    public function block_section2($context, array $blocks = array())
    {
        $__internal_e00a6320d512e28d06656a0fb3c0f54f27e33a579d542653da8c8ae3c6d836cc = $this->env->getExtension("native_profiler");
        $__internal_e00a6320d512e28d06656a0fb3c0f54f27e33a579d542653da8c8ae3c6d836cc->enter($__internal_e00a6320d512e28d06656a0fb3c0f54f27e33a579d542653da8c8ae3c6d836cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 5
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Cliente");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Ingreso Requerimientos</li>
        </ol>
    </section>
";
        
        $__internal_e00a6320d512e28d06656a0fb3c0f54f27e33a579d542653da8c8ae3c6d836cc->leave($__internal_e00a6320d512e28d06656a0fb3c0f54f27e33a579d542653da8c8ae3c6d836cc_prof);

    }

    // line 12
    public function block_section3($context, array $blocks = array())
    {
        $__internal_f643be92a8b281ee66a0eca70e8a22a7985d260ed18cf32346a753834512f41f = $this->env->getExtension("native_profiler");
        $__internal_f643be92a8b281ee66a0eca70e8a22a7985d260ed18cf32346a753834512f41f->enter($__internal_f643be92a8b281ee66a0eca70e8a22a7985d260ed18cf32346a753834512f41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
                    <div class=\"modal-dialog modal-sm\">
                        <!-- Modal content-->
                        <div class=\"modal-content\">
                            <div class=\"modal-header btn-primary \">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span><i class=\"fa fa-times-circle\"></i></span></button>
                                <h5 class=\"modal-title\" align=\"center\"><strong>INGRESO NUEVO REQUERIMIENTO</strong></h5>
                            </div>
                            <form id=\"NuevoReqC\" method=\"Post\" class=\"form-horizontal\" action='";
        // line 30
        echo $this->env->getExtension('routing')->getPath("GuardarReqCliente");
        echo "'>
                                <div class=\"modal-body\">
                                    <div id=\"PathMod\" data-path=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("Menus1");
        echo "\"></div>  
                                    <div id=\"PathMenu\" data-path=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("SubMenus1");
        echo "\"></div>  
                                    <div class='row'>
                                        <div class='col-sm-12'>
                                            <strong>Modulo:</strong>
                                            <select class=\"form-control input-sm\" name='Modulo' id='Modulo'>
                                                <option value=''selected>Seleccione Modulo</option>
                                                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Modulos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Modulos"]) {
            echo "                                                
                                                    <option value='";
            // line 40
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
        // line 42
        echo "                                            </select>   
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"col-xs-12 text-center\"><div class=\"loading\"></div>
                                            </div>
                                        </div>
                                        <div class='col-sm-12'>
                                            <strong>Menu:</strong>
                                            <div class='row'>
                                                <div class='col-xs-12'>
                                                    <select class=\"form-control input-sm\" name='Menu' id='Menu'>
                                                        <option value=''selected>Seleccione Menu</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-sm-12'>
                                            <strong>Submenu:</strong>
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-12'>
                                                    <select class=\"form-control input-sm\" name='SubMenu' id='SubMenu'>
                                                        <option value=''selected>Seleccione SubMenu</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-sm-12'>
                                            <strong>Descripcion:</strong>
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-12'>
                                                    ​<textarea id=\"txtArea\" name=\"txtArea\" rows=\"7\" cols=\"40\"></textarea>
                                                </div>
                                            </div>
                                        </div>        
                                    </div>                                                    
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" data-dismiss=\"modal\"><span class=\"fa fa-times-circle-o\"></span> Cancelar</button>
                                    <button type=\"submit\" class=\"btn btn-success btn-xs\" id=\"btn-envia\"><span class=\"fa fa-check-circle\"></span> Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>  
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class='row'>
                            <div class='col-xs-6 '>Requerimientos Pendientes</div><div class='col-xs-6 text-right'><button type=\"button\" class=\"btn btn-success btn-sm text-right\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-circle\"></i> Nuevo</button></div>

                        </div>
                        <hr>
                    </div>
                    <div id=\"PathReqCosultas\" data-path=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("RequerimientosClientes");
        echo "\"></div>
                    <div id=\"Actualiza\" data-path=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("ActualizaReq1");
        echo "\"></div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <div class=\"col-md-12\">
                                <p class=\"text-info\">
                                    <br>
                                    <small><strong> TOTAL DE REGISTROS: <span class=\"badge\">";
        // line 102
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))), "html", null, true);
        echo "</span></strong></small>
                                    <br></p>                         



                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-danger col-md-12\">
                                    <div id=\"PathReqEliminar\" data-path=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("EliminaReq1");
        echo "\"></div>
                                    <div id=\"PathReqConsultasC\" data-path=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("RequerimientosClientes");
        echo "\"></div>  
                                    <div class=\"panel-body\">
                                        <div class=\"col-md-3\">
                                            <strong>Buscar por modulos: <i class=\"fa fa-search\" aria-hidden=\"true\"></i></strong>

                                        </div>
                                        <div class=\"col-md-9\">
                                            <select class=\"col-xs-5\" name='ModuloC' id='ModuloC'>
                                                <option value='0' >Todos</option>
                                                ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Modulos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Modulos"]) {
            echo "   
                                                    <option value='";
            // line 121
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
        // line 123
        echo "                                            </select>  
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-12 text-center\"><div class=\"loading1\"></div>
                                </div>
                            </div>
                            <table id=\"RequerimientosC\" class=\"table table-bordered\">
                                <thead class='bg-success'>
                                    <tr> 
                                        <th class=\"text-center\"><small>N°</small></th>
                                        <th class=\"text-center\"><small>FECHA</small></th>
                                        <th class=\"text-center\"><small>REQUEMIENTO ID</small></th>
                                        <th class=\"text-center\"><small>ESTADO</small></th>
                                        <th class=\"text-center\"><small>MODULO</small></th>  
                                        <th class=\"text-center\"><small>MENU</small></th>
                                        <th class=\"text-center\"><small>SUBMENU</small></th>  
                                        <th class=\"text-center\"><small>ACCIONES</small></th>   
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 148
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
            // line 149
            echo "                                        <tr>
                                            <td><small>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</small></td>
                                            <td><small>";
            // line 151
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Req"], "Fecha", array()), "Y/m/d", false), "html", null, true);
            echo "</small></td>
                                            <td><small>Req-";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "IdReq", array()), "html", null, true);
            echo "</small></td>
                                            <td><small>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "Estado", array()), "html", null, true);
            echo "</small></td>
                                            <td><small>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "Modulo", array()), "html", null, true);
            echo "</small></td>
                                            <td><small>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "Menu", array()), "html", null, true);
            echo "</small></td>
                                            <td><small>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "SubMenu", array()), "html", null, true);
            echo "</small></td>
                                            <td class=\"\">
                                                <button type=\"button\" id=\"actualizar\" class=\"btn btn-xs btn-success btn-circle\" data-toggle=\"modal\" data-target=\"#";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "IdReq", array()), "html", null, true);
            echo "\" data-whatever=\"@mdo\"> <i class=\"fa fa-pencil\" title=\"EDITAR\" aria-hidden=\"true\"></i></button><small>Editar</small> 
                                                <div class=\"modal\" id=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "IdReq", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\">
                                                    <div class=\"modal-dialog modal-sm\" role=\"document\">
                                                        <form id=\"Editar\" method=\"POST\" action='";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ActualizaReq", array("idRq" => $this->getAttribute($context["Req"], "IdReq", array()))), "html", null, true);
            echo "'>                          
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header btn-primary\">
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-times-circle\"></i></span></button>
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\" align=\"center\"><strong> ACTUALIZAR REQUERIMIENTO</strong></h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <div class='row'>
                                                                        <div class='col-sm-12'>
                                                                            <strong>Id Requerimiento:</strong>
                                                                            <span id='unSpan'>";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "IdReq", array()), "html", null, true);
            echo "</span> 
                                                                        </div>
                                                                        <div class='col-sm-12'>
                                                                            <strong>Modulo:</strong>
                                                                            <select class=\"form-control input-sm\" name='Modulo1' id='Modulo1'>
                                                                                <option value='' >";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "Modulo", array()), "html", null, true);
            echo "</option>
                                                                                ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["Modulos"]);
            foreach ($context['_seq'] as $context["_key"] => $context["Modulos"]) {
                echo "                                                
                                                                                    <option value='";
                // line 178
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
            // line 180
            echo "                                                                            </select>
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                            <div class=\"col-xs-12 text-center\"><div class=\"loading\"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='col-sm-12'>
                                                                            <strong>Menu:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12'>
                                                                                    <select class=\"form-control input-sm\" name='Menu1' id='Menu1'>
                                                                                        <option value='";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "IdMenus", array()), "html", null, true);
            echo "'selected>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "Menu", array()), "html", null, true);
            echo "</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class='col-sm-12'>
                                                                            <strong>Submenu:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>

                                                                                    <select class=\"form-control input-sm\" name='SubMenu1' id='SubMenu1'>
                                                                                        <option value='";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "idSubmenu", array()), "html", null, true);
            echo "'selected>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "SubMenu", array()), "html", null, true);
            echo "</option>
                                                                                    </select>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class='col-sm-12'>
                                                                            <strong>Descripcion:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                    <textarea id=\"txtArea1\" name=\"txtArea1\" rows=\"7\" cols=\"40\">";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "Descripcion", array()), "html", null, true);
            echo "</textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>        

                                                                    </div>                                                    
                                                                </div>
                                                                <div class=\"modal-footer bg-gray\">
                                                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" data-dismiss=\"modal\"><span class=\"fa fa-times-circle-o\"></span> Cancelar</button>
                                                                    <button type=\"submit\" id=\"actualizar\" class=\"btn btn-success btn-xs\"><span class=\"fa fa-check-circle\"></span> Actualizar</button>
                                                                </div>
                                                            </div>
                                                        </form>                            
                                                    </div>
                                                </div>

                                                <a class=\"btn btn-danger btn-circle\" href=\"";
            // line 230
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EliminaReq", array("idRq" => $this->getAttribute($context["Req"], "IdReq", array()))), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-trash-o fa-fw\" title=\"ELIMINAR\" aria-hidden=\"true\"></i>
                                                    <span class=\"sr-only\">ELIMINAR</span>
                                                </a><small> Eliminar</small></td>
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
        // line 236
        echo "                                </tbody>
                            </table>

                        </div>
                    </div>
                </div><!-- /.box -->
            </div>
    </section><!-- /.content -->
";
        
        $__internal_f643be92a8b281ee66a0eca70e8a22a7985d260ed18cf32346a753834512f41f->leave($__internal_f643be92a8b281ee66a0eca70e8a22a7985d260ed18cf32346a753834512f41f_prof);

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
        return array (  456 => 236,  436 => 230,  417 => 214,  401 => 203,  384 => 191,  371 => 180,  359 => 178,  353 => 177,  349 => 176,  341 => 171,  328 => 161,  323 => 159,  319 => 158,  314 => 156,  310 => 155,  306 => 154,  302 => 153,  298 => 152,  294 => 151,  290 => 150,  287 => 149,  270 => 148,  243 => 123,  231 => 121,  225 => 120,  213 => 111,  209 => 110,  198 => 102,  189 => 96,  185 => 95,  130 => 42,  118 => 40,  112 => 39,  103 => 33,  99 => 32,  94 => 30,  81 => 19,  72 => 17,  68 => 16,  63 => 13,  57 => 12,  45 => 7,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Cliente.html.twig' %}*/
/* */
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Cliente')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Ingreso Requerimientos</li>*/
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
/*                 <!-- Modal -->*/
/* */
/*                 <div id="myModal" class="modal fade" role="dialog">*/
/*                     <div class="modal-dialog modal-sm">*/
/*                         <!-- Modal content-->*/
/*                         <div class="modal-content">*/
/*                             <div class="modal-header btn-primary ">*/
/*                                 <button type="button" class="close" data-dismiss="modal"><span><i class="fa fa-times-circle"></i></span></button>*/
/*                                 <h5 class="modal-title" align="center"><strong>INGRESO NUEVO REQUERIMIENTO</strong></h5>*/
/*                             </div>*/
/*                             <form id="NuevoReqC" method="Post" class="form-horizontal" action='{{ path('GuardarReqCliente') }}'>*/
/*                                 <div class="modal-body">*/
/*                                     <div id="PathMod" data-path="{{path('Menus1')}}"></div>  */
/*                                     <div id="PathMenu" data-path="{{path('SubMenus1')}}"></div>  */
/*                                     <div class='row'>*/
/*                                         <div class='col-sm-12'>*/
/*                                             <strong>Modulo:</strong>*/
/*                                             <select class="form-control input-sm" name='Modulo' id='Modulo'>*/
/*                                                 <option value=''selected>Seleccione Modulo</option>*/
/*                                                 {% for Modulos in Modulos %}                                                */
/*                                                     <option value='{{Modulos.id }}' name='{{Modulos.Nombre }}'>{{Modulos.Nombre }}</option>*/
/*                                                 {% endfor %}*/
/*                                             </select>   */
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <div class="col-xs-12 text-center"><div class="loading"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class='col-sm-12'>*/
/*                                             <strong>Menu:</strong>*/
/*                                             <div class='row'>*/
/*                                                 <div class='col-xs-12'>*/
/*                                                     <select class="form-control input-sm" name='Menu' id='Menu'>*/
/*                                                         <option value=''selected>Seleccione Menu</option>*/
/*                                                     </select>*/
/* */
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class='col-sm-12'>*/
/*                                             <strong>Submenu:</strong>*/
/*                                             <div class='row'>*/
/*                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                     <select class="form-control input-sm" name='SubMenu' id='SubMenu'>*/
/*                                                         <option value=''selected>Seleccione SubMenu</option>*/
/*                                                     </select>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class='col-sm-12'>*/
/*                                             <strong>Descripcion:</strong>*/
/*                                             <div class='row'>*/
/*                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                     ​<textarea id="txtArea" name="txtArea" rows="7" cols="40"></textarea>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>        */
/*                                     </div>                                                    */
/*                                 </div>*/
/*                                 <div class="modal-footer">*/
/*                                     <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><span class="fa fa-times-circle-o"></span> Cancelar</button>*/
/*                                     <button type="submit" class="btn btn-success btn-xs" id="btn-envia"><span class="fa fa-check-circle"></span> Guardar</button>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>  */
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <div class='row'>*/
/*                             <div class='col-xs-6 '>Requerimientos Pendientes</div><div class='col-xs-6 text-right'><button type="button" class="btn btn-success btn-sm text-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuevo</button></div>*/
/* */
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     <div id="PathReqCosultas" data-path="{{path('RequerimientosClientes')}}"></div>*/
/*                     <div id="Actualiza" data-path="{{path('ActualizaReq1')}}"></div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <div class="col-md-12">*/
/*                                 <p class="text-info">*/
/*                                     <br>*/
/*                                     <small><strong> TOTAL DE REGISTROS: <span class="badge">{{pagination|length}}</span></strong></small>*/
/*                                     <br></p>                         */
/* */
/* */
/* */
/*                             </div>*/
/*                             <div class="col-md-12">*/
/*                                 <div class="panel panel-danger col-md-12">*/
/*                                     <div id="PathReqEliminar" data-path="{{path('EliminaReq1')}}"></div>*/
/*                                     <div id="PathReqConsultasC" data-path="{{path('RequerimientosClientes')}}"></div>  */
/*                                     <div class="panel-body">*/
/*                                         <div class="col-md-3">*/
/*                                             <strong>Buscar por modulos: <i class="fa fa-search" aria-hidden="true"></i></strong>*/
/* */
/*                                         </div>*/
/*                                         <div class="col-md-9">*/
/*                                             <select class="col-xs-5" name='ModuloC' id='ModuloC'>*/
/*                                                 <option value='0' >Todos</option>*/
/*                                                 {% for Modulos in Modulos %}   */
/*                                                     <option value='{{Modulos.id }}' name='{{Modulos.Nombre }}'>{{Modulos.Nombre }}</option>*/
/*                                                 {% endfor %}*/
/*                                             </select>  */
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/* */
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <div class="col-xs-12 text-center"><div class="loading1"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <table id="RequerimientosC" class="table table-bordered">*/
/*                                 <thead class='bg-success'>*/
/*                                     <tr> */
/*                                         <th class="text-center"><small>N°</small></th>*/
/*                                         <th class="text-center"><small>FECHA</small></th>*/
/*                                         <th class="text-center"><small>REQUEMIENTO ID</small></th>*/
/*                                         <th class="text-center"><small>ESTADO</small></th>*/
/*                                         <th class="text-center"><small>MODULO</small></th>  */
/*                                         <th class="text-center"><small>MENU</small></th>*/
/*                                         <th class="text-center"><small>SUBMENU</small></th>  */
/*                                         <th class="text-center"><small>ACCIONES</small></th>   */
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for Req in pagination%}*/
/*                                         <tr>*/
/*                                             <td><small>{{ loop.index }}</small></td>*/
/*                                             <td><small>{{ Req.Fecha |date("Y/m/d", false)}}</small></td>*/
/*                                             <td><small>Req-{{ Req.IdReq }}</small></td>*/
/*                                             <td><small>{{ Req.Estado }}</small></td>*/
/*                                             <td><small>{{ Req.Modulo}}</small></td>*/
/*                                             <td><small>{{ Req.Menu }}</small></td>*/
/*                                             <td><small>{{Req.SubMenu}}</small></td>*/
/*                                             <td class="">*/
/*                                                 <button type="button" id="actualizar" class="btn btn-xs btn-success btn-circle" data-toggle="modal" data-target="#{{Req.IdReq}}" data-whatever="@mdo"> <i class="fa fa-pencil" title="EDITAR" aria-hidden="true"></i></button><small>Editar</small> */
/*                                                 <div class="modal" id="{{Req.IdReq}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">*/
/*                                                     <div class="modal-dialog modal-sm" role="document">*/
/*                                                         <form id="Editar" method="POST" action='{{ path('ActualizaReq',{'idRq': Req.IdReq}) }}'>                          */
/*                                                             <div class="modal-content">*/
/*                                                                 <div class="modal-header btn-primary">*/
/*                                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>*/
/*                                                                     <h5 class="modal-title" id="exampleModalLabel" align="center"><strong> ACTUALIZAR REQUERIMIENTO</strong></h5>*/
/*                                                                 </div>*/
/*                                                                 <div class="modal-body">*/
/*                                                                     <div class='row'>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Id Requerimiento:</strong>*/
/*                                                                             <span id='unSpan'>{{ Req.IdReq }}</span> */
/*                                                                         </div>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Modulo:</strong>*/
/*                                                                             <select class="form-control input-sm" name='Modulo1' id='Modulo1'>*/
/*                                                                                 <option value='' >{{ Req.Modulo}}</option>*/
/*                                                                                 {% for Modulos in Modulos %}                                                */
/*                                                                                     <option value='{{Modulos.id }}' name='{{Modulos.Nombre }}'>{{Modulos.Nombre }}</option>*/
/*                                                                                 {% endfor %}*/
/*                                                                             </select>*/
/*                                                                         </div>*/
/*                                                                         <div class="form-group">*/
/*                                                                             <div class="col-xs-12 text-center"><div class="loading"></div>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Menu:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12'>*/
/*                                                                                     <select class="form-control input-sm" name='Menu1' id='Menu1'>*/
/*                                                                                         <option value='{{Req.IdMenus}}'selected>{{ Req.Menu}}</option>*/
/*                                                                                     </select>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/* */
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Submenu:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/* */
/*                                                                                     <select class="form-control input-sm" name='SubMenu1' id='SubMenu1'>*/
/*                                                                                         <option value='{{Req.idSubmenu}}'selected>{{ Req.SubMenu}}</option>*/
/*                                                                                     </select>*/
/* */
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/* */
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Descripcion:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                     <textarea id="txtArea1" name="txtArea1" rows="7" cols="40">{{ Req.Descripcion}}</textarea>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>        */
/* */
/*                                                                     </div>                                                    */
/*                                                                 </div>*/
/*                                                                 <div class="modal-footer bg-gray">*/
/*                                                                     <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><span class="fa fa-times-circle-o"></span> Cancelar</button>*/
/*                                                                     <button type="submit" id="actualizar" class="btn btn-success btn-xs"><span class="fa fa-check-circle"></span> Actualizar</button>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </form>                            */
/*                                                     </div>*/
/*                                                 </div>*/
/* */
/*                                                 <a class="btn btn-danger btn-circle" href="{{path('EliminaReq',{'idRq': Req.IdReq })}}">*/
/*                                                     <i class="fa fa-trash-o fa-fw" title="ELIMINAR" aria-hidden="true"></i>*/
/*                                                     <span class="sr-only">ELIMINAR</span>*/
/*                                                 </a><small> Eliminar</small></td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div><!-- /.box -->*/
/*             </div>*/
/*     </section><!-- /.content -->*/
/* {% endblock %}*/
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
