<?php


// Determain is Number Even OR ODD

function isEven($n){
    if( 0 == ($n % 2) ){
        return true;
    }
    return false;
}



function isLeapYear($year){
    if(($year % 4  == 0) && (($year % 100 != 0 ) || ($year % 400 == 0))){
        return true;
    }
    return false;
}


function giveOil($type  = 'octen', $litter = 10 , $vehicle = "car"){
    echo "Please, Give me {$litter} litter {$type} on my {$vehicle}";
}


// function sum(int ... $numbers):int{
//     $result = 0;
//     for($i = 0; $i<count($numbers);$i++){
//         $result += $result[$i];
//     }
// }