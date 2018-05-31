<?php

$tekstas = 'Tekstas';
$tekstas2 = 'Tekstas 2';

$tekstas3 = "$tekstas $tekstas2";

$txt4 = 'tekstas ' . $tekstas3;

$text = "asdksjdjsadlk dlaskdj askldjaskldj askldj as \\ \" " 
        . 'aslkdjaskl djaslkdjaslkdjasldjaskldjaslkjalsjd s '
        . 'laskdjaskldjdklfjds l dsljf sdklj sdkf jsldk ls jgsdklj' 
        . 'sldkfjdskjf sldkjfsdl jfsdl l4j klfj';
        
        echo $text;
        
echo '<br/>';

$jonas = '  Jonas   ' ;

echo str_shuffle($jonas);

$naujasJonas = trim($jonas);

var_dump($jonas);
var_dump($naujasJonas);

var_dump(rtrim($jonas));

$jonas2 = '........Jonas........';

var_dump(ltrim($jonas2, '.'));

$jonas2 = str_replace('Jonas', 'Onute', $jonas2);

var_dump($jonas2);

echo strpos($jonas, 'J');

$jonas = substr("Jonas jonaitis", 0, 5);
echo $jonas;

$textas = "jonas jonaitis";

$tarpas = strpos($textas, " ");
$jonas = substr($textas, 0, $tarpas);

echo $jonas;

echo strlen($textas);


function vardas($tekstas)
{
	$tarpas = strpos($tekstas, " ");
	$jonas = substr($tekstas, 0, $tarpas);

	return $jonas;
}

function pavarde($tekstas)
{
	$tarpas = strpos($tekstas, " ");
	$ilgis = strlen($tekstas);
	
	$vardas = substr($tekstas, $tarpas + 1, $ilgis - $tarpas);

	$vardas = strtolower($vardas);
	
	return ucfirst($vardas);
}


$pavarde = vardas("Onutė Ėrelienė");

var_dump($pavarde);
var_dump(pavarde("Onutė Ėrelienė"));

// pirma raide didzioji
$pavarde = ucfirst($pavarde);

echo '<br/>';

echo $pavarde;

//visos didziosio
echo strtoupper($pavarde);

// visos mazosios
echo strtolower($pavarde);


echo strlen("onute");

echo mb_strlen("onutė");



