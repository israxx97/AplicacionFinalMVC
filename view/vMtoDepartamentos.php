<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <form class="container" name="formMtoDepartamentos" action="<?php echo $_SERVER['PHP_SELF']; ?>" action="POST">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <input style="margin-right: 5px;" class="btn btn-outline-danger" type="submit" name="cancelar" id="cancelar" value="Volver inicio"/>
            </li>
        </ul>
    </form>
</nav>
<form class="" name="formMtoDepartamentos" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="float-left aside-busquedas card mb-3 col-lg-3">
        <p class="h3">Filtros</p>
        <div class="card-body">
            <ul class="list-group ">
                <li style="list-style: none;" class="float-left">
                    <input type="radio" id="todos" name="criterioBusqueda" <?php echo (isset($_REQUEST['criterioBusqueda']) && $_REQUEST['criterioBusqueda'] == 'todos' ? 'checked' : '') ?> value="todos" checked/>
                    <label for="todos">Todos</label><br>
                    <input type="radio" id="alta" name="criterioBusqueda" <?php echo (isset($_REQUEST['criterioBusqueda']) && $_REQUEST['criterioBusqueda'] == 'alta' ? 'checked' : '') ?> value="alta"/>
                    <label for="alta">Alta</label><br>
                    <input type="radio" id="baja" name="criterioBusqueda" <?php echo (isset($_REQUEST['criterioBusqueda']) && $_REQUEST['criterioBusqueda'] == 'baja' ? 'checked' : '') ?> value="baja"/>
                    <label for="baja">Baja</label><br>
                    <input class="col-lg-9 col-md-9 col-sm-9" type="text" name="buscarPorDescripcion" placeholder="Buscar por descripción" value="<?php
                    if (isset($_REQUEST['buscarPorDescripcion'])) {
                        echo $_REQUEST['buscarPorDescripcion'];
                    }
                    ?>"/>
                    <input type="submit" name="buscar" value="Buscar"/>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-hover container col-lg-9">
        <thead>
            <tr>
                <th scope="col">CodDepartamento</th>
                <th scope="col">DescDepartamento</th>
                <th scope="col">Fecha de creación</th>
                <th scope="col">Volumen de negocio</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            for ($i = 0; $i < count($a_departamento); $i++) {
                if ($a_departamento[$i]->getFechaBajaDepartamento() == null) {
                    ?>
                    <tr class="table-success">
                        <td><?php echo $a_departamento[$i]->getCodDepartamento(); ?></td>
                        <td><?php echo $a_departamento[$i]->getDescDepartamento(); ?></td>
                        <td><?php
                            setlocale(LC_TIME, 'es_ES.UTF-8');
                            date_default_timezone_set('Europe/Madrid');
                            $fecha = date('d-m-Y, H:i:s', $a_departamento[$i]->getFechaCreacionDepartamento());
                            echo $fecha;
                            ?></td>
                        <td><?php echo $a_departamento[$i]->getVolumenNegocio(); ?>€</td>
                        <td></td>
                    </tr>
                <?php } else { ?>
                    <tr class="table-danger">
                        <td><?php echo $a_departamento[$i]->getCodDepartamento(); ?></td>
                        <td><?php echo $a_departamento[$i]->getDescDepartamento(); ?></td>
                        <td><?php
                            setlocale(LC_TIME, 'es_ES.UTF-8');
                            date_default_timezone_set('Europe/Madrid');
                            $fecha = date('d-m-Y, H:i:s', $a_departamento[$i]->getFechaCreacionDepartamento());
                            echo $fecha;
                            ?></td>
                        <td><?php echo $a_departamento[$i]->getVolumenNegocio(); ?>€</td>
                        <td></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</form>