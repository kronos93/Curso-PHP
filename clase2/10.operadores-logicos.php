<?php

$a = true;
$b = false;

/*
** and
** && mayor procedencia
*/
$polo = 'CSS';
var_dump(true && false);
var_dump(true && true);
/**
 * AND
 */
var_dump( (5 > 2) && ($polo == 'CSS'));
var_dump( (5 > 2) AND ($polo == 'CSS'));
/**
 * OR
 */
var_dump(false || true);
var_dump(false OR false);
/**
 * Negación
 */
var_dump(!true);
var_dump(!false);

/**
 * XOR
 */
var_dump(false xor true);
var_dump(true xor true);