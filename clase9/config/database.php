<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => DATABASE['driver'] ?? 'mysql',
    'host'      => DATABASE['host'] ?? 'localhost',
    'database'  => DATABASE['database'] ?? 'tienda',
    'username'  => DATABASE['username'] ?? 'my-username',
    'password'  => DATABASE['password'] ?? 'password',
    'charset'   => DATABASE['charset'] ?? 'utf8mb4',
    'collation' => DATABASE['collation'] ?? 'utf8mb4_unicode_ci',
    'prefix'    => DATABASE['prefix'] ?? '',
]);

$capsule->bootEloquent();