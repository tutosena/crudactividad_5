<?php

	include("funciones.php");
	$vtipoid=$_POST['tipoid'];
	$vnumid = $_POST['numid'];
	$vnombres = $_POST['nombres'];
	$vapellidos = $_POST['apellidos'];
	$vdireccion = $_POST['direccion'];
	$vtelefono = $_POST['telefono'];
	$vficha = $_POST['ficha'];

	$miconexion = conectar_bd("",'bdaprendices');
	$resultado = consulta($miconexion,"INSERT INTO tblaprendices(apre_tipoid, apre_numid, apre_nombres, apre_apellidos, apre_direccion, apre_telefono, apre_ficha) VALUES('{$vtipoid}','{$vnumid}','{$vnombres}','{$vapellidos}','{$vdireccion}','{$vtelefono}','{$vficha}')");

	if($resultado){

		echo " Guardado exitoso";
	}



?>