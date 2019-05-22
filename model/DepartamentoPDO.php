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
        $creado = false;
        $fecha = new DateTime();
        $fechaTS = $fecha->getTimestamp();

        $sql = 'INSET INTO T02_Departamentos VALUES (?, ?, ?, ?, ?)';
        $statement = DBPDO::ejecutaConsulta($sql, [$codDepartamento, $descDepartamento, $fechaTS, $volumenNegocio, NULL]);

        if ($statement->rowCount() != 0) {
            $creado = true;
        }
        return $creado;
    }

    public static function bajaFisicaDepartamento($codDepartamento) {
        $eliminado = false;
        $sql = 'DELETE FROM T02_Departamentos WHERE T02_CodDepartamento = ?';
        $statement = DBPDO::ejecutaConsulta($sql, [$codDepartamento]);

        if ($statement->rowCount() != 0) {
            $eliminado = true;
        }

        return $eliminado;
    }

    public static function bajaLogicaDepartamento($codDepartamento) {
        $baja = false;
        $fecha = new DateTime();
        $fechaTS = $fecha->getTimestamp();
        $sql = 'UPDATE T02_Departamentos SET T02_FechaBajaDepartamento = ? WHERE T02_CodDepartamento = ?';
        $statement = DBPDO::ejecutaConsulta($sql, [$fechaTS, $codDepartamento]);

        if ($statement->rowCount() != 0) {
            $baja = true;
        }
        return $baja;
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

    public static function buscaDepartamentosPorDescripcion($descDepartamento, $criterioBusqueda, $paginaActual, $numRegistrosPorPagina) {
        $a_departamentos = [];

        $sql = "SELECT * FROM T02_Departamentos WHERE T02_DescDepartamento LIKE ?";

        if ($criterioBusqueda == 'baja') {
            $sql = "SELECT * FROM T02_Departamentos WHERE T02_DescDepartamento LIKE ? AND T02_FechaBajaDepartamento IS NOT NULL";
        }

        if ($criterioBusqueda == 'alta') {
            $sql = "SELECT * FROM T02_Departamentos WHERE T02_DescDepartamento LIKE ? AND T02_FechaBajaDepartamento IS NULL";
        }

        $statement = DBPDO::ejecutaConsulta($sql . " LIMIT $paginaActual, $numRegistrosPorPagina", ["%$descDepartamento%"]);

        if ($statement->rowCount() != 0) {
            while ($resultado = $statement->fetchObject()) {
                $a_departamento['T02_CodDepartamento'] = $resultado->T02_CodDepartamento;
                $a_departamento['T02_DescDepartamento'] = $resultado->T02_DescDepartamento;
                $a_departamento['T02_FechaCreacionDepartamento'] = $resultado->T02_FechaCreacionDepartamento;
                $a_departamento['T02_VolumenDeNegocio'] = $resultado->T02_VolumenDeNegocio;
                $a_departamento['T02_FechaBajaDepartamento'] = $resultado->T02_FechaBajaDepartamento;
                array_push($a_departamentos, $a_departamento);
            }
        }
        return $a_departamentos;
    }

    public static function importarDepartamentos($codDepartamento, $descDepartamento, $fechaCreacionDepartamento, $volumenNegocio, $fechaBajaDepartamento) {
        $importado = false;
        $sql = 'INSERT INTO T02_Departamentos VALUES (?, ?, ?, ?, ?)';
        $statement = DBPDO::ejecutaConsulta($sql, [$codDepartamento, $descDepartamento, $fechaCreacionDepartamento, $volumenNegocio, $fechaBajaDepartamento]);

        if ($statement->rowCount() != 0) {
            $importado = true;
        }
        return $importado;
    }

    public static function modificaDepartamento($codDepartamento, $descDepartamento, $volumenNegocio) {
        $modificado = false;
        $sql = 'UPDATE T02_Departamentos SET T02_DescDepartamento = ?, T02_VolumenNegocio = ? WHERE T02_CodDepartamento = ?';
        $statement = DBPDO::ejecutaConsulta($sql, [$descDepartamento, $volumenNegocio, $codDepartamento]);

        if ($statement->rowCount() != 0) {
            $modificado = true;
        }
        return $modificado;
    }

    public static function rehabilitaDepartamento($codDepartamento) {
        $alta = false;
        $sql = 'UPDATE T02_Departamentos SET T02_FechaBajaDepartamento = NULL WHERE T02_CodDepartamento = ?';
        $statement = DBPDO::ejecutaConsulta($sql, [$codDepartamento]);

        if ($statement->rowCount() != 0) {
            $alta = true;
        }
        return $alta;
    }

    public static function validaCodNoExiste($codDepartamento) {
        $existe = false;
        $sql = 'SELECT * FROM T02_Departamentos WHERE T02_CodDepartamento = ?';
        $statement = DBPDO::ejecutaConsulta($sql, [$codDepartamento]);

        if ($statement->rowCount() != 0) {
            $existe = true;
        }
        return $existe;
    }

    public static function contarDepartamentos($descDepartamento, $criterioBusqueda) {
        $sql = 'SELECT COUNT(*) FROM T02_Departamentos WHERE T02_DescDepartamento LIKE (?)';

        if ($criterioBusqueda == 'baja') {
            $sql = 'SELECT COUNT(*) FROM T02_Departamentos WHERE T02_DescDepartamento LIKE (?) AND T02_FechaBajaDepartamento IS NOT NULL';
        }

        if ($criterioBusqueda == 'alta') {
            $sql = 'SELECT COUNT(*) FROM T02_Departamentos WHERE T02_DescDepartamento LIKE (?) AND T02_FechaBajaDepartamento IS NULL';
        }

        $statement = DBPDO::ejecutaConsulta($sql, ["%$descDepartamento%"]);

        if ($statement->rowCount()) {
            $registros = $statement->fetchColumn(0);
        }
        return $registros;
    }

}
