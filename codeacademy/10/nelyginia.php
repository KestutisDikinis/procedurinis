<?php

function nelyginiai($masyvas)
{
	$nelyginiai = [];
	for($i = 0; $i < count($masyvas); $i++) 
	{
		$elementas = $masyvas[$i];
		
		if($elementas % 2 > 0) {
			$nelyginiai[] = $elementas;
		}
	}
	
	return $nelyginiai;
}

function nelyginiai2($masyvas)
{
	$nelyginiai = [];
	foreach($masyvas as $elementas) 
	{
		if($elementas % 2 > 0) {
			$nelyginiai[] = $elementas;
		}
	}
	
	return $nelyginiai;
}

for($i = 0; $i < count($zmones); $i++) {
	$zmogus = $zmones[$i];
	
	for($j = 0; $j < count($zmogus['vaikai']); $j++) {
		$vaikas = $zmogus['vaikai'][$j];
		
		for($z = 0; $z < count($vaikas['gyvunai']); $z++) {
			$gyvunas = $vaikas['gyvunai'][$z];
			
			echo $gyvunas['vardas'];
		}
	}
}


foreach($zmones as $zmogus) {
	foreach($zmogus['vaikai'] as $vaikas) {
		foreach($vaikas['gyvunai'] as $gyvunas) {
			echo $gyvunas['vardas'];
		}
	}
}


for($i = 0; $i < count($zmones); $i++) {
	for($j = 0; $j < count($zmones[$i]['vaikai']); $j++) {
		for($z = 0; $z < count($zmogus['vaikai'][$j]['gyvunai']); $z++) {
			echo $zmogus['vaikai'][$j]['gyvunai'][$z]['vardas'];
		}
	}
}



var_dump(nelyginiai2([1,3,5,2,6,4,7,8]));