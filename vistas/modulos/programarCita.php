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
  <section class="content-citas">

    <div class="row mt-4">
      <div class="col-12">
        <div class="titulo_citas">
          Programación de Citas
        </div>
      </div>
    </div>
    <form action="#" method="post">
      <div class="row mt-5">
        <div class="col-12 mb-4">
          <div class="form-citas">
            <select name="nuevaCitaEspecialidad" class="select_citas" id="select_especialidad" required>
              <option value="" hidden selected>Especialidad</option>
              <option value="cardiologia">Cardiología</option>
              <option value="gastroenterologia">Gastroenterología</option>
              <option value="ginecologia">Ginecología</option>
              <option value="odontologia">Odontología</option>
              <option value="oftalmologia">Oftalmología</option>
              <option value="oncologia">Oncología</option>
              <option value="pediatria">Pediatría</option>
              <option value="traumatologia">Traumatología</option>
              <option value="otorrinolaringologia">Otorrinolaringología</option>
            </select>
          </div>
        </div>

        <div class="col-12 mb-4">
          <div class="form-citas">
            <select name="nuevaCitaTurno" class="select_citas" id="select_turno" required>
              <option value="" hidden selected>Turno</option>
              <option value="m">Mañana</option>
              <option value="t">Tarde</option>
              <option value="n">Noche</option>
            </select>
          </div>
        </div>

        <div class="col-12 mb-4">
          <div class="form-citas">
            <label for="">Fecha a reservar:</label>
            <input type="date" name="nuevaCitaFecha" class="select_citas" id="fecha_revisar" required>
          </div>
        </div>

        <div class="col-12 mb-4">
          <div class="form-citas">
            <select name="nuevaCitaMedico" class="select_citas" id="select_modalidad" required>
              <option value="" hidden selected>Médicos disponibles</option>
            </select>
          </div>
        </div>
      </div>

      <input type="hidden" name="nuevaCitaIdUsuario" value="<?php echo $_SESSION['id']; ?>">
      <input type="hidden" name="nombreMedico" id="nombreMedico" value="">

      <div class="btn-azul mt-4">
        <button>Programar cita</button>
      </div>

      <?php

      $nuevaCita = new ControladorCitas();
      $nuevaCita->registraCita();

      ?>
    </form>

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