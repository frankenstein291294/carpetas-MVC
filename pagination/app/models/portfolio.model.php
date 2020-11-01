<?php
require './app/models/conexion.php';

class ModelPortfolio {

  public static function mdlPortfolio ($table, $init, $max, $mode) {

    if ($max != null) {

      $statement = Conexion::conectar()->prepare("SELECT * FROM $table ORDER BY id $mode LIMIT $init, $max");

    } else {

      $statement = Conexion::conectar()->prepare("SELECT * FROM $table");

    }


    $statement->execute();

    return $statement->fetchAll();
    
    $statement = null;
    
    $statement->close();

  }

}