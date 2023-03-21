<?php
$randomName = array(
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



$randomName2 = array(
    'Johnathon',
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

$cousins = array("shawon", "sikto", "ruhani", "ruhan", "mugdho", "sammo", "opsora", "irab", "atahi");
$cousins2 = array("shohel", "sohoag", " rana", "aktera", "bappi", "jeba", "sikto", "shawon", " riyad", "risad", "sharmin", "supti");


$newName = array_merge($randomName, $randomName2);
$newName2 = array_merge($cousins, $cousins2);



function nameMerge($name)
{

    return $name[0] == 's';
}


$results = array_filter($newName2, 'nameMerge');

print_r($results);
