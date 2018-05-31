<?php

require_once 'GalimaIjungti.php';

class Girlianda implements GalimaIjungti
{
	private $ijungta = false;
	
	private $lemputes = [];
	
	public function __construct($lemputes)
	{
		if(empty($lemputes)) {
			trigger_error('nera lempuciu', E_USER_ERROR);
		}
		
		$this->lemputes = $lemputes;
	}
	
	public function ijungti()
	{
		if(empty($this->lemputes)) {
			trigger_error('nera lempuciu', E_USER_ERROR);
		}
		
		foreach($this->lemputes as $lempute) {
			$lempute->ijungti();
		}
		
		$this->ijungta = true;
	}
	
	public function isjungti()
	{
		foreach($this->lemputes as $lempute) {
			$lempute->isjungti();
		}
		
		$this->ijungta = true;
	}
	
	public function prideti(Lempute $lempute)
	{
		$this->lemputes[] = $lempute;
	}
	
	public function arSviecia()
	{
		echo 'Lempute ' . ($this->ijungta ? 'sviecia' : 'nesviecia') . '<br/>';
	}
}




$girlianda = new Girlianda([]);


