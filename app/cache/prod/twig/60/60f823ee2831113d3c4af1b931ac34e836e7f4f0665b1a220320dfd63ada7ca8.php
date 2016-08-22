<?php

/* LoginfirstBundle:Admin:ConsultaReq.html.twig */
class __TwigTemplate_d664c2e68609c31223ec43aeb7c6e7e55f008e9fc1e69ec0e50b524ff5084f2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_AdminConsultas.html.twig", "LoginfirstBundle:Admin:ConsultaReq.html.twig", 2);
        $this->blocks = array(
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::Layout_AdminConsultas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        echo "   
    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Requerimientos</li>
        </ol>
    </section>
";
    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        echo " 
    <script>

function tableToJson(table) {
    var data = [];

    // first row needs to be headers
    var headers = [];
    for (var i=0; i<table.rows[0].cells.length; i++) {
        headers[i] = table.rows[0].cells[i].innerHTML.toUpperCase().replace(/ /gi,'');
    }
    data.push(headers);
    // go through cells
    for (var i=1; i<table.rows.length; i++) {

        var tableRow = table.rows[i];
        var rowData = {};

        for (var j=0; j<tableRow.cells.length; j++) {

            rowData[ headers[j] ] = tableRow.cells[j].innerHTML;

        }

        data.push(rowData);
    }       

    return data;
}
function callme(){
var table = tableToJson(\$('#pdf').get(0));
var doc = new jsPDF('h','pt','letter',true);
doc.setFontSize(14);
doc.text(150, 30, 'GAMEDASOFT SISTEMAS INFORMATICOS');
doc.text(150, 40, '_______________________________________');
doc.setFontSize(11);
doc.text(20, 60, 'Reporte de requerimientos');
doc.setFontSize(10);

\$.each(table, function(i, row){
\t\$.each(row, function(j,cell){
\tif(j===\"#\" | j===0){
\t doc.cell(20,80,25,20,cell,i);\t
\t} else if(j===\"ID\" | j===2){
             doc.cell(20,30,40,20,cell,i);\t
        }else if(j===\"EMPLEADOASIGNADO\" | j===6){
             doc.cell(20,30,120,20,cell,i);\t
        } 
\telse if(j==='CLIENTE' | j===3){
\t\tdoc.cell(1,10,170,20,cell,i);
\t}else{
            doc.cell(1,10,70,20,cell,i);
        }
\t
\t});
});

doc.save('RequerimientosClientes.pdf');
}

</script>
    
    
    
    <section class=\"content\"> 
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"panel panel-primary\">                 
                    <div class=\"panel-heading\"><strong><i class=\"fa fa-filter\" aria-hidden=\"true\"></i> Filtros Requerimientos</strong></div>
                     <div id=\"PathReqCosultas\" data-path=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("Requerimientos");
        echo "\"></div>  
                    <div class=\"panel-body\">              
                        <div>
                            <ul class=\"list-group\">
                                <li class=\"list-group-item\"><strong> 
                                        Fecha Inicial:</strong><input type=\"text\" id=\"fechaInicial\" name=\"fecha\" />
                                </li>
                                <li class=\"list-group-item\"><strong> 
                                        Fecha Final:</strong><input type=\"text\" id=\"fechaFinal\" name=\"fecha\" /> 
                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Cliente:</strong>
                                    <div class=\"form-group\">
                                        <select class=\"form-control input-sm\" name='Cliente' id='Cliente'>
                                            <option value=''>Todos</option>
                                                ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Clientes"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Clientes"]) {
            echo " 
                                                     <option value='";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "id", array()), "html", null, true);
            echo "' name='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Nombre", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Clientes"], "Nombre", array()), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Clientes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                                        </select>
                                    </div> 
                                    <strong>Estado:</strong>
                                    <div class=\"form-group\">
                                        <select class=\"form-control input-sm\" name='Estado' id='Estado'>
                                          <option value=''selected>Todos</option>
                                                ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Estados"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Estados"]) {
            echo "                                                
                                                    <option value='";
            // line 105
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
        // line 107
        echo "                                        </select>
                                    </div>
                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Modulo:</strong>
                                    <div class=\"form-group\">
                                        <select class=\"form-control input-sm\" name='Modulo' id='Modulo'>
                                          <option value=''selected>Todos</option>
                                                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Modulos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Modulos"]) {
            echo "                                                
                                                    <option value='";
            // line 116
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
        // line 118
        echo "                                        </select>
                                    </div> 
                                    <strong>Empleado:</strong>
                                    <div class=\"form-group\">
                                        <select class=\"form-control input-sm\" name='Empleado' id='Empleado'>
                                             <option value=''selected>Todos</option>
                                                ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Empleados"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Empleados"]) {
            echo "                                                
                                                    <option value='";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["Empleados"], "id", array()), "html", null, true);
            echo "' name='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Empleados"], "Nombre", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Empleados"], "Nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Empleados"], "Apellido", array()), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Empleados'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-9\">               
                <div id=\"Pdf\" class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class='row'>
                            <div class='col-xs-6 '><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> <strong>Requerimientos</strong></div>
                            <div class='col-xs-6 text-right'>
                                <button id=\"GuardarT\" onclick=\"javascript:callme()\" class=\"btn btn-success\"><i class=\"fa fa-download fa-lg\" aria-hidden=\"true\"></i> PDF</button>
                              </div>
                        </div>
                    </div>     
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table id=\"pdf\" class=\"table table-striped\">
                                <thead class='bg-success'>
                                    <tr> 
                                        <th>#</th>
                                        <th>Fecha</th>
                                        <th>Id</th>
                                        <th>Cliente</th>
                                        <th>Estado</th>
                                        <th>Módulo</th>
                                        <th>Empleado Asignado</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Requerimientos"]) ? $context["Requerimientos"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["RequeP"]) {
            // line 161
            echo "                                        <tr>
                                            <td>";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 163
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["RequeP"], "RqFecha", array()), "m/d/Y", false), "html", null, true);
            echo "</td>   
                                            <td>Rq-";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "RqId", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "Cliente", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "Estado", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "Modulo", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "AsignadoNombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["RequeP"], "AsignadoApellido", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RequeP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <script>
                    \$(document).ready(function () {
                        \$('#fechaInicial').datepicker();
                        \$('#fechaFinal').datepicker();
                    });
                </script>                                        
            </div>
        </div>              
    </section><!-- /.content -->
