<?php
require_once '../config/app.php';

use App\Models\Producto;
$productos = Producto::all();
//$productos = Producto::where('nombre','LIKE','%s')->get();
//var_dump($productos->toJson());

include_once APP_PATH.'views/productos/index.view.php';