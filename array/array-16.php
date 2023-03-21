<?php
$fruits = array('a' => 'apple', 'b' => 'Banana', 'c' => 'cheri', 'e' => 'egg', 't' => 'Tea');


// shuffle($fruits);

$values = array_rand($fruits);

print_r($fruits[$values]);

print_r($fruits);
