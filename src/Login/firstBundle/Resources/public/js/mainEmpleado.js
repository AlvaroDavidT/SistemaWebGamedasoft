/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {




    /*
     * buscar Requerimientos pertenecientes al empleado
     */


    $('#RegistroReq').change(function () {
        var m = $("#RegistroReq").val();
        var path = $("#PathRegistroT").attr("data-path") + m;
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'get',
                url: path,
                beforeSend: function () {
                    $("#Requerimiento option").remove();
                    $(".loading").parent().append('<div class="Load"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Buscando...</div>');
                },
                success: function (data) {
                    var $Submenus = $("#Requerimiento");
                    $Submenus.html('<option value="" selected>Seleccione Requerimiento</option>');
                    for (var i = 0; i < data.length; i++) {
                        $Submenus.append('<option value="' + data[i].ID + '">' + 'Req-' + data[i].ID + "=" + data[i].Descripcion + '</option>');
                    }
                    $(".Load").remove();
                }
            });
        }
        ;
    });

    /*
     * validamos el formulario antes de guardar datos del formulario
     * 
     */
jQuery.validator.addMethod("pattern", function(value, element, param) {
  if (this.optional(element)) {
    return true;
  }
  if (typeof param === 'string') {
    param = new RegExp('^(?:' + param + ')$');
  }
  return param.test(value);
}, "Invalid format.");

    $("form#Re").validate({
        rules: {
            RegistroReq: {
                required: true
            },
            Requerimiento: {
                required: true
            },
            time: {
                pattern: /^\d+:[0-5][0-9]/,
                required: true
               
            },
            actividad: {
                required: true
            }

        },
        messages: {
            RegistroReq: {
                required: '<span><i class="fa fa-times"></i></span> Seleccione Empresa'
            },
            Requerimiento: {
                required: '<span><i class="fa fa-times"></i></span> Selecciones Requerimento'
            },
            time: {
                pattern: '<span><i class="fa fa-times"></i> Formato Ingresado es incorrecto use HH:MM',
                required: '<span><i class="fa fa-times"></i></span>Ingrese el tiempo'
            },
            actividad: {
                required: '<span><i class="fa fa-times"></i></span>Ingrese la actividad'
            }

        }
    });



    /*
     * guardamos datos del formulario
     */
    $("#GuardarT").on("click", function (event) {
        event.preventDefault();
        var id = "Hojas/";
        var path = $("#PathGuardarHojasT").attr("data-path") + id;
        
        if ($("form#Re").valid()) {
            $.ajax({
                url: path,
                type: 'post',
                // dataType: 'json',
                data: {"RegistroReq": $("form#Re #RegistroReq").val(),
                    "Requerimiento": $("form#Re #Requerimiento").val(),
                    "time": $("form#Re #time").val(),
                    "actividad": $("form#Re #actividad").val()
                },
                success: function () {
                    $("#success").css("display", "block");
                    setTimeout(function () {
                        $("#success").fadeOut(1000);
                    }, 1000);
                    $('#RegistroReq').val('');
                    $('#Requerimiento').val('');
                    $('#time').val('');
                    $('#actividad').val('');
                 
                }
            });
        }
        ;
    });
    

});