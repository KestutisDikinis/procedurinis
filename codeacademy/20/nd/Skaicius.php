<?php

class Skaicius
{
	private $reiksme = 0;
	
	public function __construct(int $skaicius)
	{
		$this->reiksme = $skaicius;
	}
	
	public function add(Skaicius $skaicius)
	{
		return new Skaicius($this->reiksme + $skaicius->reiksme);
	}

	public function substract(Skaicius $skaicius)
	{
		return new Skaicius($this->reiksme - $skaicius->reiksme);
	}
	
	public function multiply(Skaicius $skaicius)
	{
		return new Skaicius($this->reiksme * $skaicius->reiksme);
	}
	
	public function divide(Skaicius $skaicius)
	{
		return new Skaicius($this->reiksme / $skaicius->reiksme);
	}
	
	public function reiksme()
	{
		return $this->reiksme;
	}
	
	public function __toString()
	{
		return (string)$this->reiksme;
	}
}

$desimt = new Skaicius(10);

$penki = new Skaicius(5);
$du = new Skaicius(2);
$dvidesimt = $desimt->add($penki)
					->add($penki)
					->divide($du)
					->multiply($du);
					
					
echo $dvidesimt;
					
