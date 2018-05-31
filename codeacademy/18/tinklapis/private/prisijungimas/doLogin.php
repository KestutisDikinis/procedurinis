<?php

require_once __DIR__ . '/../logic/users.php';

if (isLoggedIn())
{
	return redirect('home');
}

if (empty($_POST)) {
	addMessage('danger', 'Blogai ivesti duomenys');
	return redirect('prisijungimas');
}

$email = trim($_POST['email']) ?? '';
$pass = $_POST['password'] ?? '';

if (login($email, $pass)) {
	return redirect('home');
}

addMessage('danger', 'Blogai ivesti duomenys');
return redirect('prisijungimas');
