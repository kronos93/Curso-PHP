<?php

require_once './Hijo.php';

Hijo::$abuelos = 4;
echo Hijo::$abuelos."\n";

$samuel = new Hijo('Samuel');
$kronos = new Hijo('Kronos');

echo "{$samuel->getNombre()} tiene {$samuel::$abuelos} abuelos\n";
echo "{$kronos->getNombre()} tiene {$kronos::$abuelos} abuelos\n";

echo "{$samuel->saludar2()} \n";