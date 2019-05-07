<?php

require_once 'DBPDO.php';
require_once 'DepartamentoDB.php';

/**
 * Description of DepartamentoPDO
 *
 * @author israel
 */
class DepartamentoPDO implements DepartamentoDB {

    public static function altaDepartamento($codDepartamento, $descDepartamento, $volumenNegocio) {
        
    }

    public static function bajaFisicaDepartamento($codDepartamento) {
        
    }

    public static function bajaLogicaDepartamento($codDepartamento) {
        
    }

    public static function buscaDepartamentosPorCodigo($codDepartamento) {
        $a_departamento = [];
        $sql = 'SELECT * FROM T02_Departamentos WHERE T02_CodDepartamento = ?';
        $statement = DBPDO::ejecutaConsulta($sql, [$codDepartamento]);

        if ($statement->rowCount() != 0) {
            $resultado = $statement->fetchObject();
            $a_departamento['T02_CodDepartamento'] = $resultado->T02_CodDepartamento;
            $a_departamento['T02_DescDepartamento'] = $resultado->T02_DescDepartamento;
            $a_departamento['T02_FechaCreacionDepartamento'] = $resultado->T02_FechaCreacionDepartamento;
            $a_departamento['T02_VolumenDeNegocio'] = $resultado->T02_VolumenDeNegocio;
            $a_departamento['T02_FechaBajaDepartamento'] = $resultado->T02_FechaBajaDepartamento;
        }
        return $a_departamento;
    }

    public static function buscaDepartamentosPorDescripcion($descDepartamento, $criterioBusqueda) {
        $contador = 0;
        $a_departamentos = [];
        $a_departamento = [];
        $sql = "SELECT * FROM T02_Departamentos WHERE T02_DescDepartamento LIKE ?";

        $statement = DBPDO::ejecutaConsulta($sql.$criterioBusqueda, ["%$descDepartamento%"]);

        if ($statement->rowCount() != 0) {
            while ($resultado = $statement->fetchObject()) {
                $a_departamento['T02_CodDepartamento'] = $resultado->T02_CodDepartamento;
                $a_departamento['T02_DescDepartamento'] = $resultado->T02_DescDepartamento;
                $a_departamento['T02_FechaCreacionDepartamento'] = $resultado->T02_FechaCreacionDepartamento;
                $a_departamento['T02_VolumenDeNegocio'] = $resultado->T02_VolumenDeNegocio;
                $a_departamento['T02_FechaBajaDepartamento'] = $resultado->T02_FechaBajaDepartamento;
                $a_departamentos[$contador] = $a_departamento;
                $contador++;
            }
        }
        return $a_departamentos;
    }

    public static function importarDepartamentos($fichero) {
        
    }

    public static function modificaDepartamento($codDepartamento, $descDepartamento, $volumenNegocio) {
        
    }

    public static function rehabilitaDepartamento($codDepartamento) {
        
    }

    public static function validaCodNoExiste($codDepartamento) {
        
    }

}
