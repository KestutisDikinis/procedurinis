<?php

function addMessage($type, $message)
{
	$_SESSION['flash'][$type][] = $message;
}

function getMessages()
{
	$messages = $_SESSION['flash'] ?? [];
	$_SESSION['flash'] = [];
	
	return $messages;
}