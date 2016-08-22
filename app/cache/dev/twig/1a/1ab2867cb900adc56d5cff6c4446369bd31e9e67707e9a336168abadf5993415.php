<?php

/* LoginfirstBundle:Clientes:Consultas.html.twig */
class __TwigTemplate_4221d0b13e69d7c8cbd79597dffa3a883c4036970215231232a64cf44dccabc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_ClientesConsultas.html.twig", "LoginfirstBundle:Clientes:Consultas.html.twig", 2);
        $this->blocks = array(
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::Layout_ClientesConsultas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2811ea79af3aa495b96df52d86687db550d292ef7891ffabb797a019c1e5cd23 = $this->env->getExtension("native_profiler");
        $__internal_2811ea79af3aa495b96df52d86687db550d292ef7891ffabb797a019c1e5cd23->enter($__internal_2811ea79af3aa495b96df52d86687db550d292ef7891ffabb797a019c1e5cd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Clientes:Consultas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2811ea79af3aa495b96df52d86687db550d292ef7891ffabb797a019c1e5cd23->leave($__internal_2811ea79af3aa495b96df52d86687db550d292ef7891ffabb797a019c1e5cd23_prof);

    }

    // line 4
    public function block_section2($context, array $blocks = array())
    {
        $__internal_55a549ed6124fb6da5008b595fc9d9098feaee9c4fac00f0645eee3ba19f5e60 = $this->env->getExtension("native_profiler");
        $__internal_55a549ed6124fb6da5008b595fc9d9098feaee9c4fac00f0645eee3ba19f5e60->enter($__internal_55a549ed6124fb6da5008b595fc9d9098feaee9c4fac00f0645eee3ba19f5e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 5
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Cliente");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Consulta Requerimientos</li>
        </ol>
    </section>
";
        
        $__internal_55a549ed6124fb6da5008b595fc9d9098feaee9c4fac00f0645eee3ba19f5e60->leave($__internal_55a549ed6124fb6da5008b595fc9d9098feaee9c4fac00f0645eee3ba19f5e60_prof);

    }

    // line 12
    public function block_section3($context, array $blocks = array())
    {
        $__internal_52b4a483ca6b18578df15d643076c0b4721abb7bef64f7003a057263f044ce58 = $this->env->getExtension("native_profiler");
        $__internal_52b4a483ca6b18578df15d643076c0b4721abb7bef64f7003a057263f044ce58->enter($__internal_52b4a483ca6b18578df15d643076c0b4721abb7bef64f7003a057263f044ce58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 13
        echo "    <script>

        function tableToJson(table) {
            var data = [];

// first row needs to be headers
            var headers = [];
            for (var i = 0; i < table.rows[0].cells.length; i++) {
                headers[i] = table.rows[0].cells[i].innerHTML.toUpperCase().replace(/ /gi, '');
            }
            data.push(headers);
// go through cells
            for (var i = 1; i < table.rows.length; i++) {

                var tableRow = table.rows[i];
                var rowData = {};

                for (var j = 0; j < tableRow.cells.length; j++) {

                    rowData[ headers[j] ] = tableRow.cells[j].innerHTML;

                }

                data.push(rowData);
            }

            return data;
        }
        function callme() {
            var table = tableToJson(\$('#reporte').get(0));
            var doc = new jsPDF('h', 'pt', 'letter', true);
            doc.setFontSize(14);
            doc.text(150, 30, 'GAMEDASOFT SISTEMAS INFORMATICOS');
            doc.text(150, 40, '_______________________________________');
            doc.setFontSize(10);
            doc.text(20, 60, 'Reporte de requerimientos');
            doc.setFontSize(8);

            \$.each(table, function (i, row) {
                \$.each(row, function (j, cell) {
                    if (j === \"N°\" | j === 0) {
                        doc.cell(20, 70, 25, 15, cell, i);
                    } else if (j === \"FECHA\" | j === 1) {
                        doc.cell(20, 80,50, 15, cell, i);
                    } else if (j === \"REQUERIMIENTO-ID\" | j === 2) {
                        doc.cell(20, 900, 80, 15, cell, i);
                    } else if (j === \"ESTADO\" | j === 3) {
                        doc.cell(20, 10, 50, 15, cell, i);
                    } else if (j === 'MODULO' | j === 4) {
                        doc.cell(20, 10, 100, 15, cell, i);
                    }else if (j === 'DESCRIPCION' | j === 5) {
                        doc.cell(20, 10, 230, 15, cell, i);
                    }  else {
                        doc.cell(20, 10, 80, 15, cell, i);
                    }

                });
            });

            doc.save('RequerimientosClientes.pdf');
        }

    </script>



    <section class=\"content\">
        
            <div class=\"col-md-3\">
                <div class=\"panel panel-primary\" >
                    <div class=\"panel-heading text-center\"><strong><i class=\"fa fa-filter\" aria-hidden=\"true\"></i><small> Filtros Requerimientos</small></strong>    </div>
                        <div id=\"PathRequerimientosCliente\" data-path=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("RequerimientosC");
        echo "\"></div>
                        <div class=\"panel-body fixed-panel\" >
                            <div>
                                <ul class=\"list-group\">
                                    <li class=\"list-group-item\"><strong> 
                                            Fecha Inicial:</strong><input type=\"text\" id=\"fechaInicialConsultas\" name=\"fecha\" />
                                    </li>
                                    <li class=\"list-group-item\"><strong> 
                                            Fecha Final:</strong><input type=\"text\" id=\"fechaFinalConsultas\" name=\"fecha\" /> 
                                    </li>
                                    <li class=\"list-group-item\">
                                        <strong>Estado:</strong>
                                        <div class=\"form-group\">
                                            <select class=\"form-control input-sm\" name='EstadoC' id='EstadoC'>
                                                <option value='0'selected>Todos</option>   
                                                 ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Estados"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Estados"]) {
            echo "                                                
                                                    <option value='";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["Estados"], "id", array()), "html", null, true);
            echo "' name='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Estados"], "Nombre", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Estados"], "Nombre", array()), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Estados'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                                            </select>
                                        </div>
                                        <strong>Modulo:</strong>
                                        <div class=\"form-group\">
                                            <select class=\"form-control input-sm\" name='ModuloC' id='ModuloC'>
                                                <option value='0'selected>Todos</option>
                                                ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Modulos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Modulos"]) {
            echo "                                                
                                                    <option value='";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "id", array()), "html", null, true);
            echo "' name='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "Nombre", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modulos"], "Nombre", array()), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modulos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                                            </select>
                                        </div> 
                                    </li>
                                </ul>
                            </div>                           
                        </div>
                </div>            
            </div>
            
            <div class=\"col-md-9\">
             <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class='row'>
                            <div class='col-xs-6 '><i class=\"fa fa-bars\" aria-hidden=\"true\"></i><strong> Lista de Requerimientos</strong></div>
                            <div class='col-xs-6 text-right'>
                                <button id=\"DescargarPdf\" onclick=\"javascrip:callme()\" class=\"btn- btn-success\"><i class=\"fa fa-files-o\" aria-hidden=\"true\"></i> Generar Pdf</button></div>
                        </div>
                        <hr>
                    </div>
                    <div class=\"panel-body\" >
                        <div class=\"table-responsive\">
                           
                            <div>
                                <table id=\"reporte\" class=\"table table-bordered\">
                                    <thead class='bg-success'>
                                        <tr> 
                                            <th class=\"text-center small\">N°</th>
                                            <th class=\"text-center small\">FECHA</th>
                                            <th class=\"text-center small\">REQUEMIENTO-ID</th>
                                             <th class=\"text-center small\">ESTADO</th>
                                             <th class=\"text-center small\">MODULO</th>
                                            <th class=\"text-center small\">DESCRIPCION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Req"]) {
            // line 147
            echo "                                            <tr>
                                                <td class=\"small\">";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                                <td class=\"small\">";
            // line 149
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Req"], "Fecha", array()), "d/m/Y", false), "html", null, true);
            echo "</td>
                                                <td class=\"small\">Req-";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "IdReq", array()), "html", null, true);
            echo "</td>
                                                <td class=\"small\" >";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "Estado", array()), "html", null, true);
            echo "</td>
                                                <td class=\"small\">";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "Modulo", array()), "html", null, true);
            echo "</td>  
                                                <td class=\"small\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["Req"], "Descripcion", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Req'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>

                </div>
                                    <div></div>
                                      <script>
                    \$(document).ready(function () {
                        \$('#fechaInicialConsultas').datepicker();
                        \$('#fechaFinalConsultas').datepicker();
                    });
                </script>  
            </div><!-- /.box -->
      
    </section><!-- /.content -->
