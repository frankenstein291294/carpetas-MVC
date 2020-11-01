<?php

if (isset($_GET['ruta'])) {

  $ruta1 = $_GET['ruta'];
  
  include './app/views/moduls/portfolio.moduls.php';

} else {

  include './app/views/moduls/portfolio.moduls.php';

}