<?php
namespace EscuelaDigital;
class Profesor 
{
    private $nombre;
    private $curso;

    public function __construct($nombre,$curso)
    {
        $this->nombre = $nombre;
        $this->curso = $curso;    
    }
    
    public function bienvenida()
    {
        return "Bienvenido al curso de {$this->curso} soy {$this->nombre}";
    }
}