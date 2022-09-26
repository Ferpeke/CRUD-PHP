<?php

    require_once "../../app/conexion.php";
    require_once "../../app/metodosCrud.php";

    $nombreDispositivo = $_POST['nombreDispositivo'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $color = $_POST['color'];
    $capacidad = $_POST['capacidad'];
    $descripcion = $_POST['descripcion'];

    $datos = array(
        $nombreDispositivo,
        $modelo,
        $marca,
        $color,
        $capacidad,
        $descripcion
   );

    $llave = new Metodo();
    
    if ($llave->insertarDatos($datos) == 1) {
        header("location:../../index.php");

    } else {
        echo("Fallo al agregar");
    }


?>