<?php
$opcionSelecionada;
$script;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $opcionSelecionada=$_POST['cbxTipoLibro'];
}
switch ($opcionSelecionada) {
    case "Aventura":
        $script="select* from catalogo where tipo_libro='Fantasia';";
        break;
    case "Fantasia":
        $script="select* from catalogo where tipo_libro='Aventura';";
        break;
}
function listado(){
        $obj=new conexion2();
        $res=mysqli_query($obj->conexionBd(),$script) or die(mysqli_error($obj->conexionBd()));
        $vec=array();
        while ($f=mysqli_fetch_array($res)){
            $ep=new Libro($f[0],$f[1],$f[2]);
            $vec[]=$ep;
        }
        return $vec;
    }

/*
function capturarCbx(){
    $opcionSelecionada=$_POST['cbxTipoLibro'];
    echo ($opcionSelecionada);

}
*/
?>