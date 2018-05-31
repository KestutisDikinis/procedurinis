<?php

class AdresuKnygosGeneratorius
{
	private $database;
	
	public function __construct(Database $database)
	{
		$this->database = $database;
	}
	
	public function generuoti() : AdresuKnyga
	{
		$rez = $this->database->execute('Select * from `adresai`');
		
		$knyga = new AdresuKnyga();
		
		foreach($rez as $adresatas) {
			$knyga->prideti(new Adresatas(
				$adresatas['vardas'],
				$adresatas['pavarde'],
				$adresatas['tel'],
				$adresatas['adresas'],
				new Coordinates($adresatas['lat'], $adresatas['lon'])
			));
		}
		
		return $knyga;
	}
}