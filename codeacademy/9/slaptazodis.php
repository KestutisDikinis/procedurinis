<?php

function generatePassword($length = 8)
{
	$chars = ['qwrtpsdfghjklzxcvbnmQWRTPSDFGHJKLZXCVBNM','eyuioaEYUIOA'];
	$pw = '';
	
	for($i = 0; $i < $length; $i++)
	{
		$random = rand(0, strlen($chars[$i%2]) - 1);
		$pw .= $chars[$i%2][$random];
	}
	
	return $pw;
}

function generatePassword2($length = 8)
{
	$chars = 'qwrtpsdfghjklzxcvbnmQWRTPSDFGHJKLZXCVBNM';
	$chars2 = 'eyuioaEYUIOA';
	$pw = '';
	
	for($i = 0; $i < $length; $i++)
	{
		if ($i % 2 == 0) {
			$random = rand(0, strlen($chars) - 1);
			$pw .= $chars[$random];
		} else {
			$random = rand(0, strlen($chars2) - 1);
			$pw .= $chars2[$random];
		}
	}
	
	return $pw;
}

function passwords($length = 5)
{
	$passwords = [];
	
	for($i = 0; $i < $length; $i++) {
		$passwords[] = generatePassword();
	}
	
	return $passwords;
}

function isvesti($passwords)
{
	
}

function sujungti($passwords)
{
	
}

///////////////////////////////////////////////////////////////////////////

$passwords = passwords(12);

isvesti($passwords);

echo sujungti($passwords);

var_dump($passwords);




