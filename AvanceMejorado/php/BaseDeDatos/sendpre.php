<?php

include("conexion.php");

if(isset($_POST['send'])){

	if (
		strlen($_POST['nombre']) >= 1 &&
		strlen($_POST['apellido']) >= 1 &&
		strlen($_POST['dni']) >= 1 &&
		strlen($_POST['libro']) >= 1 &&
		strlen($_POST['diaspres']) >= 1
		)


	{
		$nombre=trim($_POST['nombre']);
		$apellido=trim($_POST['apellido']);
		$dni=trim($_POST['dni']);
		$libro=trim($_POST['libro']);
		$diaspres=trim($_POST['diaspres']);
		$consulta="INSERT INTO prestamodelibro(nombre, apellido, dni, libro, diaspres) 
		values ('$nombre', '$apellido', '$dni', '$libro', '$diaspres')";
		$resultado= mysqli_query($conex, $consulta);

		if ($consulta) {
			?>
			<h3 class="succes" >Tu informacion se a enviado correctamente</h3>
			<?php
		}else {
			?>
			<h3 class="error" >Ocurrio un error</h3>
			<?php
		}
	} else {
		?>
		<h3 class="error" >Llena todos los campos correctamente</h3>
		<?php
	}
}

?>