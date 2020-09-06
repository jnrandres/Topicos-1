<?php

class ControladorContacto {

    public static function ctrNuevoContacto (){

        if( isset($_POST['contactoNombre']) ){

            if (
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['contactoNombre']) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['contactoMensaje']) &&
                preg_match('/^[0-9]+$/', $_POST['contactoCelular'])
              ) {

                $tabla = 'contacto';
                $datos = array ('nombre_completo' => $_POST['contactoNombre'],
                                'email' => $_POST['contactoEmail'],
                                'celular' => $_POST['contactoCelular'],
                                'mensaje' => $_POST['contactoMensaje']);


                $respuesta = ModeloContacto::mdlNuevoContacto($tabla, $datos);

                if( $respuesta == "ok" ){
                    echo '  <script>
                            swal({
                                type: "success",
                                title: "¡Mensaje enviado correctamente!",
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

}