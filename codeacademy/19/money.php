<?php

class Money
{
	private $piniguSuma = 0;
	
	public function __construct($piniguSuma)
	{
		$this->piniguSuma = $piniguSuma;
	}
	
	public function pridetiPinigu($prideti)
	{
		$this->piniguSuma = $piniguSuma + $prideti;
	}
	
	public function atimtiPinigus($atimti)
	{
		$this->piniguSuma - $atimti;
	}
	
	public function isVisoPinigu()
	{
		return $this->piniguSuma;
	}
}

$a1 = new Money(5);
$a2 = new Money(51);
$a3 = new Money(55);

var_dump($a3);
