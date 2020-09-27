<?php

include_once '../db.php';

class Establecimiento extends DB{

    function obtenerEstablecimientos(){
        $query = $this->connect()->query('SELECT * FROM establecimientos20');
        return $query;
    }

    function obtenerEstablecimientosXMunicipio($municipio){
        $query = $this->connect()->prepare('SELECT * FROM establecimientos20 WHERE Municipio = :Municipio');
        $query->execute(['Municipio' => $municipio]);
        return $query;
    }

}

?>
