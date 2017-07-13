<?php

namespace EscuelaDigital; //Espacio de nombre es igual a la carpeta
class Estudiante 
{
    private $nombre;

    public function __construct($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function saludar(){
        return "Hola desde el namespace EscuelaDigital soy {$this->getNombre()}";
    }
}