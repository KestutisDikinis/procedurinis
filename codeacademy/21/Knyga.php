<?php

class Adresatas
{
	private $vardas;
	private $pavarde;
	private $telNr;
	private $adresas;
	private $latitude;
	private $longitude;
	
	public function __construct($duomenys) {
		[
			'vardas' => $this->vardas, 
			'pavarde' => $this->pavarde, 
			'telNr' =>$this->telNr, 
			'adresas' =>$this->adresas, 
			'latitude' =>$this->latitude, 
			'longitude' =>$this->longitude
		] = $duomenys;
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
		return $this->latitude;
	}
	
	public function longitude()
	{
		return $this->longitude;
	}
}

class AdresuKnyga
{
	private $adresatai = [];
	
	public function prideti(Adresatas $adresatas) : void
	{
		$this->adresatai[] = $adresatas;
	}
	
	public function gautiAdresatus()
	{
		return $this->adresatai;
	}
	
	public function trintiPagalTelNr($telNr)
	{
		foreach($this->adresatai as $key =>$adresatas) {
			if ($adresatas->telNr() == $telNr) {
				unset($this->adresatai[$key]);
				return;
			}
		}
	}
	
	public function trintiPagalVardaIrPavarde($vardas, $pavarde)
	{
	
	}
	
	public function gautiArtimiausia($longitute, $latitude)
	{
		
	}
}

$knyga = new AdresuKnyga();

$knyga->prideti(new Adresatas([
	'vardas' => 'Jonas', 
	'pavarde' => 'Jonaitis',
	'telNr' => '86868686',
	'adresas' => 'Vilnius tech park',
	'latitude' => 54.6983622,
	'longitude' => 25.3087006
]));

$knyga->prideti(new Adresatas([
	'vardas' => 'Petras', 
	'pavarde' => 'Petraitis',
	'telNr' => '86868687',
	'adresas' => 'Ozas',
	'latitude' => 54.7141848,
	'longitude' => 25.2710582
]));

$knyga->prideti(new Adresatas([
	'vardas' => 'Domas', 
	'pavarde' => 'Domaitis',
	'telNr' => '86868688',
	'adresas' => 'Akropolis',
	'latitude' => 54.710108,
	'longitude' => 25.2597734
]));

$knyga->trintiPagalVardaIrPavarde('Domas', 'Domaitis');

var_dump($knyga);

