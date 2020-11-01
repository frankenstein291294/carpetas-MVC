<?php


Class Headers  {

  //---Definimos la propiedad para la ruta
  private $route;

  //---Creamos nuestro constructor
  function __construct($route) {
    $this->route = $route;
  }

  public function header() {

    echo '<!DOCTYPE html>
          <html lang="en">
          <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pagination</title>
            <meta name="description" content="" />
            <meta name="keywords" content="" />

            <link rel="stylesheet" href="'.$this->route.'public/css/style.css" />
            <link rel="stylesheet" href="'.$this->route.'public/css/icomoon.css" />
          </head>
          <body>';

  }

  public function navigation() {

    echo '<header>
            <div class="container">
              <div class="logo">
                <p><a href="'.$this->route.'"><img src="'.$this->route.'public/img/logo.png" alt="logo"><span>Portfolio</span></a></p>
              </div>
              <div class="search">
                <form action="">
                  <i class="icon-search"></i>
                  <input type="text" planceholder="search">
                </form>
              </div>
              <nav>
                <i class="icon-menu"></i>
              </nav>
            </div>
          </header>';

  }

}