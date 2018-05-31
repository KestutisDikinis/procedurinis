<?php

abstract class Zmogus
{
	protected $vardas;
	private $pavarde;
	private $amzius;
	
	public function __construct($vardas, $pavarde, $amzius)
	{
		$this->vardas = $vardas;
		$this->pavarde = $pavarde;
		$this->amzius = $amzius;
	}
	
	public function vardas()
	{
		return $this->vardas;
	}
	
	public function pavarde()
	{
		return $this->pavarde;
	}
	
	public function amzius()
	{
		return $this->amzius;
	}
	
	public function pasisveikinti()
	{
		echo "Sveiki, mano vardas {$this->vardas}";
	}
}

class Mokytojas extends Zmogus
{
	public function mokyti()
	{
		echo "2+2=4";
	}
		
	public function pasisveikinti() // perraso tevyne klase
	{
		echo "Sveiki, mano vardas {$this->vardas} metu.";
	}
}


class Mokinys extends Zmogus
{
	public function trukdyti()
	{
		echo "Awwww";
	}
	
	public function pasisveikinti()
	{
		echo "Sveiki, mano vardas {$this->vardas} metu.";
	}
}

class Direktorius extends Zmogus
{
	public function pasisveikinti()
	{
		echo "Sveiki, mano vardas {$this->vardas} metu. Esu direktorius.";
	}
}

$zmogus = new Direktorius('Jonas', 'Jonaitis', 25);
// $zmogus->pasisveikinti();
// $zmogus->trukdyti();

var_dump($zmogus->vardas());