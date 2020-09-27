<?php

include_once '../db.php';

class Derrama extends DB{

    function obtenerDerrama(){
        $query = $this->connect()->query('SELECT * FROM derrama20');
        return $query;
    }

    function obtenerDerramaXMunicipio($municipio){
        $query = $this->connect()->prepare('SELECT * FROM derrama20 WHERE Municipio = :Municipio');
        $query->execute(['Municipio' => $municipio]);
        return $query;
    }

}

?>
