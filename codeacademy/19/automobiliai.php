<?php

class Autoparkas
{
	private $vietuKiekis = 0;
	private $automobiliai = [];
	
	public function __construct($vietuKiekis)
	{
		$this->vietuKiekis = $vietuKiekis;
	}
	
	public function priparkuotiAutomobili(Automobilis $automobilis)
	{
		if ($this->yraLaisvuVietu()) {
			$this->automobiliai[] = $automobilis;
			return true;
		}
		
		return false;
	}
	
	public function pigiausiasAutomobilis() : Automobilis
	{
		$pigiausias = $this->automobiliai[0];
		
		foreach($this->automobiliai as $auto) {
			if ($pigiausias->getKaina() > $auto->getKaina()) {
				$pigiausias = $auto;
			}
		}
		
		return $pigiausias;
	}
	
	/**
	 * @return bool
	 */
	private function yraLaisvuVietu() : bool
	{
		return $this->vietuKiekis > count($this->automobiliai);
	}
}

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

$audi = new Automobilis('Audi', '80', 1991);
$audi->setKaina(1000);

$audi2 = new Automobilis('Audi', 'R8', 2010);
$audi2->setKaina(10000);

$audi3 = new Automobilis('Audi', 'Q7', 2014);
$audi3->setKaina(15000);


$autoparkas = new Autoparkas(5);
$autoparkas->priparkuotiAutomobili($audi);
$autoparkas->priparkuotiAutomobili($audi2);
$autoparkas->priparkuotiAutomobili($audi3);

var_dump($autoparkas->pigiausiasAutomobilis());
