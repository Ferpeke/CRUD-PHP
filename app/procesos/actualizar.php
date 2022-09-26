<?php 
    require_once "../../app/conexion.php";
    require_once "../../app/metodosCrud.php";

    $nombreDispositivo = $_POST['nombreDispositivo'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $color = $_POST['color'];
    $capacidad = $_POST['capacidad'];
    $descripcion = $_POST['descripcion'];
    $id = $_POST['id'];

    $datos = array(
        $nombreDispositivo,
        $modelo,
        $marca,
        $color,
        $capacidad,
        $descripcion,
        $id
   );
   $llave = new Metodo();

   if ($llave->actualizarDatos($datos) == 1) {
    header("location:../../index.php");

    } else {
        echo("Fallo al Actualizar");
    }

?>