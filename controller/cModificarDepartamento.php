<?php

if (isset($_REQUEST['volver'])) {
    $_SESSION['pagina'] = 'mtoDepartamentos';
    header('Location: index.php');
    exit;
}

$_SESSION['pagina'] = 'modificarDepartamento';
require_once $vistas['layout'];
