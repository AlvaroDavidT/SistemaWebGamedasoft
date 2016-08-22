<?php

/* LoginfirstBundle:Admin:ListarSubMenus.html.twig */
class __TwigTemplate_35a1b4d485858f16adfc1df018bcd0b854f5e6ac0ce88863331bd3920e08ec1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_Admin.html.twig", "LoginfirstBundle:Admin:ListarSubMenus.html.twig", 2);
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
        $__internal_7e8455fcd9e8341719de94c6c7e34145bc5075b7aa1beb10021a3109a08d2370 = $this->env->getExtension("native_profiler");
        $__internal_7e8455fcd9e8341719de94c6c7e34145bc5075b7aa1beb10021a3109a08d2370->enter($__internal_7e8455fcd9e8341719de94c6c7e34145bc5075b7aa1beb10021a3109a08d2370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:ListarSubMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e8455fcd9e8341719de94c6c7e34145bc5075b7aa1beb10021a3109a08d2370->leave($__internal_7e8455fcd9e8341719de94c6c7e34145bc5075b7aa1beb10021a3109a08d2370_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_1388d18ce6407215eb8a8c7edc9ac5d2881fb21996d97df471e3a29d6a626527 = $this->env->getExtension("native_profiler");
        $__internal_1388d18ce6407215eb8a8c7edc9ac5d2881fb21996d97df471e3a29d6a626527->enter($__internal_1388d18ce6407215eb8a8c7edc9ac5d2881fb21996d97df471e3a29d6a626527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

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
        
        $__internal_1388d18ce6407215eb8a8c7edc9ac5d2881fb21996d97df471e3a29d6a626527->leave($__internal_1388d18ce6407215eb8a8c7edc9ac5d2881fb21996d97df471e3a29d6a626527_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_cbd6a60577b2a9e79168aab9522df1852c987297290704fe154fd131f2092bc0 = $this->env->getExtension("native_profiler");
        $__internal_cbd6a60577b2a9e79168aab9522df1852c987297290704fe154fd131f2092bc0->enter($__internal_cbd6a60577b2a9e79168aab9522df1852c987297290704fe154fd131f2092bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
                                <h5 class=\"modal-title\" align=\"center\" >INGRESO NUEVO MENU</h5>
                            </div>
                            <form id=\"NuevoSubmenu\" method=\"Post\" class=\"form-horizontal\" action='";
        // line 42
        echo $this->env->getExtension('routing')->getPath("GuardarSubMenu");
        echo "'>

                                <div class=\"modal-body\">                               
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"SubMenuNombre\">Nombre:</label>
                                        <div class=\"input-group col-sm-7\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-pencil\"></i>
                                            </div>
                                            <input type=\"Text\" id=\"SubMenuNombre\" name=\"SubMenuNombre\" class=\"form-control  input-sm\"/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"Modulo\">Modulo:</label>
                                        <div class=\"input-group col-sm-7\">
                                            <div class=\"input-group-addon\">
                                                <i class=\"fa fa-bars\"></i>
                                            </div>
                                             <div id=\"PathMod\" data-path=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("Menus1");
        echo "\"></div>  
                                            <select class=\"form-control input-sm\" name='Modulo' id='Modulo'>
                                                 <option value=''selected>Seleccione Modulo</option>
                                                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Modulos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Modulos"]) {
            echo "                                                
                                                    <option value='";
            // line 64
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
        // line 66
        echo "                                            </select>
                                        </div>
                                    </div><!-- Code snippet -->
                                    <div class=\"form-group\">
                                        <div class=\"col-xs-12 text-center\"><div class=\"loading\"></div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"Menu\">Menu:</label>
                                        <div class=\"input-group col-sm-7\">
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
                            <div class='col-xs-6 '><strong>Lista de SubMenus</strong></div><div class='col-xs-6 text-right'><button type=\"button\" class=\"btn btn-success btn-sm text-right\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-plus-circle\"></i> Nuevo</button></div>
                        </div>
                        <hr>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                              <div class=\"col-md-12\">
                                <p class=\"text-info\">
                                    <br>
                                    <small><strong>TOTAL DE REGISTROS: <span class='badge'>";
        // line 108
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["SubMenus"]) ? $context["SubMenus"] : $this->getContext($context, "SubMenus"))), "html", null, true);
        echo "</span></strong></small>
                                    <br></p>                         
                            </div>
                                 <div class=\"col-md-12\">
                                <div class=\"panel panel-danger col-md-12\">
                                    <div class=\"panel-body\">
                                        <div class=\"col-md-3\">
                                            <strong>Buscar Submenu: <i class=\"fa fa-search\" aria-hidden=\"true\"></i></strong>
                                        </div>
                                        <div class=\"col-md-9\">
                                            <div class=\"input-group col-sm-3\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"fa fa-qrcode\"></i>
                                                </div>
                                                 <select class=\"form-control input-sm\" name='SubmenusBuscar' id='Modulo'>
                                                <option value='0'selected>Todos</option>
                                                ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["SubmenusB"]);
        foreach ($context['_seq'] as $context["_key"] => $context["SubmenusB"]) {
            echo "                                                
                                                    <option value='";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubmenusB"], "id", array()), "html", null, true);
            echo "' name='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubmenusB"], "Nombre", array()), "html", null, true);
            echo "'> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BuscaSubmenu", array("idSub" => $this->getAttribute($context["SubmenusB"], "id", array()))), "html", null, true);
            echo "\" class='btn btn-xs btn-success '>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubmenusB"], "Nombre", array()), "html", null, true);
            echo "</a>
                                             </option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['SubmenusB'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                                            </select>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-12 text-center\"><div class=\"loading1\"></div>
                                </div>
                            </div>     
                                    
                                    
                                    
                                    
                            <table id=\"Submenus\" class=\"table table-hover table-bordered\">
                                <thead class='bg-success'>
                                    <tr> 
                                        <th class=\"text-center small\">N°</th>
                                        <th class=\"text-center small\">SUBMENUS</th>
                                        <th class=\"text-center small\">MENUS</th>
                                        <th class=\"text-center small\">MODULO</th>
                                        <th class=\"text-center small col-sm-2\">ACTIVA/DESACTIVA</th>
                                        <th class=\"text-center small col-sm-2\">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 154
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
            // line 155
            echo "                                        <tr>
                                            <td class=\"text-center small\">";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\">";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubMenus"], "NombreSubMenu", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\">";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubMenus"], "Menu", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\">";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubMenus"], "Modulo", array()), "html", null, true);
            echo "</td>
                                            
                                            <td class='text-center'> 
                                                ";
            // line 162
            if (($this->getAttribute($context["SubMenus"], "EstadoSubMenu", array()) == 1)) {
                // line 163
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DesactivaSubMenu", array("idSubMenu" => $this->getAttribute($context["SubMenus"], "idSubMenu", array()))), "html", null, true);
                echo "\" class='btn btn-xs btn-success '>Activado</a>
                                                ";
            } else {
                // line 165
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ActivaSubMenu", array("idSubMenu" => $this->getAttribute($context["SubMenus"], "idSubMenu", array()))), "html", null, true);
                echo "\" class='btn btn-xs btn-danger btn-success '>Desactivado</a>
                                                ";
            }
            // line 167
            echo "                                            </td>
                                            <td>
                                                <!-- elimina el submenu-->
                                                <a class=\"btn btn-danger btn-circle\" href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EliminarSubmenus", array("idSm" => $this->getAttribute($context["SubMenus"], "idSubMenu", array()))), "html", null, true);
            echo "\" ><i class=\"fa fa-trash-o fa-fw\" title=\"ELIMINAR\" aria-hidden=\"true\"></i> <span class=\"sr-only\">ELIMINAR</span></a><small>Eliminar</small>

                                             <!-- inicia el modal de edicion-->
                                                <button type=\"button\" id=\"actualizar\" class=\"btn btn-xs btn-success btn-circle\" data-toggle=\"modal\" data-target=\"#";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubMenus"], "idSubMenu", array()), "html", null, true);
            echo "\" data-whatever=\"@mdo\"> <i class=\"fa fa-pencil\" title=\"EDITAR\" aria-hidden=\"true\"></i></button><small>Editar</small> 
                                                <div class=\"modal\" id=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubMenus"], "idSubMenu", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\">
                                                    <div class=\"modal-dialog modal-sm\" role=\"document\">
                                                        <form id=\"Editar\" method=\"POST\" action='";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GuardarEditSubMenusA", array("idSubMenu" => $this->getAttribute($context["SubMenus"], "idSubMenu", array()))), "html", null, true);
            echo "'>                          
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header btn-primary\">
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"><i class=\"fa fa-times-circle\"></i></span></button>
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\" align=\"center\"><strong> ACTUALIZAR SUBMENU</strong></h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <div class='row'>

                                                                        <div class='col-sm-12'>                                                                          
                                                                            <strong>Nombre:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>
                                                                                    <input type=\"text\" value=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubMenus"], "NombreSubMenu", array()), "html", null, true);
            echo "\" id=\"MeNombreSUB\" name=\"MeNombreSUB\" class=\"form-control  input-sm\"/>
                                                                                </div>
                                                                            </div>                                                                    
                                                                        </div>
                                                                        <div class='col-sm-12'>
                                                                            <strong>Modulo:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>

                                                                                    <select class=\"form-control input-sm\" name='ModuloAS' id='ModuloAS'>
                                                                                        <option value='";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubMenus"], "ModuloId", array()), "html", null, true);
            echo "'selected>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubMenus"], "Modulo", array()), "html", null, true);
            echo "</option>
                                                                                        ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["Modulos"]);
            foreach ($context['_seq'] as $context["_key"] => $context["Modulos"]) {
                echo "                                                
                                                                                            <option value='";
                // line 201
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
            // line 203
            echo "                                                                                    </select>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                                    <div class=\"form-group\">
                                        <div class=\"col-xs-12 text-center\"><div class=\"loading\"></div>
                                        </div>
                                    </div>
                                                                                                                                                        <div class='col-sm-12'>
                                                                            <strong>Submenu:</strong>
                                                                            <div class='row'>
                                                                                <div class='col-xs-12 col-sm-12'>

                                                                                     <select class=\"form-control input-sm\" name='MenuAS' id='MenuAS'>
                                                <option value='";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubMenus"], "idSubMenu", array()), "html", null, true);
            echo "'selected>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["SubMenus"], "Menu", array()), "html", null, true);
            echo "</option>
                                            </select>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['SubMenus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box -->
                    </div>
                </section><!-- /.content -->
                ";
        
        $__internal_cbd6a60577b2a9e79168aab9522df1852c987297290704fe154fd131f2092bc0->leave($__internal_cbd6a60577b2a9e79168aab9522df1852c987297290704fe154fd131f2092bc0_prof);

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
        return array (  482 => 245,  439 => 218,  422 => 203,  410 => 201,  404 => 200,  398 => 199,  385 => 189,  369 => 176,  364 => 174,  360 => 173,  354 => 170,  349 => 167,  343 => 165,  337 => 163,  335 => 162,  329 => 159,  325 => 158,  321 => 157,  317 => 156,  314 => 155,  297 => 154,  269 => 128,  254 => 125,  248 => 124,  229 => 108,  185 => 66,  173 => 64,  167 => 63,  161 => 60,  140 => 42,  126 => 30,  117 => 28,  112 => 27,  102 => 24,  97 => 23,  87 => 20,  82 => 19,  72 => 16,  68 => 15,  63 => 12,  57 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_Admin.html.twig' %}*/
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
/*                                 <h5 class="modal-title" align="center" >INGRESO NUEVO MENU</h5>*/
/*                             </div>*/
/*                             <form id="NuevoSubmenu" method="Post" class="form-horizontal" action='{{ path('GuardarSubMenu') }}'>*/
/* */
/*                                 <div class="modal-body">                               */
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-3 control-label" for="SubMenuNombre">Nombre:</label>*/
/*                                         <div class="input-group col-sm-7">*/
/*                                             <div class="input-group-addon">*/
/*                                                 <i class="fa fa-pencil"></i>*/
/*                                             </div>*/
/*                                             <input type="Text" id="SubMenuNombre" name="SubMenuNombre" class="form-control  input-sm"/>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-3 control-label" for="Modulo">Modulo:</label>*/
/*                                         <div class="input-group col-sm-7">*/
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
/*                                         <div class="input-group col-sm-7">*/
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
/*                                      <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><span class="fa fa-times-circle-o"></span> Cancelar</button>*/
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
/*                             <div class='col-xs-6 '><strong>Lista de SubMenus</strong></div><div class='col-xs-6 text-right'><button type="button" class="btn btn-success btn-sm text-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Nuevo</button></div>*/
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                               <div class="col-md-12">*/
/*                                 <p class="text-info">*/
/*                                     <br>*/
/*                                     <small><strong>TOTAL DE REGISTROS: <span class='badge'>{{SubMenus|length}}</span></strong></small>*/
/*                                     <br></p>                         */
/*                             </div>*/
/*                                  <div class="col-md-12">*/
/*                                 <div class="panel panel-danger col-md-12">*/
/*                                     <div class="panel-body">*/
/*                                         <div class="col-md-3">*/
/*                                             <strong>Buscar Submenu: <i class="fa fa-search" aria-hidden="true"></i></strong>*/
/*                                         </div>*/
/*                                         <div class="col-md-9">*/
/*                                             <div class="input-group col-sm-3">*/
/*                                                 <div class="input-group-addon">*/
/*                                                     <i class="fa fa-qrcode"></i>*/
/*                                                 </div>*/
/*                                                  <select class="form-control input-sm" name='SubmenusBuscar' id='Modulo'>*/
/*                                                 <option value='0'selected>Todos</option>*/
/*                                                 {% for SubmenusB in SubmenusB %}                                                */
/*                                                     <option value='{{SubmenusB.id }}' name='{{SubmenusB.Nombre }}'> <a href="{{path('BuscaSubmenu',{'idSub': SubmenusB.id })}}" class='btn btn-xs btn-success '>{{SubmenusB.Nombre }}</a>*/
/*                                              </option>*/
/*                                                 {% endfor %}*/
/*                                             </select>  */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <div class="col-xs-12 text-center"><div class="loading1"></div>*/
/*                                 </div>*/
/*                             </div>     */
/*                                     */
/*                                     */
/*                                     */
/*                                     */
/*                             <table id="Submenus" class="table table-hover table-bordered">*/
/*                                 <thead class='bg-success'>*/
/*                                     <tr> */
/*                                         <th class="text-center small">N°</th>*/
/*                                         <th class="text-center small">SUBMENUS</th>*/
/*                                         <th class="text-center small">MENUS</th>*/
/*                                         <th class="text-center small">MODULO</th>*/
/*                                         <th class="text-center small col-sm-2">ACTIVA/DESACTIVA</th>*/
/*                                         <th class="text-center small col-sm-2">ACCIONES</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for SubMenus in SubMenus%}*/
/*                                         <tr>*/
/*                                             <td class="text-center small">{{ loop.index }}</td>*/
/*                                             <td class="text-center small">{{ SubMenus.NombreSubMenu }}</td>*/
/*                                             <td class="text-center small">{{ SubMenus.Menu }}</td>*/
/*                                             <td class="text-center small">{{ SubMenus.Modulo }}</td>*/
/*                                             */
/*                                             <td class='text-center'> */
/*                                                 {% if SubMenus.EstadoSubMenu == 1%}*/
/*                                                     <a href="{{path('DesactivaSubMenu',{'idSubMenu': SubMenus.idSubMenu })}}" class='btn btn-xs btn-success '>Activado</a>*/
/*                                                 {% else %}*/
/*                                                     <a href="{{path('ActivaSubMenu',{'idSubMenu': SubMenus.idSubMenu })}}" class='btn btn-xs btn-danger btn-success '>Desactivado</a>*/
/*                                                 {% endif %}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 <!-- elimina el submenu-->*/
/*                                                 <a class="btn btn-danger btn-circle" href="{{path('EliminarSubmenus',{'idSm': SubMenus.idSubMenu })}}" ><i class="fa fa-trash-o fa-fw" title="ELIMINAR" aria-hidden="true"></i> <span class="sr-only">ELIMINAR</span></a><small>Eliminar</small>*/
/* */
/*                                              <!-- inicia el modal de edicion-->*/
/*                                                 <button type="button" id="actualizar" class="btn btn-xs btn-success btn-circle" data-toggle="modal" data-target="#{{SubMenus.idSubMenu }}" data-whatever="@mdo"> <i class="fa fa-pencil" title="EDITAR" aria-hidden="true"></i></button><small>Editar</small> */
/*                                                 <div class="modal" id="{{ SubMenus.idSubMenu }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">*/
/*                                                     <div class="modal-dialog modal-sm" role="document">*/
/*                                                         <form id="Editar" method="POST" action='{{ path('GuardarEditSubMenusA',{'idSubMenu':  SubMenus.idSubMenu }) }}'>                          */
/*                                                             <div class="modal-content">*/
/*                                                                 <div class="modal-header btn-primary">*/
/*                                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>*/
/*                                                                     <h5 class="modal-title" id="exampleModalLabel" align="center"><strong> ACTUALIZAR SUBMENU</strong></h5>*/
/*                                                                 </div>*/
/*                                                                 <div class="modal-body">*/
/*                                                                     <div class='row'>*/
/* */
/*                                                                         <div class='col-sm-12'>                                                                          */
/*                                                                             <strong>Nombre:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/*                                                                                     <input type="text" value="{{SubMenus.NombreSubMenu }}" id="MeNombreSUB" name="MeNombreSUB" class="form-control  input-sm"/>*/
/*                                                                                 </div>*/
/*                                                                             </div>                                                                    */
/*                                                                         </div>*/
/*                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Modulo:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/* */
/*                                                                                     <select class="form-control input-sm" name='ModuloAS' id='ModuloAS'>*/
/*                                                                                         <option value='{{SubMenus.ModuloId}}'selected>{{SubMenus.Modulo}}</option>*/
/*                                                                                         {% for Modulos in Modulos %}                                                */
/*                                                                                             <option value='{{Modulos.idModulo }}' name='{{Modulos.NombreModulo }}'>{{Modulos.NombreModulo }}</option>*/
/*                                                                                         {% endfor %}*/
/*                                                                                     </select>*/
/* */
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                                     <div class="form-group">*/
/*                                         <div class="col-xs-12 text-center"><div class="loading"></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                                                                                                                                         <div class='col-sm-12'>*/
/*                                                                             <strong>Submenu:</strong>*/
/*                                                                             <div class='row'>*/
/*                                                                                 <div class='col-xs-12 col-sm-12'>*/
/* */
/*                                                                                      <select class="form-control input-sm" name='MenuAS' id='MenuAS'>*/
/*                                                 <option value='{{ SubMenus.idSubMenu }}'selected>{{ SubMenus.Menu }}</option>*/
/*                                             </select>*/
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
/* */
/* */
/*                                                 <!-- FIN EDITAR EMPLEADOS -->   */
/*                                                     */
/*                                                     */
/*                                                     */
/*                                                     */
/*                                             </td>                    */
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
