<?php
require_once './Producto.php';

$producto = new Producto('Camisa HTML','L');
//$producto->talla = 'L';
$producto->precio = 100.76;

$producto1 = new Producto('Camisa CSS','L');
$producto2 = new Producto('Camisa PHP','XL');
$producto3 = new Producto('Camisa JS','M');
$producto->resumen();
$producto1->resumen();
$producto2->resumen();
$producto3->resumen();