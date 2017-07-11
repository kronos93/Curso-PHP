<?php
/**
 * Require genera un error fatal al incluir dos veces un mismo archivo y
 * detiene la ejecución del archivo.
 * Include genera un warning al incluir dos veces un mismo archivo y no
 * detiene la ejecución del archivo.
 */
require './suma.php';
//require './suma.php';

$resultado = suma(5,5);
var_dump($resultado);