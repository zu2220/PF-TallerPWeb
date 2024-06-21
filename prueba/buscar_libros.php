<?php
// Configuración de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bibliotecax";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Chequear conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Inicializar las variables de búsqueda
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';
$tipo = isset($_GET['tipo']) ? $_GET['tipo'] : '';
$autor = isset($_GET['autor']) ? $_GET['autor'] : '';

// Preparar la consulta SQL con filtrado según los campos completados
$sql = "SELECT nomblibro, tipolibro, autor FROM librosprestados WHERE 1";

if (!empty($nombre)) {
    $sql .= " AND nomblibro LIKE '%$nombre%'";
}

if (!empty($tipo)) {
    if ($tipo == 'Todos') {
        // No se aplica filtro por tipo de libro
    } else {
        $sql .= " AND tipolibro = '$tipo'";
    }
}

if (!empty($autor)) {
    $sql .= " AND autor LIKE '%$autor%'";
}

// Ejecutar la consulta
$result = $conn->query($sql);

// Construir la tabla HTML con los resultados
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Nombre del Libro</th><th>Tipo de Libro</th><th>Autor</th></tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["nomblibro"]."</td><td>".$row["tipolibro"]."</td><td>".$row["autor"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

// Cerrar conexión
$conn->close();
?>
