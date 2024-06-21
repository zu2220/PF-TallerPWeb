var boton;

function color(op){
    if(op==1){
        boton = document.getElementById("boton1");
        boton.style.background="red"     
    }
    else{
        boton = document.getElementById("boton2");
        boton.style.background="green"  
    }
}

function restaurarColor(op){
    if(op==1){
        boton.style.background=""     
    }
    else{
        boton.style.background=""     
    }
}

function verificar() {
    var nombre = fr.txtNombre.value;
    var dni = fr.txtDni.value;
    var nombreLibro = fr.txtNombreLibro.value;
    var numDias = fr.txtDias.value;

    if (nombre == "" || dni == "" || nombreLibro == "" || numDias == "") {
        alert("Por favor, complete todos los campos antes de enviar el formulario.");
        
    } else {
        if (confirm("¿Estás seguro de enviar el formulario?")) {
            
        } else {
            
        }
    }
}



