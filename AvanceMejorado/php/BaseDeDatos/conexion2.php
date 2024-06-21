<?php

class conexion2{
    private $con=null;
    function conexionBd(){
    if ($this->con==null){
        $this->con= mysqli_connect("localhost", "root", "", "bibliotecax");
    }
    return $this->con;
    }
}

?>