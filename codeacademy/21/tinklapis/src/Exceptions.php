<?php

class DbException extends Exception
{
	public function __construct($message = "", int $code = 0, $previous = NULL)
	{
		parent::__construct($message, $code, $previous);
	}
}

class UserException extends Exception
{
	public function __construct($message = "", int $code = 0, $previous = NULL)
	{
		parent::__construct($message, $code, $previous);
	}
}