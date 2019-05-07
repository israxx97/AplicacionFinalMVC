<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author israel
 */
interface DepartamentoDB {

    public static function buscaDepartamentosPorCodigo($codDepartamento);

    public static function buscaDepartamentosPorDescripcion($descDepartamento, $criterioBusqueda);

    public static function altaDepartamento($codDepartamento, $descDepartamento, $volumenNegocio);

    public static function bajaFisicaDepartamento($codDepartamento);

    public static function bajaLogicaDepartamento($codDepartamento);

    public static function modificaDepartamento($codDepartamento, $descDepartamento, $volumenNegocio);

    public static function rehabilitaDepartamento($codDepartamento);

    public static function validaCodNoExiste($codDepartamento);

    public static function importarDepartamentos($fichero);
}
