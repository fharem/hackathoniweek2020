<?php

include_once '../db.php';

class Ocupacion extends DB{

    function obtenerOcupacion(){
        $query = $this->connect()->query('SELECT * FROM ocupacion20');
        return $query;
    }

    function obtenerOcupacionXMunicipio($municipio){
        $query = $this->connect()->prepare('SELECT * FROM ocupacion20 WHERE Municipio = :Municipio');
        $query->execute(['Municipio' => $municipio]);
        return $query;
    }

}

?>
