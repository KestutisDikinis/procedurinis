<?php

// if (isset($_GET['name'])) {
// 	$vardas = $_GET['name'];
// } else {
// 	$vardas = '';
// }

// if (isset($_GET['surname'])) {
// 	$pavarde = $_GET['surname'];
// } else {
// 	$pavarde = '';
// }

$vardas = '';
$pavarde = '';
$pVardas = '';
$pPavarde = '';

if (isset($_POST['name'])) {
	if (isset($_GET['placeholder'])) {
		$pVardas = $_POST['name'];
	} else {
		$vardas = $_POST['name'];
	}
}

if (isset($_POST['surname'])) {
	if (isset($_GET['placeholder'])) {
		$pPavarde = $_POST['surname'];
	} else {
		$pavarde = $_POST['surname'];
	}
}


include "form.phtml";