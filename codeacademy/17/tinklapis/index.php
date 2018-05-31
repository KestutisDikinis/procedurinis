<?php
session_start();

require_once __DIR__ . '/private/logic/routing.php';
require_once __DIR__ . '/private/logic/flash.php';
require_once __DIR__ . '/private/layout/functions.php';

function auth()
{
	require_once __DIR__ . '/private/logic/users.php';

	if (!isLoggedIn()) {
		return redirect('prisijungimas');
	}
}

$puslapis = $_GET['psl'] ?? 'home';

$routes = require __DIR__ .'/private/routes.php';

if (isset($routes[$puslapis])) {
	if ($routes[$puslapis]['auth']) {
		auth();
	}
	
	require_once $routes[$puslapis]['url'];
	 
} else {
	echo '404';
}


