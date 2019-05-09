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

    private $config;
    private $url;
    private $a_config = array();

    public function __construct() {
        $this->config = parse_ini_file('core/config.ini', true);

        if ($this->config['authToken'] == 'cb97c4b2998ecfc7c7d7b73082001331' || !isset($this->config['authToken'])) {
            // exit('Necesitas un token o el usado no es correcto.');
        }

        $this->url = $this->config['url'];

        $this->a_config['http']['method'] = 'GET';
        $this->a_config['http']['header'] = 'X-Auth-Token: ' . $this->config['authToken'];
    }

    /* public static function buscarCervezaPorId($idCerveza) {
      $resource = 'beer/' . $idCerveza;
      $context = stream_context_create($this->a_config);
      $cervezaJson = file_get_contents($this->url . $resource, false, $context);
      $cervezas = json_decode($cervezaJson, true);

      return $cervezas;
      } */

    public static function buscarCristalPorId($idGlass) {
        $key = 'cb97c4b2998ecfc7c7d7b73082001331';
        $cristalJson = file_get_contents('https://sandbox-api.brewerydb.com/v2/glass/' . $idGlass . '/?key=' . $key);
        $cristales = json_decode($cristalJson, true);

        $respuesta = "<b>Id: </b>" . $cristales['data']['id'] . "<br>" .
                "<b>Name: </b>" . $cristales['data']['name'] . "<br>" .
                "<b>Fecha de creación: </b>" . $cristales['data']['createDate'];
        
        if ($cristales['data']['id'] == null) {
            $respuesta = 'No existen datos con ese id.';
        }

        return $respuesta;
    }

}
