<?php

class Bankomatas
{
	private $pinigai = 0;
	
	public function __construct($pinigai)
	{
		$this->pinigai = $pinigai;
	}
	
	public function ikrautiPinigus($suma)
	{
		$this->pinigai += $suma;
	}
	
	public function isduotiPinigus($suma)
	{
		$this->pinigai -= $suma;
	}
	
	public function idetiPinigus($suma)
	{
		return $suma;
	}
	
	public function pervestiISaskaita()
	{
		$this->pinigai += idetiPinigus($pinigai);
	}
	
	public function atsauktiPervedima()
	{
		
	}
	
}

$bank = new Bankomatas(500);
$bank->ikrautiPinigus(15);
var_dump($bank);