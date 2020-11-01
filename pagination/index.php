<?php

require './app/models/rutas.php';
require './app/controllers/portfolio.controller.php';
require './app/models/portfolio.model.php';
require './app/views/moduls/headers.php';
require './app/views/moduls/footer.php';

//---Ruta
$route = Rutas::getRuta();

//---Intanciamos clase para cabeceras
$header = new Headers($route);
$footer = new Footer($route);

$header->header();
$header->navigation();

include './app/views/portafolio.view.php';

$footer->scripts();
$footer->postScript();