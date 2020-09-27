<?php

include_once '../db.php';

class Turista extends DB{

    function obtenerTuristas(){
        $query = $this->connect()->query('SELECT * FROM turisnoche20');
        return $query;
    }

    function obtenerTuristasXMunicipio($municipio){
        $query = $this->connect()->prepare('SELECT * FROM turisnoche20 WHERE Municipio = :Municipio');
        $query->execute(['Municipio' => $municipio]);
        return $query;
    }

}

?>
