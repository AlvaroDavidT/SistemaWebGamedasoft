<?php

/* LoginfirstBundle:Admin:ActualizarDatosAdmin.html.twig */
class __TwigTemplate_5e61dbf58867a279222c2ad6860ccff93530158241d92d54e5fcd9a583fe6f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout_Admin.html.twig", "LoginfirstBundle:Admin:ActualizarDatosAdmin.html.twig", 3);
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
        $__internal_19847552fae1aa3226cfba086ef9803d3fb0531f7c2793b297090c0854f0fc25 = $this->env->getExtension("native_profiler");
        $__internal_19847552fae1aa3226cfba086ef9803d3fb0531f7c2793b297090c0854f0fc25->enter($__internal_19847552fae1aa3226cfba086ef9803d3fb0531f7c2793b297090c0854f0fc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:ActualizarDatosAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19847552fae1aa3226cfba086ef9803d3fb0531f7c2793b297090c0854f0fc25->leave($__internal_19847552fae1aa3226cfba086ef9803d3fb0531f7c2793b297090c0854f0fc25_prof);

    }

    // line 4
    public function block_section2($context, array $blocks = array())
    {
        $__internal_e1758246375c07f0cdacf4a530426e4e816af2f34a8a8acaa1f90b66ef660429 = $this->env->getExtension("native_profiler");
        $__internal_e1758246375c07f0cdacf4a530426e4e816af2f34a8a8acaa1f90b66ef660429->enter($__internal_e1758246375c07f0cdacf4a530426e4e816af2f34a8a8acaa1f90b66ef660429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 5
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Actualizar Datos</li>
        </ol>
    </section>
";
        
        $__internal_e1758246375c07f0cdacf4a530426e4e816af2f34a8a8acaa1f90b66ef660429->leave($__internal_e1758246375c07f0cdacf4a530426e4e816af2f34a8a8acaa1f90b66ef660429_prof);

    }

    // line 12
    public function block_section3($context, array $blocks = array())
    {
        $__internal_56240db238ee7894607b6e0393c2833ff34bd1f69919e94b31311d61690ff83a = $this->env->getExtension("native_profiler");
        $__internal_56240db238ee7894607b6e0393c2833ff34bd1f69919e94b31311d61690ff83a->enter($__internal_56240db238ee7894607b6e0393c2833ff34bd1f69919e94b31311d61690ff83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 13
        echo "    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class='row'>
                            <div class='col-xs-6 '><h5>Actualizar  Información Administrador</h5></div>
                            <div class='col-xs-6 text-right'></div>
                        </div>
                        <hr>
                    </div>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Administradores"]) ? $context["Administradores"] : $this->getContext($context, "Administradores")));
        foreach ($context['_seq'] as $context["_key"] => $context["Admin"]) {
            // line 25
            echo "                        <form id=\"ActualizarAdmin\" class=\"form-horizontal\">
                            <div id=\"abc\" data-path=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("ActualizaDatos");
            echo "\"></div>  
                            <div id=\"idpr\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["Admin"], "id", array()), "html", null, true);
            echo "\"></div>       
                            <div class=\"panel-body\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for='nombre'>Nombres:</label>
                                    <div class=\"input-group col-sm-3\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </div>
                                        <input type=\"text\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["Admin"], "Nombre", array()), "html", null, true);
            echo "\"  id=\"nombre\" name=\"nombre\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for='apellidos'>Apellidos:</label>
                                    <div class=\"input-group col-sm-3\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </div>
                                        <input type=\"text\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["Admin"], "Apellido", array()), "html", null, true);
            echo "\" id=\"apellidos\" name=\"apellidos\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"telefono\">Telefóno:</label>
                                    <div class=\"input-group col-sm-2\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-phone\"></i>
                                        </div>
                                        <input type=\"text\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["Admin"], "Telefono", array()), "html", null, true);
            echo "\" id=\"telefono\" name=\"telefono\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"mail\">Correo Electrónico:</label>
                                    <div class=\"input-group col-sm-3\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-envelope\"></i>
                                        </div>
                                        <input type=\"email\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["Admin"], "Email", array()), "html", null, true);
            echo "\" id=\"mail\" name=\"mail\" class=\"form-control  input-sm\"/>
                                    </div>
                                </div><hr>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"cedula\">Cédula Identidad/Usuario:</label>
                                    <div class=\"input-group col-sm-3\">
                                        <div class=\"input-group-addon\">
                                            <i class=\"fa fa-qrcode\"></i>
                                        </div>
                                        <input  type=\"text\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["Admin"], "Cidentidad", array()), "html", null, true);
            echo "\" id=\"cedula\" name=\"cedula\" class=\"form-control  input-sm \" disabled/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel-footer\">
                                <div class='row'>
                                    <div class='col-xs-4 text-right'>
                                        <button class=\"btn btn-success btn-sm\" id=\"btn-Guardar\">Guardar</button>
                                    </div>
                                    <div class='col-xs-4 text-left'>
                                        <div id=\"success\" class=\" col-xm-5 alert alert-success\"  style=\"display: none;\"> <strong>Datos Actualizados Exitosamente !!</strong> </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            </div>
        </div>
    </div>
</section>
";
        
        $__internal_56240db238ee7894607b6e0393c2833ff34bd1f69919e94b31311d61690ff83a->leave($__internal_56240db238ee7894607b6e0393c2833ff34bd1f69919e94b31311d61690ff83a_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Admin:ActualizarDatosAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 88,  146 => 71,  134 => 62,  122 => 53,  110 => 44,  98 => 35,  87 => 27,  83 => 26,  80 => 25,  76 => 24,  63 => 13,  57 => 12,  45 => 7,  41 => 5,  35 => 4,  11 => 3,);
    }
}
/* */
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::layout_Admin.html.twig' %}*/
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Admin')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Actualizar Datos</li>*/
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
/*                             <div class='col-xs-6 '><h5>Actualizar  Información Administrador</h5></div>*/
/*                             <div class='col-xs-6 text-right'></div>*/
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     {% for Admin in Administradores %}*/
/*                         <form id="ActualizarAdmin" class="form-horizontal">*/
/*                             <div id="abc" data-path="{{path('ActualizaDatos')}}"></div>  */
/*                             <div id="idpr" value="{{Admin.id}}"></div>       */
/*                             <div class="panel-body">*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for='nombre'>Nombres:</label>*/
/*                                     <div class="input-group col-sm-3">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-pencil"></i>*/
/*                                         </div>*/
/*                                         <input type="text" value="{{ Admin.Nombre }}"  id="nombre" name="nombre" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for='apellidos'>Apellidos:</label>*/
/*                                     <div class="input-group col-sm-3">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-pencil"></i>*/
/*                                         </div>*/
/*                                         <input type="text" value="{{ Admin.Apellido }}" id="apellidos" name="apellidos" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="telefono">Telefóno:</label>*/
/*                                     <div class="input-group col-sm-2">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-phone"></i>*/
/*                                         </div>*/
/*                                         <input type="text" value="{{ Admin.Telefono }}" id="telefono" name="telefono" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="mail">Correo Electrónico:</label>*/
/*                                     <div class="input-group col-sm-3">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-envelope"></i>*/
/*                                         </div>*/
/*                                         <input type="email" value="{{ Admin.Email }}" id="mail" name="mail" class="form-control  input-sm"/>*/
/*                                     </div>*/
/*                                 </div><hr>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-3 control-label" for="cedula">Cédula Identidad/Usuario:</label>*/
/*                                     <div class="input-group col-sm-3">*/
/*                                         <div class="input-group-addon">*/
/*                                             <i class="fa fa-qrcode"></i>*/
/*                                         </div>*/
/*                                         <input  type="text" value="{{ Admin.Cidentidad }}" id="cedula" name="cedula" class="form-control  input-sm " disabled/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="panel-footer">*/
/*                                 <div class='row'>*/
/*                                     <div class='col-xs-4 text-right'>*/
/*                                         <button class="btn btn-success btn-sm" id="btn-Guardar">Guardar</button>*/
/*                                     </div>*/
/*                                     <div class='col-xs-4 text-left'>*/
/*                                         <div id="success" class=" col-xm-5 alert alert-success"  style="display: none;"> <strong>Datos Actualizados Exitosamente !!</strong> </div>*/
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
