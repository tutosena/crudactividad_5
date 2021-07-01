<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

	<div id="div1" class="container">
		<br>
		<div id="div2">
			<img src="IMAGENES/banner.png">
			<div id="div3">

				<form id="formulario" method="post" action="menu.php">
					<br>
					<strong class="lgris">
						Ingrese sus usuario y Contraseña para iniciar sesión
					</strong>
					<br>
					<label class="lgris">Nombre de Usuario:</label>
					<br>
					<input style="text-transform: uppercase;" type="text" name="usuario" value="" required/>
					<br>
					<label class="lgris">Contraseña</label>
					<br>
					<input type="password" name="clave" value="" required/>
					<br><br>
					<input class="btn btn-primary" type="submit" name="" value="Iniciar sesión" >
					<br><br>

					

				</form>
				
			</div>
			
		</div>
		

	</div>
	<br><br>


</body>
</html>