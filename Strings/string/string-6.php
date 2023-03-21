<?php

$string = "brown Fox quick jump over fox a lazy dog Fox";
$offset =  strripos($string , "fb");

if($offset !== false){
    echo "\n this is corrent \n";
} else {
    echo "\n this is not corrent \n";
}

