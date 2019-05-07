# AplicacionFinalMVC
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
## v0.2 - 08/05/2019, 00:43 (Versión actual, inestable)
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
## v0.1 - 01/05/2019, 15:02
Esta versión comenzará con la versión 0.4 de la aplicación [AplicacionLogInLogOffMVC](https://github.com/israxx97/AplicacionLogInLogOffMVC).