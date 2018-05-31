<?php

function url($string) {
	$routes = require __DIR__ . '/../routes.php';	
	
	if (!isset($routes[$string])) {
		trigger_error("Tokios nuoros nera", E_USER_ERROR);
	}
	
	return '?psl=' . $string;
}

function redirect($string)
{
	header('Location: ' . url($string));
}