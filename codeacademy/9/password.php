<?php

function password($vartotojas)
{
	$pass = $vartotojas['slaptazodis'];
	
	if( mb_strlen($pass) < 8) {
		return false;
	}
	
	$turiSkaiciu = preg_match('#\d+#', $pass);
	$turiMazujuRaidziu = preg_match('#[a-z]+#', $pass);
	$turiDidziujuRaidizu = preg_match('#[A-Z]+#', $pass);
	
	return $turiSkaiciu && $turiMazujuRaidziu && $turiDidziujuRaidziu;
}

function password2($vartotojas)
{
	$pass = $vartotojas['slaptazodis'];

	return mb_strlen($pass) < 8 && preg_match('#\d+#', $pass) && preg_match('#[a-z]+#', $pass) && preg_match('#[A-Z]+#', $pass);

}
