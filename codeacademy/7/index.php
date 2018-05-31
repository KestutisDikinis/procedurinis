<?php

/**
 * Sudedame 5 skaicius
 */
function sum($a,$b,$c,$d,$e)
{
	return $a + $b + $c + $d + $e;
}

echo sum(9,5,2,4,6);

/**
 * Sudedame masyva su 5 skaiciais
 */
function suma($s)
{
	return $s[0] + $s[1] + $s[2] + $s[3] + $s[4];
}

$masyvas = [9,5,2,4,6];

echo suma($masyvas);


echo $masyvas[0];
echo $masyvas[2];
echo $masyvas[4];


// $vienas = 1;
// $du = 2;

// $m = [$vienas, $du];

// $trys = $m[0] + $m[1];

echo '<br/>';

