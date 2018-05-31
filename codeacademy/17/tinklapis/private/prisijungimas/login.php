<?php
require_once __DIR__ . '/../logic/users.php';

if (isLoggedIn())
{
	return redirect('home');
}

include 'login.phtml';