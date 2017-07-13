<?php
require_once './BebidaException.php';
require_once './ComidaException.php';
function beber($bebida) 
{
    if($bebida == 'cerveza'){
        //throw new Exception('El alcohol es malo');
        throw new BebidaException;
    }
    return "Bebiendo {$bebida}";
}

//echo beber("Jugo de mora")."\n";
//echo beber("cerveza")."\n";

function comer($comida){
    if($comida == 'mani'){
        throw new ComidaException;
    }
    return "Estoy comiendo $comida\n";
}
//comer('mani');