<?php

class Calculator
{
	public function suma($a, $b)
	{
		return $a + $b;
	}
	
	public function skirtumas($a, $b)
	{
		return $a - $b;
	}
	
	public function dalyba($a, $b)
	{
		return $a / $b;
	}
	
	public function daugyba($a, $b)
	{
		return $a * $b;
	}
}

$calc = new Calculator();

$suma = $calc->suma(2, 7);
echo $suma;

echo $calc->daugyba(2, 7);
