<!DOCTYPE html>
<?php
/**
 * layout.php
 * 
 * Este fichero se encarga de cargar la parte del html común de todas
 * las vistas que carguemos con php, como son la cabecera o el footer.
 * 
 * @author Israel García Cabañeros <isragarcia97@gmail.com>
 * @since 13/04/2019
 * @version 0.1
 */
if (isset($_SESSION['usuario'])) {
    $vista = $vistas['inicio'];
} else {
    $vista = $vistas['login'];
}
if (isset($_SESSION['pagina'])) {
    $vista = $vistas[$_SESSION['pagina']];
}
?>
<html>
    <head>
        <title>AppLILOMVC - Israel García Cabañeros</title>
        <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-w+8Gqjk9Cuo6XH9HKHG5t5I1VR4YBNdPt/29vwgfZR485eoEJZ8rJRbm3TR32P6k" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php require_once $vista; ?>
        <footer>

        </footer>
    </body>
</html>