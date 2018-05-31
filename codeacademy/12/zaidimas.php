<?php

function __($text)
{
	echo $text . '<br/>';
}

/**
 * Random number from 1 to 6
 * @return int
 */
function mestiKauliuka()
{
	$rez = rand(1,6);
	__('Metamas kauliukas, ismesta: ' . $rez);
	
	return $rez;
}

/**
 * 
 * @return string laimejo|pralaimejo|darkarta
 */
function ejimoRezultatas($duomenys)
{
	$suma = $duomenys[0] + $duomenys[1];
	__("Suma: $suma");
	
	if ($suma < 5) {
		__('Pralaimejote.');
		return 'pralaimejo';
	}
	
	if ($duomenys[0] == 6 && $duomenys[1] == 6) {
		__('Laimejote dvirati');
		return 'laimejo';
	}
	
	if ($duomenys[0] == $duomenys[1]) {
		__("Laimejote bilieta i kina");
		
		return 'laimejo';
	}
	
	__("Bandykite dar karta");
	
	return 'darkarta';
}

function zaisti()
{
	do {
		$metimai = [mestiKauliuka(), mestiKauliuka()];
		
		$rez = ejimoRezultatas($metimai);
			
	} while($rez == 'darkarta');
	
	__('Zaidimas pasibaige.');
	__('Laukiame sugristant!');
}

//////////////////////////////////////// Programos kodas


zaisti();




