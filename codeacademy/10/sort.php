<?php

function sort2($arr)
{
	for($i = 0; $i < count($arr) - 1; $i++) {
		
		echo "Iteracija nr.: $i <br/>";
		
		$buvoPakeitimu = false;
		
		for($j = 0; $j < count($arr) - 1; $j ++) {
			if($arr[$j] > $arr[$j + 1]) {
				$tmp = $arr[$j];
				$arr[$j] = $arr[$j + 1];
				$arr[$j + 1] = $tmp;
				$buvoPakeitimu = true;
			}
		}
		
		if (!$buvoPakeitimu) {
			break;
		}
	}
	
	return $arr;
}

$a = [5, 12, 2, 8, 1, 5, 4, 12, 20, 15, 8];

var_dump(sort2($a));