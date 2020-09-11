<?php

class ModeloDiagnostico {

    public static function mdlIngresarDiagnostico($tabla, $datos){

        $sql = "INSERT INTO $tabla (documento_usuario, sintomas, examenes, operaciones) VALUES (:documento_usuario, :sintomas, :examenes, :operaciones) ";

        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(":documento_usuario", $datos['documento_usuario'], PDO::PARAM_STR);
        $stmt->bindParam(":sintomas", $datos['sintomas'], PDO::PARAM_STR);
        $stmt->bindParam(":examenes", $datos['examenes'], PDO::PARAM_STR);
        $stmt->bindParam(":operaciones", $datos['operaciones'], PDO::PARAM_STR);

        if( $stmt->execute() ){
            $stmt = null;
            return "ok";
        }else{
            $stmt = null;
            return "error";
        } 


    }

    public static function mdlMostrarHistorial ($tabla, $item, $valor){
        if( $item != null ){

            $sql = "SELECT * FROM $tabla WHERE $item = :$item ";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam( ":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(); // Retorna solo una linea de la tabla

        }else{

            $sql = "SELECT * FROM $tabla ";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(); // Retorna todas las filas

        }
    }
}