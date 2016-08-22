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
        }
        ;
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
        var id = $("#idCliente").attr("value");
        var path = $("#CambiaCClave").attr("data-path") + "Guardar/" + id;
        if ($("form#ActualizaClaveCliente").valid()) {
            $.ajax({
                url: path,
                type: 'post',
                // dataType: 'json',
                data: {"ClaveCN": $("form#ActualizaClaveCliente #ClaveCN").val(),
                    "ClaveA": $("form#ActualizaClaveCliente #ClaveA").val(),
                    "ClaveN": $("form#ActualizaClaveCliente #ClaveN").val()
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
                minlength: $.validator.format("Requiere mínimo {0} Caracteres")
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
                    var $Submenus = $("#SubMenu");
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
     * Busca los subMenus nuevo requerimiento
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
    });
    /*
     * Buscar menus para editar Ajax desde ventana modal de actualizar requerimientos
     */
    
    

    $('#Modulo1').change(function () {
       
        var m = $('#Modulo1').val();
        var path = $("#PathMod").attr("data-path") + m;
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'get',
                url: path,
                beforeSend: function () {
                    $("#Menu1 option").remove();
                    $(".loading").parent().append('<div class="Load"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Buscando...</div>');
                },
                success: function (data) {
                    var $menus = $("#Menu1");
                    var $Submenus = $("#SubMenu1");
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
     * Buscar submenus para editar AJAX
     */

    $('#Menu1').change(function () {
        var menu = $("#Menu1").val();
        var path = $("#PathMenu").attr("data-path") + menu;
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'get',
                url: path,
                beforeSend: function () {
                    $("#SubMenu1 option").remove();
                    $(".loading").parent().append('<div class="Load"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Buscando...</div>');
                },
                success: function (data) {
                    var $Submenus = $("#SubMenu1");
                    for (var i = 0; i < data.length; i++) {
                        $Submenus.append('<option value="' + data[i].SubMenuId + '">' + data[i].SubMenuNombre + '</option>');
                    }
                    $(".Load").remove();
                }
            });
        }
        ;
    });
    
    
    /*
     * consulta de modulos desde ingreso requerimientos
     */
  $('#ModuloC').change(function () { 
        var m = $("#ModuloC").val();
        var path = $("#PathReqConsultasC").attr("data-path")+"Modulo/"+m;
        var pathEliminar=$("#PathReqEliminar").attr("data-path");
        var pathEditar=$("#Actualiza").attr("data-path");
      if ($(this).val().length !== 0) {
            $.ajax({
                type: 'post',
                url: path,
                beforeSend: function () {
                    $(".loading1").parent().append('<div class="Load"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Buscando...espere</div>');
                },
                success: function (data) {
                  
                    
                    var $req = $("#RequerimientosC");

                    $("tbody").remove();
                    $("td").remove();
                    $req.append('<tbody>');
                    for (var i = 0; i < data.length; i++) {
                        var date = new Date(data[i].Fecha.date);
                        $req.append('<tr><td><small>' + [i + 1] + '</small></td>' + '<td><small>' + date.toLocaleDateString(data[i]) + '</small></td>' + '<td><small>' + 'Req-' + data[i].IdReq
                                + '</small></td>' + '<td><small>' + data[i].Estado + '</small></td>' + '<td><small>' + data[i].Modulo
                                + '</small></td>' + '<td><small>' + data[i].Menu + '</small></td>' + '<td><small>' + data[i].SubMenu 
                                + '</small></td>' 
                                +'<td>'
                                    +'<button type="button" id="'+data[i].IdReq +'" class="btn btn-xs btn-success btn-circle" data-toggle="modal"'
                                    +'data-target="#'+data[i].Modulo+'" data-whatever="@mdo"> <i class="fa fa-pencil" title="EDITAR" aria-hidden="true">'
                                    +'</i></button><small>Editar</small>'
                            //Aqui va el modal
                            +'<div class="modal" id="'+data[i].Modulo+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">'
                                                  +'  <div class="modal-dialog modal-sm" role="document">'
                                                       +' <form id="Editar" method="POST" action="'+pathEditar+'/'+data[i].IdReq + '"> '                         
                                                           +' <div class="modal-content">'
                                                               +' <div class="modal-header btn-primary">'
                                                                   +' <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>'
                                                                   +' <h5 class="modal-title" id="exampleModalLabel" align="center"><strong> ACTUALIZAR REQUERIMIENTO</strong></h5>'
                                                                +'</div>'
                                                                +'<div class="modal-body">'
                                                                    +'<div class="row">'
                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>Id Requerimiento:</strong>'
                                                                            +'<span id="unSpan">'+data[i].IdReq +'</span> '
                                                                        +'</div>'
                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>Modulo:</strong>'
                                                                            +'<select class="form-control input-sm" name="'+data[i].IdReq +'" id="'+data[i].IdReq +'">'
                                                                               +' <option value="" >'+data[i].Modulo+'</option>'
                                                                                //{% for Modulos in Modulos %}                                                
                                                                               //     <option value='{{Modulos.id }}' name='{{Modulos.Nombre }}'>{{Modulos.Nombre }}</option>
                                                                              //  {% endfor %}
                                                                           +' </select>'
                                                                        +'</div>'
                                                                        +'<div class="form-group">'
                                                                            +'<div class="col-xs-12 text-center"><div class="loading"></div>'
                                                                           +' </div>'
                                                                        +'</div>'
                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>Menu:</strong>'
                                                                            +'<div class="row">'
                                                                               +' <div class="col-xs-12">'
                                                                                    +'<select class="form-control input-sm" name="Menu1" id="Menu1">'
                                                                                        +'<option value="'+data[i].Menu+'"selected>'+data[i].Menu+'</option>'
                                                                                   +'</select>'
                                                                                +'</div>'
                                                                            +'</div>'
                                                                        +'</div>'

                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>Submenu:</strong>'
                                                                            +'<div class="row">'
                                                                                +'<div class="col-xs-12 col-sm-12">'

                                                                                    +'<select class="form-control input-sm" name="SubMenu1" id="SubMenu1">'
                                                                                        +'<option value="'+data[i].IdMenus+'"selected>'+data[i].SubMenu+'</option>'
                                                                                    +'</select>'

                                                                                +'</div>'
                                                                            +'</div>'
                                                                        +'</div>'

                                                                        +'<div class="col-sm-12">'
                                                                           +' <strong>Descripcion:</strong>'
                                                                           +' <div class="row">'
                                                                             +'   <div class="col-xs-12 col-sm-12">'
                                                                                    +'<textarea id="txtArea1" name="txtArea1" rows="7" cols="40">'+data[i].Descripcion+'</textarea>'
                                                                                +'</div>'
                                                                            +'</div>'
                                                                        +'</div>'        

                                                                   +' </div>'                                                    
                                                                +'</div>'
                                                                +'<div class="modal-footer bg-gray">'
                                                                    +'<button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><span class="fa fa-times-circle-o"></span> Cancelar</button>'
                                                                   +' <button type="submit" id="actualizar" class="btn btn-success btn-xs"><span class="fa fa-check-circle"></span> Actualizar</button>'
                                                                +'</div>'
                                                            +'</div>'
                                                        +'</form>'                            
                                                    +'</div>'
                                                +'</div>'
                            //fin modal
                            
                                    +' <a class="btn btn-danger btn-circle" href="' + pathEliminar 
                                    + '/' + data[i].IdReq + '"><i class="fa fa-trash-o fa-fw" title="ELIMINAR" aria-hidden="true"></i>'
                                    +'<span class="sr-only">ELIMINAR</span></a><small>Eliminar</small>'
                                    +'</td>'
                                +'</tr>');
                    }
                    $req.append('</tbody>');
                    $(".Load").remove();
                }
            
            });
        } else
        {
          location.reload();   
        };
    });
    
 

});


