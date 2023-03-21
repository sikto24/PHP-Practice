<?php

$string = "Hello World, How are you?";

$parts = explode(" ", $string);
print_r($parts);

$parts_orginal = join(" ", $parts);
print_r($parts_orginal);
echo PHP_EOL;

$parts_orginals =  implode(" ", $parts );
print_r($parts_orginals);




echo PHP_EOL;

$parts2 = strtok($string, " ,");

while($parts2 !== false){
    echo $parts2."\n";
   $parts2 = strtok(" ,");
}


echo PHP_EOL;

$part5 = preg_split("/\s|,/" , $string);
print_r($part5);

