<?php

include_once '../db.php';

class Densidad extends DB{

    function obtenerDensidad(){
        $query = $this->connect()->query('SELECT * FROM densidad20');
        return $query;
    }

    function obtenerDensidadXMunicipio($municipio){
        $query = $this->connect()->prepare('SELECT * FROM densidad20 WHERE Municipio = :Municipio');
        $query->execute(['Municipio' => $municipio]);
        return $query;
    }

}

?>
