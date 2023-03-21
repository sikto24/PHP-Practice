<?php

 $hello = "Hello, How are you ?";

$count = strlen($hello) ;
$


for($i = 1; $i <= $count; $i ++){
  

  if($hello[$i * -1] == " "){
   
    continue;
  }
   echo $hello[$i * -1];
}









// $noSpace = "";
// $noSpace2 = "";

// for($i = $lenth; $i >= 0; $i--){
//     if($hello[$i] == " "){
//         $noSpace .=  " ";
//         $noSpace2 = "";
//         continue;
//     }
//     print_r($hello[$i]);

// }