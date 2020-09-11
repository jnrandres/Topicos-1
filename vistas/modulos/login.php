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
      <p class="login-box-msg">Bienvenido</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nro. Documento" name="ingDocumento" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-passport"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>

        <?php
        
        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        ?>

      </form>

      <p class="mb-1 mt-3">
        <a href="olvidePassword">Olvidé mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="registro" class="text-center">Crear cuenta</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->