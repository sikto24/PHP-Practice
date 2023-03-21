<?php

// $number = array();


// for ($i = 1; $i <= 10; $i++) {
//     array_push($number, $i);
// }

// print_r($number);


// $newNumber = range(0, 10, 2);

// print_r($newNumber);


foreach (range(0, 100, 10) as $evenNumber) {
    if ($evenNumber > 0) {
        echo $evenNumber . "\n";
    }
}
