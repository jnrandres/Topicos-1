<?php

class Conexion
{

  static public function conectar()
  {

    $link = new PDO(
      "mysql:host=localhost;dbname=clinica;port=3306",
      "root",
      ""
    );

    $link->exec("SET NAMES UTF8");
    return $link;
  }
}
