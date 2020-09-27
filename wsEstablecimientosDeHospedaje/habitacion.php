<?php

include_once '../db.php';

class Habitacion extends DB{

    function obtenerHabitaciones(){
        $query = $this->connect()->query('SELECT * FROM habitaciones20');
        return $query;
    }

    function obtenerHabitacionesXMunicipio($municipio){
        $query = $this->connect()->prepare('SELECT * FROM habitaciones20 WHERE Municipio = :Municipio');
        $query->execute(['Municipio' => $municipio]);
        return $query;
    }

}

?>
