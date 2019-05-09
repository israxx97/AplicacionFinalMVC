<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <form class="container" name="formREST" action="<?php echo $_SERVER['PHP_SELF']; ?>" action="POST">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <input style="margin-right: 5px;" class="btn btn-outline-danger" type="submit" name="cancelar" id="cancelar" value="Volver inicio"/>
            </li>
        </ul>
    </form>
</nav>
<form class="container" name="formREST" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="idProducto" id="producto" value="<?php
           if (isset($_REQUEST['idProducto'])) {
               echo $_REQUEST['idProducto'];
           }
           ?>"/>&nbsp;
    <input type="submit" name="enviar" value="Enviar"/>
    <p><?php echo $_SESSION['producto']; ?></p>
</form>
<form class="container" name="formCristal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="idCristal" id="idCristal" value="<?php
           if (isset($_REQUEST['idCristal'])) {
               echo $_REQUEST['idCristal'];
           }
           ?>"/>&nbsp;
    <input type="submit" name="buscarCristal" value="Enviar"/>
    <p><?php echo $_SESSION['cristalRespuesta']; ?></p>
</form>

