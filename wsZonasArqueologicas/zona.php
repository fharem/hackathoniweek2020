<?php

include_once '../db.php';

class Zona extends DB{

    function obtenerZonas(){
        $query = $this->connect()->query('SELECT * FROM zonasArq');
        return $query;
    }

    function obtenerZonasXentidad($entidad){
        $query = $this->connect()->prepare('SELECT * FROM zonasArq WHERE entidad = :entidad');
        $query->execute(['entidad' => $entidad]);
        return $query;
    }

}

?>
