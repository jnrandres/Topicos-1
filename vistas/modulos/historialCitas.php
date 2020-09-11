<?php

if (isset($_SESSION['iniciarSesion'])  && $_SESSION['iniciarSesion'] == 'ok') {
  
}else{
  echo '<script>
  window.location = "registro";
  </script>';
  return;
}

?>

<!-- Main content -->
<section class="content">

  <div class="card">
    <div class="card-header">
      <h2 class="text-primary text-center mb-4">Historial de citas</h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body ">
      <table class="table table-bordered table-hover dataTable dtr-inline collapsed tablas">
        <thead>
          <tr>
            <th>Cita</th>
            <th>Especialidad</th>
            <th>Fecha</th>
            <th>Medico</th>
          </tr>
        </thead>
        <tbody>

          <?php

          $item = null;
          $valor = null;
          $citas = ControladorCitas::ctrMostrarCitas($item, $valor);

          foreach ($citas as $key => $value) {

            $medico = ModeloMedicos::mdlMostrarMedicos('medicos','id_medico',$value['id_medico']);
            
            echo '
              <tr>
                <td>' . ($key + 1) . '</td>
                <td>' . $value['especialidad'] . '</td>
                <td>' . $value['fecha'] . '</td>
                <td>' . $medico[0]['nombre_completo'] . '</td>
              </tr>
              ';
          }

          ?>

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


  <!-- SECCION DE FRENA LA CURVA -->

  <div class="container-fluid mt-4 mb-4">
    <div class="row">
      <div class="col-8">
        <img src="vistas/img/frenaCurva.svg" class="mx-auto d-block" alt="">
      </div>
      <div class="col-4">
        <img src="vistas/img/covid.svg" class="mx-auto d-block" alt="">
      </div>
    </div>
  </div>

  <!-- CENTRAL TELEFONICA -->
  <div class="card  central-telefonica  mt-4 mb-4">
    <div class="card-header border-0 d-flex justify-content-center">
      <h3 class="card-title "><i class="fas fa-phone-volume"></i> Central telefonica</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body fa-3x d-flex justify-content-center">
      +51 987654321
    </div>
  </div>



  <!-- NUESTRO CONVENIOS -->
  <div class="card convenios mt-4">
    <div class="card-header border-0">
      <h3 class="card-title "><i class="fas fa-hands-helping"></i> Nuestros convenios</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body fa-3x">
      <div class="row">
        <div class="col-6">
          <img src="vistas/img/convenios/rimac.svg" class="mx-auto d-block" alt="">
        </div>
        <div class="col-6">
          <img src="vistas/img/convenios/pacifico.svg" class="mx-auto d-block" alt="">
        </div>
      </div>
    </div>
  </div>



  </div>
  <!-- /.card -->

</section>
<!-- /.content -->