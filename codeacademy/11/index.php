<?php

function nelyginiuSuma($arr)
{
	$nelyginiai = [];
	
	foreach($arr as $el) {
		if ($el % 2 > 0) {
			$nelyginiai[] = $el;
		}
	}
	
	$suma = 0;
	foreach($nelyginiai as $sk) {
		$suma += $sk;
	}
	
	return $suma / count($nelyginiai);
}

function nelyginiuSuma2($arr)
{
	$suma = 0;
	$kiekis = 0;
	
	foreach($arr as $sk) {
		if ($sk % 2 > 0) {
			$suma += $sk;
			$kiekis++;
		}
	}
	
	return $suma / $kiekis;
}