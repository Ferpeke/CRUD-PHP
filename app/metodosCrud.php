<?php

    class Metodo {
        public function mostrarDatos($sql){
            $conectar = new Conectar();
            $conexion = $conectar->conexion();
            $resultado = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        }
        public function insertarDatos($datos){
            $conectar = new Conectar();
            $conexion = $conectar->conexion();
            
            $sql = "INSERT INTO t_piezas (nombre_dispositivo, modelo, marca, color, capacidad, descripcion) 
                                values ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]' )";
            return $resultado = mysqli_query($conexion, $sql);
        }
        
        public function actualizarDatos($datos){
            $conectar = new Conectar();
            $conexion = $conectar->conexion();

            $sql = "UPDATE t_piezas SET 
                        nombre_dispositivo = '$datos[0]',
                        modelo = '$datos[1]', 
                        marca = '$datos[2]', 
                        color = '$datos[3]', 
                        capacidad = '$datos[4]', 
                        descripcion = '$datos[5]'
                        WHERE id_pieza = '$datos[6]'
            ";
            return $resultado = mysqli_query($conexion, $sql);
            
        }
        public function eliminarDato($id){
            $conectar = new Conectar();
            $conexion = $conectar->conexion();
            $sql = "DELETE FROM t_piezas WHERE id_pieza = '$id'";
            return $resultado = mysqli_query($conexion, $sql);

        }
    }

?>