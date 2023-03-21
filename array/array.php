<?php


function hello($s, $e)
{
    if ($s >=  $e) {
        return;
    }
    echo $s;
    $t = explode(",", $s, 0);
    print_r($t);
    $s++;
    hello($s, $e);
}

hello(1, 10);
