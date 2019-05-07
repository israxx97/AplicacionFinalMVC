<form class="container" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="submit" name="cancelar" value="Cancelar"/><br>
    <input type="text" name="idProducto" id="producto" value="<?php
           if (isset($_REQUEST['idProducto'])) {
               echo $_REQUEST['idProducto'];
           }
           ?>"/>&nbsp;
    <input type="submit" name="enviar" value="Enviar"/>
    <p><?php echo $_SESSION['producto']; ?></p>
</form>

