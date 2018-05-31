<?php
session_start();

require_once __DIR__ . '/private/logic/routing.php';
require_once __DIR__ . '/private/logic/flash.php';
require_once __DIR__ . '/private/layout/functions.php';

$puslapis = $_GET['psl'] ?? 'home';

$routes = require __DIR__ .'/private/routes.php';

if (isset($routes[$puslapis])) {
	include __DIR__ . '/private/layout/header.phtml';
	
	require_once $routes[$puslapis];
	 
	include __DIR__ . '/private/layout/footer.phtml';

} else {
	echo '404';
}


