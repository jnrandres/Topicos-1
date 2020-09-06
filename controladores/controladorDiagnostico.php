<?php

class ControladorDiagnostico
{

    public static function nuevoDiagnostico()
    {


        if (isset($_POST['diagnosticoDocumento'])) {

            if (
                preg_match('/^[0-9]+$/', $_POST['diagnosticoDocumento']) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['diagnosticoSintomas']) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['diagnosticoExamenes']) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['diagnosticoOperaciones'])
            ) {
                $tabla = 'historial_medico';

                $datos = array(
                    'documento_usuario' => $_POST['diagnosticoDocumento'],
                    'sintomas' => $_POST['diagnosticoSintomas'],
                    'examenes' => $_POST['diagnosticoExamenes'],
                    'operaciones' => $_POST['diagnosticoOperaciones']
                );

                $respuesta = ModeloDiagnostico::mdlIngresarDiagnostico($tabla, $datos);

                if ($respuesta == "ok") {
                    echo '  <script>
                            swal({
                                type: "success",
                                title: "¡Dignostico ha sido guardado correctamente!",
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

    public static function ctrMostrarDiagnostico ($item, $valor){
        $tabla = "historial_medico";
        $respuesta = ModeloDiagnostico::mdlMostrarHistorial($tabla, $item, $valor);
        return $respuesta;
    }
}
