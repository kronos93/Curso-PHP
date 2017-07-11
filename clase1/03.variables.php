<?php

$nombre = 'Samuel';
/*
** Variable de variables
** Toma el valor de $nombre => Samuel
** y lo convierte en una variable $Samuel existe en el scope
** fialmente le asigna un valor a esa variable
*/
$$nombre = 'Rojas Too';

echo "{$nombre}\n";
echo "${nombre}\n";
echo "$nombre\n";

echo "$Samuel\n";
echo "${$nombre}\n";

$tres = 3;
var_dump($tres);

$pi = 3.1416;
var_dump($pi);
var_dump($pi * 5);

$_nombre = 'Samuel';
$Nombre = '';
$nombr3 = '';


//Boolean 
//false o true
$value_false = false;
var_dump($value_false);
// => 5.4 version
$arreglo = ['uno','dos','tres'];
// < 5.4 version
$arreglo_2 = array('tres','cuatro','cinco');
var_dump($arreglo);
var_dump($arreglo_2);

//asignación especial
$polos = 2;
$polos = $polos + 1;
var_dump($polos);
$polos = 2;
$polos+=1;
var_dump($polos);
$polos = 2;
$polos++;
var_dump($polos);

$usandoCamelCase = "variable con camel case";
var_dump("Esta es una {$usandoCamelCase}");
var_dump('Esta es una {$usandoCamelCase}');