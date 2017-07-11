<?php

/*
**Incluye y evalúa el archivo especificado
**Cuando se incluye un archivo, el código que contiene
**hereda el ambito de las variables en la linea en la que
**ocurre la inclusión
*/

include './suma.php';
//include './suma.php';
$resultado = suma(1,2);
var_dump($resultado);