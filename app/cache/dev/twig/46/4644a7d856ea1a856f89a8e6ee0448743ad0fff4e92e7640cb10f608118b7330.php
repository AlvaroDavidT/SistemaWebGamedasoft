<?php

/* LoginfirstBundle:Admin:ListarModulos.html.twig */
class __TwigTemplate_086025154a1cd6492a7ffd45d026e97a2a1abc9eb7e4c72557dba3a0a9ed534b extends Twig_Template
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
        $__internal_700fc25df627b6dfe96ea5557ded16295ada85f3c4fc4b1ac7c455fdf30a539a = $this->env->getExtension("native_profiler");
        $__internal_700fc25df627b6dfe96ea5557ded16295ada85f3c4fc4b1ac7c455fdf30a539a->enter($__internal_700fc25df627b6dfe96ea5557ded16295ada85f3c4fc4b1ac7c455fdf30a539a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:ListarModulos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_700fc25df627b6dfe96ea5557ded16295ada85f3c4fc4b1ac7c455fdf30a539a->leave($__internal_700fc25df627b6dfe96ea5557ded16295ada85f3c4fc4b1ac7c455fdf30a539a_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_d9ce5a9c13e52a4913db1d6cffdeb35411f51fdfcbce2cdb02b948db4b8213e9 = $this->env->getExtension("native_profiler");
        $__internal_d9ce5a9c13e52a4913db1d6cffdeb35411f51fdfcbce2cdb02b948db4b8213e9->enter($__internal_d9ce5a9c13e52a4913db1d6cffdeb35411f51fdfcbce2cdb02b948db4b8213e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

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
        
        $__internal_d9ce5a9c13e52a4913db1d6cffdeb35411f51fdfcbce2cdb02b948db4b8213e9->leave($__internal_d9ce5a9c13e52a4913db1d6cffdeb35411f51fdfcbce2cdb02b948db4b8213e9_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_2857e346cc0170bd9a5e3ef9641316f9e2d62120655bc59c0fe5a2145285a977 = $this->env->getExtension("native_profiler");
        $__internal_2857e346cc0170bd9a5e3ef9641316f9e2d62120655bc59c0fe5a2145285a977->enter($__internal_2857e346cc0170bd9a5e3ef9641316f9e2d62120655bc59c0fe5a2145285a977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 12
        echo "    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
               ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "MensajeUpdate"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "                    <div class=\"alert alert-success\"><strong><center>";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "!!!!</center></strong></div>
                  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "                    <div class=\"alert alert-success\"><strong><center>";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "!!!!</center></strong></div>
                  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "MensajeError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "                    <div class=\"alert alert-danger\"><strong><center>";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "!!!!</center></strong></div>
                  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                 ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "MensajeExitoso"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "                     <div class=\"alert alert-success\"><strong><center>";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "!!!!</center></strong></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  <!-- Trigger the modal with a button -->

                <!-- Modal -->
                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">

                        <!-- Modal content-->
                        <div class=\"modal-content\">
                            <div class=\"modal-header btn-primary \">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span><i class=\"fa fa-times-circle\"></i></span></button>
                                <h5 class=\"modal-title\" align=\"center\"><strong>INGRESO NUEVO MODULO</strong></h5>
                            </div>
                            <form id=\"NuevoModulo\" method=\"Post\" class=\"form-horizontal\" action='";
        // line 41
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
                            <div class='col-xs-6 '><strong>Lista de Módulos</strong></div><div class='col-xs-6 text-right'><button type=\"button\" class=\"btn btn-success btn-sm text-right\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-circle\"></i> Nuevo</button></div>
                        </div>
                        <hr>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <div class=\"col-md-12\">
                                <p class=\"text-info\">
                                    <br>
                                    <small><strong>TOTAL DE REGISTROS: <span class='badge'>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</span></strong></small>
                                    <br></p>                         
                            </div>
                                    <div id=\"ActualizaModuloA\" data-path=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("GuardarEditModuloA1");
        echo "\"></div>
                                    
                            <div class=\"form-group\">
                                <div class=\"col-xs-12 text-center\"><div class=\"loading1\"></div>
                                </div>
                            </div>        
                            <table id=\"example2\" class=\"table table-hover table-bordered\">
                                <thead class='bg-success'>
                                    <tr> 
                                        <th class=\"text-center small\">Nº</th>
                                        <th class=\"text-center small\">MODULO</th>
                                        <th class=\"text-center small\">DESCRIPCION</th>
                                        <th class=\"text-center small\">ACTIVAR/DESACTIVAR</th>
                                        <th class=\"text-center small col-xs-2\">ACCIONES</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 105
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
        foreach ($context['_seq'] as $context["_key"] => $context["Modulos"]) {
            // line 106
            echo "                                        <tr>
                                            <td class=\"text-center small\">";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "Nombre", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "Descripcion", array()), "html", null, true);
            echo "</td>  
                                            <td class='text-center small'> 
                                                ";
            // line 111
            if (($this->getAttribute($context["Modulos"], "Estado", array()) == 1)) {
                // line 112
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DesactivaMod", array("idMod" => $this->getAttribute($context["Modulos"], "id", array()))), "html", null, true);
                echo "\" class='btn btn-xs btn-success'>Activado</a>
                                                ";
            } else {
                // line 114
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ActivaMod", array("idMod" => $this->getAttribute($context["Modulos"], "id", array()))), "html", null, true);
                echo "\" class='btn btn-xs btn-danger'>Desactivado</a>
                                                ";
            }
            // line 116
            echo "                                            </td>
                                            <td>
                                                <button type=\"button\" id=\"actualizar\" class=\"btn btn-xs btn-success btn-circle\" data-toggle=\"modal\" data-target=\"#";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "id", array()), "html", null, true);
            echo "\" data-whatever=\"@mdo\"> <i class=\"fa fa-pencil\" title=\"EDITAR\" aria-hidden=\"true\"></i></button><small>Editar</small> 
                                                    <div class=\"modal\" id=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\">
                                                    <div class=\"modal-dialog modal-sm\" role=\"document\">
                                                        <form id=\"Editar\" method=\"POST\" action='";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GuardarEditModuloA", array("idModulo" => $this->getAttribute($context["Modulos"], "id", array()))), "html", null, true);
            echo "'>                          
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header btn-primary\">
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-times-circle\"></i></span></button>
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\" align=\"center\"><strong> ACTUALIZAR MODULO</strong></h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <div class='row'>
                                                                       
                                                                        <div class='col-sm-12'>                                                                          
                                                                            <strong>Nombre:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                  <input type=\"text\" value=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "Nombre", array()), "html", null, true);
            echo "\" id=\"ModNombre\" name=\"ModNombre\" class=\"form-control  input-sm\"/>
                                                                                </div>
                                                                            </div>                                                                    
                                                                        </div>
                                                                       <div class='col-sm-12'>
                                                                            <strong>Descripcion:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                  <input type=\"text\" value=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "Descripcion", array()), "html", null, true);
            echo "\" id=\"ModDescripcion\" name=\"ModDescripcion\" class=\"form-control  input-sm\"/>
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
                                        <!-- FIN EDITAR EMPLEADOS -->  
                                          <a class=\"btn btn-danger btn-circle\" href=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EliminarModulo", array("idEM" => $this->getAttribute($context["Modulos"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-trash-o fa-fw\" title=\"ELIMINAR\" aria-hidden=\"true\"></i> <span class=\"sr-only\">ELIMINAR</span></a><small>Eliminar</small>
                                  
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modulos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                                            </tbody>
                                        </table>
                                        <div class=\"navigation\">
                                            ";
        // line 167
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
        
        $__internal_2857e346cc0170bd9a5e3ef9641316f9e2d62120655bc59c0fe5a2145285a977->leave($__internal_2857e346cc0170bd9a5e3ef9641316f9e2d62120655bc59c0fe5a2145285a977_prof);

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
        return array (  344 => 167,  339 => 164,  319 => 158,  300 => 142,  289 => 134,  273 => 121,  268 => 119,  264 => 118,  260 => 116,  254 => 114,  248 => 112,  246 => 111,  241 => 109,  237 => 108,  233 => 107,  230 => 106,  213 => 105,  192 => 87,  186 => 84,  140 => 41,  126 => 29,  117 => 28,  112 => 27,  102 => 24,  97 => 23,  87 => 20,  82 => 19,  72 => 16,  68 => 15,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
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
/*                {% for flashMessage in app.session.flashbag.get('MensajeUpdate')%}*/
/*                     <div class="alert alert-success"><strong><center>{{ flashMessage }}!!!!</center></strong></div>*/
/*                   */
/*                 {% endfor%}*/
/*                 {% for flashMessage in app.session.flashbag.get('mensaje')%}*/
/*                     <div class="alert alert-success"><strong><center>{{ flashMessage }}!!!!</center></strong></div>*/
/*                   */
/*                 {% endfor%}*/
/*                 {% for flashMessage in app.session.flashbag.get('MensajeError')%}*/
/*                     <div class="alert alert-danger"><strong><center>{{ flashMessage }}!!!!</center></strong></div>*/
/*                   */
/*                 {% endfor%}*/
/*                  {% for flashMessage in app.session.flashbag.get('MensajeExitoso')%}*/
/*                      <div class="alert alert-success"><strong><center>{{ flashMessage }}!!!!</center></strong></div>*/
/*                 {% endfor%}  <!-- Trigger the modal with a button -->*/
/* */
/*                 <!-- Modal -->*/
/*                 <div id="myModal" class="modal fade" role="dialog">*/
/*                     <div class="modal-dialog">*/
/* */
/*                         <!-- Modal content-->*/
/*                         <div class="modal-content">*/
/*                             <div class="modal-header btn-primary ">*/
/*                                 <button type="button" class="close" data-dismiss="modal"><span><i class="fa fa-times-circle"></i></span></button>*/
/*                                 <h5 class="modal-title" align="center"><strong>INGRESO NUEVO MODULO</strong></h5>*/
/*                             </div>*/
/*                             <form id="NuevoModulo" method="Post" class="form-horizontal" action='{{ path('GuardarModulo') }}'>*/
/* */
/*                                 <div class="modal-body">                               */
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-3 control-label" for="ModNombre">Nombre:</label>*/
/*                                         <div class="input-group col-sm-8">*/
/*                                             <div class="input-group-addon">*/
/*                                                 <i class="fa fa-pencil"></i>*/
/*                                             </div>*/
/*                                             <input type="Text" id="ModNombre" name="ModNombre" class="form-control  input-sm"/>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-3 control-label" for="ModDescripcion">Descripcion:</label>*/
/*                                         <div class="input-group col-sm-8">*/
/*                                             <div class="input-group-addon">*/
/*                                                 <i class="fa fa-align-justify"></i>*/
/*                                             </div>*/
/*                                             <input type='Text' id="ModDescripcion" name="ModDescripcion" class="form-control  input-sm"/>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="modal-footer">*/
/*                                     <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><span class="fa fa-times-circle-o"></span> Cancelar</button>*/
/*                                     <button type="submit" class="btn btn-success btn-xs" id="btn-envia"><span class="fa fa-check-circle"></span> Guardar</button>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>  */
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <div class='row'>*/
/*                             <div class='col-xs-6 '><strong>Lista de Módulos</strong></div><div class='col-xs-6 text-right'><button type="button" class="btn btn-success btn-sm text-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuevo</button></div>*/
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <div class="col-md-12">*/
/*                                 <p class="text-info">*/
/*                                     <br>*/
/*                                     <small><strong>TOTAL DE REGISTROS: <span class='badge'>{{pagination.getTotalItemCount}}</span></strong></small>*/
/*                                     <br></p>                         */
/*                             </div>*/
/*                                     <div id="ActualizaModuloA" data-path="{{path('GuardarEditModuloA1')}}"></div>*/
/*                                     */
/*                             <div class="form-group">*/
/*                                 <div class="col-xs-12 text-center"><div class="loading1"></div>*/
/*                                 </div>*/
/*                             </div>        */
/*                             <table id="example2" class="table table-hover table-bordered">*/
/*                                 <thead class='bg-success'>*/
/*                                     <tr> */
/*                                         <th class="text-center small">Nº</th>*/
/*                                         <th class="text-center small">MODULO</th>*/
/*                                         <th class="text-center small">DESCRIPCION</th>*/
/*                                         <th class="text-center small">ACTIVAR/DESACTIVAR</th>*/
/*                                         <th class="text-center small col-xs-2">ACCIONES</th>*/
/*                                         */
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for Modulos in pagination %}*/
/*                                         <tr>*/
/*                                             <td class="text-center small">{{ loop.index }}</td>*/
/*                                             <td class="text-center small">{{ Modulos.Nombre }}</td>*/
/*                                             <td class="text-center small">{{ Modulos.Descripcion }}</td>  */
/*                                             <td class='text-center small'> */
/*                                                 {% if Modulos.Estado == 1%}*/
/*                                                     <a href="{{path('DesactivaMod',{'idMod': Modulos.id })}}" class='btn btn-xs btn-success'>Activado</a>*/
/*                                                 {% else %}*/
/*                                                     <a href="{{path('ActivaMod',{'idMod': Modulos.id })}}" class='btn btn-xs btn-danger'>Desactivado</a>*/
/*                                                 {% endif %}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 <button type="button" id="actualizar" class="btn btn-xs btn-success btn-circle" data-toggle="modal" data-target="#{{Modulos.id }}" data-whatever="@mdo"> <i class="fa fa-pencil" title="EDITAR" aria-hidden="true"></i></button><small>Editar</small> */
/*                                                     <div class="modal" id="{{ Modulos.id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">*/
/*                                                     <div class="modal-dialog modal-sm" role="document">*/
/*                                                         <form id="Editar" method="POST" action='{{ path('GuardarEditModuloA',{'idModulo':  Modulos.id }) }}'>                          */
/*                                                             <div class="modal-content">*/
/*                                                                 <div class="modal-header btn-primary">*/
/*                                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>*/
/*                                                                     <h5 class="modal-title" id="exampleModalLabel" align="center"><strong> ACTUALIZAR MODULO</strong></h5>*/
/*                                                                 </div>*/
/*                                                                 <div class="modal-body">*/
/*                                                                     <div class='row'>*/
/*                                                                        */
/*                                                                         <div class='col-sm-12'>                                                                          */
/*                                                                             <strong>Nombre:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                   <input type="text" value="{{Modulos.Nombre }}" id="ModNombre" name="ModNombre" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>                                                                    */
/*                                                                         </div>*/
/*                                                                        <div class='col-sm-12'>*/
/*                                                                             <strong>Descripcion:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                   <input type="text" value="{{Modulos.Descripcion }}" id="ModDescripcion" name="ModDescripcion" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                        */
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
/*                                         <!-- FIN EDITAR EMPLEADOS -->  */
/*                                           <a class="btn btn-danger btn-circle" href="{{path('EliminarModulo',{'idEM': Modulos.id })}}"><i class="fa fa-trash-o fa-fw" title="ELIMINAR" aria-hidden="true"></i> <span class="sr-only">ELIMINAR</span></a><small>Eliminar</small>*/
/*                                   */
/*                                             </td>*/
/*                                             */
/*                                         </tr>*/
/*                                             {% endfor %}*/
/*                                             </tbody>*/
/*                                         </table>*/
/*                                         <div class="navigation">*/
/*                                             {{knp_pagination_render(pagination)}}*/
/* */
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!-- /.box -->*/
/*                     </div>*/
/*                 </section><!-- /.content -->*/
/*                 {% endblock %}*/
/* */
