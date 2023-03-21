<?php

$luck = mt_rand(10, 100);



if ($luck % 2 == 0) {
    echo "Head";
} else {
    echo "Tail";
}
