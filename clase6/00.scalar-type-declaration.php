<?php
declare(strict_types = 1);
function bienvenida()
{
    $nombres = func_get_args();
    foreach ($nombres as $nombre) {
        echo "Biendenido, {$nombre}\n";
    }
}
//Indicamos por parametro con ... que se recibiran varios parametros...
function bienvenida2(...$nombres)
{
    foreach ($nombres as $nombre) {
        echo "Biendenido, {$nombre}\n";
    }
}
bienvenida('Ricardo', 'Alan', 'Alvaro');
bienvenida2('Ricardo', 'Alan', 'Alvaro');

function suma_de_enteros(int ...$enteros)
{
    return array_sum($enteros);
}
echo suma_de_enteros(1, 2, 3)."\n";
//echo suma_de_enteros('1', 2, 3)."\n";