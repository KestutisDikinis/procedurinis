<?php

function save($file, $arrayContent)
{
	$str = json_encode($arrayContent);
	file_put_contents($file, $str);
}

function get($file)
{
	$str = file_get_contents($file);
	
	return json_decode($str, true);
}
