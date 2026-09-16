<?php

class Box {
    public $width;
    public $height;
    public $length;

    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}

class MetalBox extends Box {
    public $weightPerUnit;
    public function mass(){
        return $this->volume() * $this->weightPerUnit;
    }
}

$metal1 = new MetalBox();
var_dump($metal1);