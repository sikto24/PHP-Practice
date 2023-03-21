<?php

$person = array(
    'fname' => 'sikto',
    'lname' => 'neil',
);

$newperson = &$person;

$newperson['lname'] = 'sayed';

print_r($person);
print_r($newperson);
