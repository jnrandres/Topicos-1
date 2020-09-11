<?php

if (isset($_SESSION['iniciarSesion'])  && $_SESSION['iniciarSesion'] == 'ok') {
  echo '<script>
  window.location = "inicio";
  </script>';
  return;
}

?>

<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Clínica Virtual </b>CV</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registro</p>

      <form action="" method="post">

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nombre completo" name="nuevoNombreCompleto" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nro. Documento" name="nuevoDocumento" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-passport"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Correo electrónico" name="nuevoCorreo" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="nuevoPassword" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-8">
            <button type="submit" class="btn btn-primary btn-block mb-2">Registrarme</button>
          </div>
          <!-- /.col -->
        </div>

        <?php
        
        $crearUsuario = new ControladorUsuarios();
        $crearUsuario -> ctrCrearUsuario();
        
        ?>

      </form>


      <a href="login" class="text-center mt-1">¡Ya tengo una cuenta!</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->