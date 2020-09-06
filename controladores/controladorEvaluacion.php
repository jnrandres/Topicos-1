<?php 

class ControladorEvaluacion {

    public static function registrarEvaluacion(){
        if( isset($_POST['fecha']) && $_POST['fecha'] != "" ){

            $sintomas = "";

            if( isset($_POST['c_fiebre']) ){
                $sintomas .= "Fiebre*";
            }

            if( isset($_POST['c_dolorCa']) ){
                $sintomas .= "Dolor de cabez*";
            }

            if( isset($_POST['c_tos']) ){
                $sintomas .= "Tos*";
            }

            if( isset($_POST['c_dolorGarganta']) ){
                $sintomas .= "Dolor de garganta*";
            }

            if( isset($_POST['c_nasal']) ){
                $sintomas .= "Congestion nasal*";
            }

            if( isset($_POST['c_diarrea']) ){
                $sintomas .= "Diarrea*";
            }

            if( isset($_POST['c_Flema']) ){
                $sintomas .= "Flema*";
            }

            if( isset($_POST['c_apetito']) ){
                $sintomas .= "Falta de apetito*";
            }

            $enfermedades = "";

            if( isset($_POST['c_diabetis']) ){
                $enfermedades .= "Diabetis*";
            }

            if( isset($_POST['c_hipertension']) ){
                $enfermedades .= "Hipertension*";
            }

            if( isset($_POST['c_asma']) ){
                $enfermedades .= "Asma*";
            }

            if( isset($_POST['c_tbc']) ){
                $enfermedades .= "TBC*";
            }

            if( isset($_POST['c_hepetatis']) ){
                $enfermedades .= "Hepatitis*";
            }

            if( isset($_POST['c_vih']) ){
                $enfermedades .= "VIH*";
            }

            $tabla = "evaluacion_covid";
            $datos = array ('id_usuario' => $_POST['id_usuario'],
                            'sintomas' => $sintomas,
                            'fecha_inicio' => $_POST['fecha'],
                            'enfermedades' => $enfermedades,
                            'otros' => $_POST['otros']);

            $respuesta = ModeloEvaluacion::mdlRegistrarEvaluacion($tabla,$datos);

            if( $respuesta == "ok" ){
                echo '  <script>
                        swal({
                            type: "success",
                            title: "¡Se envio la evaluacion!",
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