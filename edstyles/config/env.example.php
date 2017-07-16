<?php
define('DATABASE',[
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'edstyles',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix'    => '',
]);

define('ED_MAIL',[
    'Host' => 'smtp.gmail.com',  // Specify main and backup SMTP servers
    'SMTPSecure' => 'tls',                            // Enable TLS encryption, `ssl` also accepted
    'Port' => '587',
    'SMTPAuth' => true,                               // Enable SMTP authentication
    'Username' => 'samuel.rojas.t93@gmail.com',                 // SMTP username
    'Password' => 's919397a',                           // SMTP password
    'AddressFrom' => 'samuel.rojas.t93@gmail.com',
    'NameFrom' => 'Samuel R.',
    'AddressInbox' => 'samuel.rojas.t93@gmail.com',
    'NameInbox' => 'Samuel',     
]);