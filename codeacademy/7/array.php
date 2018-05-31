<?php

$auto = ['marke' => 'VW', 'modelis' => 'passat', 'metai' => 2005];

var_dump($auto);

echo $auto['modelis'];

$a = ['VW', 'passat', 2005];

var_dump($a);

echo $a[1];

/* masyvo sukurimas */

$mas = [9, 8, 7];

$n = [];
$n[] = 'Labas'; // Prides i masyvo gala
$n[] = 'Labas'; // Prides i masyvo gala


$auto[] = "kazkas";
$auto['kazkas'] = "kazkas2";
$auto[] = "kazkas";


$n = array(9, 8, 7); // iki PHP 5.4 versijo

var_dump($auto);

// masyvo elemento pasalinimas
unset($auto[0]);

// elemento pridejimas i masyva
$auto[] = "kazkas";

// echo $auto[0];

$auto[0] = "nulis";

var_dump($auto);

// masyvo elementu kiekis
echo count($auto);

var_dump(array_values($auto));

var_dump(array_keys($auto));

//pridedame elementa i masyvo prieki
array_unshift($auto, 'varyklis');


var_dump($auto);
