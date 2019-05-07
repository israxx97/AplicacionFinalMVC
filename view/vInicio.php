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
                <input type="submit" id="rest" style="margin-right: 5px;" class="btn btn-outline-info" name="rest" value="REST Propio"/>
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
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="https://github.com/israxx97/AplicacionFinalMVC" target="_blank">
                        <div class="redimensionar1"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">Git Hub</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="http://DAW-USGIT.sauces.local/" target="_blank">
                        <div class="redimensionar8"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">Git Lab</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="https://getbootstrap.com/" target="_blank">
                        <div class="redimensionar3"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">Bootstrap</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="https://jquery.com/" target="_blank">
                        <div class="redimensionar4"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">jQuery</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="" target="_blank" onclick="return false">
                        <div class="redimensionar5"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">RSS</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="https://netbeans.apache.org/" target="_blank">
                        <div class="redimensionar6"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">NetBeans</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
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



