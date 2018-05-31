<?php

require_once 'RandomArrayGenerator.php';

$rand = new RandomArrayGenerator();

$array = $rand->generate();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	echo json_encode($array);
	die();
}

include 'sarasas.phtml';