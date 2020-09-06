<?php

require_once 'conexion.php';

class ModeloUsuarios {

    public static function  mdlMostrarUsuarios ($tabla, $item, $valor){

        if( $item != null ){

            $sql = "SELECT * FROM $tabla WHERE $item = :$item ";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam( ":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(); // Retorna solo una linea de la tabla

        }else{

            $sql = "SELECT * FROM $tabla ";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(); // Retorna todas las filas

        }

    }

    public static function mdlIngresarUsuario ($tabla, $datos){

        $sql = "INSERT INTO $tabla (nombre_completo, documento, password, correo, perfil) VALUES (:nombre_completo, :documento, :password, :correo, :perfil)";

        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(":nombre_completo", $datos['nombre_completo'], PDO::PARAM_STR);
        $stmt->bindParam(":documento", $datos['documento'], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos['password'], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datos['correo'], PDO::PARAM_STR);
        $stmt->bindParam(":perfil", $datos['perfil'], PDO::PARAM_STR);

        if( $stmt->execute() ){
            $stmt = null;
            return "ok";
        }else{
            $stmt = null;
            return "error";
        } 

    }


}