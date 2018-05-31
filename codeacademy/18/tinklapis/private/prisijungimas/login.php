<?php
require_once __DIR__ . '/../logic/users.php';

var_dump($_SESSION);

if (isLoggedIn())
{
	return redirect('home');
}

include 'login.phtml';