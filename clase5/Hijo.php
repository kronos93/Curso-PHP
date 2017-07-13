<?php
require_once './Papa.php';
class Hijo extends Papa
{
    static public $abuelos;
    public function __constructor($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getProtected()
    {
        echo "{$this->protegido}\n";
    }
    public static function saludar2(){
        //Las funciones estaticas no pueden acceder a $this
        return "Hola tengo ".self::$abuelos." abuelos\n";
    }
}
