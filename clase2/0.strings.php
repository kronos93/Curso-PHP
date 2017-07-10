<?php

$nombreProducto = 'Polo de CSS';
var_dump($nombreProducto);
$nombreProducto = "Polo de CSS";
var_dump($nombreProducto);

$quiero = 'Polo de JS';
$primeraPeticion = 'Quiero un $valor';
var_dump($primeraPeticion);
$segundaPeticion = "Quiero un $quiero";
var_dump($segundaPeticion);
/**
 * Comillas simples, interpreta el string literal
 * Comillas dobles, procesa el string en busca de variables para reemplazar
 * 
 */
$terceraPeticion = "Quiero una {$quiero}";
var_dump($terceraPeticion);