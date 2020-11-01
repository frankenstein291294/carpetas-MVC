<?php

class Footer {

  private $route;

  function __construct($route) {
    
    $this->route = $route;

  }

  public function scripts () {

    echo '<script src="'.$this->route.'public/js/script.js"></script>';

  }

  public function postScript () {

    echo '</body>
      </html>';

  }

}