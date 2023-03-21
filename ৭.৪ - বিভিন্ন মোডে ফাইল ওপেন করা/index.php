<?php

$file = 'D:\\Everything\\Learn With Hasin Hayder\\PHP\\FILE\\৭.৪ - বিভিন্ন মোডে ফাইল ওপেন করা\\data.txt';

$fp = fopen($file , 'r+');
$line = fgets($fp);
echo $line;
fwrite($fp ,"Uranus");
$line = fgets($fp);
echo $line;

fseek($fp , 0); // rewind($fp);
fwrite($fp ,"Venus");


fclose($fp);