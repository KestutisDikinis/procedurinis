<?php

require_once __DIR__ . '/file_db.php';
require_once __DIR__ . '/mysql_db.php';

function saveUser($user)
{
	$connection = mysqli_connect('127.0.0.1', 'admin', '1445c1c5a');
	mysqli_select_db($connection, 'testine');
	
	$query = 'INSERT INTO `users` (`vardas`, `email`, `password`, `amzius`) VALUES (\''
				. $user['vardas'] . '\', \'' . $user['email'] . '\', \'' . $user['password'] . '\', '. (int)$user['amzius'] .')';
				
	$res = mysqli_query($connection, $query);
	
	mysqli_close($connection);
	
	return $res;
}

function userExists($mail)
{
	$connection = mysqli_connect('127.0.0.1', 'admin', '1445c1c5a');
	mysqli_select_db($connection, 'testine');
	
	$query = "SELECT count(*) `count` FROM `users` WHERE `email`='$mail'";
	
	$res = mysqli_query($connection, $query);
	if (!$res) {
		echo mysql_error($connection);
	}
	
	$row = mysqli_fetch_assoc($res);
	mysqli_close($connection);
	
	return $row['count'] > 0;
}

function getUserById($id)
{
	$connection = mysqli_connect('127.0.0.1', 'admin', '1445c1c5a');
	mysqli_select_db($connection, 'testine');
	
	$query = "SELECT * FROM `users` WHERE `id`=$id";
	
	$res = mysqli_query($connection, $query);
	
	if (!$res) {
		echo mysqli_error($connection);
	}
	
	$row = mysqli_fetch_assoc($res);
	mysqli_close($connection);
	
	return $row;
}

function getUserByMail($mail)
{
	$connection = mysqli_connect('127.0.0.1', 'admin', '1445c1c5a');
	mysqli_select_db($connection, 'testine');
	
	$query = "SELECT * FROM `users` WHERE `email`='" . mysqli_real_escape_string($connection, $mail) . "'";
	
	$res = mysqli_query($connection, $query);
	if (!$res) {
		echo mysqli_error($connection);
	}
	
	$row = mysqli_fetch_assoc($res);
	mysqli_close($connection);
	
	return $row;
}

function getCurrentUser()
{
	return getUserById($_SESSION['isLoggedIn']);
}

function login($mail, $password)
{
	$user = getUserByMail($mail);
	
	if (empty($user)) {
		return false;
	}
	
	if (password_verify($password, $user['password'])) {
		$_SESSION['isLoggedIn'] = $user['id'];
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
