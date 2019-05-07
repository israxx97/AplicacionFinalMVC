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
        $departamento = null;
        $a_departamento = DepartamentoPDO::buscaDepartamentosPorCodigo($codDepartamento);

        if (!empty($a_departamento)) {
            $departamento = new Departamento($a_departamento['T02_CodDepartamento'], $a_departamento['T02_DescDepartamento'], $a_departamento['T02_FechaCreacionDepartamento'], $a_departamento['T02_VolumenDeNegocio'], $a_departamento['T02_FechaBajaDepartamento']);
        }
        return $departamento;
    }

    public static function buscaDepartamentosPorDescripcion($descDepartamento, $criterioBusqueda) {
        $departamentos = [];
        $a_departamentos = [];
        
        $departamentos = DepartamentoPDO::buscaDepartamentosPorDescripcion($descDepartamento, $criterioBusqueda);

        if (!empty($departamentos)) {
            for ($i = 0; $i < count($departamentos); $i++) {
                $a_departamentos[$i] = new Departamento($departamentos[$i]['T02_CodDepartamento'], $departamentos[$i]['T02_DescDepartamento'], $departamentos[$i]['T02_FechaCreacionDepartamento'], $departamentos[$i]['T02_VolumenDeNegocio'], $departamentos[$i]['T02_FechaBajaDepartamento']);
            }
        }
        return $a_departamentos;
    }

    public static function altaDepartamento($codDepartamento, $descDepartamento, $volumenNegocio) {
        
    }

    public function bajaFisicaDepartamento() {
        
    }

    public function bajaLogicaDepartamento() {
        
    }

    public function modificaDepartamento($descDepartamento, $volumenNegocio) {
        
    }

    public function rehabilitaDepartamento() {
        
    }

    public static function validaCodNoExiste($codDepartamento) {
        
    }

    public static function importarDepartamentos($fichero) {
        return DepartamentoPDO::importarDepartamentos($fichero);
    }

}
