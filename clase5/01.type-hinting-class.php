<?php

require_once './Hijo.php';
require_once './Familia.php';


$persona = new Hijo('Samuel');
$familiar = new Familia();
echo "{$familiar->miembro($persona)}\n";