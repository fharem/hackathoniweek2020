<?php
    include_once 'wsZonas.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');

    $api = new wsZonas();


    if(isset($_GET['entidad'])){
        $entidad = $_GET['entidad'];
        $api->getByEntidad($entidad);
    }else{
          $api->getAll();
          $api->error('La entidad es incorrecta');
        }



?>
