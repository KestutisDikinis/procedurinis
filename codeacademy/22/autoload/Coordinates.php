<?php

namespace CA;

class Coordinates
{
	private $lat;
	private $long;
	
	public function __construct($lat, $long)
	{
		$this->lat = $lat;
		$this->long = $long;
	}
	
	public function lat()
	{
		return $this->lat;
	}
	
	public function long()
	{
		return $this->long;
	}
}