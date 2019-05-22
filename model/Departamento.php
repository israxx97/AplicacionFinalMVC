<?php

require_once 'DepartamentoPDO.php';

/**
 * Description of Departamento
 *
 * @author israel
 */
class Departamento {

    private $codDepartamento;
    private $descDepartamento;
    private $fechaCreacionDepartamento;
    private $volumenNegocio;
    private $fechaBajaDepartamento;

    public function __construct($codDepartamento, $descDepartamento, $fechaCreacionDepartamento, $volumenNegocio, $fechaBajaDepartamento) {
        $this->codDepartamento = $codDepartamento;
        $this->descDepartamento = $descDepartamento;
        $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
        $this->volumenNegocio = $volumenNegocio;
        $this->fechaBajaDepartamento = $fechaBajaDepartamento;
    }

    public function getCodDepartamento() {
        return $this->codDepartamento;
    }

    public function setCodDepartamento($codDepartamento) {
        $this->codDepartamento = $codDepartamento;
    }

    public function getDescDepartamento() {
        return $this->descDepartamento;
    }

    public function setDescDepartamento($descDepartamento) {
        $this->descDepartamento = $descDepartamento;
    }

    public function getFechaCreacionDepartamento() {
        return $this->fechaCreacionDepartamento;
    }

    public function setFechaCreacionDepartamento($fechaCreacionDepartamento) {
        $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
    }

    public function getVolumenNegocio() {
        return $this->volumenNegocio;
    }

    public function setVolumenNegocio($volumenNegocio) {
        $this->volumenNegocio = $volumenNegocio;
    }

    public function getFechaBajaDepartamento() {
        return $this->fechaBajaDepartamento;
    }

    public function setFechaBajaDepartamento($fechaBajaDepartamento) {
        $this->fechaBajaDepartamento = $fechaBajaDepartamento;
    }

    public static function buscaDepartamentosPorCodigo($codDepartamento) {
        $a_departamento = DepartamentoPDO::buscaDepartamentosPorCodigo($codDepartamento);

        if (!empty($a_departamento)) {
            $departamento = new Departamento($a_departamento['T02_CodDepartamento'], $a_departamento['T02_DescDepartamento'], $a_departamento['T02_FechaCreacionDepartamento'], $a_departamento['T02_VolumenDeNegocio'], $a_departamento['T02_FechaBajaDepartamento']);
        } else {
            $departamento = null;
        }
        return $departamento;
    }

    public static function buscaDepartamentosPorDescripcion($descDepartamento, $criterioBusqueda, $paginaActual, $numRegistrosPorPagina) {
        $a_departamentos = DepartamentoPDO::buscaDepartamentosPorDescripcion($descDepartamento, $criterioBusqueda, $paginaActual, $numRegistrosPorPagina);
        $a_objDepartamentos = [];

        foreach ($a_departamentos as $a_departamento) {
            $departamento = new Departamento($a_departamento['T02_CodDepartamento'], $a_departamento['T02_DescDepartamento'], $a_departamento['T02_FechaCreacionDepartamento'], $a_departamento['T02_VolumenDeNegocio'], $a_departamento['T02_FechaBajaDepartamento']);
            array_push($a_objDepartamentos, $departamento);
        }
        return $a_objDepartamentos;
    }

    public static function altaDepartamento($codDepartamento, $descDepartamento, $volumenNegocio) {
        return DepartamentoPDO::altaDepartamento($codDepartamento, $descDepartamento, $volumenNegocio);
    }

    public function bajaFisicaDepartamento() {
        return DepartamentoPDO::bajaFisicaDepartamento($this->getCodDepartamento());
    }

    public function bajaLogicaDepartamento() {
        return DepartamentoPDO::bajaLogicaDepartamento($this->getCodDepartamento());
    }

    public function modificaDepartamento($descDepartamento, $volumenNegocio) {
        return DepartamentoPDO::modificaDepartamento($this->getCodDepartamento(), $descDepartamento, $volumenNegocio);
    }

    public function rehabilitaDepartamento() {
        return DepartamentoPDO::rehabilitaDepartamento($this->getCodDepartamento());
    }

    public static function validaCodNoExiste($codDepartamento) {
        return DepartamentoPDO::validaCodNoExiste($codDepartamento);
    }

    public static function importarDepartamentos($codDepartamento, $descDepartamento, $fechaCreacionDepartamento, $volumenNegocio, $fechaBajaDepartamento) {
        return DepartamentoPDO::importarDepartamentos($codDepartamento, $descDepartamento, $fechaCreacionDepartamento, $volumenNegocio, $fechaBajaDepartamento);
    }

    public static function contarDepartamentos($descDepartamento, $criterioBusqueda) {
        return DepartamentoPDO::contarDepartamentos($descDepartamento, $criterioBusqueda);
    }

}
