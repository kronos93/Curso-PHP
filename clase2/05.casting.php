<?php

$polos = '4';
var_dump($polos);

$polos = (int) $polos;
var_dump($polos);

$polos = (float) $polos;
var_dump($polos);

$pi = 3.1416;
$pi = (string) $pi;
var_dump($pi);

//Los arreglos son un caso especial

$nuevaVariable = (array) $pi;
var_dump($nuevaVariable);

$polos = 3.59;
$polosArray = (array) $polos;
var_dump($polosArray);