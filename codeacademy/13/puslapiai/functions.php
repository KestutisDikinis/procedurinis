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

function passwords($length = 5)
{
	$passwords = [];
	
	for($i = 0; $i < $length; $i++) {
		$passwords[] = generatePassword();
	}
	
	return $passwords;
}
