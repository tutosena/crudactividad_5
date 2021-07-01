<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Consulta de Aprendices</title>

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
						<strong class="lgris">Ingrese criterios de Busqueda</strong>
						<br><br>
						<div class="form-row">
							<div class="form-group col-md-3">

								<input class="form-control input-lg" type="number" name="numid" min="999" max="9999999999999" value="" placeholder="IDENTIFICACION" required/>
								
							</div>

							<div class="form-group col-md-3">
								<input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="" placeholder="Nombres" required/>
							</div>

							<div class="form-group col-md-3">
								<input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" required/>
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
				<div id="divconsulta2">
					<?php

						if($_SERVER['REQUEST_METHOD']=='POST'){

							include("funciones.php");
							$vnumid = $_POST['numid'];
							$vnombres = $_POST['nombres'];
							$vapellidos = $_POST['apellidos'];
							$miconexion = conectar_bd("",'bdaprendices');
							$resultado = consulta($miconexion, "SELECT * FROM tblaprendices WHERE trim(apre_numid) like '%{$vnumid}%' and trim(apre_nombres) like '%{$vnombres}%' AND trim(apre_apellidos) like '%{$vapellidos}%'");

							if($resultado->num_rows>0){

								while ($fila = $resultado->fetch_object()) {
									
									echo $fila->apre_id . " " . $fila->apre_tipoid . " " . $fila->apre_numid . " " . $fila->apre_nombres . " " . $fila->apre_apellidos . " " . $fila->apre_direccion . " " . $fila->apre_telefono . " " . $fila->apre_ficha . "<br>";
								}

							}else{

								echo "No existen registros";
							}

							$miconexion->close();
						}
					?>
					
				</div>
			
		</div>
		
	</div>

</body>
</html>