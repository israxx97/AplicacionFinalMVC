<?php

require_once 'api/REST.php';

if (isset($_REQUEST['cancelar'])) {
    $_SESSION['pagina'] = 'inicio';
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['enviar'])) {
    $idProducto = $_REQUEST['idProducto'];
    $_SESSION['producto'] = REST::obtenerDatosProducto($idProducto);
}

$_SESSION['pagina'] = 'rest';
require_once $vistas['layout'];

