<?php
require_once './Gato.php';

$gato = new Gato();

echo $gato->tocar()."\n";
echo $gato->atacar()."\n";
echo $gato->ruido()."\n";