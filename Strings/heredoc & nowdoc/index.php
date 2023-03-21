<?php


// Example FOr Heredoc and nowdoc


$name  = "Sikto";
$age = 26;
$nationality = "Bangladesh";


$bio = "My Name is {$name} \t , I am {$age} years old. \n I am From {$nationality}";
// print_r($bio);

// Heredoc example


$hereDoc = <<<'END'

hello {$name}
how are you ?
i am good and thank you.

END;

print_r($hereDoc);