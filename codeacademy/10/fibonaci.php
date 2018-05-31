<?php

function fibanaci()
{
	$sk1 = 0;
	$sk2 = 1;
	
	for($i = 2; $i < 10000; $i ++) {
		$naujas = $sk1 + $sk2;
		$sk1 = $sk2;
		$sk2 = $naujas;
		
		echo $naujas .' ';
	}
	
	echo '<br/>' . memory_get_usage()/ 1024 / 1024;
}

fibanaci();