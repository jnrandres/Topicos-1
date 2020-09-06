$(document).ready(function() {

    $('#select_modalidad_1').change(function(e) {
        e.preventDefault();

        var datos = new FormData();
        datos.append("especialidad_1", $(this).val())

        $.ajax({
            type: "post",
            url: "ajax/buscarMEdico.ajax.php",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respuesta) {

                $('#perfiles').empty();
                var i = 0;
                for (; i < respuesta.length; i++) {

                    $("#perfiles").append('<div class="perfil_medico"><div class="i_l_b derecha" style="margin-right: 10px;"><img src="vistas/img/pruebas/doctor.svg" alt="User Avatar" class="img-size-50 img-circle"></div><div class="i_l_b izquierda" ><div ><p class="nombre_doc">' + respuesta[i]['nombre_completo'] + '</p></div><div><div class="i_l_b" style="margin-right: 30px;">' + respuesta[i]['especialidad'] + '</div><div class="i_l_b"><p style="color: #0D57E9">' + respuesta[i]['id_medico'] + '<p></div></div><div><div class=""><p style="color: #0D57E9">' + respuesta[i]['universidad'] + '<p></div></div></div></div>');
                }



            }
        });
    });

});