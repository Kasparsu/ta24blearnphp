<?php

function hello(): void {
    var_dump('Hello');
}

var_dump(hello());
hello();
hello();

function helloName($name='Nameless', $age=0) {
    var_dump("Hello, $name! You are $age years old!");
}

helloName('Kaspar', 35);
helloName('Martin', 33);
helloName();

function square(int $a): int|null {
    if($a<0){
        return null;
    }
    return $a * $a;
    var_dump('YLOLOYLYOLYLO');
}

$answer = square(-4);
$answer = square(4);
var_dump($answer);
var_dump(square(5));

