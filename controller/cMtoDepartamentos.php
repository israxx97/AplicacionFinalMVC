<?php

/* if ($criterioBusqueda == null) {
  $criterioBusqueda = '';
  }

  if ($_REQUEST['buscarPorDescripcion'] == null) {
  $_REQUEST['buscarPorDescripcion'] = '';
  }

  if ($_REQUEST['paginaActual'] == null) {
  $_REQUEST['paginaActual'] = 1;
  }

  $contadorRegistros = Departamento::contarDepartamentos($_REQUEST['buscarPorDescripcion'], $criterioBusqueda);
  $numPaginas = ceil($contadorRegistros / 4);
  $departamentos = Departamento::buscaDepartamentosPorDescripcion($_REQUEST['buscarPorDescripcion'], $criterioBusqueda, $_REQUEST['paginaActual'], 4);

  if (isset($_REQUEST['criterioBusqueda'])) {
  if ($_REQUEST['criterioBusqueda'] == 'alta') {
  $criterioBusqueda = ' AND T02_FechaBajaDepartamento IS NULL';
  } else if ($_REQUEST['criterioBusqueda'] == 'baja') {
  $criterioBusqueda = ' AND T02_FechaBajaDepartamento IS NOT NULL';
  }
  }

  if ($_REQUEST['criterioBusqueda'] == null) {
  $_REQUEST['criterioBusqueda'] = 'todos';
  }

  if (isset($_REQUEST['cancelar'])) {
  $_SESSION['pagina'] = 'inicio';
  header('Location: index.php');
  exit;
  }

  if (isset($_REQUEST['anadirDepartamento'])) {
  $_SESSION['pagina'] = 'altaDepartamento';
  header('Location: index.php');
  exit;
  }

  for ($i = 0; $i < count($departamentos); $i++) {
  if (isset($_REQUEST['eliminarDepartamento' . $i])) {
  $_SESSION['codDepartamento'] = $departamentos[$i]->getCodDepartamento();
  $_SESSION['pagina'] = 'eliminarDepartamento';
  header('Location: index.php');
  exit;
  }

  if (isset($_REQUEST['modificarDepartamento' . $i])) {
  $_SESSION['codDepartamento'] = $departamentos[$i]->getCodDepartamento();
  $_SESSION['pagina'] = 'modificarDepartamento';
  header('Location: index.php');
  exit;
  }

  if (isset($_REQUEST['altaLogicaDepartamento' . $i])) {
  $_SESSION['codDepartamento'] = $departamentos[$i]->getCodDepartamento();
  if ($departamentos->rehabilitaDepartamento()) {
  $_SESSION['pagina'] = 'mtoDepartamentos';
  header('Location: index.php');
  exit;
  }
  }

  if (isset($_REQUEST['bajaLogicaDepartamento' . $i])) {
  $_SESSION['codDepartamento'] = $departamentos[$i]->getCodDepartamento();
  if ($departamentos->bajaLogicaDepartamento()) {
  $_SESSION['pagina'] = 'mtoDepartamentos';
  header('Location: index.php');
  exit;
  }
  }

  if (isset($_REQUEST['mostrarDepartamento' . $i])) {
  $_SESSION['codDepartamento'] = $departamentos[$i]->getCodDepartamento();
  $_SESSION['pagina'] = 'mostrarDepartamento';
  header('Location: index.php');
  exit;
  }
  }

  if (isset($_REQUEST['buscar'])) {
  $contadorRegistros = Departamento::contarDepartamentos($_REQUEST['buscarPorDescripcion'], $criterioBusqueda);
  $numPaginas = ceil($contadorRegistros / 4);
  $departamentos = Departamento::buscaDepartamentosPorDescripcion($_REQUEST['buscarPorDescripcion'], $criterioBusqueda, $_REQUEST['paginaActual'], 4);
  require_once $vistas['layout'];
  } else {
  $contadorRegistros = Departamento::contarDepartamentos($_REQUEST['buscarPorDescripcion'], $criterioBusqueda);
  $numPaginas = ceil($contadorRegistros / 4);
  $departamentos = Departamento::buscaDepartamentosPorDescripcion($_REQUEST['buscarPorDescripcion'], $criterioBusqueda, $_REQUEST['paginaActual'], 4);
  $_SESSION['pagina'] = 'mtoDepartamentos';
  require_once $vistas['layout'];
  } */












