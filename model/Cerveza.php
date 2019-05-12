<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FootballData
 *
 * @author israel
 */
class Cerveza {

    public static function buscarCristalPorId($idGlass) {
        $key = 'cb97c4b2998ecfc7c7d7b73082001331';
        $cristalJson = file_get_contents('https://sandbox-api.brewerydb.com/v2/glass/' . $idGlass . '/?key=' . $key);
        $cristales = json_decode($cristalJson, true);

        if ($cristales['data']['id'] == null) {
            $respuesta = 'No existen datos con ese id.';
        } else {
            $respuesta = "<b>Id: </b>" . $cristales['data']['id'] . "<br>" .
                    "<b>Name: </b>" . $cristales['data']['name'] . "<br>" .
                    "<b>Fecha de creación: </b>" . $cristales['data']['createDate'];
        }
        return $respuesta;
    }

    public static function buscarCristalPorNombre($idGlass) {
        $key = 'cb97c4b2998ecfc7c7d7b73082001331';
        $cristalJson = file_get_contents('https://sandbox-api.brewerydb.com/v2/glass/' . $idGlass . '/?key=' . $key);
        $cristales = json_decode($cristalJson, true);

        $respuesta = "<b>Id: </b>" . $cristales['data']['id'] . "<br>" .
                "<b>Name: </b>" . $cristales['data']['name'] . "<br>" .
                "<b>Fecha de creación: </b>" . $cristales['data']['createDate'];

        return $respuesta;
    }

}
