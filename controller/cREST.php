<?php

require_once 'api/REST.php';
require_once 'model/Cerveza.php';

$cristal = new Cerveza();

if (isset($_REQUEST['cancelar'])) {
    $_SESSION['pagina'] = 'inicio';
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['enviar'])) {
    $idProducto = $_REQUEST['idProducto'];
    $_SESSION['producto'] = REST::obtenerDatosProducto($idProducto);
}

if (isset($_REQUEST['buscarCristal'])) {
    $idCristal = $_REQUEST['idCristal'];
    $objCristal = Cerveza::buscarCristalPorId($idCristal);
    $_SESSION['cristalRespuesta'] = $objCristal;
}

$_SESSION['pagina'] = 'rest';
require_once $vistas['layout'];

