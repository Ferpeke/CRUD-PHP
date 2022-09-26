create database crudPComputo;

use crudPComputo;

create table t_piezas (
	id_pieza int AUTO_INCREMENT NOT NULL,
	nombre_dispositivo varchar(100),
	modelo varchar(100),
	marca varchar(100),
	color varchar(50),
	capacidad varchar(100),
	descripcion varchar(100),
	fecha_agregado date,
	PRIMARY KEY(id_pieza)
);