<?php

class ControladorUsuarios
{


  public static function ctrIngresoUsuario()
  {

    if (isset($_POST['ingDocumento'])) {

      if (
        preg_match('/^[0-9]+$/', $_POST['ingDocumento']) &&
        preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingPassword'])
      ) {

        $tabla = 'usuarios';
        $item = 'documento';
        $valor = $_POST['ingDocumento'];

        $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

        // var_dump($respuesta);

        //ENCRIPTAR

        if (
          $respuesta['documento'] == $_POST['ingDocumento'] &&
          $respuesta['password'] == $_POST['ingPassword']
        ) {

          $_SESSION['iniciarSesion'] = 'ok';
          $_SESSION['id'] = $respuesta['id_usuario'];
          $_SESSION['documento'] = $respuesta['documento'];
          $_SESSION['nombre_completo'] = $respuesta['nombre_completo'];
          $_SESSION['correo'] = $respuesta['correo'];


          echo '<script>
                                window.location = "inicio";
                            </script>';
        } else {

          echo '
              <br>
              <div class="alert alert-danger">Error al ingresar, vuelve a intentarlo.
              </div>    
          ';
        }
      }
    }
  }

  public static function ctrCrearUsuario()
  {

    if (isset($_POST['nuevoNombreCompleto'])) {

      if (
        preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nuevoNombreCompleto']) &&
        preg_match('/^[0-9]+$/', $_POST['nuevoDocumento']) &&
        preg_match('/^[a-zA-Z0-9]+$/', $_POST['nuevoPassword'])
      ) {

        $tabla = 'usuarios';
        $encriptar = crypt($_POST['nuevoPassword'], '$2a$07$usesomesillystringforsalt$');

        $datos = array(
          'nombre_completo' => $_POST['nuevoNombreCompleto'],
          'documento' => $_POST['nuevoDocumento'],
          'password' => $encriptar,
          'correo' => $_POST['nuevoPassword'],
          'perfil' => 'usuario'
        );

        
        $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
        


        if ($respuesta == "ok") {
          echo '  <script>
                    swal({
                        type: "success",
                        title: "¡El usuario ha sido guardado correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                    }).then( (result)=>{
                        if(result.value){
                            window.location = "inicio";
                        }
                    });
                </script>  ';
        }
      }
    }
  }

  public static function olvidePassword(){

    if( isset($_POST['olvideCorreo']) ){

      echo '  <script>
                    swal({
                        type: "success",
                        title: "¡Se envio un mensaje a su correo!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                    }).then( (result)=>{
                        if(result.value){
                            window.location = "inicio";
                        }
                    });
                </script>  ';

    }

  }

}
