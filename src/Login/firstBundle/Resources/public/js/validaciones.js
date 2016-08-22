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
}, "Invalido formato ingrese .com , .es, etc.");

    /*
     * validacion de nuevo cliente
     */
    $("form#cliente").validate({
        rules: {
            NombreCN: {
                required: true,
                minlength: 6
            },
            UsuarioCN: {
                required: true,
                minlength: 6
            },
            RucCN: {
                required: true,
                digits: true,
                minlength: 13,
                maxlength: 13
            },
            TelefonoCN: {
                required: true,
                digits: true,
                minlength: 6
            },
            DireccionCN: {
                required: true,
                minlength: 10
            },
            MailCN: {
                email: true,
                required: true,
                pattern: /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/
            },
            ClaveTC: {
                required: true,
                minlength: 5

            },
            ContactoCN: {
                required: true,
                minlength: 5

            }
        },
        messages: {
            NombreCN: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Nombre',
                minlength: $.validator.format("Al menos {0} caracteres requeridos")
            },
            UsuarioCN: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Usuario',
                minlength: $.validator.format("Al menos {0} caracteres requeridos")
            },
            RucCN: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Numero de Ruc',
                digits: '<span><i class="fa fa-times"></i></span> Ingrese solo Numeros',
                minlength: $.validator.format("Requiere {0} Dígitos"),
                maxlength: $.validator.format("Requiere {0} Dígitos")
            },
            TelefonoCN: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese Número Teléfonico',
                digits: '<span><i class="fa fa-times"></i></span> Ingrese solo Números',
                minlength: $.validator.format("Requiere {0} Dígitos")
            },
            DireccionCN: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese la Dirección',
                minlength: $.validator.format("Requiere {0} caracteres")
            },
            MailCN: {
                email: $.validator.format("Ingrese @"),
                required: '<span><i class="fa fa-times"></i></span> Ingrese el Correo Electrónico'

            },
            ClaveTC: {
                required: '<span><i class="fa fa-times"></i></span> Ingrese la clave temporal',
                minlength: $.validator.format("Requiere {0} caracteres")
            },
            ContactoCN: {
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
                email: true,
                pattern: /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/
         
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
        
        var path = $("#CambiaClave").attr("data-path") +"GuardarA/"+ id;
        
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
            }
                    );
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
    
    $('#Ced').keyup(function () { 
        var m = $("#Ced").val();
        var path = $("#PathBuscaCedula").attr("data-path")+m;
        var pathEliminarEmpleado=$("#PathReqEliminarE").attr("data-path");
        var pathEditarEmpleado=$("#ActualizaE").attr("data-path");
      if ($(this).val().length !== 0) {
            $.ajax({
                type: 'post',
                url: path,
                beforeSend: function () {
                    $(".loading1").parent().append('<div class="Load"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Buscando...</div>');
                },
                success: function (data) {
                  
                    
                    var $req = $("#Empleados");

                    $("tbody").remove();
                    $("td").remove();
                    $req.append('<tbody>');
                    for (var i = 0; i < data.length; i++) {
                        
                        $req.append('<tr><td><small>' + [i + 1] + '</small></td>' + '<td><small>' + data[i].cidentidad + '</small></td>' + '<td><small>'+ data[i].nombre
                                + '</small></td>' + '<td><small>' + data[i].apellido + '</small></td>' + '<td><small>' + data[i].email
                                + '</small></td>' + '<td><small>' + data[i].telefono + '</small></td>' + '<td><small>' + data[i].direccion
                                + '</small></td>' 
                                +'<td>'
                                    +'<button type="button" id="'+data[i].id +'" class="btn btn-xs btn-success btn-circle" data-toggle="modal"'
                                    +'data-target="#'+data[i].cidentidad+'" data-whatever="@mdo"> <i class="fa fa-pencil" title="EDITAR" aria-hidden="true">'
                                    +'</i></button><small>Editar</small>'
                            //Aqui va el modal
                            +'<div class="modal" id="'+data[i].cidentidad+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">'
                                                  +'  <div class="modal-dialog modal-sm" role="document">'
                                                       +' <form id="Editar" method="POST" action="'+pathEditarEmpleado+'/'+data[i].id + '"> '                         
                                                           +' <div class="modal-content">'
                                                               +' <div class="modal-header btn-primary">'
                                                                   +' <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>'
                                                                   +' <h5 class="modal-title" id="exampleModalLabel" align="center"><strong> ACTUALIZAR EMPLEADO</strong></h5>'
                                                                +'</div>'
                                                                +'<div class="modal-body">'
                                                                    +'<div class="row">'
                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>N° cedula:</strong>'
                                                                            +'<input type="text" value='+data[i].cidentidad +' id="Cedula" name="Cedula" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>Nombre:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].nombre +' id="Nombre" name="Nombre" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>Apellido:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].apellido +' id="Apellido" name="Apellido" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                          +'<div class="col-sm-12">'
                                                                            +'<strong>Email:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].email +' id="Email" name="Email" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>Telefono:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].telefono +' id="TelefonoE" name="TelefonoE" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                         +'<div class="col-sm-12">'
                                                                            +'<strong>Direccion:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].direccion +' id="DireccionE" name="DireccionE" class="form-control input-sm"/>'
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
                            
                                    +' <a class="btn btn-danger btn-circle" href="'+pathEliminarEmpleado
                                    + '/' + data[i].id+ '"><i class="fa fa-trash-o fa-fw" title="ELIMINAR" aria-hidden="true"></i>'
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
    
      $('#RucBusca').keyup(function () { 
        var m = $("#RucBusca").val();
        var path = $("#PathBuscaRuc").attr("data-path")+m;
        alert(path);
        var pathEliminarCliente=$("#PathReqEliminarC").attr("data-path");
        var pathEditarCliente=$("#ActualizaC").attr("data-path");
      if ($(this).val().length !== 0) {
            $.ajax({
                type: 'post',
                url: path,
                beforeSend: function () {
                    $(".loading1").parent().append('<div class="Load"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Buscando...</div>');
                },
                success: function (data) {
                  
                    
                    var $req = $("#Clientes");

                    $("tbody").remove();
                    $("td").remove();
                    $req.append('<tbody>');
                    for (var i = 0; i < data.length; i++) {
                        
                        $req.append('<tr><td><small>' + [i + 1] + '</small></td>' + '<td><small>' + data[i].ruc + '</small></td>' + '<td><small>' + data[i].nombre
                                + '</small></td>' + '<td><small>' + data[i].usuario + '</small></td>' + '<td><small>' + data[i].email
                                + '</small></td>' + '<td><small>' + data[i].telefono + '</small></td>' + '<td><small>' + data[i].direccion
                                 + '</small></td>' + '<td><small>' + data[i].contacto
                                + '</small></td>' 
                                +'<td>'
                                    +'<button type="button" id="'+data[i].id +'" class="btn btn-xs btn-success btn-circle" data-toggle="modal"'
                                    +'data-target="#'+data[i].ruc+'" data-whatever="@mdo"> <i class="fa fa-pencil" title="EDITAR" aria-hidden="true">'
                                    +'</i></button><small>Editar</small>'
                            //Aqui va el modal
                            +'<div class="modal" id="'+data[i].ruc+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">'
                                                  +'  <div class="modal-dialog modal-sm" role="document">'
                                                       +' <form id="Editar" method="POST" action="'+pathEditarCliente+'/'+data[i].id + '"> '                         
                                                           +' <div class="modal-content">'
                                                               +' <div class="modal-header btn-primary">'
                                                                   +' <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>'
                                                                   +' <h5 class="modal-title" id="exampleModalLabel" align="center"><strong> ACTUALIZAR EMPLEADO</strong></h5>'
                                                                +'</div>'
                                                                +'<div class="modal-body">'
                                                                    +'<div class="row">'
                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>N° RUC:</strong>'
                                                                            +'<input type="text" value='+data[i].ruc +' id="ruc" name="ruc" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>Nombre:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].nombre +' id="nombreC" name="Nombre" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>Usuario:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].usuario +' id="UsuarioC" name="UsuarioC" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                          +'<div class="col-sm-12">'
                                                                            +'<strong>Email:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].email +' id="mailC" name="mailC" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>Telefono:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].telefono +' id="telefonoC" name="telefonoC" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                         +'<div class="col-sm-12">'
                                                                            +'<strong>Direccion:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].direccion +' id="direccionC" name="direccionC" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                         +'<div class="col-sm-12">'
                                                                            +'<strong>Contacto:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].contacto +' id="contactoC" name="contactoC" class="form-control input-sm"/>'
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
                            
                                    +' <a class="btn btn-danger btn-circle" href="'+pathEliminarCliente
                                    + '/' + data[i].id+ '"><i class="fa fa-trash-o fa-fw" title="ELIMINAR" aria-hidden="true"></i>'
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
    
    /*
     * 
     */
     $('#BuscaSubmenu').keyup(function () { 
        var m = $("#BuscaSubmenu").val();
        var path = $("#PathBuscaSubmenu").attr("data-path")+m;
        var pathEliminarSubmenu=$("#PathReqEliminarS").attr("data-path");
        var pathEditarSubmenu=$("#ActualizaSubmenu").attr("data-path");
      if ($(this).val().length !== 0) {
            $.ajax({
                type: 'post',
                url: path,
                beforeSend: function () {
                    $(".loading1").parent().append('<div class="Load"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Buscando...</div>');
                },
                success: function (data) {
                  
                    
                    var $req = $("#Submenus");

                    $("tbody").remove();
                    $("td").remove();
                    $req.append('<tbody>');
                    for (var i = 0; i < data.length; i++) {
                        
                        $req.append('<tr><td><small>' + [i + 1] + '</small></td>' + '<td><small>' + data[i].cidentidad + '</small></td>' + '<td><small>'+ data[i].nombre
                                + '</small></td>' + '<td><small>' + data[i].apellido + '</small></td>' + '<td><small>' + data[i].email
                                + '</small></td>' + '<td><small>' + data[i].telefono + '</small></td>' + '<td><small>' + data[i].direccion
                                + '</small></td>' 
                                +'<td>'
                                    +'<button type="button" id="'+data[i].id +'" class="btn btn-xs btn-success btn-circle" data-toggle="modal"'
                                    +'data-target="#'+data[i].cidentidad+'" data-whatever="@mdo"> <i class="fa fa-pencil" title="EDITAR" aria-hidden="true">'
                                    +'</i></button><small>Editar</small>'
                            //Aqui va el modal
                            +'<div class="modal" id="'+data[i].cidentidad+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">'
                                                  +'  <div class="modal-dialog modal-sm" role="document">'
                                                       +' <form id="Editar" method="POST" action="'+pathEditarEmpleado+'/'+data[i].id + '"> '                         
                                                           +' <div class="modal-content">'
                                                               +' <div class="modal-header btn-primary">'
                                                                   +' <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>'
                                                                   +' <h5 class="modal-title" id="exampleModalLabel" align="center"><strong> ACTUALIZAR EMPLEADO</strong></h5>'
                                                                +'</div>'
                                                                +'<div class="modal-body">'
                                                                    +'<div class="row">'
                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>N° cedula:</strong>'
                                                                            +'<input type="text" value='+data[i].cidentidad +' id="Cedula" name="Cedula" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>Nombre:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].nombre +' id="Nombre" name="Nombre" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>Apellido:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].apellido +' id="Apellido" name="Apellido" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                          +'<div class="col-sm-12">'
                                                                            +'<strong>Email:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].email +' id="Email" name="Email" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                        +'<div class="col-sm-12">'
                                                                            +'<strong>Telefono:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].telefono +' id="TelefonoE" name="TelefonoE" class="form-control input-sm"/>'
                                                                        +'</div>'
                                                                         +'<div class="col-sm-12">'
                                                                            +'<strong>Direccion:</strong>'
                                                                           
                                                                           +' <input type="text" value='+data[i].direccion +' id="DireccionE" name="DireccionE" class="form-control input-sm"/>'
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
                            
                                    +' <a class="btn btn-danger btn-circle" href="'+pathEliminarEmpleado
                                    + '/' + data[i].id+ '"><i class="fa fa-trash-o fa-fw" title="ELIMINAR" aria-hidden="true"></i>'
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