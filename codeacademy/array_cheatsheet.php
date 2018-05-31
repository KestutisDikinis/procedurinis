
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

//masyvo elemento pasiekimas
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

isset($array['vardas']);

// patikrina ar masyvas yra tuscias

$array == []; // patikrinam ar masyvas tuscias
$string == ''; // patikrinam ar stringas tuscias
is_null($array); // patikriam ar null
count($array) == 0; // patikrinam ar elementu kiekis lygus 0

empty($array); // patikrina visus virsui isvardintus variantus

// Daugiamaciai masyvai:

$automobilis = ['marke' => 'audi', 'modelis' => 'R8'];
$automobilis2 = ['marke' => 'BMW', 'modelis' => '330'];

$autoparkas = [
	'adresas' => 'gariunai', 
	'vietu_kiekis' => 10, 
	'automobiliai' => [$automobilis, $automobilis2]
];

////////////////////// Arba galima uzrasyti viska i viena

$autoparkas = [
	'adresas' => 'gariunai', 
	'vietu_kiekis' => 10, 
	'automobiliai' => [
		0 => ['marke' => 'audi', 'modelis' => 'R8'],
		1 => ['marke' => 'BMW', 'modelis' => '330']
	]
];

// paskaiciuoti automobiliu kieki:
echo count($autoparkas['automobiliai']);

// Gauti antro automobilio modeli
echo $autoparkas['automobiliai'][1]['modelis']; // gali buti betkiek gylus


