<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Buscar Libros</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
<script>
    function buscarLibros() {
        var nombre = document.getElementById("nombre").value;
        var tipo = document.getElementById("tipo").value;
        var autor = document.getElementById("autor").value;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById("resultados").innerHTML = xhr.responseText;
            }
        };
        xhr.open("GET", "buscar_libros.php?nombre=" + nombre + "&tipo=" + tipo + "&autor=" + autor, true);
        xhr.send();
    }
</script>
</head>
<body>

<form onsubmit="event.preventDefault(); buscarLibros();">
    <label for="nombre">Nombre del libro:</label>
    <input type="text" id="nombre" name="nombre"><br><br>

    <label for="tipo">Tipo de libro:</label>
    <select id="tipo" name="tipo">
        <option value="">Todos</option>
        <option value="Fantasía">Fantasía</option>
        <option value="Aventura">Aventura</option>
        <option value="Ficcion">Ficción</option>
        <!-- Agrega más opciones según tus necesidades -->
    </select><br><br>

    <label for="autor">Autor:</label>
    <input type="text" id="autor" name="autor"><br><br>

    <input type="submit" value="Buscar">
</form>

<div id="resultados"></div>

</body>
</html>
