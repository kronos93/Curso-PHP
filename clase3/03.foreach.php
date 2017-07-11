<?php

/**
 * Permite iterar arrays y objetos
 */
$polos = ['HTML','CSS','JS','PHP'];

foreach ($polos as $polo) {
    echo "Tenemos {$polo} polos\n";
}

foreach ($polos as $key => $polo) {
    echo "Tenemos [{$key}] {$polo} polos\n";
}
/**
 * Sintaxis alternativa
 */
foreach ($polos as $key => $polo) :
    echo "Tenemos [{$key}] {$polo} polos\n";
endforeach;
