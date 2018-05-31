<?php

function lastWordUppercase($sentence)
{
	
}

function secondUpper($sakinys)
{
	$zodziai = explode(' ', $sakinys);
	$zodziai[1] = strtoupper($zodziai[1]);
	$sakinys = implode(' ', $zodziai);
	
	return $sakinys;
}

function xxx($pastraipa)
{
	$sakiniai = explode('. ', $pastraipa);
	
	for($i = 0; $i < count($sakiniai); $i++) {
		$sakiniai[$i] = secondUpper($sakiniai[$i]);
	}
	
	return implode('. ', $sakiniai);
}

echo xxx("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");