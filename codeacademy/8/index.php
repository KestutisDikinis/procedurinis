<?php


function daugiau($sk)
{
	return $sk > 10;
}

/**
 * Patikrina, ar zodis prasideda is didziosios raides
 * Paimame pirmo simbolio koda is ASCII lenteles (ord f-ja) ir patikriname
 * ar simbolis yra didziuju raidziu reziuose
 */
function isDidziosios($zodis)
{
	$pirmaRaide = substr($zodis, 0, 1);
	$raidesSk = ord($pirmaRaide);
	
	if ($raidesSk >= 65) {
		if ($raidesSk <= 90) {
			echo "Is didziosios";
		} else {
			echo "Is mazosios";
		}
	}
}

/**
 * Patikrina, ar zodis prasideda is didziosios raides
 * 
 * tas pats, tik sujungiame 2 if`us su &&
 */
function isDidziosios2($zodis)
{
	$pirmaRaide = substr($zodis, 0, 1);
	$raidesSk = ord($pirmaRaide);
	
	if ($raidesSk >= 65 && $raidesSk <= 90) {
		echo "Is didziosios";
		
	} else {
		echo "Is mazosios";
	}
}

/**
 * Patikrina, ar zodis prasideda is didziosios raides
 */
function isDidziosios3($zodis)
{
	$pirmaRaide = substr($zodis, 0, 1);
	$didzioji = mb_strtoupper($pirmaRaide);
	
	if ($pirmaRaide == $didzioju) {
		echo "Is didziosios";
		
	} else {
		echo "Is mazosios";
	}
}

function arGalimaIsgertiAlaus($amzius)
{
	if ($amzius >= 20 && $amzius <= 65) 
	{
		return true;
	}
	else 
	{
		return false;
	}
}

/**
 * Priklausomai nuo amziaus, isrenkame alkoholine/nealkoholini random gerima
 */
function kaSiandienGersi($amzius)
{
	$alko = ['mojito', 'cuba-libra', 'sunrise', 'bloody merry', 'requila'];
	$nealko = ['pienas', 'sultys', 'bulionas'];
	
	if (arGalimaIsgertiAlaus($amzius)) {
		$rand = rand(0, count($alko) - 1);
		echo $alko[$rand];
	
	} else {
		$rand = rand(0, count($nealko) - 1);
		echo $nealko[$rand];
	}
}

//////////////////////////////  PROGRAMOS KODAS ////////////////////////////////


kaSiandienGersi(18);




if (!arGalimaIsgertiAlaus(18)) {
	echo "Negalima";
}


// if (daugiau(5))
// {
// 	echo 'daugiau';
	
// } else {
// 	echo 'maziau';
// }


// isDidziosios("Labas");
// isDidziosios("labas");