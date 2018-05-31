<?php

class Suo
{
	public $vardas = '';
	
	function balsas()
	{
		echo 'au au';
	}
}

$reksas = new Suo();
$reksas->vardas = 'Reksas';

$brisius = new Suo();
$brisius->vardas = 'Brisius';


var_dump($reksas);
var_dump($brisius);


class Automobilis
{
	public $marke;
	public $modelis;
	public $kaina = 0;
	public $metai = 0;
}

function pigiausias($automobiliai)
{
	$pigiausias = $automobiliai[0];
	
	foreach($automobiliai as $auto) {
		
	}
	
	return $pigiausias;
}

$audi = new Automobilis();
$audi->marke = 'Audi';
$audi->modelis = '80';
$audi->metai = 1991;
$audi->kaina = 1000;

$audi2 = new Automobilis();
$audi2->marke = 'Audi';
$audi2->modelis = 'R8';
$audi2->metai = 2010;
$audi2->kaina = 10000;

$audi3 = new Automobilis();
$audi3->marke = 'Audi';
$audi3->modelis = 'Q7';
$audi3->metai = 2014;
$audi3->kaina = 15000;

$automobiliai = [$audi, $audi2, $audi3];

var_dump($automobiliai);