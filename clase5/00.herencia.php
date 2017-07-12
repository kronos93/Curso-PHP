<?php

require_once './Hijo.php';

$samuel = new Hijo('Samuel');
echo "Heredé el apellido de papá {$samuel->getApellido()}\n";
$samuel->setApellido('XXXX');
if($samuel->getApellido() == 'XXXX'){
    echo "El apellido es igual\n";
}
echo "{$samuel->getApellido()}\n";

echo "{$samuel->getSecreto()}";
echo "{$samuel->getProtected()}";
//echo "{$samuel->getPrivate()}";
