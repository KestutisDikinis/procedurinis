<?php

function rounddown($sk)
{
	return floor($sk * 100)/100;
}

function roundup($sk)
{
	return round($sk, 2);
}

function palukanos($loan, $percent, $months)
{
	$res = $loan * $percent / 12;
    
    return $res;
}

function imoka($loan, $percent, $months)
{
	$percent = $percent/12;
	$per = 1 + $percent;
	$p = pow($per,$months);
	
	return $percent * $loan / (1 - (1/$p));
}


// function lentele($loan, $percent, $months)
// {
// 	$res = [];
// 	$imoka =  imoka($loan, $percent, $months);
// 	$imoka2 = round($imoka * 100) / 100; 
// 	$diff = $imoka2 - $imoka;
	
// 	for ($i = 0; $i < $months; $i++) {
// 		$palukanos = palukanos($loan, $percent, $months);
// 		$kreditas = $imoka - $palukanos;
// 		$kreditas = floor($kreditas * 100)/100;
		
// 		$res[] = [
// 			'likutis' => round($loan, 2),
// 			'imoka' => $imoka2,
// 			'palukanos' => round($palukanos, 2),
// 			'kreditas' => $kreditas
// 		];
		
// 		$loan -= $kreditas;
// 		$loan += $diff;
// 	}
	
// 	return $res;
// }

function lentele($loan, $percent, $months)
{
	$res = [];
	$imoka =  imoka($loan, $percent, $months);

	for ($i = 0; $i < $months; $i++) {
		$palukanos = palukanos($loan, $percent, $months);

		$res[] = [
			'likutis' => $loan,
			'palukanos' => $palukanos,
			'imoka' => $imoka
		];
		
		$loan -= ($imoka - $palukanos);
	}
	
	return $res;
}

$bum = 0;
$x = lentele(10000, 0.07, 26);

?>
<style>
	table tr td {
		padding: 5px;
	}
</style>
<table border="1">
	<tr>
		<th>Likutis</th>
		<th>kreditas</th>
		<th>palukanos</th>
		<th>imoka</th>
		<th>?</th>
	</tr>
	<?php for ($i = 0; $i < 26; $i++): ?>
	<?php
		$imoka = $i == 25 ? rounddown($x[$i]['imoka'] + $bum): rounddown($x[$i]['imoka']);
		$imokosLiekana = $x[$i]['imoka'] - $imoka;
		
		$palukanos = roundup($x[$i]['palukanos']);
		$palukanuLiekana = $palukanos - $x[$i]['palukanos'];
		
		$kreditass = $imoka - $palukanos;
		$a = $kreditass + $bum;
		$kreditas = rounddown($kreditass);
		$a2 = rounddown($a);
		$kreditoLiekana = $kreditas - $kreditass;
		
		$likutis = roundup($x[$i]['likutis'] + $bum);
		
		$bum += $kreditoLiekana + $palukanuLiekana + $imokosLiekana;
		
	?>
	<tr>
		<td><?= $likutis ?></td>
		<td><?= $kreditas ?></td>
		<td><?= $palukanos ?></td>
		<td><?= $imoka ?></td>
		<td><?= $bum ?></td>
	</tr>
	<?php endfor; ?>
</table>



