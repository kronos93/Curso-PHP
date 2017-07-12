<?php
class Familia {
    public function miembro(Hijo $persona){
        echo "{$persona->nombre}\n";
        echo "{$persona->apellido}\n";
    }
}