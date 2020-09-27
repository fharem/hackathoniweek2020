<?php

include_once '../db.php';

class LLegada extends DB{

    function obtenerLlegada(){
        $query = $this->connect()->query('SELECT * FROM llegada19');
        return $query;
    }

    function obtenerLlegadaXMunicipio($municipio){
        $query = $this->connect()->prepare('SELECT * FROM llegada19 WHERE Municipio = :Municipio');
        $query->execute(['Municipio' => $municipio]);
        return $query;
    }

}

?>
