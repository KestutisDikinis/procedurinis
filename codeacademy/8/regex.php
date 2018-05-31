<?php

// regex101.com

$masyvas = [];
$tekstas = "Bomzas bomziukas isejo mulkis i konteineri.";
$pattern = "#(bomz(as|e|iukas))|(mulki(s|e|iukuas))#i";

$pattern2 = "#\(?(\+370|8)\)?\ ?\d{8}#"; // patternas surasti telefono numeriui

// Rezulstatas bus 1/true jei yra atitikimu ir 0/false jeigu nera arba ivyko klaida
$rezultatas = preg_match_all($pattern, $tekstas, $masyvas);

// Pakeicia visus keiksmazodzius pagal patterna i zvaigdutes
$rez = preg_replace($pattern, "****", $tekstas);

var_dump($rez);

var_dump($rezultatas);

var_dump($masyvas);