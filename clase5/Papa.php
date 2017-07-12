<?php
class Papa
{
    const GENERO = 'Masculino';
    private $nombre = 'Samuel';
    private $apellido = 'Rojas';
    private $secreto = "Secreto"; //Solo existe en la clase
    protected $protegido = "Protegido"; //Entre clases extendidas y ambito de clase
    public function getSecreto()
    {
        return "{$this->secreto}\n";
    }
    private function getPrivate()
    {
        echo "Función privada\n";
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
}
