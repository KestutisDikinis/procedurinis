<?php

require_once 'validation.php';
require_once 'db.php';

if(!empty($_POST)) {
	$user = [
		'vardas' => $_POST['vardas'] ?? '',
		'email' => $_POST['email'] ?? '',
		'password' => $_POST['password'] ?? '',
		'password2' => $_POST['password2'] ?? ''
	];
	
	$valid = validateUserInput($user);
	
	var_dump($user);
	
	if ($valid) {
		unset($user['password2']);
		$user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
		saveUser($user);
		
	} else {
		$error = 'Invalid input data.';
	}
}

include 'form.phtml';