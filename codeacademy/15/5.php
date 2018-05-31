<?php

session_start();

function yraPirminis($skaicius)
{
	for($i = 2; $i <= $skaicius/2; $i++) {
		if ($skaicius % $i == 0) {
			return false;
		}
	}
	
	return true;
}

if (!isset($_SESSION['sk'])) {
	$_SESSION['sk'] = [2];
}

$sk = $_SESSION['sk'][count($_SESSION['sk']) - 1];

do {
	$sk++;
}
while(!yraPirminis($sk));

$_SESSION['sk'][] = $sk;

$pirminiai = $_SESSION['sk'];

include '5.phtml';