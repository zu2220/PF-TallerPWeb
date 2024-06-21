
const correoU=document.getElementById("correo");
const password=document.getElementById("password");
const btnIngresar=document.getElementById("log_in");

btnIngresar.addEventListener('click',(e) =>{

    e.preventDefault();

    })

var usuarios= ["oscar@gmail.com","pedro@gmail","aldo@gmail.com"];
var passwords=["oscar123","pedro123","aldo123"];

function validarCredenciales(){
    for(var i=0;i<usuarios.length;i++){
        if(correoU.value==usuarios[i]&&password.value==passwords[i]){
            alert("Bienvenido");
            var url="../html/Catalogo.html"
            window.open(url,'_self')
        }
    }

}
    
    

    
   
    

    
