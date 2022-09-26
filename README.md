# CRUD Basico con PHP.
## Este sistema fue creado por FerPeke

### A este sistema le falta el archivo de *conexion.php* el cual les dejaré instrucciones para que puedan usar el sistema sin problemas.

1. Destro de la carpeta `app` creen un archivo nuevo llamadp *conexcion.php* y dentro peguen lo siguente:

`
    <?php

    class Conectar {
        private $servidor="localhost";
        private $usuario="<Ingresen su usuario>";
        private $bd="crudPComputo";
        private $password="<Ingresen su passwor>";

        public function conexion() {
            $conexion = mysqli_connect(
                $this->servidor, 
                $this->usuario, 
                $this->password,
                $this->bd
            );
            return $conexion;
        }
    }


?>
`

2. Listo!! Disfruten la aplicación.