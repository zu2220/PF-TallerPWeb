<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<center>
<h2>BIBLIOTECA X</h2>
<h3>
<?php

// Función para obtener el nombre de usuario actual (simulada)
function obtenerNombreUsuario() {
    // Aquí podrías implementar la lógica para obtener el nombre del usuario
    // desde algún sistema de autenticación
    return "Lector";
}

// Función para mostrar un saludo personalizado según la hora del día
function obtenerSaludo() {
    $hora = date("H");

    if ($hora < 12) {
        return "Buenos días";
    } elseif ($hora < 18) {
        return "Buenas tardes";
    } else {
        return "Buenas noches";
    }
}

// Función para mostrar un mensaje de bienvenida aleatorio
function mensajeAleatorio() {
    $mensajes = array(
        "¡Qué bueno tenerte aquí!",
        "Es un placer verte de nuevo.",
        "Bienvenido de vuelta",
        "¡Hola! ¿Cómo estás hoy?"
    );

    $indice = array_rand($mensajes);
    return $mensajes[$indice];
}

// Función principal para dar la bienvenida
function darBienvenida() {
    $nombre = obtenerNombreUsuario();
    $saludo = obtenerSaludo();
    $mensaje = mensajeAleatorio();

    return "<br>$saludo, $nombre. <br> $mensaje";
}

//hora local
date_default_timezone_set("America/Lima");
$hactual=date("H:i:s");
echo "HORA LOCAL:";
    echo " SON LAS $hactual";


// Ejemplo de uso
echo darBienvenida();

?>

<br>
<img src="img/1234.jpg">
</h3>
</center>
</body>
</html>