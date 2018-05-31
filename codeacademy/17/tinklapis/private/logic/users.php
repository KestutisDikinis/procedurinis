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

function getUserById($mail)
{
	$users = get(__DIR__ . '/../data/users.txt');
	
	return $users[$mail] ?? [];
}

function getCurrentUser()
{
	return getUserById($_SESSION['isLoggedIn']);
}

function login($mail, $password)
{
	$user = getUserById($mail);
	if (empty($user)) {
		return false;
	}
	
	if (password_verify($password, $user['password'])) {
		$_SESSION['isLoggedIn'] = $mail;
		return true;
	}
	
	return false;
}

function isLoggedIn()
{
	return isset($_SESSION['isLoggedIn']) && !empty($_SESSION['isLoggedIn']);
}

function logout()
{
	session_destroy();
}
