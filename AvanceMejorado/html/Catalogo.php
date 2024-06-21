<!DOCTYPE html>
<html>
<head>
<title></title>  
<link rel="stylesheet" type="text/css" href="../css/Estilos.css">
</head>
<body>
<BODY BGCOLOR=#E9F7EF TEXT="#17202A" LINK="#5DADE2">
    <center>   
        <header>
            <nav>
                <ul class="ulclass">
                    <li><a href="Catalogo.html">Catalogo</a>
                        <ul><li><a href="#">Literatura</a></li>
                            <li><a href="#">Consulta y referencia</a></li>
                            <li><a href="#">Divulgativos</a></li>
                        </ul>
                    </li>
                    <li><a href="../html/ForPrestamo.php">Prestar Libro</a></li>
                    <li><a href="../html/SobreNosotros.html">Sobre Nosotros</a></li>
                    <li><a href="../html/perfilp.html">Perfil</a></li>
                    <li><a href="../html/NuevoLogin.html">Iniciar Sesion</a></li>
                    <li><a href="../html/registro.php">Registrarse</a></li>
                    <li><a href="../php/saludo.php">Conocer Hora</a></li>
                </ul>
            </nav>
        </header>

        <h1>Catalogo</h1>

<form name="frBusquedaLibro">
    <table>
        <tr>
            <td><input type="text" id="txtNombreLibro" size="35" title="Ingrese el nombre del libro" placeholder="Ingrese el nombre del libro"></td>
            <td><select name="cbxTipoLibro" onclick="capturarCbx()">
            <option value="1">Aventura</option>
            <option value="2" selected>Fantasia</option>
            </select>
            </td>
            <td><input type="text" id="txtNombreAutor" size="35" title="Ingresar el nombre del autor" placeholder="Ingresar el nombre del autor"></td>
            <td><input type="button" value="Buscar" style="height: 30px; width: 62px; font-size: 14px; cursor: pointer" onclick="buscarLibro();"></td>
        </tr>
    </table>
</form>

