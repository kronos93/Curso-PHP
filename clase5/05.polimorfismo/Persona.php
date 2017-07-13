<?php

class Persona {
    public function cuidar(AnimalInterface $animal){
        echo $animal->hablar();
        echo $animal->comer('carne');
    }
}