<?php
require_once 'conexion.php';

class ModeloEvaluacion {


    public static function mdlRegistrarEvaluacion($tabla,$datos){

        $sql = "INSERT INTO $tabla (id_usuario, sintomas, fecha_inicio, enfermedades, otros) VALUES (:id_usuario, :sintomas, :fecha_inicio, :enfermedades, :otros) ";

        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(":id_usuario", $datos['id_usuario'], PDO::PARAM_STR);
        $stmt->bindParam(":sintomas", $datos['sintomas'], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_inicio", $datos['fecha_inicio'], PDO::PARAM_STR);
        $stmt->bindParam(":enfermedades", $datos['enfermedades'], PDO::PARAM_STR);
        $stmt->bindParam(":otros", $datos['otros'], PDO::PARAM_STR);

        if( $stmt->execute() ){
            $stmt = null;
            return "ok";
        }else{
            $stmt = null;
            return "error";
        } 


    }
}