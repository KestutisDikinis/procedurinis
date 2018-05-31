<?php

class OperacijosKlaida extends Exception
{
	public function __construct($message = "", int $code = 0, $previous = NULL)
	{
		parent::__construct($message, $code, $previous);
	}
}

class Bankomatas
{
	private $limitas;
	
	private $pinigai;
	
	private $idetiPinigai = 0;
	
	public function __construct($limitas)
	{
		$this->limitas = $limitas;
	}
	
	public function ikrautiPinigus($pinigai) : void
	{
		if ($this->pinigai + $pinigai > $this->limitas) {
			throw new OperacijosKlaida("Virsytas pinigu limitas");
		}
		
		$this->pinigai += $pinigai;
	}
	
	public function isduotiPinigus($kiekis) : void
	{
		if ($this->pinigai < $kiekis) {
			throw new OperacijosKlaida('Neuztenka pinigu operacijai atlikti.');
		}
		
		$this->pinigai -= $kiekis;
	}
	
	public function idetiPinigus($pinigai) : void
	{
		if ($this->idetiPinigai > 0) {
			throw new Operacijosklaida('Nebaigta ankstesne operacija.');
		}
		
		$this->idetiPinigai = $pinigai;
	}
	
	public function pervestiISaskaita() : void
	{
		$this->pinigai += $this->idetiPinigai;
		$this->idetiPinigai = 0;
	}
	
	public function atsauktiPiniguIdejima() : int
	{
		$pinigai = $this->idetiPinigai;
		$this->idetiPinigai = 0;
		
		return $pinigai;
	}
}



$bankomatas = new Bankomatas(10000);
$bankomatas->ikrautiPinigus(5000);

$shtuka = $bankomatas->isduotiPinigus(1000);

var_dump($bankomatas);

$bankomatas->idetiPinigus($shtuka);
$bankomatas->pervestiISaskaita();

var_dump($bankomatas);











