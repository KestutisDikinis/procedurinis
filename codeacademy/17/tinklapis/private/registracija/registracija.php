<?php

require __DIR__ . '/../logic/../logic/../registracija/../../private/logic/users.php';

if (isLoggedIn())
{
	return redirect('home');
}

include __DIR__ . '/form.phtml';
