<?php

include("conexion.php");

if(isset($_POST['send'])){

	if (
		strlen($_POST['nombre']) >= 1 &&
		strlen($_POST['apellido']) >= 1 &&
		strlen($_POST['edad']) >= 1 &&
		strlen($_POST['email']) >= 1 &&
		strlen($_POST['password']) >= 1 &&
		strlen($_POST['departamento']) >= 1 &&
		strlen($_POST['distrito']) >= 1 &&
		strlen($_POST['domicilio']) >= 1 &&
		strlen($_POST['celular']) >= 1
		)


	{
		$nombre=trim($_POST['nombre']);
		$apellido=trim($_POST['apellido']);
		$edad=trim($_POST['edad']);
		$email=trim($_POST['email']);
		$password=trim($_POST['password']);
		$departamento=trim($_POST['departamento']);
		$distrito=trim($_POST['distrito']);
		$domicilio=trim($_POST['domicilio']);
		$celular=trim($_POST['celular']);
		$consulta="INSERT INTO datos(nombre, apellido, edad, email, password, departamento, distrito, domicilio, celular) 
		values ('$nombre', '$apellido', '$edad', '$email', '$password', '$departamento', '$distrito', '$domicilio', '$celular')";
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