<?php

class ControladorCitas {

    public static function registraCita(){
        if( isset($_POST['nuevaCitaEspecialidad']) ){

            if( preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nuevaCitaEspecialidad']) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nuevaCitaTurno']) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nuevaCitaMedico'])  ){

                $tabla = 'programar_cita';
                $datos = array (    'id_usuario' => $_POST['nuevaCitaIdUsuario'],
                                    'especialidad' =>  $_POST['nuevaCitaEspecialidad'],
                                    'fecha' => $_POST['nuevaCitaFecha'],
                                    'id_medico' => $_POST['nuevaCitaMedico']);

                $respuesta = ModeloCitas::mdlRegistraCita ($tabla, $datos);

                if( $respuesta == "ok" ){
                    echo '  <script>
                            swal({
                                type: "success",
                                title: "¡La cita ha sido guardado correctamente!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar",
                                closeOnConfirm: false
                            }).then( (result)=>{
                                if(result.value){
                                    window.location = "index.php?ruta=citaCompleta&especialidad='.$_POST['nuevaCitaEspecialidad'].'&fecha='.$_POST['nuevaCitaFecha'].'&id_medico='.$_POST['nuevaCitaMedico'].'";
                                }
                            });
                        </script>  ';
                }

            }

        }
    }

    public static function ctrMostrarCitas($item,$valor){
        $tabla = 'programar_cita';
        $respuesta = ModeloCitas::mdlMostrarCitas($tabla, $item, $valor);

		return $respuesta;
    }
}