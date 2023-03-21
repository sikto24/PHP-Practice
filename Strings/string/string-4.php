<?php

$name = "Hello World , How are You ?";
$nameLenth  = strlen($name) - 1;

for($i = $nameLenth; $i >= 0; $i--){
    echo $name[$i];
}


echo PHP_EOL;

$nameLenth  = strlen($name);

for($i = 1; $i <= $nameLenth; $i++){
     echo $name[$i * -1];
}


echo PHP_EOL;

echo strrev($name);


$wordLenth = str_word_count($name);
echo $wordLenth;


echo PHP_EOL;

$string = "Hello World , How are You ?";
$space = "";
$temp = "";

for($i = 0; $i < strlen($string); $i++){
    if($string[$i] == " "){
            $space  .=  $temp . " ";
            $temp = "";
            continue;
    }
    $temp = $string[$i] . $temp;
}

$space .= $temp;
echo $space;





