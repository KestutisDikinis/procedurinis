<?php

require_once __DIR__ . '/../logic/users.php';
require_once __DIR__ . '/../logic/irasai.php';

if (!empty($_POST)) {
	
	$irasas = [
		'pavadinimas' => $_POST['pavadinimas'] ?? '',
		'turinys' => $_POST['turinys'] ?? '',
		'user_id' => getCurrentUser()['email']
	];
	
	saveNote($irasas);
}

include __DIR__ . '/forma.phtml';