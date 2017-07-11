<?php
//Parametros
function saludar($nombre){
    echo "Hola {$nombre}\n";
}

saludar('Samuel');
saludar('Jose');
saludar('Kronos');
saludar(10.10);

function sumar($a,$b,$c){
    return $a + $b + $c;
}

echo sumar(4,5,-1).PHP_EOL;

function bienvenida() {
    //Array con todos los parametros de una función
    $nombres = func_get_args();
    var_dump($nombres);
    foreach($nombres as $nombre){
        echo "Bienvenido, {$nombre}\n";
    }
}
bienvenida('Samuel','Ricardo','Alan','Fabian');



