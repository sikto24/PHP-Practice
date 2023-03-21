<?php

// Recursion
function happyNewYear($starYear, $endYear, $yearSwtep)
{
        if ($starYear > $endYear) {
                return;
        }
        echo "Happy New Year {$starYear}" . "\n";
        $starYear +=  $yearSwtep;
        happyNewYear($starYear, $endYear, $yearSwtep);
}

happyNewYear(2020, 2220, 5);


// function loveyou($numbers){
//     if($numbers > 100){
//         return;
//     }
//     echo "I Love You {$numbers}\n";
//     $numbers++;
//     loveyou($numbers);

// }

// loveyou(1);




function doSomething()
{
        static $i;
        $i = $i ?? 0;
        $i++;

        echo $i . "\n";
}

function Something()
{
        static $i;
        $i = $i ?? 0;
        $i++;

        echo $i . "\n";
}

doSomething();
doSomething();
doSomething();
doSomething();
doSomething();
doSomething();
doSomething();
doSomething();
Something();
Something();
Something();
Something();
doSomething();
doSomething();
doSomething();
doSomething();
doSomething();
doSomething();
doSomething();
doSomething();
doSomething();
doSomething();
doSomething();
doSomething();
