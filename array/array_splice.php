<?php

$bus = array("sr", "binimoy", "hanif", "shyamoli", "ena", "nabil", "miami", "startline");

$new_bus = array("marsha", "royal", "green line", "keya", "sb");


$fewBus = array_splice($bus, 0, 1, $new_bus);

print_r($fewBus);
print_r($bus);
