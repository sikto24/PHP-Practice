<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);


$cousins = array("shawon", "sikto", "ruhani", "ruhan", "mugdho", "sammo", "opsora", "irab", "atahi");
$cousins2 = array("shohel", "sohoag", " rana", "aktera", "bappi", "jeba", "sikto", "shawon", " riyad", "risad", "sharmin", "supti");



function nameFinder($name)
{
    if (!empty($name)) {
        return $name[0] == "s";
    }
}


function multiple($n)
{
    printf("multiple of %d is %d \n", $n, $n * $n);
}

function cube($c)
{
    return ($c * $c * $c);
}



function even($n)
{
    return $n % 2 == 0;
}

function odd($odd)
{
    return $odd % 2 == 1;
}



$newEven = array_filter($numbers, 'even');
$newodd = array_filter($numbers, 'odd');

// print_r($newodd);

// $newNumbers = array_walk($numbers, "multiple");

// $newCube = array_map("cube", $numbers);

// print_r($newCube);



$findName = array_filter($cousins2, "nameFinder");

print_r($findName);
