<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eliminacion de aprendices</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<div id="divconsulta" class="container">
		<br>
		<div id="div2">
			<div id="div4">
				<form name="formulario" role="form" method="post">
					<div class="col-md-12">
						<strong>Ingrese criterio de busqueda</strong>
						<br><br>
						<div class="form-row">

							<div class="form-group col-md-5">
								<input class="form-control" type="number" name="numid" min="999" max="9999999999999" value="" placeholder="IDENTIFICACION" required/>
								
							</div>
							<div class="form-group col-md-3">
								<input class="btn btn-primary" type="submit" name="" value="Eliminar">
							</div>
							
						</div>
						<br>
						
					</div>
					
				</form>
				<br>
				
			</div>

				<div id="divconsulta2">
					<?php

						if($_SERVER['REQUEST_METHOD']=='POST'){

							include('funciones.php');
							$vnumid = $_POST['numid'];
							$miconexion = conectar_bd("","bdaprendices");
							$resultado = consulta($miconexion,"SELECT * FROM tblaprendices WHERE apre_numid = '{$vnumid}'");
							$resultado2 = consulta($miconexion,"DELETE FROM tblaprendices WHERE apre_numid='{$vnumid}'");
							if($resultado->num_rows>0)
							{
								$fila = $resultado->fetch_object();
								echo $fila->apre_id . " " . $fila->apre_tipoid . " " . $fila->apre_numid . " " . $fila->apre_nombres . " " . $fila->apre_apellidos . " " . $fila->apre_direccion . " " . $fila->apre_telefono . " " . $fila->apre_ficha . "<br>";

								if($resultado2) echo "<br>Datos borrados exitosamente";
							}else{
								echo "No existe registro";
							}

							$miconexion->close();

						}?>



					
				</div>
			
		</div>

	
</div>

		
</body>
</html>