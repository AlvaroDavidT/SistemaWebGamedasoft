<?php

/* LoginfirstBundle:Admin:ListarSubMenus.html.twig */
class __TwigTemplate_015671d7be82e2e45baa124c0d4c52dc136e3e070af41621dc987d3ffca228b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::layout_Admin.html.twig", "LoginfirstBundle:Admin:ListarSubMenus.html.twig", 2);
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
        $__internal_b4a02c8dee821c91aedbc91770667e66cccdb811961e8ea92d49731e81d9fcf3 = $this->env->getExtension("native_profiler");
        $__internal_b4a02c8dee821c91aedbc91770667e66cccdb811961e8ea92d49731e81d9fcf3->enter($__internal_b4a02c8dee821c91aedbc91770667e66cccdb811961e8ea92d49731e81d9fcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:ListarSubMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4a02c8dee821c91aedbc91770667e66cccdb811961e8ea92d49731e81d9fcf3->leave($__internal_b4a02c8dee821c91aedbc91770667e66cccdb811961e8ea92d49731e81d9fcf3_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_3261266494e968902335ebcb48af30f294c3415eb199e4075987b6c6381c2f36 = $this->env->getExtension("native_profiler");
        $__internal_3261266494e968902335ebcb48af30f294c3415eb199e4075987b6c6381c2f36->enter($__internal_3261266494e968902335ebcb48af30f294c3415eb199e4075987b6c6381c2f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 4
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Lista SubMenus</li>
        </ol>
    </section>
";
        
        $__internal_3261266494e968902335ebcb48af30f294c3415eb199e4075987b6c6381c2f36->leave($__internal_3261266494e968902335ebcb48af30f294c3415eb199e4075987b6c6381c2f36_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_7c652a916480d04a38ff2f086e06ab496ff4d7488769669cf4f99c8488429e90 = $this->env->getExtension("native_profiler");
        $__internal_7c652a916480d04a38ff2f086e06ab496ff4d7488769669cf4f99c8488429e90->enter($__internal_7c652a916480d04a38ff2f086e06ab496ff4d7488769669cf4f99c8488429e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
                                <h5 class=\"modal-title\">Nuevo SubMenu</h5>
                            </div>
                            <form id=\"NuevoSubmenu\" method=\"Post\" class=\"form-horizontal\" action='";
        // line 30
        echo $this->env->getExtension('routing')->getPath("GuardarSubMenu");
        echo "'>

                                <div class=\"modal-body\">                               
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"SubMenuNombre\">Nombre:</label>
                                        <div class=\"input-group col-sm-5\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-pencil\"></i>
                                            </div>
                                            <input type=\"Text\" id=\"SubMenuNombre\" name=\"SubMenuNombre\" class=\"form-control  input-sm\"/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"Modulo\">Modulo:</label>
                                        <div class=\"input-group col-sm-6\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-bars\"></i>
                                            </div>
                                             <div id=\"PathMod\" data-path=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("Menus1");
        echo "\"></div>  
                                            <select class=\"form-control input-sm\" name='Modulo' id='Modulo'>
                                                 <option value=''selected>Seleccione Modulo</option>
                                                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Modulos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Modulos"]) {
            echo "                                                
                                                    <option value='";
            // line 52
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
        // line 54
        echo "                                            </select>
                                        </div>
                                    </div><!-- Code snippet -->
                                    <div class=\"form-group\">
                                        <div class=\"col-xs-12 text-center\"><div class=\"loading\"></div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"Menu\">Menu:</label>
                                        <div class=\"input-group col-sm-6\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-bars\"></i>
                                            </div>
                                            <select class=\"form-control input-sm\" name='Menu' id='Menu'>
                                                <option value=''selected>Seleccione Menu</option>
                                            </select>
                                             

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
                            <div class='col-xs-6 '>Lista de SubMenus</div><div class='col-xs-6 text-right'><button type=\"button\" class=\"btn btn-success btn-sm text-right\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-circle\"></i> Nuevo</button></div>
                        </div>
                        <hr>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table id=\"example2\" class=\"table table-hover table-condensed\">
                                <thead class='bg-success'>
                                    <tr> 
                                        <th>#</th>
                                        <th>SubMenu</th>
                                        <th>Módulo</th>
                                        <th>Menus</th>
                                        <th class='text-center'>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["SubMenus"]);
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
        foreach ($context['_seq'] as $context["_key"] => $context["SubMenus"]) {
            // line 105
            echo "                                        <tr>
                                            <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubMenus"], "NombreSubMenu", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubMenus"], "Modulo", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubMenus"], "Menu", array()), "html", null, true);
            echo "</td>
                                            <td class='text-center'> ";
            // line 110
            if (($this->getAttribute($context["SubMenus"], "EstadoSubMenu", array()) == 1)) {
                // line 111
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DesactivaSubMenu", array("idSubMenu" => $this->getAttribute($context["SubMenus"], "idSubMenu", array()))), "html", null, true);
                echo "\" class='btn btn-xs btn-success'>Activado</a>
                                            ";
            } else {
                // line 113
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ActivaSubMenu", array("idSubMenu" => $this->getAttribute($context["SubMenus"], "idSubMenu", array()))), "html", null, true);
                echo "\" class='btn btn-xs btn-danger'>Desactivado</a>
                                                ";
            }
            // line 114
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['SubMenus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box -->
                    </div>
                </section><!-- /.content -->
                ";
        
        $__internal_7c652a916480d04a38ff2f086e06ab496ff4d7488769669cf4f99c8488429e90->leave($__internal_7c652a916480d04a38ff2f086e06ab496ff4d7488769669cf4f99c8488429e90_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Admin:ListarSubMenus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 117,  242 => 114,  236 => 113,  230 => 111,  228 => 110,  224 => 109,  220 => 108,  216 => 107,  212 => 106,  209 => 105,  192 => 104,  140 => 54,  128 => 52,  122 => 51,  116 => 48,  95 => 30,  81 => 18,  72 => 16,  68 => 15,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::layout_Admin.html.twig' %}*/
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Admin')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Lista SubMenus</li>*/
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
/*                                 <h5 class="modal-title">Nuevo SubMenu</h5>*/
/*                             </div>*/
/*                             <form id="NuevoSubmenu" method="Post" class="form-horizontal" action='{{ path('GuardarSubMenu') }}'>*/
/* */
/*                                 <div class="modal-body">                               */
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-3 control-label" for="SubMenuNombre">Nombre:</label>*/
/*                                         <div class="input-group col-sm-5">*/
/*                                             <div class="input-group-addon">*/
/*                                                 <i class="fa fa-pencil"></i>*/
/*                                             </div>*/
/*                                             <input type="Text" id="SubMenuNombre" name="SubMenuNombre" class="form-control  input-sm"/>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-3 control-label" for="Modulo">Modulo:</label>*/
/*                                         <div class="input-group col-sm-6">*/
/*                                             <div class="input-group-addon">*/
/*                                                 <i class="fa fa-bars"></i>*/
/*                                             </div>*/
/*                                              <div id="PathMod" data-path="{{path('Menus1')}}"></div>  */
/*                                             <select class="form-control input-sm" name='Modulo' id='Modulo'>*/
/*                                                  <option value=''selected>Seleccione Modulo</option>*/
/*                                                 {% for Modulos in Modulos %}                                                */
/*                                                     <option value='{{Modulos.idModulo }}' name='{{Modulos.NombreModulo }}'>{{Modulos.NombreModulo }}</option>*/
/*                                                 {% endfor %}*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div><!-- Code snippet -->*/
/*                                     <div class="form-group">*/
/*                                         <div class="col-xs-12 text-center"><div class="loading"></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-3 control-label" for="Menu">Menu:</label>*/
/*                                         <div class="input-group col-sm-6">*/
/*                                             <div class="input-group-addon">*/
/*                                                 <i class="fa fa-bars"></i>*/
/*                                             </div>*/
/*                                             <select class="form-control input-sm" name='Menu' id='Menu'>*/
/*                                                 <option value=''selected>Seleccione Menu</option>*/
/*                                             </select>*/
/*                                              */
/* */
/*                                         </div>  */
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
/*                             <div class='col-xs-6 '>Lista de SubMenus</div><div class='col-xs-6 text-right'><button type="button" class="btn btn-success btn-sm text-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuevo</button></div>*/
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table id="example2" class="table table-hover table-condensed">*/
/*                                 <thead class='bg-success'>*/
/*                                     <tr> */
/*                                         <th>#</th>*/
/*                                         <th>SubMenu</th>*/
/*                                         <th>Módulo</th>*/
/*                                         <th>Menus</th>*/
/*                                         <th class='text-center'>Estado</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for SubMenus in SubMenus%}*/
/*                                         <tr>*/
/*                                             <td>{{ loop.index }}</td>*/
/*                                             <td>{{ SubMenus.NombreSubMenu }}</td>*/
/*                                             <td>{{ SubMenus.Modulo }}</td>*/
/*                                             <td>{{ SubMenus.Menu }}</td>*/
/*                                             <td class='text-center'> {% if SubMenus.EstadoSubMenu == 1%}*/
/*                                                 <a href="{{path('DesactivaSubMenu',{'idSubMenu': SubMenus.idSubMenu })}}" class='btn btn-xs btn-success'>Activado</a>*/
/*                                             {% else %}*/
/*                                                 <a href="{{path('ActivaSubMenu',{'idSubMenu': SubMenus.idSubMenu })}}" class='btn btn-xs btn-danger'>Desactivado</a>*/
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
