<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <form class="container" action="<?php echo $_SERVER['PHP_SELF']; ?>" action="POST">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <input style="margin-right: 5px;" class="btn btn-outline-danger" type="submit" name="cancelar" id="cancelar" value="Volver inicio"/>
            </li>
        </ul>
    </form>
</nav>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="float-left aside-busquedas card mb-3 col-lg-3">
        <p class="h3">Filtros</p>
        <div class="card-body">
            <ul class="list-group ">
                <li style="list-style: none;" class="float-left">
                    <input type="radio" id="todos" name="criterioBusqueda" <?php echo (isset($_SESSION['criterioBusqueda']) && $_SESSION['criterioBusqueda'] == 'todos' ? 'checked' : '') ?> value="todos"/>
                    <label for="todos">Todos</label><br>
                    <input type="radio" id="alta" name="criterioBusqueda" <?php echo (isset($_SESSION['criterioBusqueda']) && $_SESSION['criterioBusqueda'] == 'alta' ? 'checked' : '') ?> value="alta"/>
                    <label for="alta">Alta</label><br>
                    <input type="radio" id="baja" name="criterioBusqueda" <?php echo (isset($_SESSION['criterioBusqueda']) && $_SESSION['criterioBusqueda'] == 'baja' ? 'checked' : '') ?> value="baja"/>
                    <label for="baja">Baja</label><br>
                    <input class="col-lg-9 col-md-9 col-sm-9" type="text" id="buscarPorDescripcion" name="buscarPorDescripcion" placeholder="Buscar por descripción" value="<?php
                    if (isset($_SESSION['buscarPorDescripcion'])) {
                        echo $_SESSION['buscarPorDescripcion'];
                    }
                    ?>" autofocus/>
                    <input type="submit" name="buscar" value="Buscar"/>
                </li>
            </ul>
        </div>
    </div>
