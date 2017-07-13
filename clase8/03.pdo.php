<?php

try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=tienda',
        'root',
        ''
    );
    $sql = 'SELECT nombre, precio FROM productos';
    $result = $pdo->query($sql);
    foreach($result as $row){
        echo "{$row['nombre']}, precio {$row['precio']}\n";
    }
    $pdo = null;
} catch (PDOExeption $e) {
    echo 'Error!!!!: '. $e->getMessage()."\n";
} finally {
    $pdo = null;
}
