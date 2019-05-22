<link rel="stylesheet" type="text/css" href="webroot/css/vInicioStyles.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <form class="container" name="formInicio" action="<?php echo $_SERVER['PHP_SELF']; ?>" action="POST">
        <ul class="nav nav-pills container">
            <li class="nav-item">
                <input type="submit" id="cerrarSession" style="margin-right: 5px;" class="btn btn-outline-danger" name="cerrarSession" value="Log Out"/>
            </li>
            <li class="nav-item">
                <input type="submit" id="editarPerfil" style="margin-right: 5px;" class="btn btn-outline-info" name="editarPerfil" value="Editar Perfil"/>
            </li>
            <li class="nav-item">
                <input type="submit" id="rest" style="margin-right: 5px;" class="btn btn-outline-info" name="rest" value="REST"/>
            </li>
            <li class="nav-item">
                <input type="submit" id="mtoDepartamentos" style="margin-right: 5px;" class="btn btn-outline-info" name="mtoDepartamentos" value="Mto. Departamentos"/>
            </li>
            <?php if ($_SESSION['usuario']->getPerfil() == 'administrador') { ?>
                <li class="nav-item">
                    <input type="submit" id="mtoUsuarios" style="margin-right: 5px;" class="btn btn-outline-warning" name="mtoUsuarios" value="Mto. Usuarios"/>
                </li>
            <?php } ?>
        </ul>
    </form>
</nav>
<p class="container"><?php echo $_SESSION['visitas'] ?></p>
<div class="card mb-3 col-lg-4 float-right">
    <h3 class="card-header">El tiempo en <?php echo ucwords(strtolower($_SESSION['estacion']['ubi'])); ?></h3>
    <div class="card-body">
        <p class="card-text"><?php echo '<b>Longitud/latitud: </b>' . $_SESSION['estacion']['lon'] . 'º, ' . $_SESSION['estacion']['lat'] . 'º' ?></p>
        <p class="card-text"><?php echo '<b>Altitud: </b>' . $_SESSION['estacion']['alt'] . 'm' ?></p>
        <p class="card-text"><?php echo '<b>Último dato registrado: </b>' . $_SESSION['estacion']['fint']; ?></p>
        <p class="card-text"><?php echo '<b>Precipitaciones: </b>' . $_SESSION['estacion']['prec'] . 'L/m²' ?></p>
        <p class="card-text"><?php echo '<b>Temperatura mínima: </b>' . $_SESSION['estacion']['tamin'] . 'ºC' ?></p>
        <p class="card-text"><?php echo '<b>Temperatura actual: </b>' . $_SESSION['estacion']['ta'] . 'ºC' ?></p>
        <p class="card-text"><?php echo '<b>Temperatura máxima: </b>' . $_SESSION['estacion']['tamax'] . 'ºC' ?></p>
        <p class="card-text"><?php echo '<b>Velocidad media del viento: </b>' . $_SESSION['estacion']['vv'] . 'm/s' ?></p>
    </div>
</div>
<div class="album py-5 bg-light col-lg-8 float-left">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-6 shadow-sm">
                    <a href="https://github.com/israxx97/AplicacionFinalMVC" target="_blank">
                        <div class="redimensionar1"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">Git Hub</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-6 shadow-sm">
                    <a href="http://DAW-USGIT.sauces.local/" target="_blank">
                        <div class="redimensionar8"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">Git Lab</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-6 shadow-sm">
                    <a href="https://getbootstrap.com/" target="_blank">
                        <div class="redimensionar3"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">Bootstrap</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-6 shadow-sm">
                    <a href="https://jquery.com/" target="_blank">
                        <div class="redimensionar4"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">jQuery</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-6 shadow-sm">
                    <a href="" target="_blank" onclick="return false">
                        <div class="redimensionar5"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">RSS</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-6 shadow-sm">
                    <a href="https://netbeans.apache.org/" target="_blank">
                        <div class="redimensionar6"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">NetBeans</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-6 shadow-sm">
                    <a href="https://www.apachefriends.org/es/index.html" target="_blank">
                        <div class="redimensionar7"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">XAMPP</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



