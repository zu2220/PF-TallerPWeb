<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="../css/styleForm1.css">
</head>
<body bgcolor=#E9F7EF>
	<center>
	<img src="../imagenes/imagenes del registro e inicio de sesion/registro.png"><h2>Registro de nuevo usuario</h2></img>
	
	<form method="post">
		<div class="input-group">
			<div class="input-container">
				<input type="text" name="nombre" placeholder="Nombres">
				<i class="fa-solid fa-user"></i>
			</div>

			<div class="input-container">
				<input type="text" name="apellido" placeholder="Apellidos">
				<i class="fa-solid fa-user"></i>
			</div>

			<div class="input-container">
				<input type="tel" name="edad" placeholder="Edad">
				<i class="fa-solid fa-image-portrait"></i>
			</div>

			<div class="input-container">
				<input type="email" name="email" placeholder="Correo Electronico">
				<i class="fa-solid fa-envelope"></i>
			</div>

			<div class="input-container">
				<input type="password" name="password" placeholder="Contraseña">
				<i class="fa-solid fa-lock"></i>
			</div>

			<div class="input-container">
				<input type="text" name="departamento" placeholder="Departamento">
				<i class="fa-solid fa-globe"></i>
			</div>

			<div class="input-container">
				<input type="text" name="distrito" placeholder="Distrito">
				<i class="fa-solid fa-building"></i>
			</div>

			<div class="input-container">
				<input type="text" name="domicilio" placeholder="Domicilio">
				<i class="fa-solid fa-house"></i>
			</div>

			<div class="input-container">
				<input type="tel" name="celular" placeholder="Celular">
				<i class="fa-solid fa-mobile"></i>
			</div>
			<a href="#">Terminos y Condiciones</a>
			<input name="send" type="submit" class="btn" value="Enviar">
		</div>
	</form>
	<?php
		include("../php/BaseDeDatos/send.php");
		?>
</body>
</center>
</html>