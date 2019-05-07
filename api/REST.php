<?php

class REST {

    public static function obtenerDatosProducto($idProducto) {
        $contenidoJson = file_get_contents('http://localhost/index_03/index/ProyectoDWES/ProyectoTema06/codigoPHP/AplicacionFinalMVC/api/rest.json');
        $productos = json_decode($contenidoJson, true);

        foreach ($productos['productos'] as $producto) {
            if ($idProducto == $producto['id']) {
                $cadena = "<b>Id del producto: </b>" . $producto['id'] . "<br>" . "<b>Nombre del producto: </b>" . $producto['nombre'] . "<br>" . "<b>Peso neto del producto: </b>" . $producto['pesoNeto'];
            }
        }
        return $cadena;
    }

}
