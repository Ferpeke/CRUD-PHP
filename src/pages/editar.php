<?php
    require_once "../../app/conexion.php";
    $llave = new Conectar();
    $conexion = $llave->conexion();
    $id = $_GET['id'];
    $sql = "SELECT nombre_dispositivo, modelo, marca, color, capacidad, descripcion FROM t_piezas WHERE id_pieza='$id'";
    $resultado =  mysqli_query($conexion, $sql);
    $mostrar =  mysqli_fetch_row($resultado);
?>
<!doctype html>
<html lang="es">
    
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD</title>
</head>

<body>

    
    <div class="container mt-2">
        <div class="row">
            <div class="col shadow p-3 mb-5 bg-body rounded">
                <div class="text-center">
                    <h1>Aplica los cambios correspondientes</h1>
                </div>
            </div>
            <hr>
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>LLENA LOS CAMPOS CORRECTOS</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <form action="../../app/procesos/actualizar.php" method="POST">
                                <input type="text" hidden = "" name="id" value="<?php echo $id ?>">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="nombreDispositivo" name="nombreDispositivo" placeholder="Nombre del Dispopsitivo" required autocomplete="off" value = "<?php echo $mostrar[0] ?>">
                                    <label for="nombreDispositivo">Nombre del Dispositivo</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo" required autocomplete="off" value = "<?php echo $mostrar[1]?>">
                                    <label for="modelo">Modelo</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" required autocomplete="off" value = "<?php echo $mostrar[2] ?>">
                                    <label for="marca">Marca</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="color" name="color" placeholder="Color" required autocomplete="off" value = "<?php echo $mostrar[3] ?>">
                                    <label for="color">Color</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="capacidad" name="capacidad" placeholder="Capacidad" required autocomplete="off" value = "<?php echo $mostrar[4] ?>">
                                    <label for="capacidad">Capacidad</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <textarea class="form-control" placeholder="Escribe la Descrpción del Dispositivo" id="descripcion" name="descripcion" style="height: 100px" required autocomplete="off"><?php echo $mostrar[5] ?></textarea>
                                    <label for="descripcion">Descripción</label>
                                </div>
                                <div class="text-center">
                                    <a href="../../index.php">
                                        <span class="btn btn-info">Regresar</span>
                                    </a>
                                    <button class="btn btn-secondary agregar w-50">Actualizar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div></div>
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
    <script src="../../src/js/script.js"></script>
</body>

</html>