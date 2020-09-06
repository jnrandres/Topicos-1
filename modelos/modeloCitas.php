<?php

require_once 'conexion.php';

class ModeloCitas {

    public static function mdlRegistraCita ($tabla, $datos){

        $sql = "INSERT INTO $tabla (id_usuario, especialidad, fecha, id_medico) VALUES (:id_usuario, :especialidad, :fecha, :id_medico)";

        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(":id_usuario", $datos['id_usuario'], PDO::PARAM_STR);
        $stmt->bindParam(":especialidad", $datos['especialidad'], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $datos['fecha'], PDO::PARAM_STR);
        $stmt->bindParam(":id_medico", $datos['id_medico'], PDO::PARAM_STR);

        if( $stmt->execute() ){
            $stmt = null;
            return "ok";
        }else{
            $stmt = null;
            return "error";
        } 

    }

    public static function mdlMostrarCitas($tabla, $item, $valor){
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