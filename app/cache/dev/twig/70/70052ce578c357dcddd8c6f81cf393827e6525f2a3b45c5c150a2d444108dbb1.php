<?php

/* LoginfirstBundle:Empleados:Consultas.html.twig */
class __TwigTemplate_deb25faf30c661b5636ec4fd32bfc9c77e3176ba73c9d9752ddfd7798a8045e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_EmpleadosConsultas.html.twig", "LoginfirstBundle:Empleados:Consultas.html.twig", 2);
        $this->blocks = array(
            'section2' => array($this, 'block_section2'),
            'section3' => array($this, 'block_section3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginfirstBundle::Layout_EmpleadosConsultas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1823d1661a2bbdca2c58b447b3362a91c15762833b73cbfaf4a2bdc7f7327e62 = $this->env->getExtension("native_profiler");
        $__internal_1823d1661a2bbdca2c58b447b3362a91c15762833b73cbfaf4a2bdc7f7327e62->enter($__internal_1823d1661a2bbdca2c58b447b3362a91c15762833b73cbfaf4a2bdc7f7327e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Empleados:Consultas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1823d1661a2bbdca2c58b447b3362a91c15762833b73cbfaf4a2bdc7f7327e62->leave($__internal_1823d1661a2bbdca2c58b447b3362a91c15762833b73cbfaf4a2bdc7f7327e62_prof);

    }

    // line 4
    public function block_section2($context, array $blocks = array())
    {
        $__internal_122475df511ec7e07f255714357f26d393060380ac1a0b05fd1db5f3f0763d69 = $this->env->getExtension("native_profiler");
        $__internal_122475df511ec7e07f255714357f26d393060380ac1a0b05fd1db5f3f0763d69->enter($__internal_122475df511ec7e07f255714357f26d393060380ac1a0b05fd1db5f3f0763d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        // line 5
        echo "    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Empleado");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Consulta Requerimentos</li>
        </ol>
    </section>
";
        
        $__internal_122475df511ec7e07f255714357f26d393060380ac1a0b05fd1db5f3f0763d69->leave($__internal_122475df511ec7e07f255714357f26d393060380ac1a0b05fd1db5f3f0763d69_prof);

    }

    // line 12
    public function block_section3($context, array $blocks = array())
    {
        $__internal_569e985351090c5388fb18e3651439c8c30180670d84be6480b409e016d53ce6 = $this->env->getExtension("native_profiler");
        $__internal_569e985351090c5388fb18e3651439c8c30180670d84be6480b409e016d53ce6->enter($__internal_569e985351090c5388fb18e3651439c8c30180670d84be6480b409e016d53ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

        // line 13
        echo "        <script>

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
var table = tableToJson(\$('#RequemientosE').get(0));
var doc = new jsPDF('h','pt','letter',true);
doc.setFontSize(14);
doc.text(150, 30, 'GAMEDASOFT SISTEMAS INFORMATICOS');
doc.text(150, 40, '_______________________________________');
doc.setFontSize(10);
doc.text(20, 60, 'Reporte de Requerimientos');
doc.setFontSize(10);

\$.each(table, function(i, row){
\t\$.each(row, function(j,cell){
\tif(j === \"Nº\" | j === 0){
\t doc.cell(20, 70, 20, 15, cell, i);\t
\t} else if(j === \"FECHA\" | j === 1){
           doc.cell(20, 80,55, 15, cell, i);\t
        }else if( j === \"ID-REQ\" | j === 2){
             doc.cell(20, 10, 60, 15, cell, i);\t
        } 
        else if( j === \"ACTIVIDAD-PARA-SOLUCION\" | j === 3){
             doc.cell(20, 10, 220, 15, cell, i);\t
        }
\telse if( j === 'CLIENTE' | j === 4 ){
\t\t doc.cell(20, 10,200, 15, cell, i);
\t}else{
            doc.cell(20, 10, 20, 15, cell, i);
        }
\t
\t});
});

doc.save('RequerimientosEmpleado.pdf');
}

</script>
    
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 81
            echo "                    <strong class=\"alert-success\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " Exitosamente!!!!</strong> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                <!-- Trigger the modal with a button -->               
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class='row'>
                            <div class='col-xs-6 '><strong>Lista de requemientos Solucionados</strong></div><div class='col-xs-6 text-right'>  <button id=\"GuardarT\" onclick=\"javascript:callme()\" class=\"btn btn-success\"><i class=\"fa fa-download fa-lg\" aria-hidden=\"true\"></i> PDF</button>
                             </div>
                        </div>
                        <hr>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <div class=\"navigation\">
                                <small><strong>TOTAL DE REGISTROS: <span class='badge'>";
        // line 95
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Requerimientos"]) ? $context["Requerimientos"] : $this->getContext($context, "Requerimientos"))), "html", null, true);
        echo "</span></strong></small>
                                <br><br>
                            </div>
                            <table id=\"RequemientosE\" class=\"table table-hover table-bordered\">
                                <thead class='bg-success'>
                                    <tr> 
                                        <th class=\"text-center small\">Nº</th>
                                        <th class=\"text-center small\">FECHA</th>
                                        <th class=\"text-center small\">ID-REQ</th>
                                        <th class=\"text-center small\">ACTIVIDAD-PARA-SOLUCION</th>
                                        <th class=\"text-center small\">CLIENTE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Requerimientos"]);
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
        foreach ($context['_seq'] as $context["_key"] => $context["Requerimientos"]) {
            // line 110
            echo "                                        <tr>
                                            <td class=\"text-center small\">";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\">";
            // line 112
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Requerimientos"], "RqFecha", array()), "Y/m/d", false), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\">Req-";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["Requerimientos"], "RqId", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-center small\">";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["Requerimientos"], "RqDescripcion", array()), "html", null, true);
            echo "</td>   
                                            <td class=\"text-center small\">";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["Requerimientos"], "Cliente", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Requerimientos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                                </tbody>
                            </table>
                            <div class=\"navigation\">

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.box -->
        </div>
    </section><!-- /.content -->
