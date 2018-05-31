<?php

class CardSuits
{
	const Heart = 'heart';
	const Clubs = 'clubs';
	const Diamonds = 'diamonds';
	const Spades = 'spades';
}

class CardValues
{
	const Nine = '9';
	const Ten = '10';
	const Jack = 'J';
	const Queen = 'Q';
	const King = 'K';
	const Ace = 'A';
}

class Card
{
	private $suit;
	private $value;
	
	public function __construct($suit, $value)
	{
		$this->suit = $suit;
		$this->value = $value;
	}
	
	public function getSuit()
	{
		return $this->suit;
	}
	
	public function getValue()
	{
		return $this->value;
	}
	
	public function __toString()
	{
		return $this->value . ' ' . $this->suit; 
	}
}


class CardDeck
{
	private $cards = [];
	
	public function __construct(array $cards)
	{
		$this->cards = $cards;
	}
	
	public function takeCard()
	{
		return array_pop($this->cards);
	}
	
	public function shuffleCards()
	{
		shuffle($this->cards);
	}
	
	public static function create()
	{
		$suits = [CardSuits::Clubs, CardSuits::Spades, CardSuits::Heart, CardSuits::Diamonds];
		$values = [CardValues::Nine, CardValues::Ten, CardValues::Jack, CardValues::Queen, CardValues::King, CardValues::Ace];
		
		$cards = [];
		
		foreach($suits as $suit) {
			foreach($values as $value) {
				$cards[] = new Card($suit, $value);
			}
		}
		
		return new CardDeck($cards);
	}	
}


$deck = CardDeck::create();

// var_dump($deck);


$deck->shuffleCards();


// var_dump($deck);

$card = $deck->takeCard();

if ($card->getSuit() == CardSuits::Spades && $card->getValue() == CardValues::King) {
	echo 'Iskrito';
}

var_dump($card);
// var_dump($deck);

