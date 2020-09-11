<?php

if (isset($_SESSION['iniciarSesion'])  && $_SESSION['iniciarSesion'] == 'ok') {
} else {
  echo '<script>

  window.location = "registro";

  </script>';

  return;
}

?>

<!-- Main content -->
<section class="content-citas">


  <!-- <div class="row mt-2">
    <div class="col-12 mb-4">
      <div class="btn-azul mt-4">
        <a href="programarCita">Programar citas</a>
      </div>
    </div>
    <div class="col-12 mb-4">
      <div class="btn-azul mt-2">
        <a href="historialCitas">Historial de citas</a>
      </div>
    </div>

  </div> -->

  <div class="container-fluid">
  <div class="list-group m-4">
    <a href="programarCita" class="list-group-item list-group-item-action list-group-item-primary text-center">Programar citas</a>
    <a href="historialCitas" class="list-group-item list-group-item-action list-group-item-primary text-center">Historial de citas</a>
  </div>
  </div>
  

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
  <div class="card  central-telefonica mt-4 mb-4">
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



</section>
<!-- /.content -->