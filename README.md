# AplicacionFinalMVC
## Índice
1. [Uso del REST Propio](#cajaREST)
2. [Versión 0.1](#caja1)
3. [Versión 0.2](#caja2)
4. [Versión 0.2.1](#caja3)

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
- [ ] Consultar/Modificar un departamento.
- [ ] Eliminar un departamento.
- [ ] Baja lógica de un departamento.
- [ ] Rehabilitar un departamento.
* Otros.
- [ ] Usar un servicio SOAP ajeno.
- [ ] Usar un servicio SOAP propio.
- [ ] Usar un servicio REST ajeno.
- [ ] Usar un servicio REST propio.
<div id='cajaREST'>
## Guía de uso del REST Propio
Lo que hará este REST es que, al introducir el id de un producto en un campo input de tipo texto, nos mostrará toda la información del producto si existe este producto en un archivo .json que hemos creado.
   
En primer lugar crearemos los archivos que vamos a utilizar:
   
* api
    * REST.php.
    * rest.json.
* config
    * config.php.
* controller
    * cREST.php.
* view
    * vREST.php.
   
El archivo config.php ya debería de estar creado, aquí solo introduciremos la/las nuevas constantes que van a contener la ruta del archivo .json con los datos.

En mi caso tengo 3 constantes diferentes ya que trabajo en tres entornos distintos:

~~~
define("RUTACASA", "http://localhost/index_03/index/ProyectoDWES/ProyectoTema06/codigoPHP/AplicacionFinalMVC/api/rest.json");
define("RUTAED", "http://192.168.20.19/DAW202/public_html/ProyectoDWES/ProyectoTema06/codigoPHP/AplicacionFinalMVC/api/rest.json");
define("RUTAEE", "http://192.168.20.18/DAW202/public_html/ProyectoDWES/ProyectoTema06/codigoPHP/AplicacionFinalMVC/api/rest.json");
~~~
</div>

<div id='caja3'>
## v0.2.1 - 09/05/2019, 08:45 (Versión actual, inestable)
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