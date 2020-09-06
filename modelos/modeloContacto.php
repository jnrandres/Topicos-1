<?php 

require_once 'conexion.php';

class ModeloContacto {

    public static function mdlNuevoContacto($tabla, $datos){

        $sql = "INSERT INTO $tabla (nombre_completo, email, celular, mensaje) VALUES (:nombre_completo, :email, :celular, :mensaje)";

        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(":nombre_completo", $datos['nombre_completo'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(":celular", $datos['celular'], PDO::PARAM_STR);
        $stmt->bindParam(":mensaje", $datos['mensaje'], PDO::PARAM_STR);

        if( $stmt->execute() ){
            $stmt = null;
            return "ok";
        }else{
            $stmt = null;
            return "error";
        } 



    }
}