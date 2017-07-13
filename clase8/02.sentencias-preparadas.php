<?php

/*
** Conectarse
*/
$mysqli = new mysqli('127.0.0.1', 'root', '', 'tienda');
/*
** Verificar conexión
*/
if ($mysqli->connect_error) {
    echo "Falló la conexión a mysql, {$mysqli->connect_error}";
}
/*
** Preparar consulta
*/
$sql = "INSERT INTO productos (nombre, talla, precio) values(?,?,?)";
$sentencia = $mysqli->prepare($sql);
if (!$sentencia) {
    echo "Falló la preparación ({$mysqli->errno}) {$mysqli->error}";
}
/*
** Vincular parametros
*/
//i entero
//s string
//d double
//b blob
$nombre = 'Camisa CSS';
$talla = 'S';
$precio = 20000;
if (!$sentencia->bind_param('ssi', $nombre, $talla, $precio)) {
    echo "Falló la vinculación ({$mysqli->errno}) {$mysqli->error}";
}
/*
** Ejecutar
*/
if (!$sentencia->execute()) {
    echo "Falló a ejecución ({$mysqli->errno}) {$mysqli->error}";
} else {
    echo "{$sentencia->affected_rows} Fila insertada\n";
}

/*
** Preparar consulta
*/
$sql = 'SELECT nombre, precio FROM productos';
$sentencia2 = $mysqli->prepare($sql);
/*
** Vincular parametros
*/
//i entero
//s string
//d double
//b blob
//Vincular no es necesario
/*
** Ejecutar
*/
$sentencia2->execute();

/*
** Vincular las variables de resultados
*/
$sentencia2->bind_result($nombre, $precio);

/*
** Usar datos
*/
while ($row = $sentencia2->fetch()) {
    echo "{$nombre} precio: {$precio}\n";
}
/*
** Liberar memoria
*/
$sentencia->close();
$sentencia2->close();
/*
** Cerrar conexión
*/
$mysqli->close();
