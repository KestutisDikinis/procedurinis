<?php
	
class Money
{
	private $amount = 0;
	
	public function __construct($amount)
	{
		$this->amount = $amount;
	}
	
	public function getAmount()
	{
		return $this->amount;
	}
	
	public function add(Money $money) 
	{
		return new Money($this->amount + $money->getAmount());
	}
	
	public function substract(Money $money) 
	{
		return new Money($this->amount - $money->getAmount());
	}
	
	public function __toString() 
	{
		return floor($this->amount / 100) . '€ ' . $this->amount % 100 . 'ct';
	}
	
	public static function vienasEuras()
	{
		return new Money(100);
	}
	
	public static function duEurai()
	{
		return new Money(200);
	}
	
	public static function penkiEurai()
	{
		return new Money(500);
	}
	
	public static function desimtEuru()
	{
		return new Money(1000);
	}
}

$duEurai = new Money(200);
$trysEurai = new Money(300);

$penkiEurai = $duEurai->add($trysEurai);

$penkiEurai2 = $trysEurai->add($duEurai);

$sesiEurai = (new Money(100))
			->add(new Money(100))
			->add(new Money(100))
			->add(new Money(100))
			->add(new Money(100))
			->add(new Money(100));

$desimtEuru = Money::vienasEuras()
				->add(Money::penkiEurai())
				->add(Money::duEurai())
				->add(Money::duEurai());

var_dump($desimtEuru);

var_dump($sesiEurai);
var_dump($trysEurai);
var_dump($penkiEurai);
var_dump($penkiEurai2);


echo $penkiEurai;