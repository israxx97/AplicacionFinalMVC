<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AEMET
 *
 * @author israel
 */
class AEMET {

    public static function datosDelTiempo($estacion) {
        $key = 'eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJpc3JhZ2FyY2lhOTdAZ21haWwuY29tIiwianRpIjoiNjYwMTRhYjAtMDBiYi00NTNiLTk2MWEtNjQ0ODVhMzViOGE0IiwiaXNzIjoiQUVNRVQiLCJpYXQiOjE1NTczMTA1NjMsInVzZXJJZCI6IjY2MDE0YWIwLTAwYmItNDUzYi05NjFhLTY0NDg1YTM1YjhhNCIsInJvbGUiOiIifQ.UjU0Dw1Qz32Q_zSPHVefr1tsCct_4BKGz7rKj088_8s';
        $estacionJson = file_get_contents('https://opendata.aemet.es/opendata/api/observacion/convencional/datos/estacion/' . $estacion . '/?api_key=' . $key);
        $estaciones = json_decode($estacionJson, true);

        $estacionJson2 = file_get_contents($estaciones['datos']);
        $datos = json_decode($estacionJson2, true);

        $aux = count($datos);

        return $datos[$aux - 1];
    }

}

