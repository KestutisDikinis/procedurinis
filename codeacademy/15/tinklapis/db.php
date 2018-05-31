<?php

function saveUser($user)
{
	$str = file_get_contents('users.txt');
	$users = json_decode($str, true);
	$users[] = $user;
	$str = json_encode($user);
	file_put_contents('users.txt', $str);
}

function userExists($mail)
{
	
}
