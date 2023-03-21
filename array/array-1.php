<?php
$cousions = preg_split('/(, |,)/', 'shawon , sikto , sopnil , ruhani , ruhan,mugdho,sammo,opsora,irab,itahi');

$count = count($cousions);



echo $count;

echo PHP_EOL;

$counts = join("/", $cousions);

echo $counts;
