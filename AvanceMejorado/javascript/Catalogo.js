function buscarLibro(){

    const botonBuscar=document.getElementById("btnBuscar");
    botonBuscar.addEventListener('click',(e) =>{

            e.preventDefault();
    }
    
    )
    nombreLibro = document.getElementById("txtNombreLibro").value.toLowerCase();
    tipoLibro = document.getElementById("txtTipoLibro").value.toLowerCase();
    nombreAutor = document.getElementById("txtNombreAutor").value.toLowerCase();

    libros = document.querySelectorAll('#tablaLibros tr');

    for (var i = 0; i < libros.length; i++) {
        var libro = libros[i];
        var infoLibro = libro.textContent.toLowerCase();

        if (nombreLibro === '' || infoLibro.includes(nombreLibro)) {
            if (tipoLibro === '' || infoLibro.includes(tipoLibro)) {
                if (nombreAutor === '' || infoLibro.includes(nombreAutor)) {
                    libro.style.display = 'table-row';
                } else {
                    libro.style.display = 'none';
                }
            } else {
                libro.style.display = 'none';
            }
        } else {
            libro.style.display = 'none';
        }
    }
}
    
