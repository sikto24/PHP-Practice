<?php

$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

$numbers = array('a' => 10, 'd' => 1, 'f' => 30, 'z' => 44, 5, 7, 90, 500, 400, 40);



// asort($numbers,    SORT_NATURAL);
// print_r($numbers);


$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);

array_multisort($ar1, $ar2);


$ar = array(
    array("10", 11, 100, 100, "a"),
    array(1,  2, "2",   3,   0)
);

array_multisort($ar[0], SORT_ASC, SORT_STRING, $ar[1], SORT_STRING, SORT_ASC);

print_r($ar);
