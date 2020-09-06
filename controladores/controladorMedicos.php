<?php

class ControladorMedicos {

    public static function ctrMostrarMedicos($item,$valor){
        $tabla = "medicos";
		$respuesta = ModeloMedicos::mdlMostrarMedicos($tabla, $item, $valor);

		return $respuesta;
    }
}