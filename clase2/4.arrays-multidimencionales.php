<?php

$cosas = [
    'animales' => [
        'gato',
        'perro' => [
            'raza 1',
            'raza 2',
            'raza 3',
            'raza 4'
        ],
        'pez',
    ],
    'colores' => [
        'rojo',
        'verder',
        'azul',
    ],
    'ropa' => [
        'camisa',
        'pantalon',
    ],
];
var_dump($cosas);
$animales = $cosas['animales'];
var_dump($animales);
var_dump($animales[1]);
var_dump($cosas['animales'][1]);
var_dump($cosas['animales']['perro']);
//{} - llaves.
//[] - corchetes, paréntesis cuadrados.

$miArray = []; //Array vacio
