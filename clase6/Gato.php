<?php
require_once './Animal.php';
require_once './TocableTrait.php';
require_once './PeligrosoTrait.php';
class Gato extends Animal 
{
    use TocableTrait;
    use PeligrosoTrait;
}