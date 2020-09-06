<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Clínica Virtual </b>CV</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Contacto</p>

      <form method="post">

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nombre" name="contactoNombre" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="contactoEmail" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
    
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Celular" name="contactoCelular" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Mensaje" name="contactoMensaje" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-sticky-note"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <button type="submit" class="btn btn-primary btn-block mb-2">Enviar</button>
          </div>
          <!-- /.col -->
        </div>

        <?php
        
        $contacto = new ControladorContacto();
        $contacto -> ctrNuevoContacto();
        
        ?>
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>