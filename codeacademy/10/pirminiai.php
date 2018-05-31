<?php

function yraPirminis($skaicius)
{
	for($i = 2; $i <= $skaicius/2; $i++) {
		if ($skaicius % $i == 0) {
			return false;
		}
	}
	
	return true;
}

function pirminiai()
{
	for($i = 1; $i <= 300; $i++) {
		if (yraPirminis($i)) {
			echo $i .'<br/>';
		}
	}
}

function pirminiai2()
{
	for($i = 1; $i <= 300; $i++) {
		$pasidalino = false;
		for($j = 2; $j <= $i/2; $j++) {
			if ($i % $j == 0) {
				$pasidalino = true;
			}
		}
		
		if(!$pasidalino) {
			echo $i . '<br/>';
		}
	}
}

pirminiai2();