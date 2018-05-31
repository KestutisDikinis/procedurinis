<?php

require_once 'GalimaIjungti.php';

class Jungiklis
{
	private $lemputes = [];
	
	public function ijungti()
	{
		if(empty($this->lemputes)) {
			trigger_error('nera lempuciu', E_USER_ERROR);
		}
		
		foreach($this->lemputes as $lempute) {
			$lempute->ijungti();
		}
	}
	
	public function isjungti()
	{
		foreach($this->lemputes as $lempute) {
			$lempute->isjungti();
		}
	}
	
	public function prideti(GalimaIjungti $lempute)
	{
		$this->lemputes[] = $lempute;
	}
}