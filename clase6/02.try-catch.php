<?php
require_once './01.throwing.php';
try {
    //$numero = 1/0;
    //echo beber('cerveza');
    //echo comer('mani');
    echo comer('pollo');
    echo "Sigue el código\n";
} catch (ComidaException $e) {
    echo "Atrapamos un error de comida...\n";
    echo "{$e->getMessage()}\n";
} catch (BebidaException $e) {
    echo "Atrapamos un error de bebida...\n";
    echo "{$e->getMessage()}\n";
} catch (Exception $e) {
    echo "Atrapamos un error general...\n";
    echo "{$e->getMessage()}\n";
} finally {
    echo "Esto se ejecuta al final del bloque try catch \n";
}
echo "Fin";
