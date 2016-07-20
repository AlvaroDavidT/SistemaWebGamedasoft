/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

    $("form#empleado").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 6
            },
            apellidos: {
                required: true,
                minlength: 6
            },
            cedula: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10
            },
            telefono: {
                required: true,
                digits: true,
                minlength: 6
            },
            direccion: {
                required: true,
                minlength: 10
            },
            genero: {
                required: true

            },
            mail: {
                email: true,
                required: true

            },
             departamento: {
                required: true

            },
            claveT: {
                required: true,
                minlength: 5

            }
        },
        messages: {
            nombre: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Nombres',
                minlength: $.validator.format("Al menos {0} caracteres requeridos")
            },
            apellidos: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Apellidos',
                minlength: $.validator.format("Al menos {0} caracteres requeridos")
            },
            cedula: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Numero Cédula',
                digits: '<span><i class="fa fa-times"></i></span> Ingrese solo Numeros',
                minlength: $.validator.format("Requiere {0} Dígitos"),
                maxlength: $.validator.format("Requiere {0} Dígitos")
            },
            telefono: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Número Teléfonico',
                digits: '<span><i class="fa fa-times"></i></span> Ingrese solo Números',
                minlength: $.validator.format("Requiere {0} Dígitos")
            },
            direccion: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese la Dirección',
                minlength: $.validator.format("Requiere {0} caracteres")
            },
            genero: {
                required: '<span><i class="fa fa-times"></i></span> Seleccione el genero'                
            },
            departamento: {
                required: '<span><i class="fa fa-times"></i></span> Seleccione departamento'               
            },
            mail: {
                email: $.validator.format("Ingrese @"),
                required: '<span><i class="fa fa-times"></i></span> Ingrese el Correo Electrónico'

            },
            claveT: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese la clave temporal',
                minlength: $.validator.format("Requiere {0} caracteres")
            }
        }
    });

    $("#btn-enviar").on("click", function (event) {
        event.preventDefault();
        var $btn = $(this).button('loading');

        if ($("form#empleado").valid()) {
            $.ajax({
                url: 'rpc/procesar.php',
                type: 'post',
                // dataType: 'json',
                data: {"nombre": $("form#contacto #nombre").val(),
                    "email": $("form#contacto #email").val(),
                    "mensaje": $("form#contacto #mensaje").val()}
            })
                    .done(function (msg) {
                        console.log("success");
                        $("#success").html(msg);
                        $('#contact-form').modal('hide');
                    })
                    .fail(function (jqXHR, textStatus, errorThrown) {
                        console.log("fail: " + textStatus + " " + errorThrown);
                        $("#error").html(textStatus);
                    })
                    .always(function () {
                        console.log("complete");
                    });
        }
        $btn.button('reset');
    });
    $("#contact-form").on("hide.bs.modal", function () {
        $('#contacto')[0].reset();
    });

    /*
     * validacion de nuevo cliente
     */
    $("form#cliente").validate({
        rules: {
            nombreC: {
                required: true,
                minlength: 6
            },
            UsuarioC: {
                required: true,
                minlength: 6
            },
            ruc: {
                required: true,
                digits: true,
                minlength: 13,
                maxlength: 13
            },
            telefonoC: {
                required: true,
                digits: true,
                minlength: 6
            },
            direccionC: {
                required: true,
                minlength: 10
            },
            mailC: {
                email: true,
                required: true

            },
            claveTC: {
                required: true,
                minlength: 5

            },
            contactoC: {
                required: true,
                minlength: 5

            }
        },
        messages: {
            nombreC: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Nombre',
                minlength: $.validator.format("Al menos {0} caracteres requeridos")
            },
            UsuarioC: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Usuario',
                minlength: $.validator.format("Al menos {0} caracteres requeridos")
            },
            ruc: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Numero de Ruc',
                digits: '<span><i class="fa fa-times"></i></span> Ingrese solo Numeros',
                minlength: $.validator.format("Requiere {0} Dígitos"),
                maxlength: $.validator.format("Requiere {0} Dígitos")
            },
            telefonoC: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Número Teléfonico',
                digits: '<span><i class="fa fa-times"></i></span> Ingrese solo Números',
                minlength: $.validator.format("Requiere {0} Dígitos")
            },
            direccionC: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese la Dirección',
                minlength: $.validator.format("Requiere {0} caracteres")
            },
            mailC: {
                email: $.validator.format("Ingrese @"),
                required: '<span><i class="fa fa-times"></i></span> Ingrese el Correo Electrónico'

            },
            claveTC: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese la clave temporal',
                minlength: $.validator.format("Requiere {0} caracteres")
            },
            contactoC: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese el Contacto',
                minlength: $.validator.format("Requiere {0} caracteres")
            }
        }
    });
    /*
     * validacion de asignacion
     */
    $("form#Asignacion").validate({
        rules: {
            Empleado: {
                required: true

            }
        },
        messages: {
            Empleado: {
                required: '<span><i class="fa fa-times"></i></span> Seleccione el  Empleado'

            }
        }
    });
    /*
     * validacion de nuevo Modulo
     */
    $("form#NuevoModulo").validate({
        rules: {
            ModNombre: {
                required: true

            },
            ModDescripcion: {
                required: true

            }
        },
        messages: {
            ModNombre: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Nombre'
            },
            ModDescripcion: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Descripcion'
            }
        }
    });
    /*
     * validacion de nuevo menu
     */
    $("form#NuevoMenu").validate({
        rules: {
            MenuNombre: {
                required: true

            },
            Modulo: {
                required: true

            }
        },
        messages: {
            MenuNombre: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Nombre'
            },
            Modulo: {
                required: '<span><i class="fa fa-times"></i></span> Seleccione un modulo'
            }
        }
    });
    /*
     * validacion submenu
     */
     $("form#NuevoSubmenu").validate({
        rules: {
            SubMenuNombre: {
                required: true

            },
            Menu: {
                required: true

            }
        },
        messages: {
            SubMenuNombre: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Nombre'
            },
            Menu: {
                required: '<span><i class="fa fa-times"></i></span> Seleccione Menu'
            }
        }
    });
    
    /*
     * validacion de actualizar Admin
     */
    $("form#ActualizarAdmin").validate({
        rules: {
            nombre: {
                required: true
            },
            apellidos: {
                required: true
            },
            telefono: {
                required: true,
                digits: true,
                minlength: 6
            },
            mail: {
                required: true,
                email: true
            }
        },
        messages: {
            nombre: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Nombre'
            },
            apellidos: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese apellidos'
            },
            telefono: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese el número Telefónico',
                digits: '<span><i class="fa fa-times"></i></span> Ingrese solo digitos numericos ',
                minlength: $.validator.format("Requiere mínimo {0} Dígitos")
            },
            mail: {
                required: '<span><i class="fa fa-times"></i></span> 6 Dígitos mininos requeridos',
                email: $.validator.format("Ingrese @")
            }

        }
    });
    $("#btn-Guardar").on("click", function (event) {
        event.preventDefault();
        var id = $("#idpr").attr("value");
        var path = $("#abc").attr("data-path") + id;

        if ($("form#ActualizarAdmin").valid()) {
            $.ajax({
                url: path,
                type: 'post',
                // dataType: 'json',
                data: {"nombre": $("form#ActualizarAdmin #nombre").val(),
                    "apellidos": $("form#ActualizarAdmin #apellidos").val(),
                    "telefono": $("form#ActualizarAdmin #telefono").val(),
                    "mail": $("form#ActualizarAdmin #mail").val()
                },
                success: function () {
                    $("#success").css("display", "block");
                    setTimeout(function () {
                        $("#success").fadeOut(1000);
                    }, 1000);
                }
            });
        };
    });
    
     /*
     * validacion de actualizar Clave
     */
    $("form#ActualizaCAdmin").validate({
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
                minlength:$.validator.format("Requiere mínimo {0} Dígitos")
            },
            ClaveCN: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese La confirmacion clave',
                equalTo:'<span><i class="fa fa-times"></i></span>No coincide claves nuevas'
            }
        }
    });
    $("#btn-GuardarClave").on("click", function (event) {
        event.preventDefault();
        var id = $("#idAdmin").attr("value");
        var path = $("#CambiaClave").attr("data-path") +"Guardar/"+ id;
        if ($("form#ActualizaCAdmin").valid()) {
            $.ajax({
                url: path,
                type: 'post',
                // dataType: 'json',
                data: {"ClaveCN": $("form#ActualizaCAdmin #ClaveCN").val()
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
        };
    });
    $('#ClaveA').focusout(function () {
        if ($(this).val().length !== 0) {
            var id = $("#idAdmin").attr("value");
            var path = $("#CambiaClave").attr("data-path") + id;
            var clave=$(this).val();
            $.ajax({
                type: 'get',
                url: path,
                data: {"ClaveCN": $("form#ActualizarAdmin #ClaveCN").val()
                     },
                success: function (data) {
                    var dato=(data.Clave);
                    if(clave !== dato){
                        $("#error").css("display", "block");
                    setTimeout(function () {
                        $("#error").fadeOut(1000);
                    }, 1000);
                     $( "#ClaveA" ).focus();
                     $('#ClaveA').val('');
                    }                   
                }
            });
        }
        else{
            $("#error").css("display", "block");
                    setTimeout(function () {
                        $("#error").fadeOut(1000);
                    }, 1000);   
                    $( "#ClaveA" ).focus();
        }
    });
});