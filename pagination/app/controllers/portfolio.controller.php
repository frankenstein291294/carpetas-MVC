<?php

class ControllerPortfolio {

  public static function ctrPortfolio ($table, $init, $max, $mode) {

    $response =  new ModelPortfolio();
    
    return $response->mdlPortfolio($table, $init, $max, $mode);

  }

}