";
    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Admin:ConsultaReq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 171,  315 => 168,  311 => 167,  307 => 166,  303 => 165,  299 => 164,  295 => 163,  291 => 162,  288 => 161,  271 => 160,  236 => 127,  222 => 125,  216 => 124,  208 => 118,  196 => 116,  190 => 115,  180 => 107,  168 => 105,  162 => 104,  154 => 98,  142 => 96,  136 => 95,  118 => 80,  45 => 11,  36 => 6,  29 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_AdminConsultas.html.twig' %}*/
/* {%block section2 %}   */
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Admin')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Requerimientos</li>*/
/*         </ol>*/
/*     </section>*/
/* {%endblock%}*/
/* {%block section3 %} */
/*     <script>*/
/* */
/* function tableToJson(table) {*/
/*     var data = [];*/
/* */
/*     // first row needs to be headers*/
/*     var headers = [];*/
/*     for (var i=0; i<table.rows[0].cells.length; i++) {*/
/*         headers[i] = table.rows[0].cells[i].innerHTML.toUpperCase().replace(/ /gi,'');*/
/*     }*/
/*     data.push(headers);*/
/*     // go through cells*/
/*     for (var i=1; i<table.rows.length; i++) {*/
/* */
/*         var tableRow = table.rows[i];*/
/*         var rowData = {};*/
/* */
/*         for (var j=0; j<tableRow.cells.length; j++) {*/
/* */
/*             rowData[ headers[j] ] = tableRow.cells[j].innerHTML;*/
/* */
/*         }*/
/* */
/*         data.push(rowData);*/
/*     }       */
/* */
/*     return data;*/
/* }*/
/* function callme(){*/
/* var table = tableToJson($('#pdf').get(0));*/
/* var doc = new jsPDF('h','pt','letter',true);*/
/* doc.setFontSize(14);*/
/* doc.text(150, 30, 'GAMEDASOFT SISTEMAS INFORMATICOS');*/
/* doc.text(150, 40, '_______________________________________');*/
/* doc.setFontSize(11);*/
/* doc.text(20, 60, 'Reporte de requerimientos');*/
/* doc.setFontSize(10);*/
/* */
/* $.each(table, function(i, row){*/
/* 	$.each(row, function(j,cell){*/
/* 	if(j==="#" | j===0){*/
/* 	 doc.cell(20,80,25,20,cell,i);	*/
/* 	} else if(j==="ID" | j===2){*/
/*              doc.cell(20,30,40,20,cell,i);	*/
/*         }else if(j==="EMPLEADOASIGNADO" | j===6){*/
/*              doc.cell(20,30,120,20,cell,i);	*/
/*         } */
/* 	else if(j==='CLIENTE' | j===3){*/
/* 		doc.cell(1,10,170,20,cell,i);*/
/* 	}else{*/
/*             doc.cell(1,10,70,20,cell,i);*/
/*         }*/
/* 	*/
/* 	});*/
/* });*/
/* */
/* doc.save('RequerimientosClientes.pdf');*/
/* }*/
/* */
/* </script>*/
/*     */
/*     */
/*     */
/*     <section class="content"> */
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <div class="panel panel-primary">                 */
/*                     <div class="panel-heading"><strong><i class="fa fa-filter" aria-hidden="true"></i> Filtros Requerimientos</strong></div>*/
/*                      <div id="PathReqCosultas" data-path="{{path('Requerimientos')}}"></div>  */
/*                     <div class="panel-body">              */
/*                         <div>*/
/*                             <ul class="list-group">*/
/*                                 <li class="list-group-item"><strong> */
/*                                         Fecha Inicial:</strong><input type="text" id="fechaInicial" name="fecha" />*/
/*                                 </li>*/
/*                                 <li class="list-group-item"><strong> */
/*                                         Fecha Final:</strong><input type="text" id="fechaFinal" name="fecha" /> */
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <strong>Cliente:</strong>*/
/*                                     <div class="form-group">*/
/*                                         <select class="form-control input-sm" name='Cliente' id='Cliente'>*/
/*                                             <option value=''>Todos</option>*/
/*                                                 {% for Clientes in Clientes %} */
/*                                                      <option value='{{Clientes.id }}' name='{{Clientes.Nombre }}'>{{Clientes.Nombre }}</option>*/
/*                                                 {% endfor %}*/
/*                                         </select>*/
/*                                     </div> */
/*                                     <strong>Estado:</strong>*/
/*                                     <div class="form-group">*/
/*                                         <select class="form-control input-sm" name='Estado' id='Estado'>*/
/*                                           <option value=''selected>Todos</option>*/
/*                                                 {% for Estados in Estados %}                                                */
/*                                                     <option value='{{Estados.id }}' name='{{Estados.Nombre }}'>{{Estados.Nombre }}</option>*/
/*                                                 {% endfor %}*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <strong>Modulo:</strong>*/
/*                                     <div class="form-group">*/
/*                                         <select class="form-control input-sm" name='Modulo' id='Modulo'>*/
/*                                           <option value=''selected>Todos</option>*/
/*                                                 {% for Modulos in Modulos %}                                                */
/*                                                     <option value='{{Modulos.id }}' name='{{Modulos.Nombre }}'>{{Modulos.Nombre }}</option>*/
/*                                                 {% endfor %}*/
/*                                         </select>*/
/*                                     </div> */
/*                                     <strong>Empleado:</strong>*/
/*                                     <div class="form-group">*/
/*                                         <select class="form-control input-sm" name='Empleado' id='Empleado'>*/
/*                                              <option value=''selected>Todos</option>*/
/*                                                 {% for Empleados in Empleados %}                                                */
/*                                                     <option value='{{Empleados.id }}' name='{{Empleados.Nombre }}'>{{Empleados.Nombre }} {{Empleados.Apellido }}</option>*/
/*                                                 {% endfor %}*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-9">               */
/*                 <div id="Pdf" class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <div class='row'>*/
/*                             <div class='col-xs-6 '><i class="fa fa-bars" aria-hidden="true"></i> <strong>Requerimientos</strong></div>*/
/*                             <div class='col-xs-6 text-right'>*/
/*                                 <button id="GuardarT" onclick="javascript:callme()" class="btn btn-success"><i class="fa fa-download fa-lg" aria-hidden="true"></i> PDF</button>*/
/*                               </div>*/
/*                         </div>*/
/*                     </div>     */
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table id="pdf" class="table table-striped">*/
/*                                 <thead class='bg-success'>*/
/*                                     <tr> */
/*                                         <th>#</th>*/
/*                                         <th>Fecha</th>*/
/*                                         <th>Id</th>*/
/*                                         <th>Cliente</th>*/
/*                                         <th>Estado</th>*/
/*                                         <th>Módulo</th>*/
/*                                         <th>Empleado Asignado</th>                                        */
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for RequeP in Requerimientos %}*/
/*                                         <tr>*/
/*                                             <td>{{ loop.index }}</td>*/
/*                                             <td>{{ RequeP.RqFecha|date("m/d/Y", false)}}</td>   */
/*                                             <td>Rq-{{ RequeP.RqId }}</td>*/
/*                                             <td>{{ RequeP.Cliente }}</td>*/
/*                                             <td>{{ RequeP.Estado }}</td>*/
/*                                             <td>{{ RequeP.Modulo }}</td>*/
/*                                             <td>{{ RequeP.AsignadoNombre }} {{ RequeP.AsignadoApellido }}</td>     */
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <script>*/
/*                     $(document).ready(function () {*/
/*                         $('#fechaInicial').datepicker();*/
/*                         $('#fechaFinal').datepicker();*/
/*                     });*/
/*                 </script>                                        */
/*             </div>*/
/*         </div>              */
/*     </section><!-- /.content -->*/
/* {% endblock %}*/
/* */
