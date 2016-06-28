/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

    $("form#ActualizarCliente").validate({
        rules: {
            NombreEmpresa: {
                required: true,
                minlength: 6
            },
            DireccionEmpresa: {
                required: true,
                minlength: 6
            },
            TelefonoEmpresa: {
                 required: true,
                digits: true,
                minlength: 6
            },
            UsuarioEmpresa: {
                required: true,
                minlength: 6
            },
            ContactoEmpresa: {
                required: true,
                minlength: 10
            },
            MailEmpresa: {
                email: true,
                required: true
            }          
        },
        messages: {
            NombreEmpresa: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese el nombre',
                minlength: $.validator.format("Al menos {0} caracteres requeridos")
            },
            DireccionEmpresa: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese la dirección',
                minlength: $.validator.format("Al menos {0} caracteres requeridos")
            },
            TelefonoEmpresa: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Número Teléfonico',
                digits: '<span><i class="fa fa-times"></i></span> Ingrese solo Numeros',
                minlength: $.validator.format("Requiere {0} Dígitos")  
            },
            UsuarioEmpresa: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese usuario',
                minlength: $.validator.format("Requiere {0} Caracteres")
            },
            ContactoEmpresa: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese el contacto',
                minlength: $.validator.format("Requiere {0} caracteres")
            },
           
            MailEmpresa: {
                email: $.validator.format("Ingrese @"),
                required: '<span><i class="fa fa-times"></i></span> Ingrese el correo electrónico'
            }
            }
    });
    $("#Guardar-Cliente").on("click", function (event) {
        event.preventDefault();
        var id = $("#IdCliente").attr("value");
        var path = $("#ActualizaCliente").attr("data-path") + id;    
        if ($("form#ActualizarCliente").valid()) {
            $.ajax({
                url: path,
                type: 'post',
                // dataType: 'json',
                data: {"NombreEmpresa": $("form#ActualizarCliente #NombreEmpresa").val(),
                    "DireccionEmpresa": $("form#ActualizarCliente #DireccionEmpresa").val(),
                    "TelefonoEmpresa": $("form#ActualizarCliente #TelefonoEmpresa").val(),
                    "UsuarioEmpresa": $("form#ActualizarCliente #UsuarioEmpresa").val(),
                    "ContactoEmpresa": $("form#ActualizarCliente #ContactoEmpresa").val(),
                    "MailEmpresa": $("form#ActualizarCliente #MailEmpresa").val()                    
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
    $("form#ActualizaClaveCliente").validate({
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
        var id = $("#idCliente").attr("value");
        var path = $("#CambiaCClave").attr("data-path") +"Guardar/"+ id;
        if ($("form#ActualizaClaveCliente").valid()) {
            $.ajax({
                url: path,
                type: 'post',
                // dataType: 'json',
                data: {"ClaveCN": $("form#ActualizaClaveCliente #ClaveCN").val(),
                    "ClaveA":$("form#ActualizaClaveCliente #ClaveA").val(),
                    "ClaveN":$("form#ActualizaClaveCliente #ClaveN").val()
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
    /*
     * Verifica la clave anterior
     */
    $('#ClaveA').focusout(function () {
        if ($(this).val().length !== 0) {
            var id = $("#idCliente").attr("value");
            var path = $("#CambiaCClave").attr("data-path") + id;
            var clave = $(this).val();
            $.ajax({
                type: 'get',
                url: path,
                data: {"ClaveCN": $("form#ActualizaClaveCliente #ClaveCN").val()
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
    
 /*
  * validacion  de form  en de nuevo requerimeinto
  */   
 
    $("form#NuevoReqC").validate({
        rules: {
            Fecha: {
                required: true
            },
            Modulo: {
                required: true
            },
            Menu: {
                required: true
            },
            SubMenu: {
                required: true
            },
            
            txtArea: {
                required: true,
                minlength: 20
                
            }
        },
        messages: {
            Fecha: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese la Fecha'
            },
            Modulo: {
                required: '<span><i class="fa fa-times"></i></span> Seleccione el Modulo'
               
            },
            Menu: {
                required: '<span><i class="fa fa-times"></i></span> Seleccione el Menu'
               
            },
             SubMenu: {
                required: '<span><i class="fa fa-times"></i></span> Seleccione el SubMenu'
               
            },
             txtArea: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese el Detalle',
                minlength:$.validator.format("Requiere mínimo {0} Caracteres")
            }
        }
    });
 
 
 
 
 
    /*
     * buscar menus de modulo de nuevo requerimiento
     */
    

    $('#Modulo').change(function () {
        var m = $("#Modulo").val();
        var path = $("#PathMod").attr("data-path") + m;
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'get',
                url: path,
                beforeSend: function () {
                    $("#Menu option").remove();
                    $(".loading").parent().append('<div class="Load"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Buscando...</div>');
                },
                success: function (data) {
                    var $menus = $("#Menu");
                    var $Submenus=$("#SubMenu");
                    $menus.html('<option value="" selected>Seleccione Menu</option>');
                     $Submenus.html('<option value="" selected>Seleccione SubMenu</option>');
                    for (var i = 0; i < data.length; i++) {
                        $menus.append('<option value="' + data[i].menuid + '">' + data[i].MeNombre + '</option>');
                    }
                    $(".Load").remove();
                }
            });
        }
        ;
    });
    
/*
 * Busca los subMenus
 */    
    $('#Menu').change(function () {
        var menu = $("#Menu").val();
        var path = $("#PathMenu").attr("data-path") + menu;
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'get',
                url: path,
                beforeSend: function () {
                    $("#SubMenu option").remove();
                    $(".loading").parent().append('<div class="Load"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Buscando...</div>');
                },
                success: function (data) {
                    var $Submenus = $("#SubMenu");
                    $Submenus.html('<option value="" selected>Seleccione SubMenu</option>');
                    for (var i = 0; i < data.length; i++) {
                        $Submenus.append('<option value="' + data[i].SubMenuId + '">' + data[i].SubMenuNombre + '</option>');
                    }
                    $(".Load").remove();
                }
            });
        }
        ;
    }
    );
});