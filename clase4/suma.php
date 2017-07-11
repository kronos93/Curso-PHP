<?php
declare(strict_types = 1);
/**
 * Return type declaration
 * Podemos indicar el tipo de dato que retorna una función
 *
 * @param int $a
 * @param int $b
 * @return int
 */
/*$numero = 7;*/
function suma(int $a, int $b) : int
{
    /*global $numero;*/
    return $a + $b;// + $numero;
}

var_dump(suma(2, 4));
//var_dump(suma('2',4));
