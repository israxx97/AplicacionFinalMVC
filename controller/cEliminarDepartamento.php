<?php

$a_departamento = Departamento::buscaDepartamentosPorCodigo($_SESSION['codDepartamento']);

if (isset($_REQUEST['volver'])) {
    $_SESSION['pagina'] = 'mtoDepartamentos';
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['aceptar'])) {
    $eliminado = $a_departamento->bajaFisicaDepartamento();

    if ($eliminado) {
        $_SESSION['pagina'] = 'mtoDepartamentos';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['pagina'] = 'eliminarDepartamento';
        require_once $vistas['layout'];
    }
} else {
    $_SESSION['pagina'] = 'eliminarDepartamento';
    require_once $vistas['layout'];
}
