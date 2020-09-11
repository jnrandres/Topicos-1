<?php

if (isset($_SESSION['iniciarSesion'])  && $_SESSION['iniciarSesion'] == 'ok') {
  echo '<script>
  window.location = "inicio";
  </script>';
  return;
}

?>

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Clínica Virtual </b>CV</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">¿Olvidaste tu contraseña? Aquí puede recuperar fácilmente una nueva contraseña.</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Correo electrónico" name="olvideCorreo" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button class="btn btn-primary btn-block">Enviar</button>
          </div>
          <!-- /.col -->
        </div>

        <?php
        
        $olvidePassword = new ControladorUsuarios();
        $olvidePassword -> olvidePassword();
        
        ?>

      </form>

      <p class="mt-3 mb-1">
        <a href="login">Ingresar</a>
      </p>
      <p class="mb-0">
        <a href="registro" class="text-center">Crear cuenta</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->