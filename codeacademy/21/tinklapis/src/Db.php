<?php

require_once __DIR__ .'/Exceptions.php';

class Db
{
	public static function getUserById($id) : array
	{
		throw new DbException("Nepavyko prisijungti prie duomenu bazes");
		return ['name' => 'Jonas', 'surname' => 'Jonaitis'];
	}
}