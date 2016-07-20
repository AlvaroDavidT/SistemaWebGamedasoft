<?php

/* LoginfirstBundle:Admin:ListarClientes.html.twig */
class __TwigTemplate_7139bb5a7012bafcb6c7743537cb6f37c0eb14989e383160a73f470039bfabeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Admin.html.twig", "LoginfirstBundle:Admin:ListarClientes.html.twig", 2);
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
        $__internal_889c95a784a9af2b6b8ae2a66b82d21121e55b984b83f83e41b5b93f1ac424da = $this->env->getExtension("native_profiler");
        $__internal_889c95a784a9af2b6b8ae2a66b82d21121e55b984b83f83e41b5b93f1ac424da->enter($__internal_889c95a784a9af2b6b8ae2a66b82d21121e55b984b83f83e41b5b93f1ac424da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:ListarClientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_889c95a784a9af2b6b8ae2a66b82d21121e55b984b83f83e41b5b93f1ac424da->leave($__internal_889c95a784a9af2b6b8ae2a66b82d21121e55b984b83f83e41b5b93f1ac424da_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_e843a5048287518112d67ce9e61c1bf0e766a0424ee5fa0883801d2bd4024565 = $this->env->getExtension("native_profiler");
        $__internal_e843a5048287518112d67ce9e61c1bf0e766a0424ee5fa0883801d2bd4024565->enter($__internal_e843a5048287518112d67ce9e61c1bf0e766a0424ee5fa0883801d2bd4024565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 4
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Lista Clientes</li>
        </ol>
    </section>
";
        
        $__internal_e843a5048287518112d67ce9e61c1bf0e766a0424ee5fa0883801d2bd4024565->leave($__internal_e843a5048287518112d67ce9e61c1bf0e766a0424ee5fa0883801d2bd4024565_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_4fddbdb9b3eb8a788ff0b3d029eaedf4749248943991d78c0e31fe260d14357e = $this->env->getExtension("native_profiler");
        $__internal_4fddbdb9b3eb8a788ff0b3d029eaedf4749248943991d78c0e31fe260d14357e->enter($__internal_4fddbdb9b3eb8a788ff0b3d029eaedf4749248943991d78c0e31fe260d14357e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        echo "               <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
                   <div class=\"modal-dialog\">
                       <!-- Modal content-->
                       <div class=\"modal-content\">
                           <div class=\"modal-header btn-primary \">
                               <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span><i class=\"fa fa-times-circle\"></i></span></button>
                               <h5 class=\"modal-title\">Nuevo Cliente</h5>
                           </div>                                      
                       <form id=\"cliente\" method=\"Post\" class=\"form-horizontal\" action='";
        // line 26
        echo $this->env->getExtension('routing')->getPath("GuardarCliente");
        echo "'>
                           <div class=\"modal-body\">                              
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for='nombreC'>Nombre:</label>
                        <div class=\"input-group col-sm-5\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-pencil\"></i>
                            </div>
                            <input type=\"text\"  id=\"nombreC\" name=\"nombreC\" class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                   <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for='UsuarioC'>Usuario:</label>
                        <div class=\"input-group col-sm-4\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-pencil\"></i>
                            </div>
                            <input type=\"text\" id=\"UsuarioC\" name=\"UsuarioC\" class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for=\"ruc\">Ruc:</label>
                        <div class=\"input-group col-sm-4\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-qrcode\"></i>
                            </div>
                            <input type=\"text\" id=\"ruc\" name=\"ruc\" class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for=\"telefonoC\">Telefóno:</label>
                        <div class=\"input-group col-sm-4\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-phone\"></i>
                            </div>
                            <input type=\"text\" id=\"telefonoC\" name=\"telefonoC\" class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for=\"direccionC\">Dirección:</label>
                        <div class=\"input-group col-sm-5\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-map-marker\"></i>
                            </div>
                            <input type=\"text\" id=\"direccionC\" name=\"direccionC\"  class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for=\"mailC\">Correo Electrónico:</label>
                        <div class=\"input-group col-sm-4\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-envelope\"></i>
                            </div>
                            <input type=\"email\" id=\"mailC\" name=\"mailC\" class=\"form-control  input-sm\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"contactoC\">Contacto:</label>
                       <div class=\"input-group col-sm-5\">
                           <div class=\"input-group-addon\">
                               <i class=\"fa fa-user\"></i>
                           </div>
                           <input type=\"Text\" id=\"contactoC\" name=\"contactoC\" class=\"form-control  input-sm\"/>
                       </div>
                   </div>
                     <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"claveTC\">Clave Temporal:</label>
                       <div class=\"input-group col-sm-3\">
                           <div class=\"input-group-addon\">
                               <i class=\"fa fa-key\"></i>
                           </div>
                           <input type=\"Text\" id=\"claveTC\" name=\"claveTC\" class=\"form-control  input-sm\"/>
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
                        <div class='col-xs-6 '>Lista de clientes</div><div class='col-xs-6 text-right'><button type=\"button\" class=\"btn btn-success btn-sm text-right\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-circle\"></i> Nuevo</button></div>
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
                                        <th>RUC</th>
                                        <th>EMAIL</th>
                                        <th>TELEFONO</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Clientes"]);
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
        foreach ($context['_seq'] as $context["_key"] => $context["Clientes"]) {
            // line 132
            echo "                                        <tr>
                                            <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Nombre", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Ruc", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Email", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Telefono", array()), "html", null, true);
            echo "</td>
                                            <td>
                                                <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VerCliente", array("idC" => $this->getAttribute($context["Clientes"], "id", array()))), "html", null, true);
            echo "\" class='btn btn-xs btn-success'>Ver</a>
                                                <a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EditarCliente", array("idC" => $this->getAttribute($context["Clientes"], "id", array()))), "html", null, true);
            echo "\"  class='btn btn-xs btn-primary'>Editar</a>
                                                <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EliminarCliente", array("idCD" => $this->getAttribute($context["Clientes"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Clientes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                                </tbody>
                            </table>
                        </div>

                    </div> 
                           </div>
                       </div><!-- /.box -->
                   </div>
               </section><!-- /.content -->
";
        
        $__internal_4fddbdb9b3eb8a788ff0b3d029eaedf4749248943991d78c0e31fe260d14357e->leave($__internal_4fddbdb9b3eb8a788ff0b3d029eaedf4749248943991d78c0e31fe260d14357e_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Admin:ListarClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 145,  248 => 141,  244 => 140,  240 => 139,  235 => 137,  231 => 136,  227 => 135,  223 => 134,  219 => 133,  216 => 132,  199 => 131,  91 => 26,  81 => 18,  72 => 16,  68 => 15,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Admin.html.twig' %}*/
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Admin')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Lista Clientes</li>*/
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
/*                <div id="myModal" class="modal fade" role="dialog">*/
/*                    <div class="modal-dialog">*/
/*                        <!-- Modal content-->*/
/*                        <div class="modal-content">*/
/*                            <div class="modal-header btn-primary ">*/
/*                                <button type="button" class="close" data-dismiss="modal"><span><i class="fa fa-times-circle"></i></span></button>*/
/*                                <h5 class="modal-title">Nuevo Cliente</h5>*/
/*                            </div>                                      */
/*                        <form id="cliente" method="Post" class="form-horizontal" action='{{ path('GuardarCliente') }}'>*/
/*                            <div class="modal-body">                              */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label" for='nombreC'>Nombre:</label>*/
/*                         <div class="input-group col-sm-5">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-pencil"></i>*/
/*                             </div>*/
/*                             <input type="text"  id="nombreC" name="nombreC" class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                    <div class="form-group">*/
/*                         <label class="col-sm-3 control-label" for='UsuarioC'>Usuario:</label>*/
/*                         <div class="input-group col-sm-4">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-pencil"></i>*/
/*                             </div>*/
/*                             <input type="text" id="UsuarioC" name="UsuarioC" class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label" for="ruc">Ruc:</label>*/
/*                         <div class="input-group col-sm-4">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-qrcode"></i>*/
/*                             </div>*/
/*                             <input type="text" id="ruc" name="ruc" class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label" for="telefonoC">Telefóno:</label>*/
/*                         <div class="input-group col-sm-4">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-phone"></i>*/
/*                             </div>*/
/*                             <input type="text" id="telefonoC" name="telefonoC" class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label" for="direccionC">Dirección:</label>*/
/*                         <div class="input-group col-sm-5">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-map-marker"></i>*/
/*                             </div>*/
/*                             <input type="text" id="direccionC" name="direccionC"  class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label" for="mailC">Correo Electrónico:</label>*/
/*                         <div class="input-group col-sm-4">*/
/*                             <div class="input-group-addon">*/
/*                                 <i class="fa fa-envelope"></i>*/
/*                             </div>*/
/*                             <input type="email" id="mailC" name="mailC" class="form-control  input-sm"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                     <label class="col-sm-3 control-label" for="contactoC">Contacto:</label>*/
/*                        <div class="input-group col-sm-5">*/
/*                            <div class="input-group-addon">*/
/*                                <i class="fa fa-user"></i>*/
/*                            </div>*/
/*                            <input type="Text" id="contactoC" name="contactoC" class="form-control  input-sm"/>*/
/*                        </div>*/
/*                    </div>*/
/*                      <div class="form-group">*/
/*                     <label class="col-sm-3 control-label" for="claveTC">Clave Temporal:</label>*/
/*                        <div class="input-group col-sm-3">*/
/*                            <div class="input-group-addon">*/
/*                                <i class="fa fa-key"></i>*/
/*                            </div>*/
/*                            <input type="Text" id="claveTC" name="claveTC" class="form-control  input-sm"/>*/
/*                        </div>*/
/*                    </div>*/
/*                        </div>*/
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
/*                         <div class='col-xs-6 '>Lista de clientes</div><div class='col-xs-6 text-right'><button type="button" class="btn btn-success btn-sm text-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuevo</button></div>*/
/*                     </div>*/
/*                        <hr>*/
/*                    </div>*/
/*                        <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table id="example2" class="table table-hover table-condensed">*/
/*                                 <thead class='bg-success'>*/
/*                                     <tr> */
/*                                         <th>#</th>*/
/*                                         <th>NOMBRE</th>*/
/*                                         <th>RUC</th>*/
/*                                         <th>EMAIL</th>*/
/*                                         <th>TELEFONO</th>*/
/*                                         <th>ACCIONES</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for Clientes in Clientes %}*/
/*                                         <tr>*/
/*                                             <td>{{ loop.index }}</td>*/
/*                                             <td>{{ Clientes.Nombre }}</td>*/
/*                                             <td>{{ Clientes.Ruc }}</td>*/
/*                                             <td>{{ Clientes.Email }}</td>*/
/*                                             <td>{{ Clientes.Telefono }}</td>*/
/*                                             <td>*/
/*                                                 <a href="{{path('VerCliente',{'idC': Clientes.id })}}" class='btn btn-xs btn-success'>Ver</a>*/
/*                                                 <a href="{{path('EditarCliente',{'idC': Clientes.id })}}"  class='btn btn-xs btn-primary'>Editar</a>*/
/*                                                 <a href="{{path('EliminarCliente',{'idCD': Clientes.id })}}"  class='btn btn-xs btn-danger'>Eliminar</a>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/* */
/*                     </div> */
/*                            </div>*/
/*                        </div><!-- /.box -->*/
/*                    </div>*/
/*                </section><!-- /.content -->*/
/* {% endblock %}*/
/* */
