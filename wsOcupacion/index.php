<?php
    include_once 'wsOcupacion.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');

    $ws = new wsOcupacion();


    if(isset($_GET['municipio'])){
        $municipio = $_GET['municipio'];
        $ws->getByMunicipio($municipio);
    }else{
          $ws->getAll();
        }

?>
