<?php

/* LoginfirstBundle:Clientes:UpdateCliente.html.twig */
class __TwigTemplate_76d64b9c20cf4727fcedcebecf0006ab1e6ded69f5d31bf53edc6ff9465e7e07 extends Twig_Template
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
        $__internal_4fe5557b9a955d84792c2806c8570013b5d00ab511a06391e45c9d2cc7078fa2 = $this->env->getExtension("native_profiler");
        $__internal_4fe5557b9a955d84792c2806c8570013b5d00ab511a06391e45c9d2cc7078fa2->enter($__internal_4fe5557b9a955d84792c2806c8570013b5d00ab511a06391e45c9d2cc7078fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Clientes:UpdateCliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe5557b9a955d84792c2806c8570013b5d00ab511a06391e45c9d2cc7078fa2->leave($__internal_4fe5557b9a955d84792c2806c8570013b5d00ab511a06391e45c9d2cc7078fa2_prof);

    }

    // line 4
    public function block_section2($context, array $blocks = array())
    {
        $__internal_88be67651ea6ed0832c14caa69729e724b0b4034b2e23d23fd1edb25b46e57ae = $this->env->getExtension("native_profiler");
        $__internal_88be67651ea6ed0832c14caa69729e724b0b4034b2e23d23fd1edb25b46e57ae->enter($__internal_88be67651ea6ed0832c14caa69729e724b0b4034b2e23d23fd1edb25b46e57ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

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
        
        $__internal_88be67651ea6ed0832c14caa69729e724b0b4034b2e23d23fd1edb25b46e57ae->leave($__internal_88be67651ea6ed0832c14caa69729e724b0b4034b2e23d23fd1edb25b46e57ae_prof);

    }

    // line 12
    public function block_section3($context, array $blocks = array())
    {
        $__internal_a3279cabadf2de2b535de6565e31514145b634b5b2b6b0b8354cb6f9f3c7e9d5 = $this->env->getExtension("native_profiler");
        $__internal_a3279cabadf2de2b535de6565e31514145b634b5b2b6b0b8354cb6f9f3c7e9d5->enter($__internal_a3279cabadf2de2b535de6565e31514145b634b5b2b6b0b8354cb6f9f3c7e9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["Clientes"]) ? $context["Clientes"] : $this->getContext($context, "Clientes")));
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
        
        $__internal_a3279cabadf2de2b535de6565e31514145b634b5b2b6b0b8354cb6f9f3c7e9d5->leave($__internal_a3279cabadf2de2b535de6565e31514145b634b5b2b6b0b8354cb6f9f3c7e9d5_prof);

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
        return array (  193 => 106,  170 => 89,  158 => 80,  146 => 71,  134 => 62,  122 => 53,  110 => 44,  98 => 35,  87 => 27,  83 => 26,  80 => 25,  76 => 24,  63 => 13,  57 => 12,  45 => 7,  41 => 5,  35 => 4,  11 => 2,);
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
