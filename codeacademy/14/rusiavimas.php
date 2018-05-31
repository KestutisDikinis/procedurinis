<?php

function maziausia($array)
{
	
}

function maziasioIndeksas($array)
{
	$min = $array[0];
	$id = 0;
	foreach($array as $key => $value) {
		if ($min > $value) {
			$min = $value;
			$id = $key;
		}
	}
	return $id;
}

function rusiavimas($masyvas)
{
	$surusiuotas = [];
	
	while(count($masyvas) > 0) {
		$minId = maziasioIndeksas($masyvas);
		$surusiuotas[] = $masyvas[$minId];
		unset($masyvas[$minId]);
		$masyvas = array_values($masyvas);
	}
	
	return $surusiuotas;
}

$mas = [5,8,3,1,8,5,9];

var_dump(rusiavimas($mas));