<?php
//Sintaxis
$lenguajes = array(
    'html',
    'css',
    'js',
);
var_dump($lenguajes);
//Sintaxis 2
//Version >= 5.4
$lenguajes = [
    'html',
    'css',
    'js',
];
var_dump($lenguajes);

$integers = [
    2,
    3,
    4,
    56,
    7,
];
var_dump($integers);
$floats = [
    2.60,
    2.20,
    4.10,
];
var_dump($floats);

//Set variables
/**
 *
 */
$uno = 1;
$dos = 2;
$tres = 3;
$variables = [
    $uno,
    $dos,
    $tres,
];
var_dump($variables);

//Los arreglos son heterogeneos en PHP
$mix = [
    'polo',
    $uno,
    4,
    9.34
];
var_dump($mix);
//Las posiciones en un array inician en 0
$html = $lenguajes[0];
var_dump($html);

//Offset error cuando se quiere acceder a un arreglo
//En una posición inexistente
//$lenguajeError = $lenguajes[4];
