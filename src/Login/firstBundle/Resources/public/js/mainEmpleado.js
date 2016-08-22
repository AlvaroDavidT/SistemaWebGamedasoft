/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

/*
 * actualizar clientes;
 * 
 */
 $("form#ActualizarEmpleado").validate({
        rules: {
            NombreEmpleado: {
                required: true,
                minlength: 6
            },
            DireccionEmpleado: {
                required: true,
                minlength: 6
            },
            TelefonoEmpleado: {
                required: true,
                digits: true,
                minlength: 6
            },
            UsuarioEmpresa: {
                required: true,
                minlength: 6
            },
           
            MailEmpleado: {
                email: true,
                required: true
            }
        },
        messages: {
            NombreEmpleado: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese el nombre',
                minlength: $.validator.format("Al menos {0} caracteres requeridos")
            },
            DireccionEmpleado: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese la dirección',
                minlength: $.validator.format("Al menos {0} caracteres requeridos")
            },
            TelefonoEmpleado: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Número Teléfonico',
                digits: '<span><i class="fa fa-times"></i></span> Ingrese solo Numeros',
                minlength: $.validator.format("Requiere {0} Dígitos")
            },
          
            MailEmpleado: {
                email: $.validator.format("Ingrese @"),
                required: '<span><i class="fa fa-times"></i></span> Ingrese el correo electrónico'
            }
        }
    });
    $("#Guardar-Empleado").on("click", function (event) {
        event.preventDefault();
        var id = $("#IdEmpleado").attr("value");
        var path = $("#ActualizarEmpleadoPath").attr("data-path") + id;
      
        if ($("form#ActualizarEmpleado").valid()) {
            $.ajax({
                url: path,
                type: 'post',
                // dataType: 'json',
                data: {"NombreEmpleado": $("form#ActualizarEmpleado #NombreEmpleado").val(),
                    "DireccionEmpleado": $("form#ActualizarEmpleado #DireccionEmpleado").val(),
                    "TelefonoEmpleado": $("form#ActualizarEmpleado #TelefonoEmpleado").val(),
                    "MailEmpleado": $("form#ActualizarEmpleado #MailEmpleado").val()
                },
                success: function () {
                    $("#success").css("display", "block");
                    setTimeout(function () {
                        $("#success").fadeOut(1000);
                    }, 1000);
                }
            });
        }
        ;
    });


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

    $("form#RegistroTiemposE").validate({
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
        
        if ($("form#RegistroTiemposE").valid()) {
            $.ajax({
                url: path,
                type: 'post',
                // dataType: 'json',
                data: {"RegistroReq": $("form#RegistroTiemposE #RegistroReq").val(),
                    "Requerimiento": $("form#RegistroTiemposE #Requerimiento").val(),
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
    
   /*
     * validacion de actualizar Clave
     */
    $("form#ActualizaClaveEmpleado").validate({
        rules: {
            ClaveA: {
                required: true
            },
            ClaveN: {
                required: true,
                minlength: 6

            },
            ClaveCN: {
                required: true,
                equalTo: "#ClaveN"
            }
        },
        messages: {
            ClaveA: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese la clave anterior'
            },
            ClaveN: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese la nueva clave',
                minlength: $.validator.format("Requiere mínimo {0} Dígitos")
            },
            ClaveCN: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese la confirmacion clave',
                equalTo: '<span><i class="fa fa-times"></i></span>No coincide claves nuevas'
            }
        }
    });
    $("#btn-GuardarClave").on("click", function (event) {
        event.preventDefault();
        var id = $("#idEmpleado").attr("value");
        var path = $("#CambiaEClave").attr("data-path") + "Guardar/" + id;
        if ($("form#ActualizaClaveEmpleado").valid()) {
            $.ajax({
                url: path,
                type: 'post',
                // dataType: 'json',
                data: {"ClaveCN": $("form#ActualizaClaveEmpleado #ClaveCN").val(),
                    "ClaveA": $("form#ActualizaClaveEmpleado #ClaveA").val(),
                    "ClaveN": $("form#ActualizaClaveEmpleado #ClaveN").val()
                },
                success: function () {
                    $("#success").css("display", "block");
                    setTimeout(function () {
                        $("#success").fadeOut(1000);
                    }, 1000);
                    $('#ClaveA').val('');
                    $('#ClaveCN').val('');
                    $('#ClaveN').val('');
                }
            });
        }
        ;
    });
    /*
     * Verifica la clave anterior
     */
    $('#ClaveA').focusout(function () {
        if ($(this).val().length !== 0) {
            var id = $("#idEmpleado").attr("value");
            var path = $("#CambiaEClave").attr("data-path") + id;
            var clave = $(this).val();
            
            $.ajax({
                type: 'get',
                url: path,
                data: {"ClaveCN": $("form#ActualizaClaveEmpleado #ClaveCN").val()
                },
                success: function (data) {
                    var dato = (data.Clave);
                    
                    if (clave !== dato) {
                        $("#error").css("display", "block");
                        setTimeout(function () {
                            $("#error").fadeOut(1000);
                        }, 1000);
                        $("#ClaveA").focus();
                        $('#ClaveA').val('');
                    }
                }
            });
        }
        else {
            $("#error").css("display", "block");
            setTimeout(function () {
                $("#error").fadeOut(1000);
            }, 1000);
            $("#ClaveA").focus();
        }
    });

    

});