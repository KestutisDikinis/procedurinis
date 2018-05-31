<?php

//masyvo sukurimas
$array = ['mojito', 'degtine', 'brendis'];

//masyvo sukurimas sena sintakse
$arr3 = array('mojito', 'degtine', 'brendis');

//tuscio masyvo sukurimas
$arr2 = [];

//elemto pridejomas i masyvo gala
$arr2[] = 'mojito';
$arr2[] = 'dzinas';

//masyvo sukurimas su vardiniais indexais
$array4 = ['index1' => 'degtine', 'index2' => 'mojito'];

//masyvo elemento pasikimas
echo $array4['index1'];

//masyvo elemento pasalinimas
unset($array4['index1']);

//elemento pridejimas i masyvo prieki
array_unshift($array4, 'brendis');

// pirmo elemento pasiemimas
$pirmas = array_shift($array);

// paskutinio elemento pasalinimas
$paskutinis = array_pop($array);

// sujungti 2 masyvus i 1
$sujungtas = array_merge($array, $arr2);

// sumaiso masyvo elementus
shuffle($array);
var_dump($array);

/////////////// LOGIKA

// patikrinam, ar reiksme egzistuoja masyve
var_dump(in_array('jinas', $array));

// patikrina ar masyvas yra tuscias

$array == [];
$string == '';
is_null($array);
count($array) == 0;

empty($array);



