<?php

$polo = 'CSS';
//isset
//Determina si la variable esta definidad y no es nula
var_dump(isset($polo)); 

/**
 * Si la variable polo esta definida y no es null
 * retorna el valor de la variable
 * en caso contrario retorna un mensaje
 */

var_dump(isset($polo) ? $polo : 'un mensaje');

var_dump($polo ?? 'un mensaje');
