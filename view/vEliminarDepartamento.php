<link rel="stylesheet" type="text/css" href="webroot/css/vMiCuentaStyles.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <form class="container" name="formEliminarDepartamento" action="<?php echo $_SERVER['PHP_SELF']; ?>" action="POST">
        <ul class="nav nav-pills container">
            <li class="nav-item">
                <input type="submit" id="volver" style="margin-right: 5px;" class="btn btn-outline-danger" name="volver" value="Volver atrás"/>
            </li>
        </ul>
    </form>
</nav>
<div style="width: 300px;" class="container">
    <p class="h2 text-center">Eliminar departamento</p>
    <form name="formEliminarDepartamento" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="preview text-left">
            <!-- CÓDIGO -->
            <div style="float: left; width: 300px; margin-bottom: -10px;" class="form-group">
                <label for="codUsuario">Código de departamento:&nbsp;</label>
            </div>
            <div style="float: left; width: 60px;" class="form-group">
                <input style="background-color: #cccccc; color: black;" class="form-control" type="text" name="codUsuario" id="codUsuario" value="<?php
                echo $a_departamento->getCodDepartamento();
                ?>" disabled/>
            </div>
            <!-- DESCRIPCIÓN -->
            <div style="float: left; width: 300px; margin-bottom: -10px;" class="form-group">
                <label for="descUsuario">Descripción de departamento:&nbsp;</label>
            </div>
            <div style="float: left; width: 250px;" class="form-group">
                <input style="background-color: #cccccc; color: black;" class="form-control" type="text" name="descUsuario" id="descUsuario" value="<?php
                echo $a_departamento->getDescDepartamento();
                ?>" disabled/>
            </div>
            <!-- FECHA -->
            <div style="float: left; width: 300px; margin-bottom: -10px;" class="form-group">
                <label for="fechaCreacion">Fecha y hora de creación:&nbsp;</label>
            </div>
            <div style="float: left; width: 180px;" class="form-group">
                <input style="background-color: #cccccc; color: black;" class="form-control" type="text" name="fechaCreacion" id="fechaCreacion" value="<?php
                setlocale(LC_TIME, 'es_ES.UTF-8');
                date_default_timezone_set('Europe/Madrid');
                $fecha = date('d-m-Y, H:i:s', $a_departamento->getFechaCreacionDepartamento());
                echo $fecha;
                ?>" disabled/>
            </div>
            <!-- VOLUMEN -->
            <div style="float: left; width: 300px; margin-bottom: -10px;" class="form-group">
                <label for="volumenNegocio">Volumen de negocio:&nbsp;</label>
            </div>
            <div style="float: left; width: 100px;" class="form-group">
                <input style="background-color: #cccccc; color: black;" class="form-control" type="text" name="volumenNegocio" id="volumenNegocio" value="<?php
                echo $a_departamento->getVolumenNegocio() . '€';
                ?>" disabled/>
            </div>
            <div class="form-group">
                <input class="btn btn-danger btn-block" type="button" id="eliminarDepartamento" name="aceptar" value="Eliminar departamento"/>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#eliminarDepartamento').click(function () {
            if (confirm('Este departamento se borrará permanentemente. ¿Estas seguro que deseas borrarla?')) {
                $('#eliminarDepartamento').attr('type', 'submit');
                alert('El departamento se ha borrado con éxito.');
            } else {
                alert('El departamento no se ha borrado.');
            }
        });
    });
</script>