/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).on('ready', function () {
        $('#fechaInicial').change(function () {
        var m = "FechaInicial";
        var path = $("#PathReqCosultas").attr("data-path") + m;
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'post',
                url: path,
                data: {"fechaInicial": $("#fechaInicial").val()
                },
                success: function (data) {
                    var $req = $("#pdf");
                     $("tbody").remove(); 
                     $("td").remove();
                     $req.append('<tbody>');     
                    for (var i = 0; i < data.length; i++) {
                        var date = new Date(data[i].RqFecha.date);
                        $req.append('<tr><td>'+[i + 1]+'</td>'+'<td>'+date.toLocaleDateString(data[i])+'</td>'+'<td>'+'Req-'+data[i].RqId 
                        +'</td>'+'<td>'+data[i].Cliente+'</td>'+'<td>'+data[i].Estado
                        +'</td>'+'<td>'+data[i].Modulo+'</td>'+'<td>'+ data[i].AsignadoNombre+" "+data[i].AsignadoApellido+'</td></tr>');
                    }
                   $req.append('</tbody>');
                    $(".Load").remove();
                }
            });
        };
    });
    
    $('#fechaFinal').change(function () {
        var m = "Fechas";
        var path = $("#PathReqCosultas").attr("data-path") + m;
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'post',
                url: path,
                data: {"fechaInicial": $("#fechaInicial").val(),
                    "fechaFinal": $("#fechaFinal").val()},
                success: function (data) {
                    var $req = $("#pdf");
                     $("tbody").remove(); 
                     $("td").remove();
                     $req.append('<tbody>');     
                    for (var i = 0; i < data.length; i++) {
                         var date = new Date(data[i].RqFecha.date);
                        $req.append('<tr><td>'+[i + 1]+'</td>'+'<td>'+date.toLocaleDateString(data[i])+'</td>'+'<td>'+'Req-'+data[i].RqId 
                        +'</td>'+'<td>'+data[i].Cliente+'</td>'+'<td>'+data[i].Estado
                        +'</td>'+'<td>'+data[i].Modulo+'</td>'+'<td>'+ data[i].AsignadoNombre+" "+data[i].AsignadoApellido+'</td></tr>');
                    }
                   $req.append('</tbody>');
                    $(".Load").remove();
                }
            });
        };
    });
     $('#Cliente').change(function () {
        var m = $("#Cliente").val();
        var path = $("#PathReqCosultas").attr("data-path")+"Cliente/"+ m;
      
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'post',
                url: path,
                data: {"fechaInicial": $("#fechaInicial").val(),
                    "fechaFinal": $("#fechaFinal").val()},
                success: function (data) {
                    var $req = $("#pdf");
                     $("tbody").remove(); 
                     $("td").remove();
                     $req.append('<tbody>');     
                    for (var i = 0; i < data.length; i++) {
                          var date = new Date(data[i].RqFecha.date);
                        $req.append('<tr><td>'+[i + 1]+'</td>'+'<td>'+date.toLocaleDateString(data[i])+'</td>'+'<td>'+'Req-'+data[i].RqId 
                       +'</td>'+'<td>'+data[i].Cliente+'</td>'+'<td>'+data[i].Estado
                        +'</td>'+'<td>'+data[i].Modulo+'</td>'+'<td>'+ data[i].AsignadoNombre+" "+data[i].AsignadoApellido+'</td></tr>');
                    }
                   $req.append('</tbody>');
                    $(".Load").remove();
                }
            });
        };
    });
    $('#Estado').change(function () {
        var m = $("#Estado").val();
        var path = $("#PathReqCosultas").attr("data-path")+"Estado/"+m;

        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'post',
                url: path,
                data: {"fechaInicial": $("#fechaInicial").val(),
                    "fechaFinal": $("#fechaFinal").val()},
                success: function (data) {
                    var $req = $("#pdf");
                    $("tbody").remove();
                    $("td").remove();
                    $req.append('<tbody>');
                    for (var i = 0; i < data.length; i++) {
                           var date = new Date(data[i].RqFecha.date);
                        $req.append('<tr><td>'+[i + 1]+'</td>'+'<td>'+date.toLocaleDateString(data[i])+'</td>'+'<td>'+'Req-'+data[i].RqId 
                               + '</td>' + '<td>' + data[i].Cliente + '</td>' + '<td>' + data[i].Estado
                                + '</td>' + '<td>' + data[i].Modulo + '</td>' + '<td>' + data[i].AsignadoNombre + " " + data[i].AsignadoApellido + '</td></tr>');
                    }
                    $req.append('</tbody>');
                    $(".Load").remove();
                }
            });
        }
        ;
    });
    $('#Modulo').change(function () {
        var m = $("#Modulo").val();
        var path = $("#PathReqConsultas").attr("data-path")+"Modulo/"+m;
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'post',
                url: path,
                data: {"fechaInicial": $("#fechaInicial").val(),
                    "fechaFinal": $("#fechaFinal").val()},
                success: function (data) {
                    var $req = $("#pdf");
                   
                    $("tbody").remove();
                    $("td").remove();
                    $req.append('<tbody>');
                    for (var i = 0; i < data.length; i++) {
                             var date = new Date(data[i].RqFecha.date);
                        $req.append('<tr><td>'+[i + 1]+'</td>'+'<td>'+date.toLocaleDateString(data[i])+'</td>'+'<td>'+'Req-'+data[i].RqId 
                             + '</td>' + '<td>' + data[i].Cliente + '</td>' + '<td>' + data[i].Estado
                                + '</td>' + '<td>' + data[i].Modulo + '</td>' + '<td>' + data[i].AsignadoNombre + " " + data[i].AsignadoApellido + '</td></tr>');
                    }
                    $req.append('</tbody>');
                    $(".Load").remove();
                }
            });
        }
        ;
    });
      $('#Empleado').change(function () {
        var m = $("#Empleado").val();
        var path = $("#PathReqCosultas").attr("data-path")+"Empleado/"+m;
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'post',
                url: path,
                beforeSend: function () {
                    $("#Menu option").remove();
                    $(".loading").parent().append('<div class="Load"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Buscando...</div>');
                },
                data: {"fechaInicial": $("#fechaInicial").val(),
                    "fechaFinal": $("#fechaFinal").val()},
                success: function (data) {
                    var $req = $("#pdf");
                    $("tbody").remove();
                    $("td").remove();
                    $req.append('<tbody>');
                    for (var i = 0; i < data.length; i++) {
                             var date = new Date(data[i].RqFecha.date);
                        $req.append('<tr><td>'+[i + 1]+'</td>'+'<td>'+date.toLocaleDateString(data[i])+'</td>'+'<td>'+'Req-'+data[i].RqId 
                             + '</td>' + '<td>' + data[i].Cliente + '</td>' + '<td>' + data[i].Estado
                                + '</td>' + '<td>' + data[i].Modulo + '</td>' + '<td>' + data[i].AsignadoNombre + " " + data[i].AsignadoApellido + '</td></tr>');
                    }
                    $req.append('</tbody>');
                    $(".Load").remove();
                }
            });
        }
        ;
    });
    
          
    /*
     * consulta para exportar pdf clientes
     * ======================================================
     */
    /*
     * consulta fechas inicial
     * ----------------
     * 
     */
        $('#fechaInicialConsultas').change(function () {
        var m = "FechaInicialC";
        var path = $("#PathRequerimientosCliente").attr("data-path")+'/' + m;
       
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'post',
                url: path,
                data: {"fechaInicialC": $("#fechaInicialConsultas").val()
                },
                success: function (data) {
                    var $req = $("#reporte");
                     $("tbody").remove(); 
                     $("td").remove();
                     $req.append('<tbody>');     
                    for (var i = 0; i < data.length; i++) {
                        var date = new Date(data[i].Fecha.date);
                    $req.append('<tr><td class="small">'+[i + 1]+'</td>'+'<td class="small">'+date.toLocaleDateString(data[i])+'</td>'+'<td class="small">'+'Req-'+data[i].IdReq 
                        +'</td>'+'<td class="small">'+data[i].Estado+'</td>'+'<td class="small">'+data[i].Modulo
                        +'</td>'+'<td class="small">'+data[i].Descripcion+'</td></tr>');
                    }
                   $req.append('</tbody>');
                    $(".Load").remove();
                }
            });
        };
    });
    
      /*
     * consulta entre fechas
     * ----------------
     * 
     */
        $('#fechaFinalConsultas').change(function () {
        var m = "FechaEntreFechasC";
        var path = $("#PathRequerimientosCliente").attr("data-path")+'/' + m;
       
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'post',
                url: path,
                data: {"fechaInicialC": $("#fechaInicialConsultas").val(),
                     "fechaFinalC": $("#fechaFinalConsultas").val()
                },
                success: function (data) {
                    var $req = $("#reporte");
                     $("tbody").remove(); 
                     $("td").remove();
                     $req.append('<tbody>');     
                    for (var i = 0; i < data.length; i++) {
                        var date = new Date(data[i].Fecha.date);
                        $req.append('<tr><td class="small">'+[i + 1]+'</td>'+'<td class="small">'+date.toLocaleDateString(data[i])+'</td>'+'<td class="small">'+'Req-'+data[i].IdReq 
                        +'</td>'+'<td class="small">'+data[i].Estado+'</td>'+'<td class="small">'+data[i].Modulo
                        +'</td>'+'<td class="small">'+data[i].Descripcion+'</td></tr>');
                    }
                   $req.append('</tbody>');
                    $(".Load").remove();
                }
            });
        };
    });
     /*
     * consulta Estados cliente
     * ----------------
     * 
     */
       $('#EstadoC').change(function () {
        var m = $('#EstadoC').val();
        var path = $("#PathRequerimientosCliente").attr("data-path")+'/Estados/' + m;
       
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'post',
                url: path,
                data: {"fechaInicialC": $("#fechaInicialConsultas").val(),
                     "fechaFinalC": $("#fechaFinalConsultas").val()
                },
                success: function (data) {
                    var $req = $("#reporte");
                     $("tbody").remove(); 
                     $("td").remove();
                     $req.append('<tbody>');     
                    for (var i = 0; i < data.length; i++) {
                        var date = new Date(data[i].Fecha.date);
                        $req.append('<tr><td class="small">'+[i + 1]+'</td>'+'<td class="small">'+date.toLocaleDateString(data[i])+'</td>'+'<td class="small">'+'Req-'+data[i].IdReq 
                        +'</td>'+'<td class="small">'+data[i].Estado+'</td>'+'<td class="small">'+data[i].Modulo
                        +'</td>'+'<td class="small">'+data[i].Descripcion+'</td></tr>');
                    }
                   $req.append('</tbody>');
                    $(".Load").remove();
                }
            });
        };
    });
       /*
     * consulta Modulos cliente
     * ----------------
     * 
     */
       $('#ModuloC').change(function () {
        var m = $('#ModuloC').val();
        var path = $("#PathRequerimientosCliente").attr("data-path")+'/Modulos/' + m;
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'post',
                url: path,
                data: {"fechaInicialC": $("#fechaInicialConsultas").val(),
                     "fechaFinalC": $("#fechaFinalConsultas").val()
                },
                success: function (data) {
                    var $req = $("#reporte");
                     $("tbody").remove(); 
                     $("td").remove();
                     $req.append('<tbody>');     
                    for (var i = 0; i < data.length; i++) {
                        var date = new Date(data[i].Fecha.date);
                        $req.append('<tr><td class="small">'+[i + 1]+'</td>'+'<td class="small">'+date.toLocaleDateString(data[i])+'</td>'+'<td class="small">'+'Req-'+data[i].IdReq 
                        +'</td>'+'<td class="small">'+data[i].Estado+'</td>'+'<td class="small">'+data[i].Modulo
                        +'</td>'+'<td class="small">'+data[i].Descripcion+'</td></tr>');
                    }
                   $req.append('</tbody>');
                    $(".Load").remove();
                }
            });
        };
    });
    
    /*
     * Reporte de horas por requerimiento
     * 
     */
         $('#ReqTiempos').change(function () {
        var m = $("#ReqTiempos").val();
        var path = $("#PathHojasTiempo").attr("data-path")+"Cliente/"+ m;
      
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'post',
                url: path,
                success: function (data) {
                    var $req = $("#pdf");
                     $("tbody").remove(); 
                     $("td").remove();
                     $req.append('<tbody>');     
                    for (var i = 0; i < data.length; i++) {
                          
                        $req.append('<tr><td class="small">'+[i + 1]+'</td>'+'<td class="small">'+data[i].tiempo+'</td>'+'<td class="small">'+data[i].Descripcion
                        +'</td>'+'<td class="small">'+ data[i].ClienteNombre+'</td></tr>');
                    }
                   $req.append('</tbody>');
                    $(".Load").remove();
                }
            });
        };
    });
    
    
});


