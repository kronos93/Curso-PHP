<?php

/*
** Conectarse
*/
$mysqli = new mysqli('127.0.0.1','root','','tienda'); 
/*
** Verificar conexión
*/
if($mysqli->connect_error){
    echo "Falló la conexión a mysql, {$mysqli->connect_error}";
}
/* 
** Ejecutar sentencias sql
*/
$query = $mysqli->query("SELECT nombre,precio FROM productos");
/*
** Imprimir filas
*/
while($row = $query->fetch_assoc()){
    echo $row['nombre'] . ' ' . $row['precio']."\n";
}

/*
** Liberar memoria de resultados
*/
$query->free();
/*
** Cerrar la conexión a la bd
*/
$mysqli->close();