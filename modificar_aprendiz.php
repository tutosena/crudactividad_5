<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modificación de Aprendices</title>
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
						<strong class="lgris">Ingrese criterio de Busqueda</strong>
						<br><br>

						<div class="form-row">
							<div class="form-group col-md-5">
								<input class="form-control" type="number" name="numid" min="999" max="9999999999999" value="" placeholder="IDENTIFICACION" required/>
								
							</div>
							<div class="form-group col-md-3">
								<input class="btn btn-primary" type="submit" name="" value="Consultar">
							</div>
							
						</div>
						<br>
					</div>
					
				</form>
				<br>
			</div>

		</div>

		<div id="divconsulta2">
			<?php

				if($_SERVER['REQUEST_METHOD']=='POST'){

					include('funciones.php');
					session_start();
					$vnumid=$_POST['numid'];
					$miconexion = conectar_bd("","bdaprendices");
					$resultado = consulta($miconexion,"SELECT * FROM tblaprendices WHERE apre_numid='{$vnumid}'");
					if($resultado->num_rows>0)
					{

						$fila = $resultado->fetch_object();
						$_SESSION['ide1'] = $fila->apre_id;

						?>
						<form id="formulario2" role="form" method="post" action="actualizar_aprendiz.php">

							<div class="col-md-12">
								<strong class="lgris">Datos del aprendiz</strong><br>
								<label class="lgris">Id:</label>
								<input class="form-control" style="text-transform: uppercase;" type="text" name="numidModi" readonly="readonly" value="<?php echo $fila->apre_numid; ?>">

								<label class="lgris">Nombres:</label>
								<input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" readonly="readonly" value="<?php echo $fila->apre_nombres; ?>">

								<label class="lgris">Apellidos:</label>
								<input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" readonly="readonly" value="<?php echo $fila->apre_apellidos; ?>">

								<label class="lgris">Dirección:</label>
								<input class="form-control" style="text-transform: uppercase;" type="text" name="direccion" readonly="readonly" value="<?php echo $fila->apre_direccion; ?>">

								<label class="lgris">Télefono:</label>
								<input class="form-control" type="number" name="telefono" min="999" max="9999999999999" value="<?php echo $fila->apre_telefono; ?>" />

								<input class="btn btn-primary" type="submit" value="Actualizar">

								<br>
								
							</div>
						</form>
						<?php

							}else{

								echo "No existe registro";
							}
							$miconexion->close();
						}
						?>

			
		</div>



	</div>

</body>
</html>