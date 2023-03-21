<?php

$numbers1 = array(1, 2, 23, 24, 71, 59, 21);
$numbers2 = array(11, 22, 23, '24', 73, 59, 20);

$colors1 = array("r" => "red", "b" => "blue", "y" => "yellow", "g" => "green", "p" => " pure white");
$colors2 = array("r" => "green", "b" => "blue", "l" => "light yellow", "o" => "red", "p" => " pure black");


// $numbers = array_intersect($numbers1, $numbers1);
// print_r($numbers);

// $colors = array_intersect_assoc($colors1, $colors2);
$colors = array_diff_assoc($colors1, $colors2);
print_r($colors);