/* $_SESSION['pagina'] = 'mtoDepartamentos';
  require_once $vistas['layout'];

  if (isset($_REQUEST['cancelar'])) {
  $_SESSION['pagina'] = 'inicio';
  header('Location: index.php');
  exit;
  }

  if (isset($_REQUEST['anadir'])) {
  $_SESSION['pagina'] = 'altaDepartamento';
  header('Location: index.php');
  exit;
  }

  $departamentos = Departamento::buscaDepartamentosPorDescripcion($descDepartamento, $criterioBusqueda, $paginaActual, 4);

  for ($i = 0; $i < count($departamentos); $i++) {
  if (isset($_REQUEST['modificarDepartamento' . $i])) {
  $_SESSION['codDepartamento'] = $departamentos[$i]->getCodDepartamento();
  $_SESSION['pagina'] = 'modificarDepartamento';
  header('Location: index.php');
  exit;
  }
  }

  for ($i = 0; $i < count($departamentos); $i++) {
  if (isset($_REQUEST['mostrarDepartamento' . $i])) {
  $_SESSION['codDepartamento'] = $departamentos[$i]->getCodDepartamento();
  $_SESSION['pagina'] = 'mostrarDepartamento';
  header('Location: index.php');
  exit;
  }
  }

  for ($i = 0; $i < count($departamentos); $i++) {
  if (isset($_REQUEST['eliminarDepartamento' . $i])) {
  $_SESSION['codDepartamento'] = $departamentos[$i]->getCodDepartamento();
  $_SESSION['pagina'] = 'eliminarDepartamento';
  header('Location: index.php');
  exit;
  }
  }

  for ($i = 0; $i < count($departamentos); $i++) {
  if (isset($_REQUEST['altaLogicaDepartamento' . $i])) {
  $_SESSION['codDepartamento'] = $departamentos[$i]->getCodDepartamento();
  $_SESSION['pagina'] = 'altaLogicaDepartamento';
  header('Location: index.php');
  exit;
  }
  }

  for ($i = 0; $i < count($departamentos); $i++) {
  if (isset($_REQUEST['bajaLogicaDepartamento' . $i])) {
  $_SESSION['codDepartamento'] = $departamentos[$i]->getCodDepartamento();
  $_SESSION['pagina'] = 'bajaLogicaDepartamento';
  header('Location: index.php');
  exit;
  }
  }

  if (isset($_REQUEST['buscar'])) {
  $opcionBusqueda = $_REQUEST['criterioBusqueda'];
  $buscarPorDescripcion = $_REQUEST['buscarPorDescripcion'];
  $departamentos = Departamento::buscaDepartamentosPorDescripcion($descDepartamento, $criterioBusqueda, $paginaActual, 4);
  }

  if (isset($_REQUEST['paginaActual'])) {
  $paginaActual = $_REQUEST['paginaActual'];
  } else {
  $paginaActual = 1;
  }

  if (isset($_REQUEST['criterioBusqueda'])) {
  if ($_REQUEST['criterioBusqueda'] == 'alta') {
  $criterioBusqueda = ' AND T02_FechaBajaDepartamento IS NULL';
  } else if ($_REQUEST['criterioBusqueda'] == 'baja') {
  $criterioBusqueda = ' AND T02_FechaBajaDepartamento IS NOT NULL';
  }
  }

  $buscarPorDescripcion = $_REQUEST['buscarPorDescripcion'];

  if ($buscarPorDescripcion == null) {
  $buscarPorDescripcion = '';
  }

  $contadorRegistros = Departamento::contarDepartamentos($descDepartamento, $criterioBusqueda);
  $numPaginas = ceil($contadorRegistros / 4);
  $departamentos = Departamento::buscaDepartamentosPorDescripcion($descDepartamento, $criterioBusqueda, $paginaActual, 4); */











