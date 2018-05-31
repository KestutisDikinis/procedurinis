<?php

require_once 'GalimaIjungti.php';

class Lempute implements GalimaIjungti
{
	private $ijungta = false;
	
	public function ijungti()
	{
		$this->ijungta = true;
	}
	
	public function isjungti()
	{
		$this->ijungta = false;
	}
	
	public function arSviecia()
	{
		echo 'Lempute ' . ($this->ijungta ? 'sviecia' : 'nesviecia') . '<br/>';
	}
}

