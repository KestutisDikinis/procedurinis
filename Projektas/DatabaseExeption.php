<?php
class DatabaseException extends Exception
{
    public function __construct($message = "", int $code = 0, $previous = NULL)
    {
        parent::__construct($message, $code, $previous);
    }
}