<?php

require_once './Gato.php';
require_once './Perro.php';
require_once './Persona.php';

$gato = new Gato();
$perro = new Perro();

$persona = new Persona();

$persona->cuidar($gato);
$persona->cuidar($perro);