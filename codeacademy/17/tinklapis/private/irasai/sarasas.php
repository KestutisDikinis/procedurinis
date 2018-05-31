<?php

require_once __DIR__ .'/../logic/users.php';
require_once __DIR__ .'/../logic/irasai.php';

$visiIrasai = visiIrasai();

$irasai = [];

foreach($visiIrasai as $key => $irasas) {
	$author = getUserById($irasas['user_id']);
	
	$irasai[$key] = [
		'pavadinimas' => $irasas['pavadinimas'],
		'turinys' => $irasas['turinys'],
		'autorius' => $author['vardas'],
		'galiIstrinti' => $_SESSION['isLoggedIn'] == $irasas['user_id']
	];
}

include 'sarasas.phtml';