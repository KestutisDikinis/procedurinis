<?php

return [
	'registracija' => [
		'url' => 'private/registracija/registracija.php',
		'auth' => false
	],
	'registruoti' => [
		'url' => 'private/registracija/registruoti.php', 
		'auth' => false
	],
	'prisijungimas' => [
		'url' => 'private/prisijungimas/login.php',
		'auth' => false
	],
	'prisijungti' => [
		'url' => 'private/prisijungimas/doLogin.php', 
		'auth' => false
	],
	'atsijungti' => [
		'url' => 'private/prisijungimas/logout.php', 
		'auth' => true
	],
	'dashboard' => [
		'url' => 'private/home/dashboard.php', 
		'auth' => true
	],
	'irasu-sarasas' => [
		'url' => 'private/irasai/sarasas.php', 
		'auth' => true
	],
	'home' => [
		'url' => 'private/irasai/sarasas.php', 
		'auth' => true
	],
	'prideti-irasa' => [
		'url' => 'private/irasai/prideti.php', 
		'auth' => true
	],
	'pasalinti-irasa' => [
		'url' => 'private/irasai/pasalinti.php', 
		'auth' => true
	],
];
