<?php

class Gyvunas
{
	private $vardas;
	private $tipas;
	
	public function __construct($vardas, $tipas)
	{
		$this->vardas = $vardas;
		$this->tipas = $tipas;
	}
}

class Zmogus
{
	private $vardas;
	private $pavarde;
	private $amzius = 0;
	private $vaikai = [];
	private $gyvunai = [];
	
	public function __construct($vardas, $pavarde, $amzius, $vaikai = [], $gyvunai = [])
	{
		$this->vardas = $vardas;
		$this->pavarde = $pavarde;
		$this->amzius = $amzius;
		$this->vaikai = $vaikai;
		$this->gyvunai = $gyvunai;
	}
	
	public function vaikuKiekis() : int
	{
		return count($this->vaikai);
	}
	
	public function gyvunuKiekis() : int
	{
		return count($this->gyvunai);
	}
	
	public function vyriausiasVaikas() : Zmogus
	{
		if (count($this->vaikai) == 0) {
			throw new Exception("Vaiku nera");
		}
		
		$vyriausias = $this->vaikai[0];
		foreach($this->vaikai as $vaikas) {
			if ($vyriausias->amzius() < $vaikas->amzius()) {
				$vyriausias = $vaikas;
			}
		}
		
		return $vyriausias;
	}
	
	public function pilnameciai() : array
	{
		$pilnameciai = [];
		foreach($this->vaikai as $vaikas) {
			if ($vaikas->amzius() >= 18) {
				$pilnameciai[] = $vaikas;
			}
		}
		
		return $pilnameciai;
	}
	
	public function amzius()
	{
		return $this->amzius;
	}
}


$jonas = new Zmogus('Jonas', 'Jonaitis', 45, [
	new Zmogus('Onute', 'Jonaite', 25, [], [new Gyvunas('Brisius', 'suo')]),
	new Zmogus('Petras', 'Jonaitis', 19, [], [new Gyvunas('Dzeris', 'pelyte')]),
	new Zmogus('Jurgis', 'Jonaitis', 7, [], [new Gyvunas('Tomas', 'katinas')]),
	], []);
	
$vaikas = $jonas->vyriausiasVaikas();

try {
	$vyriausas = $vaikas->vyriausiasVaikas();
	
	echo $vyriausias->amzius();
	
} catch(Exception $ex) {
	// echo $ex->getMessage();
} catch(CoreException $x) {
	
}



