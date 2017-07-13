<?php
require_once './EscuelaDigital/Estudiante.php';
require_once './Universidad/Estudiante.php';
require_once './Estudiante.php';
require_once './EscuelaDigital/Profesor.php';

//use \EscuelaDigital\Estudiante as ED;
//use \EscuelaDigital\Profesor;
use \EscuelaDigital\{Estudiante as ED, Profesor};

use \Universidad\Estudiante;
$estudiante1 = new ED('Samuel');
echo $estudiante1->saludar()."\n";

$estudiante2 = new Estudiante('Jose');
echo $estudiante2->saludar()."\n";

$estudiante3 = new \Estudiante('Jose');
echo $estudiante3->saludar()."\n";

$profesor = new Profesor('Samuel','PHP avanzado');
echo $profesor->bienvenida()."\n";