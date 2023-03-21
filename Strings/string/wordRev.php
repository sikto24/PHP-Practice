<?php

$string = "Hello, How are you ?";

$lenth = strlen($string);

$space = '';
$join = '';

for($i = 1; $i <= $lenth; $i++ ){
    if($string[$i] == " "){
            $space .=  $join . " ";
            $join = '';
            continue;
    }
    $join = $string[$i] . $join; 
}

$space .= $join ;

echo $space;