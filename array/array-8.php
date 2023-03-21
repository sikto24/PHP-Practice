<?php

$busNames = array("Ena", "Hanif", "unique", "SR", "Shymoli", "nabil", "BRTC", "starline", "marsha");


$newBus = array("ac binimoy", "green line", "pesident travels", "robi express");

$fewBus = array_splice($busNames, 1, 2, $newBus);

print_r($busNames);
print_r($fewBus);
