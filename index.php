<?php
    require_once "./app/conexion.php";
    require_once "app/metodosCrud.php";
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/styles.css">
    <title>CRUD</title>
</head>

<body>
    <div class="container">
        <div class="row">
            
            <div class="col mt-2 shadow p-3 mb-5 bg-body rounded">
                <div class="text-center">
                    <h1>CRUD basico</h1>
                </div>
            </div>
            <hr>
            <div class="col">
                <div class="text-center">
                    <h3>Tabla de datos</h3>
                </div>
                <div>
                    <a href="./src/pages/agregar.php">
                        <span class="btn btn-warning">Agregar un nuevo dispositivo</span>
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover text-center">
                        <thead>
                            <tr>
                                <th>Nombre del Dispositivo</th>
                                <th>Modelo</th>
                                <th>Marca</th>
                                <th>Color</th>
                                <th>Capacidad (si existe)</th>
                                <th>Descripción</th>
                                <th>Fecha de Agregado</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $llave = new Metodo();
                                $sql = "SELECT id_pieza, nombre_dispositivo, modelo, marca, color, capacidad, descripcion, fecha_agregado FROM t_piezas";
                                $datos = $llave->mostrarDatos($sql);
                                foreach ($datos as $key){
                            ?>
                            <tr>
                                <td><?php echo $key['nombre_dispositivo']; ?></td>
                                <td><?php echo $key['modelo']; ?></td>
                                <td><?php echo $key['marca']; ?></td>
                                <td><?php echo $key['color']; ?></td>
                                <td><?php echo $key['capacidad']; ?></td>
                                <td><?php echo $key['descripcion']; ?></td>
                                <td><?php echo $key['fecha_agregado']; ?></td>
                                <td><a href="src/pages/editar.php?id=<?php echo $key['id_pieza']?>"><span class="btn btn-secondary">Editar</span></a></td>
                                <td><a href="src/pages/eliminar.php?id=<?php echo $key['id_pieza']?>"><span class="btn btn-danger">Eliminar</span></a></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js"
        integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="src/js/script.js"></script>
</body>

</html>