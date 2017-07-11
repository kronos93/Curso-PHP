<?php
require_once './Producto.php';

$producto = new Producto();

$producto->nombre = 'Camisa CSS';
$producto->talla = 'L';
//$producto->precio = 100.76;

echo $producto->nombre.PHP_EOL;
echo $producto->talla.PHP_EOL;
echo $producto->precio.PHP_EOL;

$producto2 = new Producto();
$producto2->nombre = 'Camisa JS';
$producto2->talla = 'XL';
$producto2->precio = 170.76;

echo $producto2->nombre.PHP_EOL;
echo $producto2->talla.PHP_EOL;
echo $producto2->precio.PHP_EOL;

$producto2->resumen();