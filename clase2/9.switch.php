<?php
//Switch es similar al if
//Se compara un valor con pislbes valores
$polo = 'CSS';

switch ($polo) {
    case 'CSS':
        var_dump('Tengo un polo CSS');
        break;
    case 'JS':
        var_dump('Tengo un polo JS');
        break;
    case 'HTML':
        var_dump('Tengo un polo HTML');
        break;
    default: 
        var_dump('Tengo un polo del nuevo curso');
        break;
}
