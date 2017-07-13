<?php

/*
** Conectarse
*/
$mysqli = mysqli_connect('127.0.0.1','root','','tienda'); 
/*
** Verificar conexión
*/
if(mysqli_connect_errno($mysqli)){
    echo "Falló la conexión a mysql, ".mysqli_connect_errno();
}
/* 
** Ejecutar sentencias sql
*/
$query = mysqli_query($mysqli,"SELECT nombre, precio FROM productos");
/*
** Imprimir filas
*/
while($row = mysqli_fetch_assoc($query)){
    echo $row['nombre'] . ' ' . $row['precio']."\n";
}
/*
** Liberar memoria de resultados
*/
mysqli_free_result($query);
/*
** Cerrar la conexión a la bd
*/
$mysqli->close();