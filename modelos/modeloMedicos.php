<?php

require_once 'conexion.php';

class ModeloMedicos {


    public static function mdlMostrarMedicos ($tabla, $item, $valor){

        if( $item != null ){

            $sql = "SELECT * FROM $tabla WHERE $item = :$item ";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam( ":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(); // Retorna solo una linea de la tabla

        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id ASC");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }

    }


}