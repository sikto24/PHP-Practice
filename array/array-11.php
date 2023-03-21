<?php
$numbers = array(1, 2, 3, "343", 5, 645, 46546, 34, 34,);

$keys = array(1 => "apple", "b" => "banana", "c" => "Cat", "d" => "dog");

if (array_search(343, $numbers)) {
    echo "343 is search found \n";
}

if (in_array(46546, $numbers)) {
    echo "46546 is search \n";
}


if (key_exists("1", $keys)) {

    echo "1 is exists";
}
