<?php

function mestiKauliuka()
{
	return rand(1,6);
}

function nd1()
{
	do {
		$metimas = mestiKauliuka();
		echo $metimas . '<br/>';
	} while ($metimas != 5 && $metimas != 6);
}


function nd2($vardai)
{
	// for($i = 0 ; $i < count($vardai); $i++) {
	// 	if ($vardai[$i][0] != 'J' && $vardai[$i][0] != 'M') {
	// 		unset($vardai[$i]);
	// 	}
	// }

	// return $vardai;	
	
	$rez = [];
	
	foreach($vardai as $vardas) {
		if ($vardas[0] == 'J' || $vardas[0] == 'M') {
			$rez[] = $vardas;
		}
	}
	
	return $rez;
}


function nd3($vardai)
{
	$rez = [];
	foreach($vardai as $vardas) {
		if (strpos($vardas, 'o') !== false || strpos($vardas, 'a') !== false) {
			$rez[] = $vardas;
		}
	}
	
	return $rez;
}

function nd4($pastraipa)
{
	$rez = [];
	$sakiniai = explode('. ', $pastraipa);
	
	foreach($sakiniai as $sakinys) {
		$zodziai = explode(' ', $sakinys);
		
		if (count($zodziai) >= 5) {
			$rez[] = $sakinys;
		}
	}
	
	return implode('. ', $rez);
}

nd1();

$masyvas = ['Jonas', 'Petras', 'Natalija', 'Monika', 'onute'];

$rez = nd2($masyvas);
$rez2 = nd3($masyvas);


var_dump($rez);

var_dump($rez2);