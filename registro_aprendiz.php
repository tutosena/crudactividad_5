<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro Aprendiz</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<div id="div1" class="container">
		<br>
		<div id="div2">
			<?php 
				session_start();
				if(!empty($_SESSION['Tipo_usuario'])){

			?>
			<img src="IMAGENES/banner3.png"> <?php } ?>

			<div id="div3">
				<?php

					if($_SESSION['Tipo_usuario']=='ADMINISTRADOR'){
				?>

				<form id="formulario" role="form" method="post" action="guardado_aprendiz.php">

					<div class="col-md-12">
						<strong class="lgris">Ingrese datos del aprendiz</strong>
						<br>
						<label class="lgris">Identificación:</label>
						<div class="form-row">
							<div class="form-group col-xs-2">
								<select class="form-control" name="tipoid">
									<option value="CC">CC</option>
									<option value="TI">TI</option>
									<option value="RC">RC</option>
									<option value="PEP">PEP</option>
								</select>
								
							</div>

							<div class="form-group col-m-6">
								<input class="form-control input-lg" type="number" name="numid" min="999" max="9999999999999"  placeholder="IDENTIFICACION" required/>
								
							</div>

						</div>

							<label class="lgris">Nombres:</label>
							<input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" placeholder="Nombres" required/>

							<label class="lgris">Apellidos:</label>
							<input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos"  placeholder="Apellidos" required/>

							<label class="lgris">Dirección:</label>
							<input class="form-control" style="text-transform: uppercase;" type="text" name="direccion"  placeholder="Dirección" required/>

							<label class="lgris">Teléfono:</label>
							<input class="form-control" type="number" name="telefono" min="999" max="9999999999999" placeholder="Teléfono" required/>

							<label class="lgris">Ficha:</label>
							<input class="form-control" type="number" name="ficha" min="999" max="9999999999999"  placeholder="Ficha" required/>

							<br>

							<input class="btn btn-primary" type="submit" name="" value="Guardar">

						
					</div>
					
				</form>

					<?php

						}else{

							echo "No tiene permisos para realizar esta acción";
						}

					?>
					<br>

					
				

				
				
			</div>

			
		</div>
		
	</div>
</body>
</html>