if ($_SESSION['buscarPorDescripcion'] == null) {
    $_SESSION['buscarPorDescripcion'] = '';
}

if ($_SESSION['criterioBusqueda'] == null) {
    $_SESSION['criterioBusqueda'] = 'todos';
}

if (isset($_REQUEST['cancelar'])) {
    $_SESSION['pagina'] = 'inicio';
    $_SESSION['criterioBusqueda'] = 'todos';
    $_SESSION['buscarPorDescripcion'] = '';
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['importar'])) {
    $_SESSION['pagina'] = 'importar';
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['exportar'])) {
    $_SESSION['pagina'] = 'exportar';
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['anadir'])) {
    $_SESSION['pagina'] = 'altaDepartamento';
    header('Location: index.php');
    exit;
}

foreach ($_SESSION['a_departamentos'] as $key => $value) {
    if (isset($_REQUEST['eliminarDepartamento' . $key])) {
        $_SESSION['codDepartamento'] = $value->getCodDepartamento();
        $_SESSION['pagina'] = 'eliminarDepartamento';
        header('Location: index.php');
        exit;
    }

    if (isset($_REQUEST['modificarDepartamento' . $key])) {
        $_SESSION['codDepartamento'] = $value->getCodDepartamento();
        $_SESSION['pagina'] = 'modificarDepartamento';
        header('Location: index.php');
        exit;
    }

    if (isset($_REQUEST['altaLogicaDepartamento' . $key])) {
        $_SESSION['codDepartamento'] = $value->getCodDepartamento();
        $_SESSION['pagina'] = 'altaLoginaDepartamento';
        header('Location: index.php');
        exit;
    }

    if (isset($_REQUEST['bajaLogicaDepartamento' . $key])) {
        $_SESSION['codDepartamento'] = $value->getCodDepartamento();
        $_SESSION['pagina'] = 'bajaLoginaDepartamento';
        header('Location: index.php');
        exit;
    }

    if (isset($_REQUEST['mostrarDepartamento' . $key])) {
        $_SESSION['codDepartamento'] = $value->getCodDepartamento();
        $_SESSION['pagina'] = 'mostrarDepartamento';
        header('Location: index.php');
        exit;
    }
}

if (isset($_REQUEST['buscar'])) {
    $_SESSION['criterioBusqueda'] = $_REQUEST['criterioBusqueda'];
    $_SESSION['buscarPorDescripcion'] = $_REQUEST['buscarPorDescripcion'];
} else {
    $_SESSION['criterioBusqueda'] = 'todos';
}

/*
 * A continuación es la parte del controlador de la paginación.
 */
if (isset($_REQUEST['paginaActual'])) {
    $paginaActual = $_REQUEST['paginaActual'];
} else {
    $paginaActual = 1;
}

$numRegistrosPorPagina = 4;
$contadorResultados = Departamento::contarDepartamentos($_SESSION['buscarPorDescripcion'], $_SESSION['criterioBusqueda']);
$totalPaginas = ceil($contadorResultados / $numRegistrosPorPagina);
$primerRegistro = ($paginaActual - 1) * $numRegistrosPorPagina;

$_SESSION['a_departamentos'] = Departamento::buscaDepartamentosPorDescripcion($_SESSION['buscarPorDescripcion'], $_SESSION['criterioBusqueda'], $primerRegistro, $numRegistrosPorPagina);

$depBaja = 0;
$depAlta = 0;
$contadorResultados = Departamento::contarDepartamentos('', 'todos');
$departamentosAltaBaja = Departamento::buscaDepartamentosPorDescripcion('', 'todos', 0, $contadorResultados);

foreach ($departamentosAltaBaja as $key => $value) {
    if ($value->getFechaBajaDepartamento() == null) {
        $depAlta++;
    } else {
        $depBaja++;
    }
}

$_SESSION['pagina'] = 'mtoDepartamentos';
require_once $vistas['layout'];
