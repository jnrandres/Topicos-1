$(document).ready(function() {

    $('#select_especialidad').change(function(e) {
        e.preventDefault();

        var datos = new FormData();
        datos.append("especialidad", $(this).val())

        $.ajax({
            type: "post",
            url: "ajax/programarCita.ajax.php",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respuesta) {

                $('#select_modalidad').empty();
                $('#select_modalidad').prepend(' <option value="" hidden selected>Médicos disponibles</option>');
                var i = 0;
                for (; i < respuesta.length; i++) {
                    $('#select_modalidad').prepend("<option value='" + respuesta[i]['id_medico'] + "' >" + respuesta[i]['nombre_completo'] + "</option>");
                }

            }
        });
    });

});