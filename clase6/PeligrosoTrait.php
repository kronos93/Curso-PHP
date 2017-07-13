<?php
require_once './RuidosoTrait.php';
trait PeligrosoTrait {
    use RuidosoTrait;
    public function atacar(){
        return 'Corre porque soy peligroso';
    }
}