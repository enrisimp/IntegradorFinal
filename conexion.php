<?php
function conexion(){
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";

/*     $servidor = "localhost";
    $usuario = "id20038025_admin";
    $clave = "Webhost15!as";

    $baseDatos = "id20038025_confbaas"; */
    $baseDatos = "confbaas";

    //conectar con el servidor
    $conectar = mysqli_connect($servidor, $usuario, $clave);
    //seleccionar la base de datos
    mysqli_select_db($conectar, $baseDatos);

    /*
    echo "<pre>";
    print_r($conectar);
    echo "</pre>";
    */

    return $conectar;

}

