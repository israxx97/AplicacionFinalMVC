<?php

if (isset($_REQUEST['cancelar'])) {
    $_SESSION['pagina'] = 'inicio';
    header('Location: index.php');
    exit;
}

$descDepartamento = '';
$criterioBusqueda = '';

if (isset($_REQUEST['criterioBusqueda'])) {
    if ($_REQUEST['criterioBusqueda'] == 'alta') {
        $criterioBusqueda = ' AND T02_FechaBajaDepartamento IS NULL';
    } else {
        if ($_REQUEST['criterioBusqueda'] == 'baja') {
            $criterioBusqueda = ' AND T02_FechaBajaDepartamento IS NOT NULL';
        }
    }
}

if (isset($_REQUEST['buscar'])) {
    $descDepartamento = $_REQUEST['buscarPorDescripcion'];
    $a_departamento = Departamento::buscaDepartamentosPorDescripcion($descDepartamento, $criterioBusqueda);
    require_once $vistas['layout'];
} else {
    $a_departamento = Departamento::buscaDepartamentosPorDescripcion($descDepartamento, $criterioBusqueda);
    $_SESSION['pagina'] = 'mtoDepartamentos';
    require_once $vistas['layout'];
}