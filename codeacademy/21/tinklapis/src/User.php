<?php

require_once __DIR__ . '/Db.php';

class User
{
	public $name;
	public $surname;
	
	public function __construct($name, $surname)
	{
		$this->name = $name;
		$this->surname = $surname;
	}
	
	public static function CreateUserById($id) : User
	{
		$user = Db::getUserById($id);
		
		return new User($user['name'], $user['surname']);
	}
}