<?php

try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=tienda',
        'root',
        ''
    );
    $sql = 'TRUNCATE productos';
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();
    //perparar
    $sql = "INSERT INTO productos (nombre,talla,precio) VALUES (:nombre,:talla,:precio)";
    $sentencia = $pdo->prepare($sql);
    //vincular
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->bindParam(':talla', $talla);
    $sentencia->bindParam(':precio', $precio);
    //ejecutar
    $nombre ='Camiseta HTML';
    $talla = 'S';
    $precio = 1200;
    $sentencia->execute();

    //insertar otros datos
    $nombre ='Camiseta JS';
    $talla = 'S';
    $precio = 1200;
    $sentencia->execute();

    $nombre ='Camiseta CSS';
    $talla = 'S';
    $precio = 1200;
    $sentencia->execute();

    //No es necesario vincular
    //Vincular paametros con nombre y ejecutar
    $sentencia->execute([
        ':nombre' => 'Camiseta PHP7',
        ':talla' => 'M',
        ':precio' => 23400
    ]);

    //Vincular paametros con nombre y ejecutar
    $sentencia->execute([
        ':nombre' => 'Camiseta git',
        ':talla' => 'M',
        ':precio' => 23400
    ]);

    //Podemosusar parámetros por sustitución

    $sql = 'SELECT nombre, talla, precio FROM productos WHERE nombre LIKE ? AND precio > ?';
    $sentencia= $pdo->prepare($sql);

    $sentencia->execute([
        '%s',
        1000,
    ]);
    $result = $sentencia->fetchAll();
    foreach ($result as $row) {
        echo "{$row['nombre']} precio: {$row['precio']}\n";
    }
    //Actualiza registros
    $sql = "UPDATE productos SET precio = :precio WHERE id = :id";
    $otraSentencia = $pdo->prepare($sql);
    $otraSentencia->execute([
        ':precio' => 50,
        ':id' => 1,
    ]);
    //Eliminae registros
    $sql = 'DELETE FROM productos WHERE id = :id';
    $sentenciaEliminar = $pdo->prepare($sql);
    $sentenciaEliminar->execute([
        ':id' => 1,
    ]);
} catch (PDOExeption $e) {
    echo 'Error!!!!: '. $e->getMessage()."\n";
} finally {
    $pdo = null;
}
