/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).on('ready', function () {
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
                    $menus.html('<option value="" selected>Seleccione Menu</option>');
                    for (var i = 0; i < data.length; i++) {
                        $menus.append('<option value="' + data[i].menuid + '">' + data[i].MeNombre + '</option>');
                    }
                    $(".Load").remove();
                }
            });
        }
        ;
    });
       $('#ModuloAS').change(function () {
        var m = $("#ModuloAS").val();
        var path = $("#PathMod").attr("data-path") + m;
        if ($(this).val().length !== 0) {
            $.ajax({
                type: 'get',
                url: path,
                beforeSend: function () {
                    $("#MenuAS option").remove();
                    $(".loading").parent().append('<div class="Load"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Buscando...</div>');
                },
                success: function (data) {
                    var $menus = $("#MenuAS");
                    $menus.html('<option value="" selected>Seleccione Menu</option>');
                    for (var i = 0; i < data.length; i++) {
                        $menus.append('<option value="' + data[i].menuid + '">' + data[i].MeNombre + '</option>');
                    }
                    $(".Load").remove();
                }
            });
        }
        ;
    });
});