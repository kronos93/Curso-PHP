<?php
/*
 * Operadores arimeticos 
 * + suma
 * - resta
 * * multiplicación
 * / división
 * % modulo
 */

var_dump(6 -2 + 5);
var_dump(10/5);
var_dump(7%3);
var_dump(2*2);

/*
 * Jerarquia de operadores
 * Multiplicación
 * División
 * Módulos
 * Suma 
 * Resta
 */
var_dump(2 + 4 - 2 * 4 / 2);
var_dump(2 + 4 - 8 / 2);
var_dump(2 + 4 - 4);
var_dump(2 + 0);
var_dump(2);
/*
** Buena practica: Agrupar las operaciones
**
*/
var_dump( (2 + 4) - ((2 * 4) / 2));