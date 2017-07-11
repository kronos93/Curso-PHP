<?php

$quiero = 'Yo quiero';
$un  = ' un polo JS';

//Concatenación
var_dump($quiero . $un);

$tercero = ' talla L ';
var_dump($quiero . $un . $tercero);

var_dump($quiero . $un . $tercero . ':)');

/**
 * @var float
 */
$precio = 20.99;
var_dump($quiero . $un . $tercero . ':) '.$precio);
//En PHP el mas es matematico.
//var_dump($quiero + $un);


//No usar números como strings
$n_1 = '3';
$n_2 = '5';
var_dump($n_1 + $n_2);
