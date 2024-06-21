<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="../css/EstiloPrestamo.css">
	<link rel="stylesheet" href="../css/styleForm1.css">
</head>

<body bgcolor=#E9F7EF>
	<center>
		<img class="imagen" src="../imagenes/ImgFormPrestamo/iconPrestamo.png"> </img>
		<h1 class="titulo">
			PRESTAMO DE LIBROS
		</h1>
		<form method="post">
			<div class  ="input-group">
				<div class  ="input-container">
					<input type ="text" name="nombre" placeholder="Nombres">
					<i class    ="fa-solid fa-user"></i>
				</div>

				<div class  ="input-container">
					<input type ="text" name="apellido" placeholder="Apellidos">
					<i class    ="fa-solid fa-user"></i>
				</div>

				<div class  ="input-container">
					<input type ="tel" name="dni" placeholder="DNI">
					<i class    ="fa-solid fa-id-card"></i>
				</div>

				<div class  ="input-container">
					<input type ="text" name="libro" placeholder="Nombre Del Libro">
					<i class    ="fa-solid fa-book"></i>
				</div>

				<div class  ="input-container">
					<input type ="tel" name="diaspres" placeholder="Numeros de dias a Obtener">
					<i class    ="fa-solid fa-calendar-days"></i>

				</div>
				<input name ="send" type="submit" class="btn" value="ACEPTAR">
			</div>
		<tr>
			<td><button>
			<a href="../html/Catalogo.html" onmouseover="color(1)" onmouseout="restaurarColor(1)" class="boton">Regresar</a>
			</button>
			</td>
		</form>
<?php
		include("../php/BaseDeDatos/sendpre.php")
		?>
<script src="../javascript/CodigoPrestamo.js"></script>
<script src="../javascript/ResumenPrestamo.js"></script>
</body>
</center>
</html>