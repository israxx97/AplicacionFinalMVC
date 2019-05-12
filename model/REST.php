<?php

require_once 'config/config.php';

class REST {

    public static function getGafasPorId($idGafas) {
        $gafasJson = file_get_contents('http://localhost/ApiREST/gafas/' . $idGafas);
        $gafas = json_decode($gafasJson, true);

        return $gafas;
    }

    public static function getGafas() {
        
    }

}
