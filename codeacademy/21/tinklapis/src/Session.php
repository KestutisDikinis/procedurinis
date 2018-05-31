<?php

require_once __DIR__ .'/Exceptions.php';
require_once __DIR__ . '/User.php';

class Session
{
	public function GetCurrentUser() : User
	{
		$id = $_SESSION['user_id'] ?? null;
		
		if ($id === null) {
			throw new UserException('Vartotojas nera prisijunges');
		}
		
		return User::CreateUserById($id);
	}
}