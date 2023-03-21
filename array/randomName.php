<?php

$firstname = array(
    'Sohnathon',
    'Anthony',
    'Erasmo',
    'Raleigh',
    'Nancie',
    'Tama',
    'Camellia',
    'Augustine',
    'Christeen',
    'Luz',
    'Diego',
    'Lyndia',
    'Thomas',
    'Georgianna',
    'Leigha',
    'Alejandro',
    'Marquis',
    'Joan',
    'Stephania',
    'Elroy',
    'Zonia',
    'Buffy',
    'Sharie',
    'Blythe',
    'Gaylene',
    'Elida',
    'Randy',
    'Margarete',
    'Margarett',
    'Dion',
    'Tomi',
    'Arden',
    'Clora',
    'Laine',
    'Becki',
    'Margherita',
    'Bong',
    'Jeanice',
    'Qiana',
    'Lawanda',
    'Rebecka',
    'Maribel',
    'Tami',
    'Yuri',
    'Michele',
    'Rubi',
    'Larisa',
    'Lloyd',
    'Tyisha',
    'Samatha',
);

$lastname = array(
    'Mischke',
    'Serna',
    'Pingree',
    'Mcnaught',
    'Pepper',
    'Schildgen',
    'Mongold',
    'Wrona',
    'Geddes',
    'Lanz',
    'Fetzer',
    'Schroeder',
    'Block',
    'Mayoral',
    'Fleishman',
    'Roberie',
    'Latson',
    'Lupo',
    'Motsinger',
    'Drews',
    'Coby',
    'Redner',
    'Culton',
    'Howe',
    'Stoval',
    'Michaud',
    'Mote',
    'Menjivar',
    'Wiers',
    'Paris',
    'Grisby',
    'Noren',
    'Damron',
    'Kazmierczak',
    'Haslett',
    'Guillemette',
    'Buresh',
    'Center',
    'Kucera',
    'Catt',
    'Badon',
    'Grumbles',
    'Antes',
    'Byron',
    'Volkman',
    'Klemp',
    'Pekar',
    'Pecora',
    'Schewe',
    'Ramage',
);


$fullName = array_merge($firstname, $lastname);

$testNames = array("sikto", "sopnil", "shawon", "ruhan", "ruhani", "sammo", "irab", "mugdho");



function findName($name)
{

    if (!empty($name)) {
        return $name[0] == "S";
    }
}


$test = array_filter($testNames, 'findName');
echo PHP_EOL;
$test1 = array_filter($firstname, 'findName');

print_r($test);
print_r($test1);
