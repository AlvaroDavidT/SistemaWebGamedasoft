<?php

/* LoginfirstBundle:Admin:ListarEmpleados.html.twig */
class __TwigTemplate_b14ec2a47b15758b050de70540280aea1ae2ac507675e191877c71fcc42bf4d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Admin.html.twig", "LoginfirstBundle:Admin:ListarEmpleados.html.twig", 2);
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
        $__internal_ac3964c57bb28f867c57fe9fa93fb9ee1a53414b0ccd45ae59e64f97f9c3c493 = $this->env->getExtension("native_profiler");
        $__internal_ac3964c57bb28f867c57fe9fa93fb9ee1a53414b0ccd45ae59e64f97f9c3c493->enter($__internal_ac3964c57bb28f867c57fe9fa93fb9ee1a53414b0ccd45ae59e64f97f9c3c493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:ListarEmpleados.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac3964c57bb28f867c57fe9fa93fb9ee1a53414b0ccd45ae59e64f97f9c3c493->leave($__internal_ac3964c57bb28f867c57fe9fa93fb9ee1a53414b0ccd45ae59e64f97f9c3c493_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_bcd67592c3cf201741a74ad96a02ad631916d640a3371dbf31afaa50525a6cd1 = $this->env->getExtension("native_profiler");
        $__internal_bcd67592c3cf201741a74ad96a02ad631916d640a3371dbf31afaa50525a6cd1->enter($__internal_bcd67592c3cf201741a74ad96a02ad631916d640a3371dbf31afaa50525a6cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 4
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Lista Empleados</li>
        </ol>
    </section>
";
        
        $__internal_bcd67592c3cf201741a74ad96a02ad631916d640a3371dbf31afaa50525a6cd1->leave($__internal_bcd67592c3cf201741a74ad96a02ad631916d640a3371dbf31afaa50525a6cd1_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_8ec7c00e606dd86196961fec78c2482134119f91b22b632e66697b1abda6b6c5 = $this->env->getExtension("native_profiler");
        $__internal_8ec7c00e606dd86196961fec78c2482134119f91b22b632e66697b1abda6b6c5->enter($__internal_8ec7c00e606dd86196961fec78c2482134119f91b22b632e66697b1abda6b6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        // line 30
        echo "               <!-- Trigger the modal with a button -->             
               <!-- Modal -->
               <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
                   <div class=\"modal-dialog modal-sm\">

                       <!-- Modal content-->
                       <div class=\"modal-content\">
                           <div class=\"modal-header btn-primary \">
                               <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span><i class=\"fa fa-times-circle\"></i></span></button>
                               <h5 class=\"modal-title\" align=\"center\"><strong>INGRESO NUEVO EMPLEADO</strong></h5>
                           </div>                                                               
                       <form id=\"empleado\" method=\"Post\" class=\"form-horizontal\" action='";
        // line 41
        echo $this->env->getExtension('routing')->getPath("GuardarEmpleado");
        echo "'>
                           <div class=\"modal-body\">    
                               <div class='row'>
                                   <div class='col-sm-12'>
                                       <strong>Nombres: </strong>
                                       <div class='row'>
                                           <div class='col-xs-12 col-sm-12'>
                                               <input type=\"text\"  id=\"nombre\" name=\"nombre\" class=\"form-control  input-sm \"/>                                                                                </div>
                                       </div>
                                   </div>
                                    <div class='col-sm-12'>
                                       <strong>Apellidos: </strong>
                                       <div class='row'>
                                           <div class='col-xs-12 col-sm-12'>
                                               <input type=\"text\" id=\"apellidos\" name=\"apellidos\" class=\"form-control  input-sm\"/>                                                                               </div>
                                       </div>
                                   </div>
                                    <div class='col-sm-12'>
                                       <strong>Nº Cédula: </strong>
                                       <div class='row'>
                                           <div class='col-xs-12 col-sm-12'>
                                               <input type=\"text\" id=\"cedula\" name=\"cedula\" class=\"form-control  input-sm\"/>                                                                             </div>
                                       </div>

                                   </div>
                                     <div class='col-sm-12'>
                                       <strong>Telefóno: </strong>
                                       <div class='row'>
                                           <div class='col-xs-12 col-sm-12'>
                                                 <input type=\"text\" id=\"telefono\" name=\"telefono\" class=\"form-control  input-sm\"/>                                                                      </div>
                                       </div>
                                   </div>
                                     <div class='col-sm-12'>
                                       <strong>Dirección: </strong>
                                       <div class='row'>
                                           <div class='col-xs-12 col-sm-12'>
                                                <input type=\"text\" id=\"direccion\" name=\"direccion\"  class=\"form-control  input-sm\"/>                                                                             </div>
                                       </div>
                                   </div>
                                        <div class='col-sm-12'>
                                       <strong>Correo Electrónico:: </strong>
                                       <div class='row'>
                                           <div class='col-xs-12 col-sm-12'>
                                                <input type=\"email\" id=\"mail\" name=\"mail\" class=\"form-control  input-sm\"/>                                                                             </div>
                                       </div>
                                   </div>
                                   <div class='col-sm-12'>
                                       <strong>Clave Temporal: </strong>
                                       <div class='row'>
                                           <div class='col-xs-12 col-sm-12'>
                                               <input type=\"Text\" id=\"claveT\" name=\"claveT\" class=\"form-control  input-sm\"/>                                                                             </div>
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
                        <div class='col-xs-6 '><strong>Lista de Empleados</strong></div><div class='col-xs-6 text-right'><button type=\"button\" class=\"btn btn-success btn-sm text-right\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-circle\"></i> Nuevo</button></div>
                    </div>
                       <hr>
                   </div>
                   <div class=\"panel-body\">
                    <div class=\"table-responsive\">
                             <div class=\"col-md-12\">
                                <p class=\"text-info\">
                                    <br>
                                    <small><strong> TOTAL DE REGISTROS: <span class=\"badge\">";
        // line 117
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Empleados"]) ? $context["Empleados"] : $this->getContext($context, "Empleados"))), "html", null, true);
        echo "</span></strong></small>
                                    <br></p>                         
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-danger col-md-12\">
                                    <div id=\"PathReqEliminarE\" data-path=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("EliminarEmpleado1");
        echo "\"></div>
                                    <div id=\"PathBuscaCedula\" data-path=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("BuscaPorCedula");
        echo "\"></div> 
                                    <div id=\"ActualizaE\" data-path=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("GuardarEditEmpleado1");
        echo "\"></div>
                                    <div class=\"panel-body\">
                                        <div class=\"col-md-3\">
                                            <strong>Buscar por Nº de cedula: <i class=\"fa fa-search\" aria-hidden=\"true\"></i></strong>
                                        </div>
                                        <div class=\"col-md-9\">
                                            <div class=\"input-group col-sm-3\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"fa fa-qrcode\"></i>
                                                </div>
                                                <input type=\"text\" value=\"\" id=\"Ced\" name=\"ced\" class=\"form-control  input-sm\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-12 text-center\"><div class=\"loading1\"></div>
                                </div>
                            </div>
                    <table id=\"Empleados\" class=\"table table-bordered\">
                        <thead class='bg-success'>
                            <tr> 
                                <th class=\"text-center small\">Nº</th>
                                <th class=\"text-center small\">Nº CEDULA</th>
                                <th class=\"text-center small\">NOMBRE</th>
                                <th class=\"text-center small\">APELLIDO</th>
                                <th class=\"text-center small\">EMAIL</th>
                                <th class=\"text-center small\">TELEFONO</th>
                                 <th class=\"text-center small\">DIRECCION</th>
                                <th class=\"text-center small\">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Empleados"]) ? $context["Empleados"] : $this->getContext($context, "Empleados")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["EmpleadosLt"]) {
            // line 159
            echo "                                <tr>
                                    <td class=\"text-center small\">";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-center small\">";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "CIdentidad", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-center small\">";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "Nombre", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-center small\">";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "Apellido", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-center small\">";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "Email", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-center small\">";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "Telefono", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-center small\">";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "Direccion", array()), "html", null, true);
            echo "</td>
                                    <td class=\"col-xs-2\">
                                        <!-- MODAL EDITAR EMPLEADOS -->
                                         <button type=\"button\" id=\"actualizar\" class=\"btn btn-xs btn-success btn-circle\" data-toggle=\"modal\" data-target=\"#";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "id", array()), "html", null, true);
            echo "\" data-whatever=\"@mdo\"> <i class=\"fa fa-pencil\" title=\"EDITAR\" aria-hidden=\"true\"></i></button><small>Editar</small> 
                                                    <div class=\"modal\" id=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\">
                                                    <div class=\"modal-dialog modal-sm\" role=\"document\">
                                                        <form id=\"Editar\" method=\"POST\" action='";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GuardarEditEmpleado", array("idEU" => $this->getAttribute($context["EmpleadosLt"], "id", array()))), "html", null, true);
            echo "'>                          
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header btn-primary\">
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-times-circle\"></i></span></button>
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\" align=\"center\"><strong> ACTUALIZAR EMPLEADO</strong></h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <div class='row'>
                                                                        <div class='col-sm-12'>
                                                                            <strong>Nº cedula: </strong>
                                                                             <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                  <input type=\"text\" value=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "CIdentidad", array()), "html", null, true);
            echo "\" id=\"Cedula\" name=\"Cedula\" class=\"form-control  input-sm\"/>
                                                                                </div>
                                                                            </div>                                                                         
                                                                        </div>
                                                                        <div class='col-sm-12'>                                                                          
                                                                            <strong>Nombre:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                  <input type=\"text\" value=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "Nombre", array()), "html", null, true);
            echo "\" id=\"Nombre\" name=\"Nombre\" class=\"form-control  input-sm\"/>
                                                                                </div>
                                                                            </div>                                                                    
                                                                        </div>
                                                                       <div class='col-sm-12'>
                                                                            <strong>Apellido:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                  <input type=\"text\" value=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "Apellido", array()), "html", null, true);
            echo "\" id=\"Apellido\" name=\"Apellido\" class=\"form-control  input-sm\"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='col-sm-12'>
                                                                           <strong>Email:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                  <input type=\"text\" value=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "Email", array()), "html", null, true);
            echo "\" id=\"Email\" name=\"Email\" class=\"form-control  input-sm\"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='col-sm-12'>
                                                                            <strong>Telefono:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                  <input type=\"text\" value=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "Telefono", array()), "html", null, true);
            echo "\" id=\"TelefonoE\" name=\"TelefonoE\" class=\"form-control  input-sm\"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>  
                                                                        <div class='col-sm-12'>
                                                                            <strong>Direccion:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                  <input type=\"text\" value=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "Direccion", array()), "html", null, true);
            echo "\" id=\"DireccionE\" name=\"DireccionE\" class=\"form-control  input-sm\"/>
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
            // line 239
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EliminarEmpleado", array("idED" => $this->getAttribute($context["EmpleadosLt"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['EmpleadosLt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "                        </tbody>
                    </table>
                                   </div>
                               </div>
                           </div>
                       </div><!-- /.box -->
                   </div>
               </section><!-- /.content -->
            
               ";
        
        $__internal_8ec7c00e606dd86196961fec78c2482134119f91b22b632e66697b1abda6b6c5->leave($__internal_8ec7c00e606dd86196961fec78c2482134119f91b22b632e66697b1abda6b6c5_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Admin:ListarEmpleados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 243,  418 => 239,  400 => 224,  389 => 216,  378 => 208,  367 => 200,  356 => 192,  345 => 184,  330 => 172,  325 => 170,  321 => 169,  315 => 166,  311 => 165,  307 => 164,  303 => 163,  299 => 162,  295 => 161,  291 => 160,  288 => 159,  271 => 158,  234 => 124,  230 => 123,  226 => 122,  218 => 117,  139 => 41,  126 => 30,  117 => 28,  112 => 27,  102 => 24,  97 => 23,  87 => 20,  82 => 19,  72 => 16,  68 => 15,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Admin.html.twig' %}*/
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Admin')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Lista Empleados</li>*/
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
/*                 {% endfor%}*/
/*                <!-- Trigger the modal with a button -->             */
/*                <!-- Modal -->*/
/*                <div id="myModal" class="modal fade" role="dialog">*/
/*                    <div class="modal-dialog modal-sm">*/
/* */
/*                        <!-- Modal content-->*/
/*                        <div class="modal-content">*/
/*                            <div class="modal-header btn-primary ">*/
/*                                <button type="button" class="close" data-dismiss="modal"><span><i class="fa fa-times-circle"></i></span></button>*/
/*                                <h5 class="modal-title" align="center"><strong>INGRESO NUEVO EMPLEADO</strong></h5>*/
/*                            </div>                                                               */
/*                        <form id="empleado" method="Post" class="form-horizontal" action='{{ path('GuardarEmpleado') }}'>*/
/*                            <div class="modal-body">    */
/*                                <div class='row'>*/
/*                                    <div class='col-sm-12'>*/
/*                                        <strong>Nombres: </strong>*/
/*                                        <div class='row'>*/
/*                                            <div class='col-xs-12 col-sm-12'>*/
/*                                                <input type="text"  id="nombre" name="nombre" class="form-control  input-sm "/>                                                                                </div>*/
/*                                        </div>*/
/*                                    </div>*/
/*                                     <div class='col-sm-12'>*/
/*                                        <strong>Apellidos: </strong>*/
/*                                        <div class='row'>*/
/*                                            <div class='col-xs-12 col-sm-12'>*/
/*                                                <input type="text" id="apellidos" name="apellidos" class="form-control  input-sm"/>                                                                               </div>*/
/*                                        </div>*/
/*                                    </div>*/
/*                                     <div class='col-sm-12'>*/
/*                                        <strong>Nº Cédula: </strong>*/
/*                                        <div class='row'>*/
/*                                            <div class='col-xs-12 col-sm-12'>*/
/*                                                <input type="text" id="cedula" name="cedula" class="form-control  input-sm"/>                                                                             </div>*/
/*                                        </div>*/
/* */
/*                                    </div>*/
/*                                      <div class='col-sm-12'>*/
/*                                        <strong>Telefóno: </strong>*/
/*                                        <div class='row'>*/
/*                                            <div class='col-xs-12 col-sm-12'>*/
/*                                                  <input type="text" id="telefono" name="telefono" class="form-control  input-sm"/>                                                                      </div>*/
/*                                        </div>*/
/*                                    </div>*/
/*                                      <div class='col-sm-12'>*/
/*                                        <strong>Dirección: </strong>*/
/*                                        <div class='row'>*/
/*                                            <div class='col-xs-12 col-sm-12'>*/
/*                                                 <input type="text" id="direccion" name="direccion"  class="form-control  input-sm"/>                                                                             </div>*/
/*                                        </div>*/
/*                                    </div>*/
/*                                         <div class='col-sm-12'>*/
/*                                        <strong>Correo Electrónico:: </strong>*/
/*                                        <div class='row'>*/
/*                                            <div class='col-xs-12 col-sm-12'>*/
/*                                                 <input type="email" id="mail" name="mail" class="form-control  input-sm"/>                                                                             </div>*/
/*                                        </div>*/
/*                                    </div>*/
/*                                    <div class='col-sm-12'>*/
/*                                        <strong>Clave Temporal: </strong>*/
/*                                        <div class='row'>*/
/*                                            <div class='col-xs-12 col-sm-12'>*/
/*                                                <input type="Text" id="claveT" name="claveT" class="form-control  input-sm"/>                                                                             </div>*/
/*                                        </div>*/
/*                                    </div>*/
/*                                </div>*/
/*                               </div>*/
/*                            <div class="modal-footer">*/
/*                                <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><span class="fa fa-times-circle-o"></span> Cancelar</button>*/
/*                                <button type="submit" class="btn btn-success btn-xs" id="btn-envia"><span class="fa fa-check-circle"></span> Guardar</button>*/
/*                            </div>*/
/*                            </form>*/
/*                        </div>*/
/* */
/*                    </div>*/
/*                </div>  */
/*                <div class="panel panel-primary">*/
/*                    <div class="panel-heading">*/
/*                     <div class='row'>*/
/*                         <div class='col-xs-6 '><strong>Lista de Empleados</strong></div><div class='col-xs-6 text-right'><button type="button" class="btn btn-success btn-sm text-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuevo</button></div>*/
/*                     </div>*/
/*                        <hr>*/
/*                    </div>*/
/*                    <div class="panel-body">*/
/*                     <div class="table-responsive">*/
/*                              <div class="col-md-12">*/
/*                                 <p class="text-info">*/
/*                                     <br>*/
/*                                     <small><strong> TOTAL DE REGISTROS: <span class="badge">{{Empleados|length}}</span></strong></small>*/
/*                                     <br></p>                         */
/*                             </div>*/
/*                             <div class="col-md-12">*/
/*                                 <div class="panel panel-danger col-md-12">*/
/*                                     <div id="PathReqEliminarE" data-path="{{path('EliminarEmpleado1')}}"></div>*/
/*                                     <div id="PathBuscaCedula" data-path="{{path('BuscaPorCedula')}}"></div> */
/*                                     <div id="ActualizaE" data-path="{{path('GuardarEditEmpleado1')}}"></div>*/
/*                                     <div class="panel-body">*/
/*                                         <div class="col-md-3">*/
/*                                             <strong>Buscar por Nº de cedula: <i class="fa fa-search" aria-hidden="true"></i></strong>*/
/*                                         </div>*/
/*                                         <div class="col-md-9">*/
/*                                             <div class="input-group col-sm-3">*/
/*                                                 <div class="input-group-addon">*/
/*                                                     <i class="fa fa-qrcode"></i>*/
/*                                                 </div>*/
/*                                                 <input type="text" value="" id="Ced" name="ced" class="form-control  input-sm"/>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <div class="col-xs-12 text-center"><div class="loading1"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                     <table id="Empleados" class="table table-bordered">*/
/*                         <thead class='bg-success'>*/
/*                             <tr> */
/*                                 <th class="text-center small">Nº</th>*/
/*                                 <th class="text-center small">Nº CEDULA</th>*/
/*                                 <th class="text-center small">NOMBRE</th>*/
/*                                 <th class="text-center small">APELLIDO</th>*/
/*                                 <th class="text-center small">EMAIL</th>*/
/*                                 <th class="text-center small">TELEFONO</th>*/
/*                                  <th class="text-center small">DIRECCION</th>*/
/*                                 <th class="text-center small">ACCIONES</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for EmpleadosLt in Empleados %}*/
/*                                 <tr>*/
/*                                     <td class="text-center small">{{ loop.index }}</td>*/
/*                                     <td class="text-center small">{{ EmpleadosLt.CIdentidad }}</td>*/
/*                                     <td class="text-center small">{{ EmpleadosLt.Nombre }}</td>*/
/*                                     <td class="text-center small">{{ EmpleadosLt.Apellido }}</td>*/
/*                                     <td class="text-center small">{{ EmpleadosLt.Email }}</td>*/
/*                                     <td class="text-center small">{{ EmpleadosLt.Telefono }}</td>*/
/*                                     <td class="text-center small">{{ EmpleadosLt.Direccion }}</td>*/
/*                                     <td class="col-xs-2">*/
/*                                         <!-- MODAL EDITAR EMPLEADOS -->*/
/*                                          <button type="button" id="actualizar" class="btn btn-xs btn-success btn-circle" data-toggle="modal" data-target="#{{EmpleadosLt.id }}" data-whatever="@mdo"> <i class="fa fa-pencil" title="EDITAR" aria-hidden="true"></i></button><small>Editar</small> */
/*                                                     <div class="modal" id="{{ EmpleadosLt.id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">*/
/*                                                     <div class="modal-dialog modal-sm" role="document">*/
/*                                                         <form id="Editar" method="POST" action='{{ path('GuardarEditEmpleado',{'idEU':  EmpleadosLt.id }) }}'>                          */
/*                                                             <div class="modal-content">*/
/*                                                                 <div class="modal-header btn-primary">*/
/*                                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>*/
/*                                                                     <h5 class="modal-title" id="exampleModalLabel" align="center"><strong> ACTUALIZAR EMPLEADO</strong></h5>*/
/*                                                                 </div>*/
/*                                                                 <div class="modal-body">*/
/*                                                                     <div class='row'>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Nº cedula: </strong>*/
/*                                                                              <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                   <input type="text" value="{{ EmpleadosLt.CIdentidad }}" id="Cedula" name="Cedula" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>                                                                         */
/*                                                                         </div>*/
/*                                                                         <div class='col-sm-12'>                                                                          */
/*                                                                             <strong>Nombre:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                   <input type="text" value="{{EmpleadosLt.Nombre }}" id="Nombre" name="Nombre" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>                                                                    */
/*                                                                         </div>*/
/*                                                                        <div class='col-sm-12'>*/
/*                                                                             <strong>Apellido:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                   <input type="text" value="{{EmpleadosLt.Apellido }}" id="Apellido" name="Apellido" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                            <strong>Email:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                   <input type="text" value="{{ EmpleadosLt.Email }}" id="Email" name="Email" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Telefono:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                   <input type="text" value="{{EmpleadosLt.Telefono }}" id="TelefonoE" name="TelefonoE" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>  */
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Direccion:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                   <input type="text" value="{{EmpleadosLt.Direccion }}" id="DireccionE" name="DireccionE" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                       </div>          */
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
/*                                         <!-- FIN EDITAR EMPLEADOS -->    */
/*                                         <a class="btn btn-danger btn-circle" href="{{path('EliminarEmpleado',{'idED': EmpleadosLt.id })}}"><i class="fa fa-trash-o fa-fw" title="ELIMINAR" aria-hidden="true"></i> <span class="sr-only">ELIMINAR</span></a><small>Eliminar</small>*/
/*                                     </td> */
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                                    </div>*/
/*                                </div>*/
/*                            </div>*/
/*                        </div><!-- /.box -->*/
/*                    </div>*/
/*                </section><!-- /.content -->*/
/*             */
/*                {% endblock %}*/
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
/* */
/* */
/* */
/* */
/* */
/* */
