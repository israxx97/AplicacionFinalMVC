<?php

require_once 'model/REST.php';
require_once 'model/Cerveza.php';

$cristal = new Cerveza();
$_SESSION['cristalRespuestaSelect'] = '';

$gafas = new REST();
$_SESSION['gafasRespuestaSelect'] = '';

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

if (isset($_REQUEST['buscarGafasSelect'])) {
    $idGafas = $_REQUEST['seleccionarGafas'];
    $objCristal = REST::getGafasPorId($idGafas);
    $_SESSION['gafasRespuestaSelect'] = $objCristal;
}

if (isset($_REQUEST['buscarCristalSelect'])) {
    $idCristal = $_REQUEST['seleccionarCristal'];
    $objCristal = Cerveza::buscarCristalPorNombre($idCristal);
    $_SESSION['cristalRespuestaSelect'] = $objCristal;
}

$_SESSION['pagina'] = 'rest';
require_once $vistas['layout'];

