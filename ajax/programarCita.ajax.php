<?php

require_once '../controladores/controladorMedicos.php';
require_once '../modelos/modeloMedicos.php';

class AjaxProgramaCita {

    public $especialidad;

    public function ajaxTraerMedicos (){
        $item = 'especialidad';
        $valor = $this->especialidad;

        $respuesta = ControladorMedicos::ctrMostrarMedicos($item,$valor);

        
        echo json_encode($respuesta);
    }

}

if( isset($_POST['especialidad']) ){

    $medicos = new AjaxProgramaCita();
    $medicos -> especialidad = $_POST['especialidad'];
    $medicos -> ajaxTraerMedicos();
}