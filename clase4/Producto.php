<?php
/**
 * Las clases son moldes para crear objetos
 */
class Producto
{
    var $nombre; //Se necesita var
    var $talla;
    var $precio = 12; //Valor por defecto
    function __construct($nombre,$talla){
        //echo "Instancia de una clase\n";
        $this->nombre = $nombre;
        $this->talla = $talla;
        /*var_dump($this);*/
    }
    function resumen(){
        echo $this->nombre.PHP_EOL;
        echo $this->talla.PHP_EOL;
        echo $this->precio.PHP_EOL;
    }
}
