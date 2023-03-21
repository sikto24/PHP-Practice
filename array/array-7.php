<?php

// $fruits = array("mango", "jackfruit", "banana", "ornage", "apple", 0,  "lichi");

// $data = array("a" => "123", "b" => "34", "c" => "name", "D" => "Hello", 12 => "10", "e" => "2323");

// $someFruits = array_slice($fruits, 3, -1, true);

// print_r($someFruits);

// $someData = array_slice($data, 1);

// print_r($someData);

// $someData = array_slice($data, 1);

// print_r($someData);

// $someFruits = array_slice($fruits, -5, -3);


$busName = array("hanif", "shymoli", "green line", "nabil", "ena", "ac binimoy", "unique", "starline");

$newBus = array("Sr", "shaha fateha ali", "dipjol", "miami");

$fewBus = array_splice($busName, 0, 2, $newBus);

print_r($fewBus);

print_r($busName);
