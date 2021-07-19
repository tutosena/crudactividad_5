CREATE DATABASE bdaprendices;

use bdaprendices;

CREATE TABLE tblusuario(

usua_id int(10) PRIMARY KEY,
usua_nomuser VARCHAR(50),
usua_contra VARCHAR(20),
usua_tipo VARCHAR(30)
);


CREATE TABLE tbltiposprograma(
	tiposp_id INT(10) PRIMARY KEY,
	tiposp_tipos VARCHAR(30) 
);


CREATE TABLE tblprograma(
prograp_id INT(10) PRIMARY KEY,
progra_nombre VARCHAR(20),
progra_tipo int(10)

 
);

CREATE TABLE tblficha(
	ficha_numero INT(10) PRIMARY KEY,
	ficha_progra INT(10)

	
);

CREATE TABLE tblaprendices(
	apre_id INT(10) AUTO_INCREMENT PRIMARY KEY,
	apre_tipoid VARCHAR(3),
	apre_numid VARCHAR(20),
	apre_nombres VARCHAR(60),
	apre_apellidos VARCHAR(60),
	apre_direccion VARCHAR(80),
	apre_telefono VARCHAR(20),
	apre_ficha INT(10)

	
	);