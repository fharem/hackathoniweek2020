<?php

include_once 'ocupacion.php';

class wsOcupacion{


    function getAll(){
        $ocupacion = new Ocupacion();
        $ocupaciones = array();
        $ocupaciones["registros"] = array();

        $res = $ocupacion->obtenerOcupacion();

        if($res->rowCount()>0){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
             $registros=array(
                  "Municipio" => $row['Municipio'],
                  "Region" => $row['Region'],
                  "Enero" => $row['Enero'],
                  "Febrero" => $row['Febrero'],
                  "Marzo" => $row['Marzo'],
                  "Abril" => $row['Abril'],
                  "Mayo" => $row['Mayo'],
                  "Junio" => $row['Junio'],
                  "Julio" => $row['Julio'],
                  "Agosto" => $row['Agosto'],
                  "Septiembre" => $row['Septiembre'],
                  "Octubre" => $row['Octubre'],
                  "Noviembre" => $row['Noviembre'],
                  "Diciembre" => $row['Diciembre'],
              );
                array_push($ocupaciones["registros"],$registros);
            }
            $this->printJSON($ocupaciones);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }

    function getByMunicipio($municipio){
      $ocupacion = new Turista();
      $ocupaciones = array();
      $ocupaciones["registros"] = array();

            $res = $ocupacion->obtenerOcupacionXMunicipio($municipio);

            if($res->rowCount()>0){
                while ($row = $res->fetch(PDO::FETCH_ASSOC)){
                  $registros=array(
                      "Municipio" => $row['Municipio'],
                      "Region" => $row['Region'],
                      "Enero" => $row['Enero'],
                      "Febrero" => $row['Febrero'],
                      "Marzo" => $row['Marzo'],
                      "Abril" => $row['Abril'],
                      "Mayo" => $row['Mayo'],
                      "Junio" => $row['Junio'],
                      "Julio" => $row['Julio'],
                      "Agosto" => $row['Agosto'],
                      "Septiembre" => $row['Septiembre'],
                      "Octubre" => $row['Octubre'],
                      "Noviembre" => $row['Noviembre'],
                      "Diciembre" => $row['Diciembre'],
                  );
                    array_push($ocupaciones["registros"], $registros);
                }
                $this->printJSON($ocupaciones);
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
