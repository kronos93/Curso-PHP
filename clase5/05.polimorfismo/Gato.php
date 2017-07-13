<?php
require_once './AnimalInterface.php';
class Gato implements AnimalInterface {
    public function comer($comida){
        return "Comiendo {$comida}\n";
    }
    public function hablar(){
        return "Miau\n";
    }
}