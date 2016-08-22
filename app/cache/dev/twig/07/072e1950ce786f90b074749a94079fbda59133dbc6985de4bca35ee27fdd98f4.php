<?php

/* LoginfirstBundle:Admin:ListarMenus.html.twig */
class __TwigTemplate_b0803ff95687f776d2f344993eda7b7b425dcdef3540bddb9bb240b86dd0ff20 extends Twig_Template
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
        $__internal_c31f29cd59eb03dd12623eba944ff32c542134ac404e73f220065537567d5e08 = $this->env->getExtension("native_profiler");
        $__internal_c31f29cd59eb03dd12623eba944ff32c542134ac404e73f220065537567d5e08->enter($__internal_c31f29cd59eb03dd12623eba944ff32c542134ac404e73f220065537567d5e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:ListarMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c31f29cd59eb03dd12623eba944ff32c542134ac404e73f220065537567d5e08->leave($__internal_c31f29cd59eb03dd12623eba944ff32c542134ac404e73f220065537567d5e08_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_a92d1467ee0db70e45340b2cf5813a511e3255dda972595d4381868efdd8da49 = $this->env->getExtension("native_profiler");
        $__internal_a92d1467ee0db70e45340b2cf5813a511e3255dda972595d4381868efdd8da49->enter($__internal_a92d1467ee0db70e45340b2cf5813a511e3255dda972595d4381868efdd8da49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 4
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Lista de Menus</li>
        </ol>
    </section>
";
        
        $__internal_a92d1467ee0db70e45340b2cf5813a511e3255dda972595d4381868efdd8da49->leave($__internal_a92d1467ee0db70e45340b2cf5813a511e3255dda972595d4381868efdd8da49_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_a4de77006a71728ab75be7aa57483995c6f7a9c66d96503aecf876d6ffb0e0f2 = $this->env->getExtension("native_profiler");
        $__internal_a4de77006a71728ab75be7aa57483995c6f7a9c66d96503aecf876d6ffb0e0f2->enter($__internal_a4de77006a71728ab75be7aa57483995c6f7a9c66d96503aecf876d6ffb0e0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
        echo "                <!-- Trigger the modal with a button -->

                <!-- Modal -->
                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog modal-sm\">

                        <!-- Modal content-->
                        <div class=\"modal-content\">
                            <div class=\"modal-header btn-primary \">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span><i class=\"fa fa-times-circle\"></i></span></button>
                                <h5 class=\"modal-title\" align=\"center\"><strong>INGRESO NUEVO MENU</strong></h5>
                            </div>
                            <form id=\"NuevoMenu\" method=\"Post\" class=\"form-horizontal\" action='";
        // line 42
        echo $this->env->getExtension('routing')->getPath("GuardarMenu");
        echo "'>

                                <div class=\"modal-body\">                               
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"MenuNombre\">Nombre:</label>
                                        <div class=\"input-group col-sm-8\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-pencil\"></i>
                                            </div>
                                            <input type=\"Text\" id=\"MenuNombre\" name=\"MenuNombre\" class=\"form-control  input-sm\"/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"Modulo\">Modulo:</label>
                                        <div class=\"input-group col-sm-8\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-bars\"></i>
                                            </div>
                                            <select class=\"form-control input-sm\" name='Modulo' id='Modulo'>
                                                <option value=''selected>Seleccione Modulo</option>
                                                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Modulos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Modulos"]) {
            echo "                                                
                                                    <option value='";
            // line 63
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
        // line 65
        echo "                                            </select>
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
                            <div class='col-xs-6 '><strong>Lista de Menus</strong></div><div class='col-xs-6 text-right'><button type=\"button\" class=\"btn btn-success btn-sm text-right\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-circle\"></i> Nuevo</button></div>
                        </div>
                        <hr>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                              <div class=\"col-md-12\">
                                <p class=\"text-info\">
                                    <br>
                                    <small><strong> TOTAL DE REGISTROS: <span class=\"badge\">";
        // line 90
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Menus"]) ? $context["Menus"] : $this->getContext($context, "Menus"))), "html", null, true);
        echo "</span></strong></small>
                                    <br></p>                         



                            </div>
                            <table id=\"example2\" class=\"table table-hover table-bordered\">
                                <thead class='bg-success'>
                                    <tr> 
                                        <th class=\"text-center small\">N°</th>
                                        <th class=\"text-center small\">MENUS</th>
                                        <th class=\"text-center small\">MODULOS</th>
                                        <th class=\"text-center small\">ACTIVAR/DESACTIVAR</th>
                                        <th class=\"text-center small col-xs-2\">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 107
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
            // line 108
            echo "                                        <tr>
                                            <td class=\"text-center small\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\">";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menus"], "NombreMenu", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\">";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menus"], "Modulo", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\"> 
                                                ";
            // line 113
            if (($this->getAttribute($context["Menus"], "EstadoMenu", array()) == 1)) {
                // line 114
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DesactivaMenu", array("idMenu" => $this->getAttribute($context["Menus"], "idMenu", array()))), "html", null, true);
                echo "\" class='btn btn-xs btn-success'>Activado</a>
                                                ";
            } else {
                // line 116
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ActivaMenu", array("idMenu" => $this->getAttribute($context["Menus"], "idMenu", array()))), "html", null, true);
                echo "\" class='btn btn-xs btn-danger'>Desactivado</a>
                                                ";
            }
            // line 117
            echo "                 

                                            </td>
                                            <td>
                                                <!-- inicia el modal de edicion-->
                                                <button type=\"button\" id=\"actualizar\" class=\"btn btn-xs btn-success btn-circle\" data-toggle=\"modal\" data-target=\"#";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menus"], "idMenu", array()), "html", null, true);
            echo "\" data-whatever=\"@mdo\"> <i class=\"fa fa-pencil\" title=\"EDITAR\" aria-hidden=\"true\"></i></button><small>Editar</small> 
                                                <div class=\"modal\" id=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menus"], "idMenu", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\">
                                                    <div class=\"modal-dialog modal-sm\" role=\"document\">
                                                        <form id=\"Editar\" method=\"POST\" action='";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GuardarEditMenusA", array("idMenu" => $this->getAttribute($context["Menus"], "idMenu", array()))), "html", null, true);
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
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menus"], "NombreMenu", array()), "html", null, true);
            echo "\" id=\"MeNombre\" name=\"MeNombre\" class=\"form-control  input-sm\"/>
                                                                                </div>
                                                                            </div>                                                                    
                                                                        </div>
                                                                        <div class='col-sm-12'>
                                                                            <strong>Modulo:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>

                                                                                    <select class=\"form-control input-sm\" name='MenuD' id='MenuD'>
                                                                                        <option value='";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menus"], "ModuloId", array()), "html", null, true);
            echo "'selected>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menus"], "Modulo", array()), "html", null, true);
            echo "</option>
                                                                                        ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["Modulos"]);
            foreach ($context['_seq'] as $context["_key"] => $context["Modulos"]) {
                echo "                                                
                                                                                            <option value='";
                // line 150
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
            // line 152
            echo "                                                                                    </select>

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
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EliminarMenu", array("idEMe" => $this->getAttribute($context["Menus"], "idMenu", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Menus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.box -->
        </div>
    </section><!-- /.content -->
";
        
        $__internal_a4de77006a71728ab75be7aa57483995c6f7a9c66d96503aecf876d6ffb0e0f2->leave($__internal_a4de77006a71728ab75be7aa57483995c6f7a9c66d96503aecf876d6ffb0e0f2_prof);

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
        return array (  382 => 174,  363 => 169,  344 => 152,  332 => 150,  326 => 149,  320 => 148,  307 => 138,  291 => 125,  286 => 123,  282 => 122,  275 => 117,  269 => 116,  263 => 114,  261 => 113,  256 => 111,  252 => 110,  248 => 109,  245 => 108,  228 => 107,  208 => 90,  181 => 65,  169 => 63,  163 => 62,  140 => 42,  126 => 30,  117 => 28,  112 => 27,  102 => 24,  97 => 23,  87 => 20,  82 => 19,  72 => 16,  68 => 15,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Admin.html.twig' %}*/
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Admin')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Lista de Menus</li>*/
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
/*                 <!-- Trigger the modal with a button -->*/
/* */
/*                 <!-- Modal -->*/
/*                 <div id="myModal" class="modal fade" role="dialog">*/
/*                     <div class="modal-dialog modal-sm">*/
/* */
/*                         <!-- Modal content-->*/
/*                         <div class="modal-content">*/
/*                             <div class="modal-header btn-primary ">*/
/*                                 <button type="button" class="close" data-dismiss="modal"><span><i class="fa fa-times-circle"></i></span></button>*/
/*                                 <h5 class="modal-title" align="center"><strong>INGRESO NUEVO MENU</strong></h5>*/
/*                             </div>*/
/*                             <form id="NuevoMenu" method="Post" class="form-horizontal" action='{{ path('GuardarMenu') }}'>*/
/* */
/*                                 <div class="modal-body">                               */
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-3 control-label" for="MenuNombre">Nombre:</label>*/
/*                                         <div class="input-group col-sm-8">*/
/*                                             <div class="input-group-addon">*/
/*                                                 <i class="fa fa-pencil"></i>*/
/*                                             </div>*/
/*                                             <input type="Text" id="MenuNombre" name="MenuNombre" class="form-control  input-sm"/>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-3 control-label" for="Modulo">Modulo:</label>*/
/*                                         <div class="input-group col-sm-8">*/
/*                                             <div class="input-group-addon">*/
/*                                                 <i class="fa fa-bars"></i>*/
/*                                             </div>*/
/*                                             <select class="form-control input-sm" name='Modulo' id='Modulo'>*/
/*                                                 <option value=''selected>Seleccione Modulo</option>*/
/*                                                 {% for Modulos in Modulos %}                                                */
/*                                                     <option value='{{Modulos.idModulo }}' name='{{Modulos.NombreModulo }}'>{{Modulos.NombreModulo }}</option>*/
/*                                                 {% endfor %}*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div> */
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
/*                             <div class='col-xs-6 '><strong>Lista de Menus</strong></div><div class='col-xs-6 text-right'><button type="button" class="btn btn-success btn-sm text-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuevo</button></div>*/
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                               <div class="col-md-12">*/
/*                                 <p class="text-info">*/
/*                                     <br>*/
/*                                     <small><strong> TOTAL DE REGISTROS: <span class="badge">{{Menus|length}}</span></strong></small>*/
/*                                     <br></p>                         */
/* */
/* */
/* */
/*                             </div>*/
/*                             <table id="example2" class="table table-hover table-bordered">*/
/*                                 <thead class='bg-success'>*/
/*                                     <tr> */
/*                                         <th class="text-center small">N°</th>*/
/*                                         <th class="text-center small">MENUS</th>*/
/*                                         <th class="text-center small">MODULOS</th>*/
/*                                         <th class="text-center small">ACTIVAR/DESACTIVAR</th>*/
/*                                         <th class="text-center small col-xs-2">ACCIONES</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for Menus in Menus %}*/
/*                                         <tr>*/
/*                                             <td class="text-center small">{{ loop.index }}</td>*/
/*                                             <td class="text-center small">{{ Menus.NombreMenu }}</td>*/
/*                                             <td class="text-center small">{{ Menus.Modulo }}</td>*/
/*                                             <td class="text-center small"> */
/*                                                 {% if Menus.EstadoMenu == 1%}*/
/*                                                     <a href="{{path('DesactivaMenu',{'idMenu': Menus.idMenu })}}" class='btn btn-xs btn-success'>Activado</a>*/
/*                                                 {% else %}*/
/*                                                     <a href="{{path('ActivaMenu',{'idMenu': Menus.idMenu })}}" class='btn btn-xs btn-danger'>Desactivado</a>*/
/*                                                 {% endif %}                 */
/* */
/*                                             </td>*/
/*                                             <td>*/
/*                                                 <!-- inicia el modal de edicion-->*/
/*                                                 <button type="button" id="actualizar" class="btn btn-xs btn-success btn-circle" data-toggle="modal" data-target="#{{Menus.idMenu }}" data-whatever="@mdo"> <i class="fa fa-pencil" title="EDITAR" aria-hidden="true"></i></button><small>Editar</small> */
/*                                                 <div class="modal" id="{{ Menus.idMenu }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">*/
/*                                                     <div class="modal-dialog modal-sm" role="document">*/
/*                                                         <form id="Editar" method="POST" action='{{ path('GuardarEditMenusA',{'idMenu':  Menus.idMenu }) }}'>                          */
/*                                                             <div class="modal-content">*/
/*                                                                 <div class="modal-header btn-primary">*/
/*                                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>*/
/*                                                                     <h5 class="modal-title" id="exampleModalLabel" align="center"><strong> ACTUALIZAR MODULO</strong></h5>*/
/*                                                                 </div>*/
/*                                                                 <div class="modal-body">*/
/*                                                                     <div class='row'>*/
/* */
/*                                                                         <div class='col-sm-12'>                                                                          */
/*                                                                             <strong>Nombre:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                     <input type="text" value="{{Menus.NombreMenu }}" id="MeNombre" name="MeNombre" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>                                                                    */
/*                                                                         </div>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Modulo:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/* */
/*                                                                                     <select class="form-control input-sm" name='MenuD' id='MenuD'>*/
/*                                                                                         <option value='{{Menus.ModuloId}}'selected>{{Menus.Modulo}}</option>*/
/*                                                                                         {% for Modulos in Modulos %}                                                */
/*                                                                                             <option value='{{Modulos.idModulo }}' name='{{Modulos.NombreModulo }}'>{{Modulos.NombreModulo }}</option>*/
/*                                                                                         {% endfor %}*/
/*                                                                                     </select>*/
/* */
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
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
/*                                               <!-- FIN EDITAR EMPLEADOS --> */
/*                                                        <a class="btn btn-danger btn-circle" href="{{path('EliminarMenu',{'idEMe': Menus.idMenu })}}"><i class="fa fa-trash-o fa-fw" title="ELIMINAR" aria-hidden="true"></i> <span class="sr-only">ELIMINAR</span></a><small>Eliminar</small>*/
/*                                 */
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /.box -->*/
/*         </div>*/
/*     </section><!-- /.content -->*/
/* {% endblock %}*/
/* */
