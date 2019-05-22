# AplicacionFinalMVC

## Índice

1. [Versión 0.1](#caja1)
2. [Versión 0.2](#caja2)
3. [Versión 0.2.1](#caja3)
4. [Versión 0.3](#caja4)
5. [Versión 0.4](#caja5)

Se creará una aplicación en PHP con la arquitectuca Modelo Vista Controlador. Los objetivos serán los siguientes:
* Administración de usuarios.
- [x] Iniciar sesión.
- [x] Borrar sesión.
- [x] Registrarse.
- [x] Editar perfil.
- [x] Borrar cuenta.
- [ ] Modificar contraseña.
* Mantenimiento de departamentos.
- [ ] Exportar.
- [ ] Importar.
- [ ] Buscar departamentos por descripción.
- [ ] Crear un departamento.
- [x] Consultar/Modificar un departamento.
- [x] Eliminar un departamento.
- [ ] Baja lógica de un departamento.
- [ ] Rehabilitar un departamento.
* Otros.
- [ ] Usar un servicio SOAP ajeno.
- [ ] Usar un servicio SOAP propio.
- [x] Usar un servicio REST ajeno.
- [x] Usar un servicio REST propio.

<div id='caja5'>

## v0.4 - 22/05/2019, 12:20 (Versión actual, inestable)

En esta versión se ha implementado la paginación inestable (no está del todo bien), y se han modificado algunas funciones.

    * config
        Modificado config.php
    * controller
        Añadido cEliminarDepartamento.php
        Modificado cInicio.php
        Añadido cModificarDepartamento.php
        Añadido cMostrarDepartamento.php
        Modificado cMtoDepartamentos.php
        Modificado cREST.php
    * model
        DBPDO.php
        Departamento.php
        DepartamentoDB.php
        DepartamentoPDO.php
        Añadido RestDB.php
        Añadido RestPDO.php
    * scriptDB
        02_Insercion.sql
    * view
        Añadido vEliminarDepartamento.php
        Añadido vModificarDepartamento.php
        Añadido vMostrarDepartamento.php
        Modificado MtoDepartamentos.php
        Modificado vREST.php
    * Añadido .htaccess
    * Modificado index.php

</div>

<div id='caja4'>
    
## v0.3 - 12/05/2019, 13:38

En esta versión se ha implementado el REST ajeno del AEMET y el REST propio que podemos encontrar en este [enlace](https://github.com/israxx97/ApiREST).  

  * api
    * Borrado REST.php.
    * Borrado rest.json.
  * config
    * Modificado config.php.
    * Añadido configDB_inonos.php.
  * controller
    * Modificado cInicio.php.
    * Modificado cMtoDepartamentos.php.
    * Modificado cREST.php.
  * model
    * Añadido AEMET.php.
    * Modificado Cerveza.php.
    * Modificado DBPDO.php.
    * Añadido REST.php.
  * scriptDB
    * Modificado 01_Creacion.sql.
    * Modificado 02_Insercion.sql.
  * view
    * Modificado layout.php.
    * Modificado vInicio.php.
    * Modificado vREST.php.

</div>

<div id='caja3'>
 
## v0.2.1 - 09/05/2019, 08:45

En esta versión se ha implementado el REST ajeno.
   
* controller
    * Modificado cREST.php.
* model
    * Añadido Cerveza.php.
* view
    * Modificado vREST.php.
</div>

<div id='caja2'>
   
## v0.2 - 08/05/2019, 00:43

En esta versión se ha añadido la ventana del Mantenimiento de departamentos y el servicio REST propio.

* api
    * Añadido REST.php.
    * Añadido rest.json.
* config
    * Modificado config.php.
* controller
    * Modificado cInicio.php.
    * Añadido cMtoDepartamentos.php.
    * Añadido cREST.php.
* model
    * Añadido Departamento.php.
    * Añadido DepartamentoDB.php.
    * Añadido DepartamentoPDO.php.
    * Modificado Usuario.php
* view
    * Modificado layout.php
    * Modificado vInicio.php
    * Modificado vLogin.php
    * Añadido vMtoDepartamentos.php
    * Añadido vREST.php
    * Modificado WIP.php
* webroot
    * css
        * Añadido footerStyles.css.
        * Modificado vInicioStyles.css.
    * images
        * Añadido 190505DiagramaDeClases.PNG.
        * Añadido fox.png.
        * Añadido github-logo.png.
        * Añadido gitlab.jpeg.
</div>

<div id='caja1'>
   
## v0.1 - 01/05/2019, 15:02

Esta versión comenzará con la versión 0.4 de la aplicación [AplicacionLogInLogOffMVC](https://github.com/israxx97/AplicacionLogInLogOffMVC).

</div>