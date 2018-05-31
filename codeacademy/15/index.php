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
	$_SESSION['sk'] = 0;
}

$sk = $_SESSION['sk'];

do {
	$sk++;
}
while(!yraPirminis($sk));

$_SESSION['sk'] = $sk;


echo $sk;