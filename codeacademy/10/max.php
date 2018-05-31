<?php

function maxx($arr)
{
	$max = $arr[0];
	
	for($i = 1; $i < count($arr); $i++) {
		if ($max < $arr[$i]) {
			$max = $arr[$i];
		}
	}
return $max;
}

$skaiciai = [1, 5, 10, 12, 3, 8];

echo $max($skaiciai);