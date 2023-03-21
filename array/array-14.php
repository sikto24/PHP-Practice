<?php
$numbers = array(1, 2, 3, 4, 5);

function reduce($oldValues, $newValues)
{
    if ($newValues % 2 != 0) {
        return ($oldValues + $newValues);
    }
    return $oldValues;
}


$result = array_reduce($numbers, "reduce");
print_r($result);
