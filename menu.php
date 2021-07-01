<?php

	include("funciones.php");
	session_start();
	$_SESSION['nusuario'] = $_POST['usuario'];
	$_SESSION['nclave'] = $_POST['clave'];

	$miconexion = conectar_bd('', 'bdaprendices');
	$resultado = consulta($miconexion,"SELECT * FROM tblusuario WHERE usua_nomuser = '{$_SESSION['nusuario']}' AND usua_contra='{$_SESSION['nclave']}'");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu Principal</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<div id="div1" class="container">
		<br>
		<div id="div2">
			<?php

				if($resultado->num_rows>0){ 
			?>
			<img src="IMAGENES/banner2.png">
			<?php

				}

			?>
			<div id="div3">
				<?php

					if($resultado->num_rows>0){

						$fila = $resultado->fetch_object();
						$_SESSION['Tipo_usuario'] = $fila->usua_tipo;

					
				?>
				<label class="lgris">Bienvenido <?php echo $_SESSION['nusuario']?></label>
				<br>
				<input style="widows: 40%;" class="btn btn-primary" type="button" onclick="location.href='registro_aprendiz.php'" name="" value="Registro Aprendices">

				<input style="widows: 40%;" class="btn btn-primary" type="button" onclick="location.href='consulta_aprendiz.php'" name="" value="Consultar Aprendices">
				<br><br>

				<input style="widows: 40%;" class="btn btn-primary" type="button" onclick="location.href='modificar_aprendiz.php'" name="" value="Actualizacion de Aprendices">

				<input style="widows: 40%;" class="btn btn-primary" type="button" onclick="location.href='borrar_aprendiz.php'" name="" value="Borrar aprendices">
				<br><br>

				<input style="widows: 40%;" class="btn btn-primary" type="button" onclick="location.href='index.php'" name="" value="Crear programa">

				<input style="widows: 40%;" class="btn btn-primary" type="button" onclick="location.href='index.php'" name="" value="Consultar programa">
				<br><br>

				<input style="widows: 40%;" class="btn btn-primary" type="button" onclick="location.href='index.php'" name="" value="Modificar Programa">

				<input style="widows: 40%;" class="btn btn-primary" type="button" onclick="location.href='index.php'" name="" value="Eliminar programa">
				<br><br>

				<input style="widows: 40%;" class="btn btn-primary" type="button" onclick="location.href='index.php'" name="" value="Crear ficha">

				<input style="widows: 40%;" class="btn btn-primary" type="button" onclick="location.href='index.php'" name="" value="Consultar ficha">
				<br><br>

				<input style="widows: 40%;" class="btn btn-primary" type="button" onclick="location.href='index.php'" name="" value="Modificar ficha">

				<input style="widows: 40%;" class="btn btn-primary" type="button" onclick="location.href='index.php'" name="" value="Eliminar ficha">
				<?php

					

					}else{
						echo "Usuario o clave invalido";
					}

					$miconexion->close();

					?>
				<br><br>




				
			</div>
			
			
		</div>
		
	</div>
</body>
</html>