<?php
    require_once "../../app/conexion.php";
    require_once "../../app/metodosCrud.php";
    $id = $_POST['id'];

    $llave = new Metodo();

   if ($llave->eliminarDato($id) == 1) {
    header("location:../../index.php");

    } else {
        echo("Fallo al ELIMINAR");
        
    }


?>