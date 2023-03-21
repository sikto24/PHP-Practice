<?php

$name = null;

if (isset($name)) {
    echo 'name is set';
} else {
    echo 'name is not set';
}


echo PHP_EOL;

if (empty($name)) {
    echo 'name is set';
} else {
    echo 'name is not set';
}

echo PHP_EOL;

if (isset($name) && is_numeric($name) || $name != '') {
    echo 'name is set new';
}
