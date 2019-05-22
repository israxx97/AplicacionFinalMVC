<?php

$a_departamento = Departamento::buscaDepartamentosPorCodigo($_SESSION['codDepartamento']);

if (isset($_REQUEST['volver'])) {
    $_SESSION['pagina'] = 'mtoDepartamentos';
    header('Location: index.php');
    exit;
} else {
    $_SESSION['pagina'] = 'mostrarDepartamento';
    require_once $vistas['layout'];
}
