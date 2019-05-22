<?php

if ($_SESSION['buscarPorDescripcion'] == null) {
    $_SESSION['buscarPorDescripcion'] = '';
}

if ($_SESSION['criterioBusqueda'] == null) {
    $_SESSION['criterioBusqueda'] = 'todos';
}

if (isset($_REQUEST['cancelar'])) {
    $_SESSION['pagina'] = 'inicio';
    $_SESSION['criterioBusqueda'] = 'todos';
    $_SESSION['buscarPorDescripcion'] = '';
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['importar'])) {
    $_SESSION['pagina'] = 'importar';
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['exportar'])) {
    $_SESSION['pagina'] = 'exportar';
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['anadir'])) {
    $_SESSION['pagina'] = 'altaDepartamento';
    header('Location: index.php');
    exit;
}

foreach ($_SESSION['a_departamentos'] as $key => $value) {
    if (isset($_REQUEST['eliminarDepartamento' . $key])) {
        $_SESSION['codDepartamento'] = $value->getCodDepartamento();
        $_SESSION['pagina'] = 'eliminarDepartamento';
        header('Location: index.php');
        exit;
    }

    if (isset($_REQUEST['modificarDepartamento' . $key])) {
        $_SESSION['codDepartamento'] = $value->getCodDepartamento();
        $_SESSION['pagina'] = 'modificarDepartamento';
        header('Location: index.php');
        exit;
    }

    if (isset($_REQUEST['altaLogicaDepartamento' . $key])) {
        $_SESSION['codDepartamento'] = $value->getCodDepartamento();
        $_SESSION['pagina'] = 'altaLoginaDepartamento';
        header('Location: index.php');
        exit;
    }

    if (isset($_REQUEST['bajaLogicaDepartamento' . $key])) {
        $_SESSION['codDepartamento'] = $value->getCodDepartamento();
        $_SESSION['pagina'] = 'bajaLoginaDepartamento';
        header('Location: index.php');
        exit;
    }

    if (isset($_REQUEST['mostrarDepartamento' . $key])) {
        $_SESSION['codDepartamento'] = $value->getCodDepartamento();
        $_SESSION['pagina'] = 'mostrarDepartamento';
        header('Location: index.php');
        exit;
    }
}

if (isset($_REQUEST['buscar'])) {
    $_SESSION['criterioBusqueda'] = $_REQUEST['criterioBusqueda'];
    $_SESSION['buscarPorDescripcion'] = $_REQUEST['buscarPorDescripcion'];
} else {
    $_SESSION['criterioBusqueda'] = 'todos';
}

/*
 * A continuación es la parte del controlador de la paginación.
 */
if (isset($_REQUEST['paginaActual'])) {
    $paginaActual = $_REQUEST['paginaActual'];
} else {
    $paginaActual = 1;
}

$numRegistrosPorPagina = 4;
$contadorResultados = Departamento::contarDepartamentos($_SESSION['buscarPorDescripcion'], $_SESSION['criterioBusqueda']);
$totalPaginas = ceil($contadorResultados / $numRegistrosPorPagina);
$primerRegistro = ($paginaActual - 1) * $numRegistrosPorPagina;

$_SESSION['a_departamentos'] = Departamento::buscaDepartamentosPorDescripcion($_SESSION['buscarPorDescripcion'], $_SESSION['criterioBusqueda'], $primerRegistro, $numRegistrosPorPagina);

$depBaja = 0;
$depAlta = 0;
$contadorResultados = Departamento::contarDepartamentos('', 'todos');
$departamentosAltaBaja = Departamento::buscaDepartamentosPorDescripcion('', 'todos', 0, $contadorResultados);

foreach ($departamentosAltaBaja as $key => $value) {
    if ($value->getFechaBajaDepartamento() == null) {
        $depAlta++;
    } else {
        $depBaja++;
    }
}

$_SESSION['pagina'] = 'mtoDepartamentos';
require_once $vistas['layout'];
