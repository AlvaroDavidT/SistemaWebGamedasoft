<?php

/* LoginfirstBundle:Admin:ListarClientes.html.twig */
class __TwigTemplate_867ee896e70b08b540d48b48fd016a5c09b791703efd61fb144dbc38a11e54e4 extends Twig_Template
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
        $__internal_69607231f2a599e98fc10780e639b7fe9f4208f6a519eec41016baa1c9a02d17 = $this->env->getExtension("native_profiler");
        $__internal_69607231f2a599e98fc10780e639b7fe9f4208f6a519eec41016baa1c9a02d17->enter($__internal_69607231f2a599e98fc10780e639b7fe9f4208f6a519eec41016baa1c9a02d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:ListarClientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69607231f2a599e98fc10780e639b7fe9f4208f6a519eec41016baa1c9a02d17->leave($__internal_69607231f2a599e98fc10780e639b7fe9f4208f6a519eec41016baa1c9a02d17_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_4de600e799b01e41997ac36a0b3b8e06f740ba6108e57a6c122f57a6411e7eb0 = $this->env->getExtension("native_profiler");
        $__internal_4de600e799b01e41997ac36a0b3b8e06f740ba6108e57a6c122f57a6411e7eb0->enter($__internal_4de600e799b01e41997ac36a0b3b8e06f740ba6108e57a6c122f57a6411e7eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

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
        
        $__internal_4de600e799b01e41997ac36a0b3b8e06f740ba6108e57a6c122f57a6411e7eb0->leave($__internal_4de600e799b01e41997ac36a0b3b8e06f740ba6108e57a6c122f57a6411e7eb0_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_e0dd272668fac6ab90ab4fcce09f60bc7453b41a60afbbed83cd694f50e17ed3 = $this->env->getExtension("native_profiler");
        $__internal_e0dd272668fac6ab90ab4fcce09f60bc7453b41a60afbbed83cd694f50e17ed3->enter($__internal_e0dd272668fac6ab90ab4fcce09f60bc7453b41a60afbbed83cd694f50e17ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        echo "                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog modal-sm\">
                        <!-- Modal content-->
                        <div class=\"modal-content\">
                            <div class=\"modal-header btn-primary \">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span><i class=\"fa fa-times-circle\"></i></span></button>
                                <h5 class=\"modal-title\" align=\"center\"><strong>INGRESO NUEVO CLIENTE</strong></h5>
                            </div>                                      
                            <form id=\"cliente\" method=\"Post\" class=\"form-horizontal\" action='";
        // line 38
        echo $this->env->getExtension('routing')->getPath("GuardarCliente");
        echo "'>
                                <div class=\"modal-body\">  
                                    <div class='row'>
                                         <div class='col-sm-12'>
                                            <strong>Nombre: </strong>
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-12'>
                                                    <input type=\"text\"  id=\"NombreCN\" name=\"NombreCN\" class=\"form-control  input-sm \"/>                                                                                
                                                </div>
                                            </div>
                                        </div>
                                         
                                         <div class='col-sm-12'>
                                            <strong>Usuario: </strong>
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-12'>
                                                    <input type=\"text\"  id=\"NombreCN\" name=\"UsuarioCN\" class=\"form-control  input-sm \"/>                                                                                
                                                </div>
                                            </div>
                                        </div>
                                         <div class='col-sm-12'>
                                            <strong>Ruc: </strong>
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-12'>
                                                 <input type=\"text\" id=\"RucCN\" name=\"RucCN\" class=\"form-control  input-sm\"/>                                                                       
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-sm-12'>
                                            <strong>Telefóno: </strong>
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-12'>
                                                    <input type=\"text\" id=\"TelefonoCN\" name=\"TelefonoCN\" class=\"form-control  input-sm\"/>                                            
                                                </div>
                                            </div>
                                        </div>   
                                        <div class='col-sm-12'>
                                            <strong>Dirección: </strong>
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-12'>
                                                     <input type=\"text\" id=\"DireccionCN\" name=\"DireccionCN\"  class=\"form-control  input-sm\"/>
                                            </div>
                                        </div> 
                                    </div>
                                         <div class='col-sm-12'>
                                            <strong>Correo Electrónico: </strong>
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-12'>
                                                 <input type=\"email\" id=\"MailCN\" name=\"MailCN\" class=\"form-control  input-sm\"/>
                                                                                  </div>
                                            </div> 
                                         </div>
                                        <div class='col-sm-12'>
                                            <strong>Contacto: </strong>
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-12'>
                                                    <input type=\"Text\" id=\"ContactoCN\" name=\"ContactoCN\" class=\"form-control  input-sm\"/>
                                                </div>
                                            </div> 
                                        </div>
                                         <div class='col-sm-12'>
                                            <strong>Clave Temporal: </strong>
                                            <div class='row'>
                                                <div class='col-xs-12 col-sm-12'>
                                            <input type=\"Text\" id=\"ClaveTC\" name=\"ClaveTC\" class=\"form-control  input-sm\"/>
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
                            <div class='col-xs-6 '><strong>Lista de clientes</strong></div><div class='col-xs-6 text-right'><button type=\"button\" class=\"btn btn-success btn-sm text-right\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-circle\"></i> Nuevo</button></div>
                        </div>
                        <hr>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <div class=\"table-responsive\">
                            <div class=\"col-md-12\">
                                <p class=\"text-info\">
                                    <br>
                                    <small><strong> TOTAL DE REGISTROS: <span class=\"badge\">";
        // line 131
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Clientes"]) ? $context["Clientes"] : $this->getContext($context, "Clientes"))), "html", null, true);
        echo "</span></strong></small>
                                    <br></p>                         
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-danger col-md-12\">
                                    <div id=\"PathReqEliminarC\" data-path=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("EliminarCliente1");
        echo "\"></div>
                                    <div id=\"PathBuscaRuc\" data-path=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("BuscaPorRuc");
        echo "\"></div> 
                                    <div id=\"ActualizaC\" data-path=\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("GuardarEditCliente1");
        echo "\"></div>
                                    <div class=\"panel-body\">
                                        <div class=\"col-md-3\">
                                            <strong>Buscar por Nº de RUC: <i class=\"fa fa-search\" aria-hidden=\"true\"></i></strong>
                                        </div>
                                        <div class=\"col-md-9\">
                                            <div class=\"input-group col-sm-3\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"fa fa-qrcode\"></i>
                                                </div>
                                                <input type=\"text\" value=\"\" id=\"BSubmenu\" name=\"BSubmenu\" class=\"form-control  input-sm\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-12 text-center\"><div class=\"loading1\"></div>
                                </div>
                            </div>
                            <table id=\"Clientes\" class=\"table table-bordered\">
                                <thead class='bg-success'>
                                    <tr> 
                                        <th class=\"text-center small\">Nº</th>
                                        <th class=\"text-center small\">RUC</th>
                                        <th class=\"text-center small\">NOMBRE</th>
                                        <th class=\"text-center small\">USUARIO</th>
                                        <th class=\"text-center small\">EMAIL</th>
                                        <th class=\"text-center small\">TELEFONO</th>
                                        <th class=\"text-center small\">DIRECCION</th>
                                        <th class=\"text-center small\">CONTACTO</th>
                                        <th class=\"text-center small\">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 173
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
            // line 174
            echo "                                        <tr>
                                            <td class=\"text-center small\">";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                             <td class=\"text-center small\">";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Ruc", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-left small\">";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Nombre", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-left small\">";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Usuario", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-left small\">";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Email", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-left small\">";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Telefono", array()), "html", null, true);
            echo "</td>
                                             <td class=\"text-left small\">";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Direccion", array()), "html", null, true);
            echo "</td>
                                             <td class=\"text-left small\">";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Contacto", array()), "html", null, true);
            echo "</td>
                                            <td class=\"\">
                                                 <!-- MODAL EDITAR CLIENTES -->
                                         <button type=\"button\" id=\"actualizar\" class=\"btn btn-xs btn-success btn-circle\" data-toggle=\"modal\" data-target=\"#";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "id", array()), "html", null, true);
            echo "\" data-whatever=\"@mdo\"> <i class=\"fa fa-pencil\" title=\"EDITAR\" aria-hidden=\"true\"></i></button><small>Editar</small> 
                                                    <div class=\"modal\" id=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\">
                                                    <div class=\"modal-dialog modal-sm\" role=\"document\">
                                                        <form id=\"Editar\" method=\"POST\" action='";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GuardarEditCliente", array("idCU" => $this->getAttribute($context["Clientes"], "id", array()))), "html", null, true);
            echo "'>                          
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header btn-primary\">
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-times-circle\"></i></span></button>
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\" align=\"center\"><strong> ACTUALIZAR CLIENTE</strong></h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <div class='row'>
                                                                        <div class='col-sm-12'>
                                                                            <strong>Nº RUC: </strong>
                                                                             <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                  <input type=\"text\" value=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Ruc", array()), "html", null, true);
            echo "\" id=\"ruc\" name=\"ruc\" class=\"form-control  input-sm\"/>
                                                                                </div>
                                                                            </div>                                                                         
                                                                        </div>
                                                                        <div class='col-sm-12'>                                                                          
                                                                            <strong>Nombre:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                  <input type=\"text\" value=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Nombre", array()), "html", null, true);
            echo "\" id=\"nombreC\" name=\"nombreC\" class=\"form-control  input-sm\"/>
                                                                                </div>
                                                                            </div>                                                                    
                                                                        </div>
                                                                       <div class='col-sm-12'>
                                                                            <strong>Usuario:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                  <input type=\"text\" value=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Usuario", array()), "html", null, true);
            echo "\" id=\"UsuarioC\" name=\"UsuarioC\" class=\"form-control  input-sm\"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='col-sm-12'>
                                                                           <strong>Email:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                  <input type=\"text\" value=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Email", array()), "html", null, true);
            echo "\" id=\"mailC\" name=\"mailC\" class=\"form-control  input-sm\"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='col-sm-12'>
                                                                            <strong>Telefono:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                  <input type=\"text\" value=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Telefono", array()), "html", null, true);
            echo "\" id=\"telefonoC\" name=\"telefonoC\" class=\"form-control  input-sm\"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>  
                                                                        <div class='col-sm-12'>
                                                                            <strong>Direccion:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                  <input type=\"text\" value=\"";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Direccion", array()), "html", null, true);
            echo "\" id=\"direccionC\" name=\"direccionC\" class=\"form-control  input-sm\"/>
                                                                                </div>
                                                                            </div>
                                                                      </div>   
                                                                     <div class='col-sm-12'>
                                                                            <strong>Contacto:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                  <input type=\"text\" value=\"";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Contacto", array()), "html", null, true);
            echo "\" id=\"contactoC\" name=\"contactoC\" class=\"form-control  input-sm\"/>
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
            // line 263
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EliminarCliente", array("idCD" => $this->getAttribute($context["Clientes"], "id", array()))), "html", null, true);
            echo "\" ><i class=\"fa fa-trash-o fa-fw\" title=\"ELIMINAR\" aria-hidden=\"true\"></i> <span class=\"sr-only\">ELIMINAR</span></a><small>Eliminar</small>
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
        // line 267
        echo "                                </tbody>
                            </table>
                        </div>

                    </div> 
                </div>
            </div><!-- /.box -->
        </div>
    </section><!-- /.content -->
