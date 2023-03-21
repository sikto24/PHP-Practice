<?php
$datas = array(
    '1' => 'Sikto Neil 01774468589 sikto.remo24@gmail.com',
    '2' => 'Sopnil Neil 016016016016 dhrubo.neil@gmail.com',
    '3' => 'Shawon Sarketr 01717384197 shawon@gmail.com',
    '4' => 'Umma habiba 01747896373 umma.habiba@gmail.com',
);


function hello($value){
    $data = sscanf($value , "%s %s %s %s" , $fName , $lName , $phone , $email);
    echo $fName . "\n";
    echo $lName . "\n";
    echo $phone . "\n";
    echo $email . "\n";

}


array_walk($datas , 'hello');