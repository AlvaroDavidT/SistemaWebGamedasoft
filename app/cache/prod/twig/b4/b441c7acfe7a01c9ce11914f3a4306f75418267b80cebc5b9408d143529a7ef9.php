<?php

/* LoginfirstBundle:Admin:ListarMenus.html.twig */
class __TwigTemplate_f881cba3287a7268e10c24539625a5d08d094754fa77ef816a2b10b424240fbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Admin.html.twig", "LoginfirstBundle:Admin:ListarMenus.html.twig", 2);
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
        $__internal_ae324b953e2827fb7989d583f2b171b2455bfed18944fb942d9137d3a7ad816a = $this->env->getExtension("native_profiler");
        $__internal_ae324b953e2827fb7989d583f2b171b2455bfed18944fb942d9137d3a7ad816a->enter($__internal_ae324b953e2827fb7989d583f2b171b2455bfed18944fb942d9137d3a7ad816a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:ListarMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae324b953e2827fb7989d583f2b171b2455bfed18944fb942d9137d3a7ad816a->leave($__internal_ae324b953e2827fb7989d583f2b171b2455bfed18944fb942d9137d3a7ad816a_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_49ee7ee91b89792e26d718a4b326c8b9838018f9bcf40156c15c2b986a459869 = $this->env->getExtension("native_profiler");
        $__internal_49ee7ee91b89792e26d718a4b326c8b9838018f9bcf40156c15c2b986a459869->enter($__internal_49ee7ee91b89792e26d718a4b326c8b9838018f9bcf40156c15c2b986a459869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 4
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Lista Menus</li>
        </ol>
    </section>
";
        
        $__internal_49ee7ee91b89792e26d718a4b326c8b9838018f9bcf40156c15c2b986a459869->leave($__internal_49ee7ee91b89792e26d718a4b326c8b9838018f9bcf40156c15c2b986a459869_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_8eaa0a61ba251b77af0d63353f2f3c28bce425b32bbf9499e5835b25dd9c4d27 = $this->env->getExtension("native_profiler");
        $__internal_8eaa0a61ba251b77af0d63353f2f3c28bce425b32bbf9499e5835b25dd9c4d27->enter($__internal_8eaa0a61ba251b77af0d63353f2f3c28bce425b32bbf9499e5835b25dd9c4d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        echo "                <!-- Trigger the modal with a button -->

                <!-- Modal -->
                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">

                        <!-- Modal content-->
                        <div class=\"modal-content\">
                            <div class=\"modal-header btn-primary \">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span><i class=\"fa fa-times-circle\"></i></span></button>
                                <h5 class=\"modal-title\">Nuevo Menu</h5>
                            </div>
                            <form id=\"NuevoMenu\" method=\"Post\" class=\"form-horizontal\" action='";
        // line 30
        echo $this->env->getExtension('routing')->getPath("GuardarMenu");
        echo "'>

                                <div class=\"modal-body\">                               
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"MenuNombre\">Nombre:</label>
                                        <div class=\"input-group col-sm-5\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-pencil\"></i>
                                            </div>
                                            <input type=\"Text\" id=\"MenuNombre\" name=\"MenuNombre\" class=\"form-control  input-sm\"/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"Modulo\">Modulo:</label>
                                        <div class=\"input-group col-sm-6\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-bars\"></i>
                                            </div>
                                            <select class=\"form-control input-sm\" name='Modulo' id='Modulo'>
                                                 <option value=''selected>Seleccione Modulo</option>
                                                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Modulos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Modulos"]) {
            echo "                                                
                                                    <option value='";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "idModulo", array()), "html", null, true);
            echo "' name='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "NombreModulo", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "NombreModulo", array()), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modulos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                                            </select>
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
                            <div class='col-xs-6 '>Lista de Menus</div><div class='col-xs-6 text-right'><button type=\"button\" class=\"btn btn-success btn-sm text-right\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-circle\"></i> Nuevo</button></div>
                        </div>
                        <hr>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table id=\"example2\" class=\"table table-hover table-condensed\">
                                <thead class='bg-success'>
                                    <tr> 
                                        <th>#</th>
                                        <th>Menus</th>
                                        <th>Módulo</th>
                                        <th class='text-center'>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Menus"]);
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
        foreach ($context['_seq'] as $context["_key"] => $context["Menus"]) {
            // line 86
            echo "                                        <tr>
                                            <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menus"], "NombreMenu", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menus"], "Modulo", array()), "html", null, true);
            echo "</td>
                                            <td class='text-center'> ";
            // line 90
            if (($this->getAttribute($context["Menus"], "EstadoMenu", array()) == 1)) {
                // line 91
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DesactivaMenu", array("idMenu" => $this->getAttribute($context["Menus"], "idMenu", array()))), "html", null, true);
                echo "\" class='btn btn-xs btn-success'>Activado</a>
                                            ";
            } else {
                // line 93
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ActivaMenu", array("idMenu" => $this->getAttribute($context["Menus"], "idMenu", array()))), "html", null, true);
                echo "\" class='btn btn-xs btn-danger'>Desactivado</a>
                                                ";
            }
            // line 94
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Menus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box -->
                    </div>
                </section><!-- /.content -->
                ";
        
        $__internal_8eaa0a61ba251b77af0d63353f2f3c28bce425b32bbf9499e5835b25dd9c4d27->leave($__internal_8eaa0a61ba251b77af0d63353f2f3c28bce425b32bbf9499e5835b25dd9c4d27_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Admin:ListarMenus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 97,  216 => 94,  210 => 93,  204 => 91,  202 => 90,  198 => 89,  194 => 88,  190 => 87,  187 => 86,  170 => 85,  136 => 53,  124 => 51,  118 => 50,  95 => 30,  81 => 18,  72 => 16,  68 => 15,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Admin.html.twig' %}*/
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Admin')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Lista Menus</li>*/
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
/*                                 <h5 class="modal-title">Nuevo Menu</h5>*/
/*                             </div>*/
/*                             <form id="NuevoMenu" method="Post" class="form-horizontal" action='{{ path('GuardarMenu') }}'>*/
/* */
/*                                 <div class="modal-body">                               */
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-3 control-label" for="MenuNombre">Nombre:</label>*/
/*                                         <div class="input-group col-sm-5">*/
/*                                             <div class="input-group-addon">*/
/*                                                 <i class="fa fa-pencil"></i>*/
/*                                             </div>*/
/*                                             <input type="Text" id="MenuNombre" name="MenuNombre" class="form-control  input-sm"/>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-3 control-label" for="Modulo">Modulo:</label>*/
/*                                         <div class="input-group col-sm-6">*/
/*                                             <div class="input-group-addon">*/
/*                                                 <i class="fa fa-bars"></i>*/
/*                                             </div>*/
/*                                             <select class="form-control input-sm" name='Modulo' id='Modulo'>*/
/*                                                  <option value=''selected>Seleccione Modulo</option>*/
/*                                                 {% for Modulos in Modulos %}                                                */
/*                                                     <option value='{{Modulos.idModulo }}' name='{{Modulos.NombreModulo }}'>{{Modulos.NombreModulo }}</option>*/
/*                                                 {% endfor %}*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div> */
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
/*                             <div class='col-xs-6 '>Lista de Menus</div><div class='col-xs-6 text-right'><button type="button" class="btn btn-success btn-sm text-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuevo</button></div>*/
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table id="example2" class="table table-hover table-condensed">*/
/*                                 <thead class='bg-success'>*/
/*                                     <tr> */
/*                                         <th>#</th>*/
/*                                         <th>Menus</th>*/
/*                                         <th>Módulo</th>*/
/*                                         <th class='text-center'>Estado</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for Menus in Menus %}*/
/*                                         <tr>*/
/*                                             <td>{{ loop.index }}</td>*/
/*                                             <td>{{ Menus.NombreMenu }}</td>*/
/*                                             <td>{{ Menus.Modulo }}</td>*/
/*                                             <td class='text-center'> {% if Menus.EstadoMenu == 1%}*/
/*                                                 <a href="{{path('DesactivaMenu',{'idMenu': Menus.idMenu })}}" class='btn btn-xs btn-success'>Activado</a>*/
/*                                             {% else %}*/
/*                                                 <a href="{{path('ActivaMenu',{'idMenu': Menus.idMenu })}}" class='btn btn-xs btn-danger'>Desactivado</a>*/
/*                                                 {% endif %}</td>                    */
/*                                             </tr>*/
/*                                             {% endfor %}*/
/*                                             </tbody>*/
/*                                         </table>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!-- /.box -->*/
/*                     </div>*/
/*                 </section><!-- /.content -->*/
/*                 {% endblock %}*/
/* */