";
        
        $__internal_e0dd272668fac6ab90ab4fcce09f60bc7453b41a60afbbed83cd694f50e17ed3->leave($__internal_e0dd272668fac6ab90ab4fcce09f60bc7453b41a60afbbed83cd694f50e17ed3_prof);

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
        return array (  466 => 267,  448 => 263,  430 => 248,  419 => 240,  408 => 232,  397 => 224,  386 => 216,  375 => 208,  364 => 200,  349 => 188,  344 => 186,  340 => 185,  334 => 182,  330 => 181,  326 => 180,  322 => 179,  318 => 178,  314 => 177,  310 => 176,  306 => 175,  303 => 174,  286 => 173,  248 => 138,  244 => 137,  240 => 136,  232 => 131,  136 => 38,  126 => 30,  117 => 28,  112 => 27,  102 => 24,  97 => 23,  87 => 20,  82 => 19,  72 => 16,  68 => 15,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
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
/*                  {% for flashMessage in app.session.flashbag.get('MensajeUpdate')%}*/
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
/*                 <div id="myModal" class="modal fade" role="dialog">*/
/*                     <div class="modal-dialog modal-sm">*/
/*                         <!-- Modal content-->*/
/*                         <div class="modal-content">*/
/*                             <div class="modal-header btn-primary ">*/
/*                                 <button type="button" class="close" data-dismiss="modal"><span><i class="fa fa-times-circle"></i></span></button>*/
/*                                 <h5 class="modal-title" align="center"><strong>INGRESO NUEVO CLIENTE</strong></h5>*/
/*                             </div>                                      */
/*                             <form id="cliente" method="Post" class="form-horizontal" action='{{ path('GuardarCliente') }}'>*/
/*                                 <div class="modal-body">  */
/*                                     <div class='row'>*/
/*                                          <div class='col-sm-12'>*/
/*                                             <strong>Nombre: </strong>*/
/*                                             <div class='row'>*/
/*                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                     <input type="text"  id="NombreCN" name="NombreCN" class="form-control  input-sm "/>                                                                                */
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                          */
/*                                          <div class='col-sm-12'>*/
/*                                             <strong>Usuario: </strong>*/
/*                                             <div class='row'>*/
/*                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                     <input type="text"  id="NombreCN" name="UsuarioCN" class="form-control  input-sm "/>                                                                                */
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                          <div class='col-sm-12'>*/
/*                                             <strong>Ruc: </strong>*/
/*                                             <div class='row'>*/
/*                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                  <input type="text" id="RucCN" name="RucCN" class="form-control  input-sm"/>                                                                       */
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class='col-sm-12'>*/
/*                                             <strong>Telefóno: </strong>*/
/*                                             <div class='row'>*/
/*                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                     <input type="text" id="TelefonoCN" name="TelefonoCN" class="form-control  input-sm"/>                                            */
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>   */
/*                                         <div class='col-sm-12'>*/
/*                                             <strong>Dirección: </strong>*/
/*                                             <div class='row'>*/
/*                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                      <input type="text" id="DireccionCN" name="DireccionCN"  class="form-control  input-sm"/>*/
/*                                             </div>*/
/*                                         </div> */
/*                                     </div>*/
/*                                          <div class='col-sm-12'>*/
/*                                             <strong>Correo Electrónico: </strong>*/
/*                                             <div class='row'>*/
/*                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                  <input type="email" id="MailCN" name="MailCN" class="form-control  input-sm"/>*/
/*                                                                                   </div>*/
/*                                             </div> */
/*                                          </div>*/
/*                                         <div class='col-sm-12'>*/
/*                                             <strong>Contacto: </strong>*/
/*                                             <div class='row'>*/
/*                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                     <input type="Text" id="ContactoCN" name="ContactoCN" class="form-control  input-sm"/>*/
/*                                                 </div>*/
/*                                             </div> */
/*                                         </div>*/
/*                                          <div class='col-sm-12'>*/
/*                                             <strong>Clave Temporal: </strong>*/
/*                                             <div class='row'>*/
/*                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                             <input type="Text" id="ClaveTC" name="ClaveTC" class="form-control  input-sm"/>*/
/*                                                 </div>*/
/*                                             </div> */
/*                                         </div>*/
/*                                     </div>*/
/*                                    */
/*                                 </div>*/
/*                                 <div class="modal-footer">*/
/*                             <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><span class="fa fa-times-circle-o"></span> Cancelar</button>*/
/*                                     <button type="submit" class="btn btn-success btn-xs" id="btn-envia"><span class="fa fa-check-circle"></span> Guardar</button>*/
/*                                     </div>*/
/*                             </form>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>  */
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <div class='row'>*/
/*                             <div class='col-xs-6 '><strong>Lista de clientes</strong></div><div class='col-xs-6 text-right'><button type="button" class="btn btn-success btn-sm text-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuevo</button></div>*/
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <div class="table-responsive">*/
/*                             <div class="col-md-12">*/
/*                                 <p class="text-info">*/
/*                                     <br>*/
/*                                     <small><strong> TOTAL DE REGISTROS: <span class="badge">{{Clientes|length}}</span></strong></small>*/
/*                                     <br></p>                         */
/*                             </div>*/
/*                             <div class="col-md-12">*/
/*                                 <div class="panel panel-danger col-md-12">*/
/*                                     <div id="PathReqEliminarC" data-path="{{path('EliminarCliente1')}}"></div>*/
/*                                     <div id="PathBuscaRuc" data-path="{{path('BuscaPorRuc')}}"></div> */
/*                                     <div id="ActualizaC" data-path="{{path('GuardarEditCliente1')}}"></div>*/
/*                                     <div class="panel-body">*/
/*                                         <div class="col-md-3">*/
/*                                             <strong>Buscar por Nº de RUC: <i class="fa fa-search" aria-hidden="true"></i></strong>*/
/*                                         </div>*/
/*                                         <div class="col-md-9">*/
/*                                             <div class="input-group col-sm-3">*/
/*                                                 <div class="input-group-addon">*/
/*                                                     <i class="fa fa-qrcode"></i>*/
/*                                                 </div>*/
/*                                                 <input type="text" value="" id="BSubmenu" name="BSubmenu" class="form-control  input-sm"/>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <div class="col-xs-12 text-center"><div class="loading1"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <table id="Clientes" class="table table-bordered">*/
/*                                 <thead class='bg-success'>*/
/*                                     <tr> */
/*                                         <th class="text-center small">Nº</th>*/
/*                                         <th class="text-center small">RUC</th>*/
/*                                         <th class="text-center small">NOMBRE</th>*/
/*                                         <th class="text-center small">USUARIO</th>*/
/*                                         <th class="text-center small">EMAIL</th>*/
/*                                         <th class="text-center small">TELEFONO</th>*/
/*                                         <th class="text-center small">DIRECCION</th>*/
/*                                         <th class="text-center small">CONTACTO</th>*/
/*                                         <th class="text-center small">ACCIONES</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for Clientes in Clientes %}*/
/*                                         <tr>*/
/*                                             <td class="text-center small">{{ loop.index }}</td>*/
/*                                              <td class="text-center small">{{ Clientes.Ruc }}</td>*/
/*                                             <td class="text-left small">{{ Clientes.Nombre }}</td>*/
/*                                             <td class="text-left small">{{ Clientes.Usuario }}</td>*/
/*                                             <td class="text-left small">{{ Clientes.Email }}</td>*/
/*                                             <td class="text-left small">{{ Clientes.Telefono }}</td>*/
/*                                              <td class="text-left small">{{ Clientes.Direccion }}</td>*/
/*                                              <td class="text-left small">{{ Clientes.Contacto }}</td>*/
/*                                             <td class="">*/
/*                                                  <!-- MODAL EDITAR CLIENTES -->*/
/*                                          <button type="button" id="actualizar" class="btn btn-xs btn-success btn-circle" data-toggle="modal" data-target="#{{Clientes.id }}" data-whatever="@mdo"> <i class="fa fa-pencil" title="EDITAR" aria-hidden="true"></i></button><small>Editar</small> */
/*                                                     <div class="modal" id="{{ Clientes.id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">*/
/*                                                     <div class="modal-dialog modal-sm" role="document">*/
/*                                                         <form id="Editar" method="POST" action='{{ path('GuardarEditCliente',{'idCU':  Clientes.id }) }}'>                          */
/*                                                             <div class="modal-content">*/
/*                                                                 <div class="modal-header btn-primary">*/
/*                                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>*/
/*                                                                     <h5 class="modal-title" id="exampleModalLabel" align="center"><strong> ACTUALIZAR CLIENTE</strong></h5>*/
/*                                                                 </div>*/
/*                                                                 <div class="modal-body">*/
/*                                                                     <div class='row'>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Nº RUC: </strong>*/
/*                                                                              <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                   <input type="text" value="{{ Clientes.Ruc  }}" id="ruc" name="ruc" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>                                                                         */
/*                                                                         </div>*/
/*                                                                         <div class='col-sm-12'>                                                                          */
/*                                                                             <strong>Nombre:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                   <input type="text" value="{{Clientes.Nombre }}" id="nombreC" name="nombreC" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>                                                                    */
/*                                                                         </div>*/
/*                                                                        <div class='col-sm-12'>*/
/*                                                                             <strong>Usuario:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                   <input type="text" value="{{Clientes.Usuario }}" id="UsuarioC" name="UsuarioC" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                            <strong>Email:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                   <input type="text" value="{{ Clientes.Email }}" id="mailC" name="mailC" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Telefono:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                   <input type="text" value="{{Clientes.Telefono }}" id="telefonoC" name="telefonoC" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>  */
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Direccion:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                   <input type="text" value="{{Clientes.Direccion }}" id="direccionC" name="direccionC" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                       </div>   */
/*                                                                      <div class='col-sm-12'>*/
/*                                                                             <strong>Contacto:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                   <input type="text" value="{{Clientes.Contacto }}" id="contactoC" name="contactoC" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                       </div> */
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
/*                                                   <a class="btn btn-danger btn-circle" href="{{path('EliminarCliente',{'idCD': Clientes.id })}}" ><i class="fa fa-trash-o fa-fw" title="ELIMINAR" aria-hidden="true"></i> <span class="sr-only">ELIMINAR</span></a><small>Eliminar</small>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/* */
/*                     </div> */
/*                 </div>*/
/*             </div><!-- /.box -->*/
/*         </div>*/
/*     </section><!-- /.content -->*/
/* {% endblock %}*/
/* */
