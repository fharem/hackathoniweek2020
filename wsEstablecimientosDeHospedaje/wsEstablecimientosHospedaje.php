<?php

include_once 'establecimiento.php';
include_once 'habitacion.php';

class wsEstablecimientosHospedaje{

    function getAllEstablecimientos(){
        $establecimiento = new Establecimiento();
        $establecimientos = array();
        $establecimientos["registros"] = array();
        $res = $establecimiento->obtenerEstablecimientos();

        if($res->rowCount()>0){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
             $registros=array(
                  "Municipio" => $row['Municipio'],
                  "Region" => $row['Region'],
                  "Establecimientos" => $row['Establecimientos']
              );
                array_push($establecimientos["registros"],$registros);
            }
            $this->printJSON($establecimientos);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }

    function getByMunicipioEstablecimientos($municipio){
      $establecimiento = new Establecimiento();
      $establecimientos = array();
      $establecimientos["registros"] = array();
      $res = $establecimiento->obtenerEstablecimientosXMunicipio($municipio);

            if($res->rowCount()>0){
                while ($row = $res->fetch(PDO::FETCH_ASSOC)){
                  $registros=array(
                       "Municipio" => $row['Municipio'],
                       "Region" => $row['Region'],
                       "Establecimientos" => $row['Establecimientos']
                   );
                    array_push($establecimientos["registros"], $registros);
                }
                $this->printJSON($establecimientos);
            }else{
                echo json_encode(array('mensaje' => 'No hay elementos'));
            }
        }

        function getAllHabitaciones(){
            $habitacion = new Habitacion();
            $habitaciones = array();
            $habitaciones["registros"] = array();
            $res = $habitacion->obtenerHabitaciones();

            if($res->rowCount()>0){
                while ($row = $res->fetch(PDO::FETCH_ASSOC)){
                  $registros=array(
                       "Municipio" => $row['Municipio'],
                       "Region" => $row['Region'],
                       "Habitaciones" => $row['Habitaciones']
                   );
                    array_push($habitaciones["registros"],$registros);
                }
                $this->printJSON($habitaciones);
            }else{
                echo json_encode(array('mensaje' => 'No hay elementos'));
            }
        }

        function getByMunicipioHabitaciones($municipio){
          $habitacion = new Habitacion();
          $habitaciones = array();
          $habitaciones["registros"] = array();
          $res = $habitacion->obtenerHabitacionesXMunicipio($municipio);

                if($res->rowCount()>0){
                    while ($row = $res->fetch(PDO::FETCH_ASSOC)){
                      $registros=array(
                           "Municipio" => $row['Municipio'],
                           "Region" => $row['Region'],
                           "Habitaciones" => $row['Habitaciones']
                       );
                        array_push($habitaciones["registros"], $registros);
                    }
                    $this->printJSON($habitaciones);
                }else{
                    echo json_encode(array('mensaje' => 'No hay elementos'));
                }
            }

        function error($mensaje){
          echo json_encode(array('mensaje' => $mensaje));
        }

        function printJSON($array){
          //echo '<code>'.json_encode($array).'</code>';
          echo json_encode($array);

        }


}//clase


?>
