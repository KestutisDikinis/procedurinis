<?php

class RandomArrayGenerator
{
	public function generate()
	{
		$length = rand(1, 50);
		$arr = [];
		
		for($i = 0; $i < $length; $i++) {
			$arr[] = $this->randomString();
		}
		
		return $arr;
	}
	
	private function randomString($length = 8)
	{
		$chars = 'qwertyuiopasdfghjklzxcvbnm';
		$rand = '';
		
		for($i = 0; $i < $length; $i ++) {
			$rand .= $chars[rand(0, strlen($chars) - 1)];
		}
		
		return $rand;
	}
}
