  <!-- Main content -->
  <section class="content-citas">

    <div class="row mt-4">
      <div class="col-12">
        <div class="titulo_citas">
          Diagnóstico
        </div>
      </div>
    </div>
    <form method="post">
      <div class="row mt-5">
        <div class="col-12 mb-4">
          <div class="form-citas">
            <input type="text" name="diagnosticoDocumento" placeholder="Documento de usuario" id="codi_usuario" required>
          </div>
        </div>

        <div class="col-12 mb-4">
          <div class="form-citas">
            <p style="color: #212529">Síntomas:<p>
                <textarea name="diagnosticoSintomas" id="sintomas" cols="30" rows="5" required></textarea>
          </div>
        </div>

        <div class="col-12 mb-4">
          <div class="form-citas">
            <p style="color: #212529">Exámenes:<p>
                <textarea name="diagnosticoExamenes" id="examenes" cols="30" rows="5" required></textarea>
          </div>
        </div>

        <div class="col-12 mb-4">
          <div class="form-citas">
            <p style="color: #212529">Operaciones:<p>
                <textarea name="diagnosticoOperaciones" id="operaciones" cols="30" rows="5" required></textarea>
          </div>
        </div>
        <div class="col-12 mb-4">

          <div class="btn-azul mt-4">
            <button>Enviar</button>
          </div>
        </div>
      </div>

      <?php
      $diagnostico = new ControladorDiagnostico();
      $diagnostico->nuevoDiagnostico();
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