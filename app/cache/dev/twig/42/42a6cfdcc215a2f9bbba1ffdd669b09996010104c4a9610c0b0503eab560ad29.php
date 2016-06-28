<?php

/* LoginfirstBundle:Admin:ListarEmpleados.html.twig */
class __TwigTemplate_5209c8f98e4977db6771789c53565e643e18a27c986b54783cb0d6b904e88ff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout_Admin.html.twig", "LoginfirstBundle:Admin:ListarEmpleados.html.twig", 2);
        $this->blocks = array(
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::layout_Admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16db75706eb54900cbfda15fd369c30b5a0863de69fc951a920157cb640a4f54 = $this->env->getExtension("native_profiler");
        $__internal_16db75706eb54900cbfda15fd369c30b5a0863de69fc951a920157cb640a4f54->enter($__internal_16db75706eb54900cbfda15fd369c30b5a0863de69fc951a920157cb640a4f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:ListarEmpleados.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16db75706eb54900cbfda15fd369c30b5a0863de69fc951a920157cb640a4f54->leave($__internal_16db75706eb54900cbfda15fd369c30b5a0863de69fc951a920157cb640a4f54_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_13bcc7061cb1964085f35dd09c2d90437a664eb370661c324f51ebeb561e138a = $this->env->getExtension("native_profiler");
        $__internal_13bcc7061cb1964085f35dd09c2d90437a664eb370661c324f51ebeb561e138a->enter($__internal_13bcc7061cb1964085f35dd09c2d90437a664eb370661c324f51ebeb561e138a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

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
        
        $__internal_13bcc7061cb1964085f35dd09c2d90437a664eb370661c324f51ebeb561e138a->leave($__internal_13bcc7061cb1964085f35dd09c2d90437a664eb370661c324f51ebeb561e138a_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_c581e42581dcb0050de4053b21367dd5f1705b7b5b7ec90397899d2977a5ef9f = $this->env->getExtension("native_profiler");
        $__internal_c581e42581dcb0050de4053b21367dd5f1705b7b5b7ec90397899d2977a5ef9f->enter($__internal_c581e42581dcb0050de4053b21367dd5f1705b7b5b7ec90397899d2977a5ef9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        // line 18
        echo "               <!-- Trigger the modal with a button -->
              
               <!-- Modal -->
               <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
                   <div class=\"modal-dialog\">

                       <!-- Modal content-->
                       <div class=\"modal-content\">
                           <div class=\"modal-header btn-primary \">
                               <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span><i class=\"fa fa-times-circle\"></i></span></button>
                               <h5 class=\"modal-title\">Nuevo Empleado</h5>
                           </div>
                           
                
                           
                       <form id=\"empleado\" method=\"Post\" class=\"form-horizontal\" action='";
        // line 33
        echo $this->env->getExtension('routing')->getPath("GuardarEmpleado");
        echo "'>
                           <div class=\"modal-body\">                              
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for='nombre'>Nombres:</label>
                        <div class=\"input-group col-sm-5\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-pencil\"></i>
                            </div>
                            <input type=\"text\"  id=\"nombre\" name=\"nombre\" class=\"form-control  input-sm \"/>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for='apellidos'>Apellidos:</label>
                        <div class=\"input-group col-sm-5\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-pencil\"></i>
                            </div>
                            <input type=\"text\" id=\"apellidos\" name=\"apellidos\" class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for=\"cedula\">Cédula Identidad:</label>
                        <div class=\"input-group col-sm-5\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-qrcode\"></i>
                            </div>
                            <input type=\"text\" id=\"cedula\" name=\"cedula\" class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for=\"genero\">Seleccione Género:</label>
                        <div class=\"input-group col-sm-4\">
                            <select class=\"form-control input-sm\" name='genero' id='genero' >
                             <option value=''selected>Seleccione Genero</option>
                                <option value='1'>Femenino</option>
                                <option value='0'>Masculino</option>

                            </select>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for=\"telefono\">Telefóno:</label>
                        <div class=\"input-group col-sm-3\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-phone\"></i>
                            </div>
                            <input type=\"text\" id=\"telefono\" name=\"telefono\" class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for=\"direccion\">Dirección:</label>
                        <div class=\"input-group col-sm-6\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-map-marker\"></i>
                            </div>
                            <input type=\"text\" id=\"direccion\" name=\"direccion\"  class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for=\"mail\">Correo Electrónico:</label>
                        <div class=\"input-group col-sm-4\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-envelope\"></i>
                            </div>
                            <input type=\"email\" id=\"mail\" name=\"mail\" class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                   <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">Departamento:</label>
                        <div class=\"input-group col-sm-4\">
                            <select class=\"form-control input-sm\" name='departamento' id='departamento'>
                               
                                <option value=''selected>Seleccione Departamento</option>
                                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Departamentos"]) ? $context["Departamentos"] : $this->getContext($context, "Departamentos")));
        foreach ($context['_seq'] as $context["_key"] => $context["Departamento"]) {
            echo "                                                
                                    <option value='";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["Departamento"], "id", array()), "html", null, true);
            echo "' name='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Departamento"], "Nombre", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Departamento"], "Nombre", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Departamento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
                            </select>
                        </div>
                    </div> 
                              <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"claveT\">Clave Temporal:</label>
                       <div class=\"input-group col-sm-4\">
                           <div class=\"input-group-addon\">
                               <i class=\"fa fa-key\"></i>
                           </div>
                           <input type=\"Text\" id=\"claveT\" name=\"claveT\" class=\"form-control  input-sm\"/>
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
                        <div class='col-xs-6 '>Lista de Empleados</div><div class='col-xs-6 text-right'><button type=\"button\" class=\"btn btn-success btn-sm text-right\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-circle\"></i> Nuevo</button></div>
                    </div>
                       <hr>
                   </div>
                   <div class=\"panel-body\">
                       <div class=\"table-responsive\">
                    <table id=\"example2\" class=\"table table-hover table-condensed\">
                        <thead class='bg-success'>
                            <tr> 
                                <th>#</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>CEDULA DE IDENTIDAD</th>
                                <th>EMAIL</th>
                                <th>TELEFONO</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 157
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
            // line 158
            echo "                                <tr>
                                    <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "Nombre", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "Apellido", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "CIdentidad", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "Email", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["EmpleadosLt"], "Telefono", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VerEmpleado", array("idE" => $this->getAttribute($context["EmpleadosLt"], "id", array()))), "html", null, true);
            echo "\" class='btn btn-xs btn-success'>Ver</a>
                                        <a href=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EditarEmpleado", array("idE" => $this->getAttribute($context["EmpleadosLt"], "id", array()))), "html", null, true);
            echo "\"  class='btn btn-xs btn-primary'>Editar</a>
                                        <a href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EliminarEmpleado", array("idED" => $this->getAttribute($context["EmpleadosLt"], "id", array()))), "html", null, true);
            echo "\"  class='btn btn-xs btn-danger'>Eliminar</a>
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
        // line 172
        echo "                        </tbody>
                    </table>
                                   </div>
                               </div>
                           </div>
                       </div><!-- /.box -->
                   </div>
               </section><!-- /.content -->
            
               ";
        
        $__internal_c581e42581dcb0050de4053b21367dd5f1705b7b5b7ec90397899d2977a5ef9f->leave($__internal_c581e42581dcb0050de4053b21367dd5f1705b7b5b7ec90397899d2977a5ef9f_prof);

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
        return array (  313 => 172,  295 => 168,  291 => 167,  287 => 166,  282 => 164,  278 => 163,  274 => 162,  270 => 161,  266 => 160,  262 => 159,  259 => 158,  242 => 157,  193 => 110,  181 => 108,  175 => 107,  98 => 33,  81 => 18,  72 => 16,  68 => 15,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::layout_Admin.html.twig' %}*/
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
/*                                <h5 class="modal-title">Nuevo Empleado</h5>*/
/*                            </div>*/
/*                            */
/*                 */
/*                            */
/*                        <form id="empleado" method="Post" class="form-horizontal" action='{{ path('GuardarEmpleado') }}'>*/
/*                            <div class="modal-body">                              */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label" for='nombre'>Nombres:</label>*/
/*                         <div class="input-group col-sm-5">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-pencil"></i>*/
/*                             </div>*/
/*                             <input type="text"  id="nombre" name="nombre" class="form-control  input-sm "/>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label" for='apellidos'>Apellidos:</label>*/
/*                         <div class="input-group col-sm-5">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-pencil"></i>*/
/*                             </div>*/
/*                             <input type="text" id="apellidos" name="apellidos" class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label" for="cedula">Cédula Identidad:</label>*/
/*                         <div class="input-group col-sm-5">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-qrcode"></i>*/
/*                             </div>*/
/*                             <input type="text" id="cedula" name="cedula" class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label" for="genero">Seleccione Género:</label>*/
/*                         <div class="input-group col-sm-4">*/
/*                             <select class="form-control input-sm" name='genero' id='genero' >*/
/*                              <option value=''selected>Seleccione Genero</option>*/
/*                                 <option value='1'>Femenino</option>*/
/*                                 <option value='0'>Masculino</option>*/
/* */
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label" for="telefono">Telefóno:</label>*/
/*                         <div class="input-group col-sm-3">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-phone"></i>*/
/*                             </div>*/
/*                             <input type="text" id="telefono" name="telefono" class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label" for="direccion">Dirección:</label>*/
/*                         <div class="input-group col-sm-6">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-map-marker"></i>*/
/*                             </div>*/
/*                             <input type="text" id="direccion" name="direccion"  class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label" for="mail">Correo Electrónico:</label>*/
/*                         <div class="input-group col-sm-4">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-envelope"></i>*/
/*                             </div>*/
/*                             <input type="email" id="mail" name="mail" class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                    <div class="form-group">*/
/*                         <label class="col-sm-3 control-label">Departamento:</label>*/
/*                         <div class="input-group col-sm-4">*/
/*                             <select class="form-control input-sm" name='departamento' id='departamento'>*/
/*                                */
/*                                 <option value=''selected>Seleccione Departamento</option>*/
/*                                 {% for Departamento in Departamentos %}                                                */
/*                                     <option value='{{Departamento.id }}' name='{{Departamento.Nombre }}'>{{Departamento.Nombre }}</option>*/
/*                                 {% endfor %}*/
/* */
/*                             </select>*/
/*                         </div>*/
/*                     </div> */
/*                               <div class="form-group">*/
/*                     <label class="col-sm-3 control-label" for="claveT">Clave Temporal:</label>*/
/*                        <div class="input-group col-sm-4">*/
/*                            <div class="input-group-addon">*/
/*                                <i class="fa fa-key"></i>*/
/*                            </div>*/
/*                            <input type="Text" id="claveT" name="claveT" class="form-control  input-sm"/>*/
/*                        </div>*/
/*                    </div>*/
/*                                */
/*                                   */
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
/*                         <div class='col-xs-6 '>Lista de Empleados</div><div class='col-xs-6 text-right'><button type="button" class="btn btn-success btn-sm text-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuevo</button></div>*/
/*                     </div>*/
/*                        <hr>*/
/*                    </div>*/
/*                    <div class="panel-body">*/
/*                        <div class="table-responsive">*/
/*                     <table id="example2" class="table table-hover table-condensed">*/
/*                         <thead class='bg-success'>*/
/*                             <tr> */
/*                                 <th>#</th>*/
/*                                 <th>NOMBRE</th>*/
/*                                 <th>APELLIDO</th>*/
/*                                 <th>CEDULA DE IDENTIDAD</th>*/
/*                                 <th>EMAIL</th>*/
/*                                 <th>TELEFONO</th>*/
/*                                 <th>ACCIONES</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for EmpleadosLt in Empleados %}*/
/*                                 <tr>*/
/*                                     <td>{{ loop.index }}</td>*/
/*                                     <td>{{ EmpleadosLt.Nombre }}</td>*/
/*                                     <td>{{ EmpleadosLt.Apellido }}</td>*/
/*                                     <td>{{ EmpleadosLt.CIdentidad }}</td>*/
/*                                     <td>{{ EmpleadosLt.Email }}</td>*/
/*                                     <td>{{ EmpleadosLt.Telefono }}</td>*/
/*                                     <td>*/
/*                                         <a href="{{path('VerEmpleado',{'idE': EmpleadosLt.id })}}" class='btn btn-xs btn-success'>Ver</a>*/
/*                                         <a href="{{path('EditarEmpleado',{'idE': EmpleadosLt.id })}}"  class='btn btn-xs btn-primary'>Editar</a>*/
/*                                         <a href="{{path('EliminarEmpleado',{'idED': EmpleadosLt.id })}}"  class='btn btn-xs btn-danger'>Eliminar</a>*/
/*                                     </td>*/
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
