<?php
require_once './Papa.php';
class Hijo extends Papa
{
    public function __constructor($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getProtected()
    {
        echo "{$this->protegido}\n";
    }
}
