<?php
require_once './Papa.php';
//Constante globales
define('PI', 3.1416);
echo PI."\n";

//Constantes de clase
$papa = new Papa();
echo $papa::GENERO."\n";

//Arrays constantes
define('FRUTAS',[
    'manzana',
    'pera',
    'mango',
]);

var_dump(FRUTAS);