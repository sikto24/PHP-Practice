<?php

$foods = [
    'drinks' => 'cocacola , mojo , 7up ',
    'food' => 'rice , kacchi , beaf , roast ',
];


// echo print_r(array_values($foods));



$food = array_values($foods);

for ($i = 0; $i < count($food); $i++) {
    $kabar = $food[$i];
    echo $kabar . "\n";
}

echo PHP_EOL;


foreach ($foods as $food => $key) {
    echo $key . "\n";
}
