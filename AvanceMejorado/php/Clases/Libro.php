<?php
class Libro{
    private $nombre_libro;
    private $tipo_libro;
    private $nombre_autor;
    function _construct($nombre_libro, $tipo_libro, $nombre_autor){
        $this->nombre_libro=$nombre_libro;
        $this->tipo_libro=$tipo_libro;
        $this->nombre_autor=$nombre_autor;
}
function getNombre_libro(){
    return $this->nomb;
}
function getTipo_libro(){
    return $this->tipo_libro;
}
function getNombre_autor(){
    return $this->nombre_autor;
}
}

