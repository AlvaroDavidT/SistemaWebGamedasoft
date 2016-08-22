<?php

/* LoginfirstBundle:Clientes:UpdateCliente.html.twig */
class __TwigTemplate_e05dc2438b9d2d5eabaad1d0241ae26de82105f3ac45fb88797b6c2ffd674515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Cliente.html.twig", "LoginfirstBundle:Clientes:UpdateCliente.html.twig", 2);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section2($context, array $blocks = array())
    {
        // line 5
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Cliente");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Actualizar Datos Cliente</li>
        </ol>
    </section>
";
    }

    // line 12
    public function block_section3($context, array $blocks = array())
    {
        // line 13
        echo "    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class='row'>
                            <div class='col-xs-6 '><h5>Actualizar  Información Cliente</h5></div>
                            <div class='col-xs-6 text-right'></div>
                        </div>
                        <hr>
                    </div>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Clientes"]) ? $context["Clientes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cli"]) {
            // line 25
            echo "                        <form id=\"ActualizarCliente\" class=\"form-horizontal\">
                            <div id=\"ActualizaCliente\" data-path=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("UpdateCliente");
            echo "\"></div>  
                            <div id=\"IdCliente\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "id", array()), "html", null, true);
            echo "\"></div>       
                            <div class=\"panel-body\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for='NombreEmpresa'>Nombre Empresa:</label>
                                    <div class=\"input-group col-sm-5\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </div>
                                        <input type=\"text\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "Nombre", array()), "html", null, true);
            echo "\"  id=\"NombreEmpresa\" name=\"NombreEmpresa\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for='DireccionEmpresa'>Dirección</label>
                                    <div class=\"input-group col-sm-4\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </div>
                                        <input type=\"text\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "Direccion", array()), "html", null, true);
            echo "\" id=\"DireccionEmpresa\" name=\"DireccionEmpresa\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=TelefonoEmpresa\">Telefono Empresa:</label>
                                    <div class=\"input-group col-sm-2\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-phone\"></i>
                                        </div>
                                        <input type=\"text\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "Telefono", array()), "html", null, true);
            echo "\" id=\"TelefonoEmpresa\" name=\"TelefonoEmpresa\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div>
                                     <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"UsuarioEmpresa\">Nombre Usuario:</label>
                                    <div class=\"input-group col-sm-2\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-unlock\"></i>
                                        </div>
                                        <input type=\"text\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "usuario", array()), "html", null, true);
            echo "\" id=\"UsuarioEmpresa\" name=\"UsuarioEmpresa\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div>
                                     <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"ContactoEmpresa\">Contacto:</label>
                                    <div class=\"input-group col-sm-3\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-user-md\"></i>
                                        </div>
                                        <input type=\"text\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "Contacto", array()), "html", null, true);
            echo "\" id=\"ContactoEmpresa\" name=\"ContactoEmpresa\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"MailEmpresa\">Correo Electrónico:</label>
                                    <div class=\"input-group col-sm-3\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-envelope\"></i>
                                        </div>
                                        <input type=\"email\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "Email", array()), "html", null, true);
            echo "\" id=\"MailEmpresa\" name=\"MailEmpresa\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div><hr>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"RucEmpresa\">Ruc:</label>
                                    <div class=\"input-group col-sm-3\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-qrcode\"></i>
                                        </div>
                                        <input  type=\"text\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["cli"], "ruc", array()), "html", null, true);
            echo "\" id=\"RucEmpresa\" name=\"RucEmpresa\" class=\"form-control  input-sm \" disabled/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel-footer\">
                                <div class='row'>
                                    <div class='col-xs-4 text-right'>
                                        <button class=\"btn btn-success btn-sm\" id=\"Guardar-Cliente\">Guardar</button>
                                    </div>
                                    <div class='col-xs-4 text-left'>
                                        <div id=\"success\" class=\" col-xm-5 alert alert-success\"  style=\"display: none;\"> <strong>Exitosamente !!</strong> Datos Actualizados</div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cli'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Clientes:UpdateCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 106,  155 => 89,  143 => 80,  131 => 71,  119 => 62,  107 => 53,  95 => 44,  83 => 35,  72 => 27,  68 => 26,  65 => 25,  61 => 24,  48 => 13,  45 => 12,  36 => 7,  32 => 5,  29 => 4,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Cliente.html.twig' %}*/
/* */
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Cliente')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Actualizar Datos Cliente</li>*/
/*         </ol>*/
/*     </section>*/
/* {%endblock%}*/
/* {%block section3 %}*/
/*     <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <div class='row'>*/
/*                             <div class='col-xs-6 '><h5>Actualizar  Información Cliente</h5></div>*/
/*                             <div class='col-xs-6 text-right'></div>*/
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     {% for cli in Clientes %}*/
/*                         <form id="ActualizarCliente" class="form-horizontal">*/
/*                             <div id="ActualizaCliente" data-path="{{path('UpdateCliente')}}"></div>  */
/*                             <div id="IdCliente" value="{{cli.id}}"></div>       */
/*                             <div class="panel-body">*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for='NombreEmpresa'>Nombre Empresa:</label>*/
/*                                     <div class="input-group col-sm-5">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-pencil"></i>*/
/*                                         </div>*/
/*                                         <input type="text" value="{{ cli.Nombre }}"  id="NombreEmpresa" name="NombreEmpresa" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for='DireccionEmpresa'>Dirección</label>*/
/*                                     <div class="input-group col-sm-4">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-pencil"></i>*/
/*                                         </div>*/
/*                                         <input type="text" value="{{ cli.Direccion }}" id="DireccionEmpresa" name="DireccionEmpresa" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for=TelefonoEmpresa">Telefono Empresa:</label>*/
/*                                     <div class="input-group col-sm-2">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-phone"></i>*/
/*                                         </div>*/
/*                                         <input type="text" value="{{cli.Telefono }}" id="TelefonoEmpresa" name="TelefonoEmpresa" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                      <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="UsuarioEmpresa">Nombre Usuario:</label>*/
/*                                     <div class="input-group col-sm-2">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-unlock"></i>*/
/*                                         </div>*/
/*                                         <input type="text" value="{{cli.usuario }}" id="UsuarioEmpresa" name="UsuarioEmpresa" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                      <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="ContactoEmpresa">Contacto:</label>*/
/*                                     <div class="input-group col-sm-3">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-user-md"></i>*/
/*                                         </div>*/
/*                                         <input type="text" value="{{cli.Contacto }}" id="ContactoEmpresa" name="ContactoEmpresa" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="MailEmpresa">Correo Electrónico:</label>*/
/*                                     <div class="input-group col-sm-3">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-envelope"></i>*/
/*                                         </div>*/
/*                                         <input type="email" value="{{ cli.Email }}" id="MailEmpresa" name="MailEmpresa" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div><hr>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="RucEmpresa">Ruc:</label>*/
/*                                     <div class="input-group col-sm-3">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-qrcode"></i>*/
/*                                         </div>*/
/*                                         <input  type="text" value="{{ cli.ruc }}" id="RucEmpresa" name="RucEmpresa" class="form-control  input-sm " disabled/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="panel-footer">*/
/*                                 <div class='row'>*/
/*                                     <div class='col-xs-4 text-right'>*/
/*                                         <button class="btn btn-success btn-sm" id="Guardar-Cliente">Guardar</button>*/
/*                                     </div>*/
/*                                     <div class='col-xs-4 text-left'>*/
/*                                         <div id="success" class=" col-xm-5 alert alert-success"  style="display: none;"> <strong>Exitosamente !!</strong> Datos Actualizados</div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     </form>*/
/*                 {% endfor%}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
/* */
