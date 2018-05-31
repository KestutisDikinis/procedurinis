<?php

class Automobilis
{
	private $marke;
	private $modelis;
	private $kaina = 0;
	private $metai = 0;
	
	public function __construct($marke, $modelis, $metai)
	{
		$this->marke = $marke;
		$this->modelis = $modelis;
		$this->metai = $metai;
	}
	
	public function setKaina($kaina)
	{
		$this->kaina = $kaina;
	}
	
	public function getModelis()
	{
		return $this->modelis;
	}
	
	public function getMetai()
	{
		return $this->metai;
	}
	
	public function getKaina()
	{
		return $this->kaina;
	}
	
	public function getMarke()
	{
		return $this->marke;
	}
}

function pigiausias($automobiliai)
{
	$pigiausias = $automobiliai[0];
	
	foreach($automobiliai as $auto) {
		
	}
	
	return $pigiausias;
}

$audi = new Automobilis('Audi', '80', 1991);
$audi->setKaina(1000);

$audi2 = new Automobilis('Audi', 'R8', 2010);
$audi2->setKaina(10000);

$audi3 = new Automobilis();
$audi3->setMarke('Audi');
$audi3->setModelis('Q7');
$audi3->setMetai(2014);
$audi3->setKaina(15000);


$automobiliai = [$audi, $audi2, $audi3];

var_dump($automobiliai);
