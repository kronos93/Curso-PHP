<?php
/**
 * Función para retornar una suma
 *
 * @param Closure $operacion
 * @param $mixed $a
 * @param $mixed $b
 * @return $mixed
 */
function aritmetica(Closure $operacion, $a, $b)
{
    //Ejecuta el clousure como parametro
    return $operacion($a, $b);
}
//clousure directo
echo aritmetica(function ($a, $b) {
    return $a + $b;
}, 10, 10).PHP_EOL;
//Clousure con función como variable
$resta = function ($a, $b) {
    return $a - $b;
};
echo aritmetica($resta, 10, 5).PHP_EOL;

//echo aritmetica(100, 10, 5).PHP_EOL;
