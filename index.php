<?php
$test = 'hello';
$test = 'hello' . 'world' . '!';
$test = $test . '!!!!!';
$test .= '!!!!!';
$name = 'Kaspar';
$age = 33;
$test = $name . ' is ' . $age . ' years old!';
$test = "$name is $age years old!";
$test = "hello\n\nworld!";
$test = <<<END
cool stuff here
multi line 
END;
var_dump($test);