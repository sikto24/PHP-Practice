<?php


$cars = array("volvo", "toyota", "nissian", "mitsubisu", "hundai");

$bus = array("Hanif", "Shymoli", "ENA", "Star Line", "Green Line", "Robi Express", "SR");


$new = array_merge($cars, $bus);
$new2 = $cars + $bus;

print_r($new);
print_r($new2);
