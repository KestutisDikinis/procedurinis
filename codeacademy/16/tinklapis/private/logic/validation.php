<?php

function validateUserInput($user)
{
	return validateName($user['vardas']) && validateMail($user['email']) && validatePassword($user['password'], $user['password2']);
}

function validateName($name)
{
	return mb_strlen($name) > 3;
}

function validateMail($mail)
{

	return mb_strlen($mail) > 3 && strpos($mail, '@') && strpos($mail, '.');
}

function validatePassword($pass1, $pass2)
{
	if ($pass1 != $pass2) {
		return false;
	}
	
	return constainsNumber($pass1) && containsUppercase($pass1);
}

function constainsNumber($pass)
{
	for($i = 0; $i < mb_strlen($pass); $i++) {
		if (ord($pass[$i]) >=48 && ord($pass[$i]) <= 57) {
			return true;
		}
	}
	
	return false;
}

function containsUppercase($pass)
{
	for($i = 0; $i < mb_strlen($pass); $i++) {
		if ($pass[$i] == mb_strtoupper($pass[$i])) {
			return true;
		}
	}
	
	return false;
}