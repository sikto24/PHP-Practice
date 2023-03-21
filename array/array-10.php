<?php

$fruits = array("mango", "banana", "apple", "malta", "olive");
$drinks = array("cocacola", "7up", "sprite", " fanta");

$newfruits = array_slice($fruits, 1, 3);
$newdrinks = array_slice($drinks, 1, 3);

$newFood = array_merge($newfruits, $newdrinks);


print_r($newfruits);
print_r($newdrinks);
print_r($newFood);
