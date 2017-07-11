<?php

function obtenerElSignificadoDeLaVida()
{
    //Retornar un valor
    return 42; //NULL;
    //Despues del return no se ejecuta ninguna otra linea
    echo "No se ejecuará";
}

$result = obtenerElSignificadoDeLaVida();
var_dump($result);
var_dump(obtenerElSignificadoDeLaVida());
