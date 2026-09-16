<?php

class Box {
    public $width;
    public $height;
    public $length;

    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}

$box1 = new Box();
$box1->width = 1;
$box1->height = 2;
$box1->length = 3;
var_dump($box1, $box1->volume());

$box2 = new Box();
$box2->width = 3;
$box2->height = 4;
$box2->length = 5;
var_dump($box2, $box2->volume());
var_dump($box1, $box1->volume());
