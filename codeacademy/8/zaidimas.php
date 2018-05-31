<?php

/**
 * Imituojame kauliuko metima
 */
function mestiKauliuka()
{
	return rand(1, 6);
}

/**
 * Jeigu iskrenta trys sesetai, laimejote jackpota
 * Jeigu suma daugiau arba lygu 12 - laimejote
 * Kitu atveju pralaimejote
 */
function zaisti($metimai)
{
	if ($metimai[0] == 6 && $metimai[1] == 6 && $metimai[2] == 6) {
		echo "Laimejote Jackpot`a";
	
	} else {
		$suma = $metimai[0] + $metimai[1] + $metimai[2];
		if ($suma >= 12) {
			echo "Laimejote";
		} else {
			echo "Pralaimejote";
		}
	}
}
 
 /**
  * Tas pats zaidimas. Jeigu naudojame return`a vietoj echo, galime gerokai supaprastinti koda
  */
function zaisti2($metimai)
{
	$suma = $metimai[0] + $metimai[1] + $metimai[2];
	
	if ($suma == 18) {
		return "Laimejote Jackpot`a";
	}
	
	if ($suma >= 12) {
		return 'Laimejote';
	} 
	
	return "Pralaimejote";
}
 

//////////////////// Zaidimo eiga /////////////////////////////////


$metimai = [mestiKauliuka(), mestiKauliuka(), mestiKauliuka()];

echo zaisti($metimai);

