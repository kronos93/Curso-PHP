<?php
class Fabrica {
    public function fabricarMesa($p_color,$p_patas){
        return new Class($p_color,$p_patas){
            private $color;
            private $patas; 
            public function __construct($color,$patas){
                $this->color = $color;
                $this->patas = $patas;
            }
            public function getColor(){
                return $this->color;
            }
            public function getPatas(){
                return $this->patas;
            }
        };
    }
}