<?php

require_once __DIR__ . '/file_db.php';

function saveUser($user)
{
	$users = get(__DIR__ . '/../data/users.txt');
	$users[$user['email']] = $user;
	save(__DIR__ . '/../data/users.txt', $users);
}

function userExists($mail)
{
	$users = get(__DIR__ . '/../data/users.txt');
	
	return isset($users[$mail]);
}