</form>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <table class="table table-hover container col-lg-9">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha de creación</th>
                <th scope="col">Volumen de negocio</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($_SESSION['a_departamentos'] as $key => $value) {
                if ($value->getFechaBajaDepartamento() == null) {
                    ?>
                    <tr class="table-success">
                        <td><?php echo $value->getCodDepartamento(); ?></td>
                        <td><?php echo $value->getDescDepartamento(); ?></td>
                        <td><?php
                            setlocale(LC_TIME, 'es_ES.UTF-8');
                            date_default_timezone_set('Europe/Madrid');
                            $fecha = date('d-m-Y, H:i:s', $value->getFechaCreacionDepartamento());
                            echo $fecha;
                            ?></td>
                        <td><?php echo $value->getVolumenNegocio(); ?>€</td>

                        <td>
                            <button type="submit" name="eliminarDepartamento<?php echo $key; ?>">
                                <i class="fas fa-trash"></i>
                            </button>

                            <button type="submit" name="modificarDepartamento<?php echo $key; ?>">
                                <i class="fas fa-edit"></i>
                            </button>

                            <button type="submit" name="bajaLogicaDepartamento<?php echo $key; ?>">
                                <i class="fas fa-arrow-down"></i>
                            </button> 

                            <button type="submit" name="mostrarDepartamento<?php echo $key; ?>">
                                <i class="fas fa-eye"></i>
                            </button>      
                        </td>
                    </tr>
                <?php } else { ?>
                    <tr class="table-danger">
                        <td><?php echo $value->getCodDepartamento(); ?></td>
                        <td><?php echo $value->getDescDepartamento(); ?></td>
                        <td><?php
                            setlocale(LC_TIME, 'es_ES.UTF-8');
                            date_default_timezone_set('Europe/Madrid');
                            $fecha = date('d-m-Y, H:i:s', $value->getFechaCreacionDepartamento());
                            echo $fecha;
                            ?></td>
                        <td><?php echo $value->getVolumenNegocio(); ?>€</td>

                        <td>
                            <button type="submit" name="eliminarDepartamento<?php echo $key; ?>">
                                <i class="fas fa-trash"></i>
                            </button>

                            <button type="submit" name="modificarDepartamento<?php echo $key; ?>">
                                <i class="fas fa-edit"></i>
                            </button>

                            <button type="submit" name="altaLogicaDepartamento<?php echo $key; ?>">
                                <i class="fas fa-arrow-up"></i>
                            </button>

                            <button type="submit" name="mostrarDepartamento<?php echo $key; ?>">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>

                    </tr>
                    <?php
                }
            }
            ?>

        </tbody>
    </table>
    <div>
        <ul class="pagination">
            <?php
            if ($totalPaginas != 0) {
                if ($totalPaginas > 1 && $paginaActual != 1) {
                    ?>
                    <li class="page-item">
                        <?php "<a class='page-link' href='?paginaActual=1&?buscarPorDescripcion" . $_SESSION['buscarPorDescripcion'] . "&?criterioBusqueda=" . $_SESSION['criterioBusqueda'] . "'>Primera</a>" ?>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="page-item">
                        <?php echo "<a class='page-link' href='' disabled>Primera</a>" ?>
                    </li>
                    <?php
                }

                if ($paginaActual > 1) {
                    ?>
                    <li class="page-item">
                        <?php echo "<a class='page-link' href='?paginaActual=" . ($_GET['paginaActual'] - 1) . "&?buscarPorDescripcion=" . $_SESSION['buscarPorDescripcion'] . "&?criterioBusqueda=" . $_SESSION['criterioBusqueda'] . "'>Anterior</a>" ?>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="page-item">
                        <?php echo "<a class='page-link' inactive>Anterior</a>" ?>
                    </li>
                    <?php
                }

                if ($paginaActual < $totalPaginas) {
                    if ($_GET['paginaActual'] == '') {
                        ?>
                        <li class="page-item">
                            <?php echo "<a class='page-link' href='?paginaActual=" . ($_GET['paginaActual'] + 2) . "&?buscarPorDescripcion=" . $_SESSION['buscarPorDescripcion'] . "&?criterioBusqueda=" . $_SESSION['criterioBusqueda'] . "'>Siguiente</a>" ?>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="page-item">
                            <?php echo "<a class='page-link' href='?paginaActual=" . ($_GET['paginaActual'] + 1) . "&?buscarPorDescripcion=" . $_SESSION['buscarPorDescripcion'] . "&?criterioBusqueda=" . $_SESSION['criterioBusqueda'] . "'>Siguiente</a>" ?>
                        </li>
                        <?php
                    }
                } else {
                    ?>
                    <li class="page-item">
                        <?php echo "<a class='page-link' href=''>Siguiente</a>" ?>
                    </li>
                    <?php
                }

                if ($totalPaginas > 1 && $paginaActual != $totalPaginas) {
                    ?>
                    <li class="page-item">
                        <?php echo "<a class='page-link' href='?paginaActual=" . $totalPaginas . "'>Última</a>" ?>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="page-item">
                        <?php echo "<a class='page-link' href='' inactive>Última</a>" ?>
                    </li>
                    <?php
                }
                ?>
                <p><?php echo $paginaActual ?> de <?php echo $totalPaginas ?></p>
                <?php
            } else {
                ?>
                <p class="h4">No exiten coincidencias con la búsqueda.</p>
                <?php
            }
            ?>
        </ul>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        $('.page-link').click(function () {
            if (<?php $_SESSION['criterioBusqueda'] ?> === 'todos') {
                $('#todos').attr('checked', true);
            }

            if (<?php $_SESSION['criterioBusqueda'] ?> === 'alta') {
                $('#alta').attr('checked', true);
            }

            if (<?php $_SESSION['criterioBusqueda'] ?> === 'baja') {
                $('#baja').attr('checked', true);
            }
        });
    });
</script>