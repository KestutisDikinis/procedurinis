<?php

require_once __DIR__ . '/Coordinates.php';

class Adresatas
{
	private $vardas;
	private $pavarde;
	private $telNr;
	private $adresas;
	
	/**
	 * @var Coordinates
	 */
	private $coordinates;
	
	public function __construct($vardas, $pavarde, $telNr, $adresas, Coordinates $coordinates) {
		$this->vardas = $vardas;
		$this->pavarde = $pavarde;
		$this->telNr = $telNr;
		$this->adresas = $adresas; 
		$this->coordinates = $coordinates;
	}
	
	public function vardas()
	{
		return $this->vardas;
	}
	
	public function pavarde()
	{
		return $this->pavarde;
	}
	
	public function telNr()
	{
		return $this->telNr;
	}
	
	public function adresas()
	{
		return $this->adresas;
	}
	
	public function latitude()
	{
		return $this->coordinates->lat();
	}
	
	public function longitude()
	{
		return $this->coordinates->long();
	}
}
