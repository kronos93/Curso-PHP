<?php
/**
 * Especificar el tipo de dato que se
 * recibe como parametro
 */

function saludar(array $nombres){
    foreach($nombres as $nombre){
        echo "Hola {$nombre}\n";
    }
}
saludar([
    'Pedro',
    'Mateo',
    'Lucas',
]);
//Si se pasa un dato que no cumpla el tipo de dato
//
//php genera un error
//saludar("Juan");