<?php

require_once '../controladores/controladorMedicos.php';
require_once '../modelos/modeloMedicos.php';

class AjaxBuscaMedico {

    public $especialidad;

    public function ajaxBuscarMedicos (){
        $item = 'especialidad';
        $valor = $this->especialidad;
        $respuesta = ControladorMedicos::ctrMostrarMedicos($item,$valor);
        echo json_encode($respuesta);
    }

}

if( isset($_POST['especialidad_1']) ){

    $medicos = new AjaxBuscaMedico();
    $medicos -> especialidad = $_POST['especialidad_1'];
    $medicos -> ajaxBuscarMedicos();
}