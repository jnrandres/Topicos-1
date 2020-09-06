<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">


    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch mt-3">
      <div class="card bg-light">
        <div class="card-header text-muted border-bottom-0">
          Resumen de cita medica
        </div>
        <div class="card-body pt-0">
          <div class="row">

            <div class="col-5 text-center">
              <img src="vistas/img/pruebas/user.jpg" alt="" class="img-circle img-fluid">
            </div>

            <div class="col-7">
              <p class="text-muted text-sm"><b>APELLIDOS Y NOMBRES: </b> <?= $_SESSION['nombre_completo'] ?> </p>
              <p class="text-muted text-sm"><b>DNI: </b> <?= $_SESSION['documento'] ?> </p>
            </div>

          </div>
          <hr>
          <div class="row">

            <div class="col-12 pl-3">
              <p class="text-muted text-sm"><b>ESPECIALIDAD: </b> <?= $_GET['especialidad'] ?> </p>
              <p class="text-muted text-sm"><b>FECHA: </b> <?= $_GET['fecha'] ?> </p>
              <p class="text-muted text-sm"><b>ID MEDICO: </b> <?= $_GET['id_medico'] ?> </p>
            </div>

          </div>

        </div>
        <!-- <div class="card-footer">
          <div class="text-right">
            <a href="#" class="btn btn-sm bg-teal">
              <i class="fas fa-download"></i> Descargar
            </a>
          </div>
        </div> -->
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


    <!-- FIN -->
  </div>
  <!-- /.card-body -->

  </div>
  <!-- /.card -->

</section>
<!-- /.content -->