";
        
        $__internal_569e985351090c5388fb18e3651439c8c30180670d84be6480b409e016d53ce6->leave($__internal_569e985351090c5388fb18e3651439c8c30180670d84be6480b409e016d53ce6_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Empleados:Consultas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 118,  212 => 115,  208 => 114,  204 => 113,  200 => 112,  196 => 111,  193 => 110,  176 => 109,  159 => 95,  145 => 83,  136 => 81,  132 => 80,  63 => 13,  57 => 12,  45 => 7,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_EmpleadosConsultas.html.twig' %}*/
/* */
/* {%block section2 %}*/
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Empleado')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Consulta Requerimentos</li>*/
/*         </ol>*/
/*     </section>*/
/* {%endblock%}*/
/* {%block section3 %}*/
/*         <script>*/
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
/* var table = tableToJson($('#RequemientosE').get(0));*/
/* var doc = new jsPDF('h','pt','letter',true);*/
/* doc.setFontSize(14);*/
/* doc.text(150, 30, 'GAMEDASOFT SISTEMAS INFORMATICOS');*/
/* doc.text(150, 40, '_______________________________________');*/
/* doc.setFontSize(10);*/
/* doc.text(20, 60, 'Reporte de Requerimientos');*/
/* doc.setFontSize(10);*/
/* */
/* $.each(table, function(i, row){*/
/* 	$.each(row, function(j,cell){*/
/* 	if(j === "Nº" | j === 0){*/
/* 	 doc.cell(20, 70, 20, 15, cell, i);	*/
/* 	} else if(j === "FECHA" | j === 1){*/
/*            doc.cell(20, 80,55, 15, cell, i);	*/
/*         }else if( j === "ID-REQ" | j === 2){*/
/*              doc.cell(20, 10, 60, 15, cell, i);	*/
/*         } */
/*         else if( j === "ACTIVIDAD-PARA-SOLUCION" | j === 3){*/
/*              doc.cell(20, 10, 220, 15, cell, i);	*/
/*         }*/
/* 	else if( j === 'CLIENTE' | j === 4 ){*/
/* 		 doc.cell(20, 10,200, 15, cell, i);*/
/* 	}else{*/
/*             doc.cell(20, 10, 20, 15, cell, i);*/
/*         }*/
/* 	*/
/* 	});*/
/* });*/
/* */
/* doc.save('RequerimientosEmpleado.pdf');*/
/* }*/
/* */
/* </script>*/
/*     */
/*     <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 {% for flashMessage in app.session.flashbag.get('mensaje')%}*/
/*                     <strong class="alert-success">{{ flashMessage }} Exitosamente!!!!</strong> */
/*                 {% endfor%}*/
/*                 <!-- Trigger the modal with a button -->               */
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <div class='row'>*/
/*                             <div class='col-xs-6 '><strong>Lista de requemientos Solucionados</strong></div><div class='col-xs-6 text-right'>  <button id="GuardarT" onclick="javascript:callme()" class="btn btn-success"><i class="fa fa-download fa-lg" aria-hidden="true"></i> PDF</button>*/
/*                              </div>*/
/*                         </div>*/
/*                         <hr>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <div class="navigation">*/
/*                                 <small><strong>TOTAL DE REGISTROS: <span class='badge'>{{Requerimientos|length}}</span></strong></small>*/
/*                                 <br><br>*/
/*                             </div>*/
/*                             <table id="RequemientosE" class="table table-hover table-bordered">*/
/*                                 <thead class='bg-success'>*/
/*                                     <tr> */
/*                                         <th class="text-center small">Nº</th>*/
/*                                         <th class="text-center small">FECHA</th>*/
/*                                         <th class="text-center small">ID-REQ</th>*/
/*                                         <th class="text-center small">ACTIVIDAD-PARA-SOLUCION</th>*/
/*                                         <th class="text-center small">CLIENTE</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for Requerimientos in Requerimientos%}*/
/*                                         <tr>*/
/*                                             <td class="text-center small">{{ loop.index }}</td>*/
/*                                             <td class="text-center small">{{ Requerimientos.RqFecha |date("Y/m/d", false)}}</td>*/
/*                                             <td class="text-center small">Req-{{ Requerimientos.RqId }}</td>*/
/*                                             <td class="text-center small">{{Requerimientos.RqDescripcion}}</td>   */
/*                                             <td class="text-center small">{{Requerimientos.Cliente}}</td>     */
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <div class="navigation">*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /.box -->*/
/*         </div>*/
/*     </section><!-- /.content -->*/
/* {% endblock %}*/
/* */