";
        
        $__internal_52b4a483ca6b18578df15d643076c0b4721abb7bef64f7003a057263f044ce58->leave($__internal_52b4a483ca6b18578df15d643076c0b4721abb7bef64f7003a057263f044ce58_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Clientes:Consultas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 156,  275 => 153,  271 => 152,  267 => 151,  263 => 150,  259 => 149,  255 => 148,  252 => 147,  235 => 146,  198 => 111,  186 => 109,  180 => 108,  172 => 102,  160 => 100,  154 => 99,  136 => 84,  63 => 13,  57 => 12,  45 => 7,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_ClientesConsultas.html.twig' %}*/
/* */
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Cliente')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Consulta Requerimientos</li>*/
/*         </ol>*/
/*     </section>*/
/* {%endblock%}*/
/* {%block section3 %}*/
/*     <script>*/
/* */
/*         function tableToJson(table) {*/
/*             var data = [];*/
/* */
/* // first row needs to be headers*/
/*             var headers = [];*/
/*             for (var i = 0; i < table.rows[0].cells.length; i++) {*/
/*                 headers[i] = table.rows[0].cells[i].innerHTML.toUpperCase().replace(/ /gi, '');*/
/*             }*/
/*             data.push(headers);*/
/* // go through cells*/
/*             for (var i = 1; i < table.rows.length; i++) {*/
/* */
/*                 var tableRow = table.rows[i];*/
/*                 var rowData = {};*/
/* */
/*                 for (var j = 0; j < tableRow.cells.length; j++) {*/
/* */
/*                     rowData[ headers[j] ] = tableRow.cells[j].innerHTML;*/
/* */
/*                 }*/
/* */
/*                 data.push(rowData);*/
/*             }*/
/* */
/*             return data;*/
/*         }*/
/*         function callme() {*/
/*             var table = tableToJson($('#reporte').get(0));*/
/*             var doc = new jsPDF('h', 'pt', 'letter', true);*/
/*             doc.setFontSize(14);*/
/*             doc.text(150, 30, 'GAMEDASOFT SISTEMAS INFORMATICOS');*/
/*             doc.text(150, 40, '_______________________________________');*/
/*             doc.setFontSize(10);*/
/*             doc.text(20, 60, 'Reporte de requerimientos');*/
/*             doc.setFontSize(8);*/
/* */
/*             $.each(table, function (i, row) {*/
/*                 $.each(row, function (j, cell) {*/
/*                     if (j === "N°" | j === 0) {*/
/*                         doc.cell(20, 70, 25, 15, cell, i);*/
/*                     } else if (j === "FECHA" | j === 1) {*/
/*                         doc.cell(20, 80,50, 15, cell, i);*/
/*                     } else if (j === "REQUERIMIENTO-ID" | j === 2) {*/
/*                         doc.cell(20, 900, 80, 15, cell, i);*/
/*                     } else if (j === "ESTADO" | j === 3) {*/
/*                         doc.cell(20, 10, 50, 15, cell, i);*/
/*                     } else if (j === 'MODULO' | j === 4) {*/
/*                         doc.cell(20, 10, 100, 15, cell, i);*/
/*                     }else if (j === 'DESCRIPCION' | j === 5) {*/
/*                         doc.cell(20, 10, 230, 15, cell, i);*/
/*                     }  else {*/
/*                         doc.cell(20, 10, 80, 15, cell, i);*/
/*                     }*/
/* */
/*                 });*/
/*             });*/
/* */
/*             doc.save('RequerimientosClientes.pdf');*/
/*         }*/
/* */
/*     </script>*/
/* */
/* */
/* */
/*     <section class="content">*/
/*         */
/*             <div class="col-md-3">*/
/*                 <div class="panel panel-primary" >*/
/*                     <div class="panel-heading text-center"><strong><i class="fa fa-filter" aria-hidden="true"></i><small> Filtros Requerimientos</small></strong>    </div>*/
/*                         <div id="PathRequerimientosCliente" data-path="{{path('RequerimientosC')}}"></div>*/
/*                         <div class="panel-body fixed-panel" >*/
/*                             <div>*/
/*                                 <ul class="list-group">*/
/*                                     <li class="list-group-item"><strong> */
/*                                             Fecha Inicial:</strong><input type="text" id="fechaInicialConsultas" name="fecha" />*/
/*                                     </li>*/
/*                                     <li class="list-group-item"><strong> */
/*                                             Fecha Final:</strong><input type="text" id="fechaFinalConsultas" name="fecha" /> */
/*                                     </li>*/
/*                                     <li class="list-group-item">*/
/*                                         <strong>Estado:</strong>*/
/*                                         <div class="form-group">*/
/*                                             <select class="form-control input-sm" name='EstadoC' id='EstadoC'>*/
/*                                                 <option value='0'selected>Todos</option>   */
/*                                                  {% for Estados in Estados %}                                                */
/*                                                     <option value='{{Estados.id }}' name='{{Estados.Nombre }}'>{{Estados.Nombre }}</option>*/
/*                                                 {% endfor %}*/
/*                                             </select>*/
/*                                         </div>*/
/*                                         <strong>Modulo:</strong>*/
/*                                         <div class="form-group">*/
/*                                             <select class="form-control input-sm" name='ModuloC' id='ModuloC'>*/
/*                                                 <option value='0'selected>Todos</option>*/
/*                                                 {% for Modulos in Modulos %}                                                */
/*                                                     <option value='{{Modulos.id }}' name='{{Modulos.Nombre }}'>{{Modulos.Nombre }}</option>*/
/*                                                 {% endfor %}*/
/*                                             </select>*/
/*                                         </div> */
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>                           */
/*                         </div>*/
/*                 </div>            */
/*             </div>*/
/*             */
/*             <div class="col-md-9">*/
/*              <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <div class='row'>*/
/*                             <div class='col-xs-6 '><i class="fa fa-bars" aria-hidden="true"></i><strong> Lista de Requerimientos</strong></div>*/
/*                             <div class='col-xs-6 text-right'>*/
/*                                 <button id="DescargarPdf" onclick="javascrip:callme()" class="btn- btn-success"><i class="fa fa-files-o" aria-hidden="true"></i> Generar Pdf</button></div>*/
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     <div class="panel-body" >*/
/*                         <div class="table-responsive">*/
/*                            */
/*                             <div>*/
/*                                 <table id="reporte" class="table table-bordered">*/
/*                                     <thead class='bg-success'>*/
/*                                         <tr> */
/*                                             <th class="text-center small">N°</th>*/
/*                                             <th class="text-center small">FECHA</th>*/
/*                                             <th class="text-center small">REQUEMIENTO-ID</th>*/
/*                                              <th class="text-center small">ESTADO</th>*/
/*                                              <th class="text-center small">MODULO</th>*/
/*                                             <th class="text-center small">DESCRIPCION</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                         {% for Req in pagination%}*/
/*                                             <tr>*/
/*                                                 <td class="small">{{ loop.index }}</td>*/
/*                                                 <td class="small">{{ Req.Fecha | date("d/m/Y", false)}}</td>*/
/*                                                 <td class="small">Req-{{ Req.IdReq }}</td>*/
/*                                                 <td class="small" >{{ Req.Estado }}</td>*/
/*                                                 <td class="small">{{ Req.Modulo }}</td>  */
/*                                                 <td class="small">{{Req.Descripcion}}</td>*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                            */
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                                     <div></div>*/
/*                                       <script>*/
/*                     $(document).ready(function () {*/
/*                         $('#fechaInicialConsultas').datepicker();*/
/*                         $('#fechaFinalConsultas').datepicker();*/
/*                     });*/
/*                 </script>  */
/*             </div><!-- /.box -->*/
/*       */
/*     </section><!-- /.content -->*/
/* {% endblock %}*/
/* */
