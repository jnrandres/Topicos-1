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

                    $("#perfiles").append('<div class="row d-flex align-items-stretch "><div class="col-12  d-flex align-items-stretch"><div class="card bg-light"><div class="card-header text-muted border-bottom-0">' + respuesta[i]['especialidad'] + '</div><div class="card-body pt-0"><div class="row"><div class="col-7"><h2 class="lead"><b>' + respuesta[i]['nombre_completo'] + '</b></h2><p class="text-muted text-sm"><b>' + respuesta[i]['universidad'] + '</b> </p><ul class="ml-4 mb-0 fa-ul text-muted"><li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Codigo:'  + respuesta[i]['codigo'] + '</li></ul></div><div class="col-5 text-center"><img src="vistas/img/pruebas/doctor.svg" alt="" class="img-circle img-fluid w-100"></div></div></div></div></div></div>');
                }

                


            }
        });
    });

});