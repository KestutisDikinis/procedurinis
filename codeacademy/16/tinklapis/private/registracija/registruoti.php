<?php

require_once __DIR__ . '/../logic/validation.php';
require_once __DIR__ . '/../logic/users.php';

if (empty($_POST)) {
	return redirect('registracija');
}

$user = [
	'vardas' => $_POST['vardas'] ?? '',
	'email' => $_POST['email'] ?? '',
	'password' => $_POST['password'] ?? '',
	'password2' => $_POST['password2'] ?? '',
	'amzius' => isset($_POST['amzius']) ? (int)$_POST['amzius'] : 0
];

$valid = validateUserInput($user);

if ($valid) {
	
	if (!userExists($user['email']))
	{
		unset($user['password2']);
		$user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
		saveUser($user);
		
	} else {
		addMessage('danger', 'Vartotojas egiztuoja.');
	}
	
} else {
	addMessage('danger', 'Vartotojas egiztuoja.');
}

return redirect('prisijungimas');