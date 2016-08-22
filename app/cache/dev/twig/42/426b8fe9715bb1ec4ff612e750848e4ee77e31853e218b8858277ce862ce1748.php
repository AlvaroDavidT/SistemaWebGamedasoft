<?php

/* LoginfirstBundle:Admin:ConsultaTiempos.html.twig */
class __TwigTemplate_112211d0ed759d576e6054cdb30a8dd260e5aa7af7481d5175b88cd953e92825 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LoginfirstBundle::Layout_AdminConsultas.html.twig", "LoginfirstBundle:Admin:ConsultaTiempos.html.twig", 2);
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
        $__internal_26c6cd04232a34fa6da17edb5a4ec6a319534720f7e03607122ec95ff6cc937b = $this->env->getExtension("native_profiler");
        $__internal_26c6cd04232a34fa6da17edb5a4ec6a319534720f7e03607122ec95ff6cc937b->enter($__internal_26c6cd04232a34fa6da17edb5a4ec6a319534720f7e03607122ec95ff6cc937b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LoginfirstBundle:Admin:ConsultaTiempos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26c6cd04232a34fa6da17edb5a4ec6a319534720f7e03607122ec95ff6cc937b->leave($__internal_26c6cd04232a34fa6da17edb5a4ec6a319534720f7e03607122ec95ff6cc937b_prof);

    }

    // line 3
    public function block_section2($context, array $blocks = array())
    {
        $__internal_76b967b504457740642d256693c6b23c9d41c2c891da7becd1723d3e1467a93b = $this->env->getExtension("native_profiler");
        $__internal_76b967b504457740642d256693c6b23c9d41c2c891da7becd1723d3e1467a93b->enter($__internal_76b967b504457740642d256693c6b23c9d41c2c891da7becd1723d3e1467a93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section2"));

        echo "   
    <section>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> INICIO</a></li>
            <li class=\"active\">Consulta Requerimientos</li>
        </ol>
    </section>
";
        
        $__internal_76b967b504457740642d256693c6b23c9d41c2c891da7becd1723d3e1467a93b->leave($__internal_76b967b504457740642d256693c6b23c9d41c2c891da7becd1723d3e1467a93b_prof);

    }

    // line 11
    public function block_section3($context, array $blocks = array())
    {
        $__internal_c29db2fcbf74665b2ebb71af27d7db2592601cbb6751bb2cca6624bae32b2cde = $this->env->getExtension("native_profiler");
        $__internal_c29db2fcbf74665b2ebb71af27d7db2592601cbb6751bb2cca6624bae32b2cde->enter($__internal_c29db2fcbf74665b2ebb71af27d7db2592601cbb6751bb2cca6624bae32b2cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section3"));

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
doc.setFontSize(10);
doc.text(20, 60, 'Reporte de Tiempos');
doc.setFontSize(10);

\$.each(table, function(i, row){
\t\$.each(row, function(j,cell){
\tif(j === \"Nº\" | j === 0){
\t doc.cell(20, 70, 20, 15, cell, i);\t
\t} else if(j === \"TIEMPO\" | j === 1){
           doc.cell(20, 80,50, 15, cell, i);\t
        }else if( j === \"DESCRIPCION\" | j === 2){
             doc.cell(20, 10, 360, 15, cell, i);\t
        } 
\telse if( j === 'CLIENTE' | j === 3 ){
\t\t doc.cell(20, 10,150, 15, cell, i);
\t}else{
            doc.cell(20, 10, 20, 15, cell, i);
        }
\t
\t});
});

doc.save('RequerimientosTiempos.pdf');
}

</script>
    
    
    
    <section class=\"content\"> 
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"panel panel-primary\">                 
                    <div class=\"panel-heading\"><strong><i class=\"fa fa-filter\" aria-hidden=\"true\"></i> Filtros </strong></div>
                     <div id=\"PathHojasTiempo\" data-path=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("ConsultaTiempos");
        echo "\"></div>  
                    <div class=\"panel-body height-control\">              
                        <div>
                            <ul class=\"list-group\">
                                
                                <li class=\"list-group-item\">
                                    <strong>Cliente:</strong>
                                    <div class=\"form-group\">
                                        <select class=\"form-control input-sm\" name='ReqTiempos' id='ReqTiempos'>
                                            <option value='0'>Todos</option>
                                                ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["Clientes"]);
        foreach ($context['_seq'] as $context["_key"] => $context["Clientes"]) {
            echo " 
                                                     <option value='";
            // line 91
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
        // line 93
        echo "                                        </select>
                                    </div> 
                                    
                                </li>
                            
                            </ul>
                        </div>
                                        <br><br><br><br><br><br><br><br><br><br><br><br><br>    
                                        
                    </div>
                    <div class=\"panel-footer\"></div>
                </div>
            </div>
            <div class=\"col-md-9\">               
                <div id=\"Pdf\" class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class='row'>
                            <div class='col-xs-6 '><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> <strong> Tiempos por requerimiento</strong></div>
                            <div class='col-xs-6 text-right'>
                                <button id=\"GuardarT\" onclick=\"javascript:callme()\" class=\"btn btn-success\"><i class=\"fa fa-download fa-lg\" aria-hidden=\"true\"></i> PDF</button>
                              </div>
                        </div>
                    </div>     
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table id=\"pdf\" class=\"table table-bordered\">
                                <thead class='bg-success'>
                                    <tr> 
                                        <th class=\"text-center small\">N°</th>
                                     
                                        <th class=\"text-center small\">TIEMPO</th>
                                        <th class=\"text-center small\">DESCRIPCION</th>
                                       
                                        <th class=\"text-center small\">CLIENTE</th>                    
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["HojasT"]) ? $context["HojasT"] : $this->getContext($context, "HojasT")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["HojasTiempos"]) {
            // line 131
            echo "                                        <tr>
                                            <td class=\"small\">";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                      
                                            <td class=\"small\">";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["HojasTiempos"], "Tiempo", array()), "html", null, true);
            echo "</td>
                                            <td class=\"small\">";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["HojasTiempos"], "Descripcion", array()), "html", null, true);
            echo "</td>
                                         
                                            <td class=\"small\">";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["HojasTiempos"], "ClienteNombre", array()), "html", null, true);
            echo " </td>     
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['HojasTiempos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <script>
                 
                </script>                                        
            </div>
        </div>              
    </section><!-- /.content -->
";
        
        $__internal_c29db2fcbf74665b2ebb71af27d7db2592601cbb6751bb2cca6624bae32b2cde->leave($__internal_c29db2fcbf74665b2ebb71af27d7db2592601cbb6751bb2cca6624bae32b2cde_prof);

    }

    public function getTemplateName()
    {
        return "LoginfirstBundle:Admin:ConsultaTiempos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 140,  237 => 137,  232 => 135,  228 => 134,  223 => 132,  220 => 131,  203 => 130,  164 => 93,  152 => 91,  146 => 90,  133 => 80,  57 => 11,  45 => 6,  35 => 3,  11 => 2,);
    }
}
/* {# src/login/firstBundle/Resources/views/Admin/IndexRT.html.twig #}*/
/* {% extends 'LoginfirstBundle::Layout_AdminConsultas.html.twig' %}*/
/* {%block section2 %}   */
/*     <section>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="{{path('Admin')}}"><i class="fa fa-dashboard"></i> INICIO</a></li>*/
/*             <li class="active">Consulta Requerimientos</li>*/
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
/* doc.setFontSize(10);*/
/* doc.text(20, 60, 'Reporte de Tiempos');*/
/* doc.setFontSize(10);*/
/* */
/* $.each(table, function(i, row){*/
/* 	$.each(row, function(j,cell){*/
/* 	if(j === "Nº" | j === 0){*/
/* 	 doc.cell(20, 70, 20, 15, cell, i);	*/
/* 	} else if(j === "TIEMPO" | j === 1){*/
/*            doc.cell(20, 80,50, 15, cell, i);	*/
/*         }else if( j === "DESCRIPCION" | j === 2){*/
/*              doc.cell(20, 10, 360, 15, cell, i);	*/
/*         } */
/* 	else if( j === 'CLIENTE' | j === 3 ){*/
/* 		 doc.cell(20, 10,150, 15, cell, i);*/
/* 	}else{*/
/*             doc.cell(20, 10, 20, 15, cell, i);*/
/*         }*/
/* 	*/
/* 	});*/
/* });*/
/* */
/* doc.save('RequerimientosTiempos.pdf');*/
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
/*                     <div class="panel-heading"><strong><i class="fa fa-filter" aria-hidden="true"></i> Filtros </strong></div>*/
/*                      <div id="PathHojasTiempo" data-path="{{path('ConsultaTiempos')}}"></div>  */
/*                     <div class="panel-body height-control">              */
/*                         <div>*/
/*                             <ul class="list-group">*/
/*                                 */
/*                                 <li class="list-group-item">*/
/*                                     <strong>Cliente:</strong>*/
/*                                     <div class="form-group">*/
/*                                         <select class="form-control input-sm" name='ReqTiempos' id='ReqTiempos'>*/
/*                                             <option value='0'>Todos</option>*/
/*                                                 {% for Clientes in Clientes %} */
/*                                                      <option value='{{Clientes.id }}' name='{{Clientes.Nombre }}'>{{Clientes.Nombre }}</option>*/
/*                                                 {% endfor %}*/
/*                                         </select>*/
/*                                     </div> */
/*                                     */
/*                                 </li>*/
/*                             */
/*                             </ul>*/
/*                         </div>*/
/*                                         <br><br><br><br><br><br><br><br><br><br><br><br><br>    */
/*                                         */
/*                     </div>*/
/*                     <div class="panel-footer"></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-9">               */
/*                 <div id="Pdf" class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         <div class='row'>*/
/*                             <div class='col-xs-6 '><i class="fa fa-bars" aria-hidden="true"></i> <strong> Tiempos por requerimiento</strong></div>*/
/*                             <div class='col-xs-6 text-right'>*/
/*                                 <button id="GuardarT" onclick="javascript:callme()" class="btn btn-success"><i class="fa fa-download fa-lg" aria-hidden="true"></i> PDF</button>*/
/*                               </div>*/
/*                         </div>*/
/*                     </div>     */
/*                     <div class="panel-body">*/
/*                         <div class="table-responsive">*/
/*                             <table id="pdf" class="table table-bordered">*/
/*                                 <thead class='bg-success'>*/
/*                                     <tr> */
/*                                         <th class="text-center small">N°</th>*/
/*                                      */
/*                                         <th class="text-center small">TIEMPO</th>*/
/*                                         <th class="text-center small">DESCRIPCION</th>*/
/*                                        */
/*                                         <th class="text-center small">CLIENTE</th>                    */
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for HojasTiempos in HojasT %}*/
/*                                         <tr>*/
/*                                             <td class="small">{{ loop.index }}</td>*/
/*                                       */
/*                                             <td class="small">{{ HojasTiempos.Tiempo  }}</td>*/
/*                                             <td class="small">{{ HojasTiempos.Descripcion }}</td>*/
/*                                          */
/*                                             <td class="small">{{ HojasTiempos.ClienteNombre }} </td>     */
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <script>*/
/*                  */
/*                 </script>                                        */
/*             </div>*/
/*         </div>              */
/*     </section><!-- /.content -->*/
/* {% endblock %}*/
/* */
