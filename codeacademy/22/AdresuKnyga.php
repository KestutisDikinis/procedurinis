<?php

require_once __DIR__ . '/Adresatas.php';

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
				$this->adresatai = array_values($this->adresatai);
				return;
			}
		}
	}
	
	public function trintiPagalVardaIrPavarde($vardas, $pavarde)
	{
		foreach($this->adresatai as $key =>$adresatas) {
			if ($adresatas->vardas() == $vardas && $adresatas->pavarde() == $pavarde) {
				unset($this->adresatai[$key]);
				$this->adresatai = array_values($this->adresatai);
				return;
			}
		}
	}
	
	public function gautiArtimiausia($latitude, $longitude)
	{
		$artimiausias = $this->adresatai[0];
		
		foreach($this->adresatai as $adresatas) {
			if ($this->atstumas($latitude, $longitude, $artimiausias) > $this->atstumas($latitude, $longitude,$adresatas)) {
				$artimiausias = $adresatas;
			}
		}
		
		return $artimiausias;
	}
	
	private function atstumas($lat, $long, Adresatas $adresatas)
	{
		return (($adresatas->latitude() - $lat)**2 + ($adresatas->longitude() - $long)**2)**0.5;
	}
}
