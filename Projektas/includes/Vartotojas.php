<?php

class Vartotojas
{
    private $firstmane;
    private $lastname;
    private $email;
    private $uid;
    private $pass;
    public function __construct($first,$last,$em,$uid,$pass)
    {
        $this->firstmane = $first;
        $this->lastname = $last;
        $this->email = $em;
        $this->uid = $uid;
        $this->pass = $pass;
    }

    public function getFirstmane()
    {
        return $this->firstmane;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getUid()
    {
        return $this->uid;
    }

    public function getPass()
    {
        return $this->pass;
    }
}