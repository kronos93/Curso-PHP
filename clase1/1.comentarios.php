<?php

//Si es un archivo php
/*
** No es necesario
** cerrar la etiqueta php por seguridad
*/
header("Content-Type: application/json;charset=utf-8");

$obj = new stdClass();
$obj->msj = 'Hay lineas comentadas en este archivo';
echo json_encode($obj, JSON_PRETTY_PRINT);