<table border="0" cellpadding="60" id="tablaLibros">
    <tr>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\HarryPotter1.jpg" alt="HP1">
            <p>Harry Potter 1</p>
            <p>Tipo: Fantasía</p>
            <p>Autor: J.K. Rowling</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\HarryPotter2.jpg" alt="HP2">
            <p>Harry Potter 2</p>
            <p>Tipo: Fantasía</p>
            <p>Autor: J.K. Rowling</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\HarryPotter3.jpg" alt="HP3">
            <P>Harry Potter 3</P>
            <p>Tipo: Fantasía</p>
            <p>Autor: J.K. Rowling</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\HarryPotter4.jpeg" alt="HP4">
            <p>Harry Potter 4</p>
            <p>Tipo: Fantasía</p>
            <p>Autor: J.K. Rowling</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\HarryPotter5.jpg" alt="HP1">
            <p>Harry Potter 5</p>
            <p>Tipo: Fantasía</p>
            <p>Autor: J.K. Rowling</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\HarryPotter6.jpg" alt="HP2">
            <p>Harry Potter 6</p>
            <p>Tipo: Fantasía</p>
            <p>Autor: J.K. Rowling</p>
        </td>
    </tr>

    <tr>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\HarryPotter7.jpg" alt="HP3">
            <P>Harry Potter 7</P>
            <p>Tipo: Fantasía</p>
            <p>Autor: J.K. Rowling</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\PercyJackson1.jpg" alt="HP4">
            <p>Percy Jackson 1</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Rick Riordan</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\PercyJackson2.jpg" alt="HP4">
            <p>Percy Jackson 2</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Rick Riordan</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\PercyJackson3.jpg" alt="HP4">
            <p>Percy Jackson 3</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Rick Riordan</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\PercyJackson4.jpg" alt="HP4">
            <p>Percy Jackson 4</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Rick Riordan</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\PercyJackson5.jpg" alt="HP4">
            <p>Percy Jackson 5</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Rick Riordan</p>
        </td>
    </tr>

    <tr>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\PercyJackson6.jpg" alt="HP4">
            <p>Percy Jackson 6</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Rick Riordan</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\PercyJackson7.jpg" alt="HP4">
            <p>Percy Jackson 7</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Rick Riordan</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\PercyJackson8.jpg" alt="HP4">
            <p>Percy Jackson 8</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Rick Riordan</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\PercyJackson9.jpg" alt="HP4">
            <p>Percy Jackson 9</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Rick Riordan</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\PercyJackson10.jpg" alt="HP4">
            <p>Percy Jackson 10</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Rick Riordan</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\PercyJackson11.jpg" alt="HP4">
            <p>Percy Jackson 11</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Rick Riordan</p>
        </td>
    </tr>

    <tr>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\PercyJackson12.jpg" alt="HP4">
            <p>Percy Jackson 12</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Rick Riordan</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\PercyJackson13.jpg" alt="HP4">
            <p>Percy Jackson 13</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Rick Riordan</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\Aquiles1.jpg" alt="HP4">
            <p>La Canción de Aquiles</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Madeline Miller</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\Odisea.jpg" alt="HP4">
            <p>La Odisea</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Homero</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\Iliada.jpg" alt="HP4">
            <p>Iliada</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Homero</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesConocimiento\Astronomia1.jpg" alt="HP4">
            <p>El Otro Universo</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Vallejo, José Miguel</p>
        </td>
    </tr>

    <tr>
        <td>
            <img height="140" width="100" src="../ImagenesConocimiento\Astronomia2.jpg" alt="HP4">
            <p>El Universo en una Cáscara de Nuez</p>
            <p>Tipo: Ficcion</p>
            <p>Autor: Hawking, Stephen</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\PercyJackson13.jpg" alt="HP4">
            <p>Percy Jackson 13</p>
            <p>Tipo: Ficcion</p>
            <p>Autor: Abrams; Primack</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\Aquiles1.jpg" alt="HP4">
            <p>La Canción de Aquiles</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Madeline Miller</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\Odisea.jpg" alt="HP4">
            <p>La Odisea</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Homero</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesCatalogoFantasia\Iliada.jpg" alt="HP4">
            <p>Iliada</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Homero</p>
        </td>
        <td>
            <img height="140" width="100" src="../ImagenesConocimiento\Astronomia1.jpg" alt="HP4">
            <p>El Otro Universo</p>
            <p>Tipo: Aventura</p>
            <p>Autor: Vallejo, José Miguel</p>
        </td>
    </tr>
</table>

<button onclick="color(1)">Modo Oscuro</button>
<button onclick="color(2)">Color por defecto</button>

<script type="text/javascript">
        function color(op){
            if(op==1) {
                document.bgColor='#222A17';
                document.fgColor='white';
            }
            if(op==2) {
                document.bgColor='#E9F7EF';
                document.fgColor='#17202A';
            }
        }

         function buscarLibro() {
    var nombreLibro = document.getElementById('txtNombreLibro').value.toUpperCase();
    var tipoLibro = document.getElementById('txtTipoLibro').value.toUpperCase();
    var nombreAutor = document.getElementById('txtNombreAutor').value.toUpperCase();
    var tablaLibros = document.getElementById('tablaLibros');
    var libros = tablaLibros.getElementsByTagName('td');

    for (var i = 0; i < libros.length; i++) {
        var libro = libros[i];
        var nombre = libro.getElementsByTagName('p')[0].textContent.toUpperCase();
        var tipo = libro.getElementsByTagName('p')[1].textContent.toUpperCase();
        var autor = libro.getElementsByTagName('p')[2].textContent.toUpperCase();

        if (nombre.includes(nombreLibro) && tipo.includes(tipoLibro) && autor.includes(nombreAutor)) {
            libro.style.display = "";
        } else {
            libro.style.display = "none";
        }
    }
}
    </script>
</center>


</body>
</html>

