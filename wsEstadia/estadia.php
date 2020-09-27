<?php

include_once '../db.php';

class Estadia extends DB{

    function obtenerEstadia(){
        $query = $this->connect()->query('SELECT * FROM estadia20des');
        return $query;
    }

    function obtenerEstadiaXMunicipio($municipio){
        $query = $this->connect()->prepare('SELECT * FROM estadia20des WHERE Municipio = :Municipio');
        $query->execute(['Municipio' => $municipio]);
        return $query;
    }

}

?>
