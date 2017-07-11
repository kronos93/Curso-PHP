<?php
/**
 * break y continue
 * break
 * Finaliza la ejecución de un ciclo
 * 
 */
$polos = ['HTML','CSS','JS','PHP'];

foreach ($polos as $key => $polo) {
    echo "Tenemos [{$key}] {$polo} polos\n";
    break;
    echo "Esto no se ejecuta";
}

/*
** Continue
** Salta una posición y continua la siguiente
*/

for($i=0; $i<50;$i++){
    if(($i % 2) == 0) {
        //echo "El número {$i} es par\n";
        continue;
        echo "Esto no se ejecuta";
    }
    echo "El número {$i} es impar\n";
}

foreach($polos as $key => $polo){
    if($polo == 'JS'){
        continue;
    }
    echo "Tengo un polo de {$polo}\n";
}