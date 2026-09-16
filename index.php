<?php

class Box {
    public $width;
    public $height;
    public $length;

    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}

$num1 = 1;
$num2 = &$num1;
$num1 = 2;
var_dump($num1, $num2);

$box1 = new Box();
$box1->width = 1;
$box2 = clone $box1;
$box2->width = $box1->width;
$box1->width = 2;

var_dump($box1, $box2);