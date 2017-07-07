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