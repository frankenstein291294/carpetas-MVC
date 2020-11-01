<?php

$table = 'portfolio';
$mode = 'DESC';

if (isset($ruta1)) { //---Ruta paginacion

  $init = ($ruta1 - 1) * 6;
  $max = 6;

} else  {

  $ruta1 = 1;
  $init = 0;
  $max = 6;

}

echo '<section class="portfolio">
        <div class="container">
          <div class="row">';

          $data = new ControllerPortfolio();

          $portfolio = $data->ctrPortfolio($table, $init, $max, $mode);

          if (is_array($portfolio) || is_object($portfolio)) {

            for ($i = 0; $i < count($portfolio); $i ++) {

              echo '<div class="col">
                      <div class="container-portfolio">
                        <a href=""><img src="./public/img/portfolio/'.$portfolio[$i]['img'].'" alt=""></a>
                        <h2><small><a href="">'.$portfolio[$i]['title'].'</a></small></h2>
                        <div class="button">
                          <a href="" class="details">Detalles</a>
                        </div>
                      </div>
                    </div>';
              
            }

          } else {

            echo '<center>
                  <h1>Error</h1>
                  <p>Talves agregó manualmente la url</p>
                  <a href="javascript:history.back()">Regresar</a>
                </center>';

          }

          echo '</div>
        </div>
      </section>';

      if (is_array($portfolio) || is_object($portfolio)) {

        echo '<section class="pagination">
          <center>
            <ul>';

              $cantPortfolio = $data->ctrPortfolio($table, null, null, null);
              
              $pages = ceil(count($cantPortfolio) / 6);

              if ($ruta1 == 1) echo '<li><a href="'.$route.'?ruta='.($ruta1 - 1).'" class="no-link"><i class="icon-circle-left"></i></a></li>';
              else echo '<li><a href="'.$route.'?ruta='.($ruta1 - 1).'"><i class="icon-circle-left"></i></a></li>';

              for ($i = 1; $i <= $pages; $i ++) {

                if ($ruta1 == $i) echo '<li><a href="'.$route.'?ruta='.$i.'" class="active">'.$i.'</a></li>';
                else echo '<li><a href="'.$route.'?ruta='.$i.'">'.$i.'</a></li>';

              }
            
              if ($ruta1 == $pages) echo '<li><a href="'.$route.'?ruta='.($ruta1 + 1).'" class="no-link"><i class="icon-circle-right"></i></a></li>';
              else echo '<li><a href="'.$route.'?ruta='.($ruta1 + 1).'"><i class="icon-circle-right"></i></a></li>';

            echo '</ul>
          </center>
        </section>';

      }