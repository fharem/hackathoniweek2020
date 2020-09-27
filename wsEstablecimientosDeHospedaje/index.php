<?php
    include_once 'wsEstablecimientosHospedaje.php';

//error_reporting(E_ALL);
//ini_set('display_errors', '1');

    $ws = new wsEstablecimientosHospedaje();

$tipo=$_GET['tipo'];
$municipio=$_GET['municipio'];

if(isset($tipo)){
  if($tipo == "habitaciones"){
    if(isset($municipio)){
      $ws->getByMunicipioHabitaciones($municipio);
    }else{
      $ws->getAllHabitaciones();
    }
}else if($tipo == "establecimientos"){
  if(isset($municipio)){
    $ws->getByMunicipioEstablecimientos($municipio);
  }else{
    $ws->getAllEstablecimientos();
  }
}
else{
    echo json_encode(array('mensaje' => 'No existe ese tipo'));
  }
}else{
  echo json_encode(array('mensaje' => 'No hay elementos, se requiere el par&aacute;metro \'tipo\' '));
}

?>
