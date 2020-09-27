<?php

include_once 'zona.php';

class wsZonas{

    function getAll(){
        $zona = new Zona();
        $zonas = array();
        $zonas["registros"] = array();

        $res = $zona->obtenerZonas();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
                $registros=array(
                    "entidad" => $row['entidad'],
                    "ZonaArqueologica" => $row['zonaArqueologica'],
                    "responsable" => $row['responsable'],
                );
                array_push($zonas["registros"], $registros);
            }
            $this->printJSON($zonas);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }

    function getByEntidad($entidad){
      $zona = new Zona();
      $zonas = array();
      $zonas["registros"] = array();

            $res = $zona->obtenerZonasXentidad($entidad);

            if($res->rowCount()){
                while ($row = $res->fetch(PDO::FETCH_ASSOC)){
                    $registros=array(
                        "entidad" => $row['entidad'],
                        "ZonaArqueologica" => $row['zonaArqueologica'],
                        "responsable" => $row['responsable'],
                    );
                    array_push($zonas["registros"], $registros);
                }
                $this->printJSON($zonas);
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
