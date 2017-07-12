<?php

require_once './Fabrica.php';

$fabrica = new Fabrica();
$mesa = $fabrica->fabricarMesa('Marron',4);
$mesa2 = $fabrica->fabricarMesa('Negra',10);


echo "La mesa uno es de color: {$mesa->getColor()} y tiene {$mesa->getPatas()}\n";
echo "La mesa dos es de color: {$mesa2->getColor()} y tiene {$mesa2->getPatas()}\n";