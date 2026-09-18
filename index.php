<?php

class Box {


    public function __construct(public int $width, private int $height, protected int $length) {

        var_dump('Box was created');
    }

    public function volume(){
        return $this->width * $this->height * $this->length;
    }

    public function __set($name, $value) {
        var_dump($name, $value);
    }

    public function __get($name) {
        var_dump($name);
        return 'Some value';
    }

    public function __call($name, $args) {
        var_dump($name, $args);
    }

    public function __invoke($a, $b)
    {
        var_dump($a, $b);
    }

    public function __toString()
    {
        return 'Im a Box whoopty doo!';
    }
    
    public function __destruct()
    {
        var_dump('Box was Destroyed');
    }
}

function test() {
    $box2 = new Box(1,2,3);
}
test();



$box1 = new Box(1, 2, 3);
$box1->hello = 'LOL';
var_dump($box1->yolo);
$box1->cool(1, 'asdads', 41);
$box1(1, 'asdads');

$box1 = 1;
var_dump($box1);
echo $box1;