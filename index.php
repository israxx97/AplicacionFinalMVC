<?php

require_once 'config/config.php';
session_start();

/* print_r($_SERVER['PHP_SELF']);
echo "\n\r";

$gafas = new REST();
$gafas->ApiREST();
exit; */

if (isset($_SESSION['usuario']) && (!isset($_SESSION['pagina']))) {
    include_once $controladores['inicio'];
}
if (isset($_SESSION['pagina'])) {
    include_once $controladores[$_SESSION['pagina']];
} else {
    include_once $controladores['login'];
}