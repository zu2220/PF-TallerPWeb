<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="bibliotecax";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    $nombre=$_POST['txtnombre'];
    $apellido=$_POST['txtapellido'];
    $correo=$_POST['txtcorreo'];
    $celular=$_POST['txtcel'];
    //$fechaNacimiento=$_POST['txtfecha'];
    $domicilio=$_POST['txtdomicilio'];
    $departamento=$_POST['comdepartamento'];
    $distrito=$_POST['comdistrito'];
    $password=$_POST['clave'];

    $stmt=$conn->prepare("insert into usuarios_registrados (nombre,apellido,direccion,correo_electronico,celular,departamento,distrito,password) values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssisss",$nombre,$apellido,$domicilio,$correo,$celular,$departamento,$distrito,$password);

    if ($stmt->execute()) {
        echo "Datos guardados correctamente.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

?>