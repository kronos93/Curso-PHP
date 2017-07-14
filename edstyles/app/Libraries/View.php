<?php

namespace App\Libraries;

class View
{
    public static function render($fileView, array $variables = [])
    {
        extract($variables); //Crea variables PHP a partir de un arreglo
        require_once APP_PATH."views/{$fileView}.view.php";
    }
}
