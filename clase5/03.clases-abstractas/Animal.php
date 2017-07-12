<?php

abstract class Animal {
    abstract public function hablar();
    public function saludar(){
        $saludo = $this->hablar(). ' '. $this->hablar();
        return "{$saludo}\n";
    }
}