<?php

$wordWrap = "lorem ispum dolar shittttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt, lorem ispum lorem ispum dolar shit, lorem ispum dolar shit, lorem ispum lorem ispum dolar shit, lorem ispum lorem ispum dolar shit, lorem ispum lorem ispum dolar shit, lorem ispum lorem ispum lorem ispum dolar shit, lorem ispum lorem ispum dolar shit, lorem ispum";
$wordWrap = wordwrap($wordWrap , 20 , "\n" , true);
print_r($wordWrap);
