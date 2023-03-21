<?php

$bio = [
    'fName' => 'Sikto',
    'lName' => 'Neil',
    'age' => 26,
    'address' =>  'mirpur'
];


print_r($bio);

printf("%s %s \n", $bio['fName'], $bio['lName']);

echo join(',', $bio);

echo PHP_EOL;

$new_bio = serialize($bio);
print_r($new_bio);

$bio2 = unserialize($new_bio);

print_r($bio2);

$json = json_encode($bio2);

print_r($json);

$json = json_decode($json);

print_r($json);
