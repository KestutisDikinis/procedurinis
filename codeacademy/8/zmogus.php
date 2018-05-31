<?php

// Jonas Jonaitis, 42 metų vyras, nevędes, turi 2 vaikus - Petriuką ir Onutę. 
// Petriukui 8 - eri, Onutei 5 - eri. Petriukas turi 2 augintinius - 
// šuniuką Brisius ir pelytę Džeris., Onutė turi vieną augintinį - katiną Tomas.

function kiekVaiku($zmogus)
{
	return count($zmogus['vaikai']);
}

$zmogus = [
	'vardas' => 'Jonas',
	'pavarde' => 'Jonaitis',
	'amzius' => 42,
	'padetis' => 'nevedes',
	'augintiniai' => [],
	'vaikai' => [
		[
			'vardas' => 'Petriukas',
			'pavarde' => 'Jonaitis',
			'amzius' => 8,
			'padetis' => 'nevedes',
			'augintiniai' => [
				[
					'tipas' => 'pelyte',
					'vardas' => 'Dzeris'
				]
			],
			'vaikai' => []
		],
		[
			'vardas' => 'Onute',
			'pavarde' => 'Jonaitis',
			'amzius' => 18,
			'padetis' => 'nevedes',
			'augintiniai' => [
				[
					'tipas' => 'katinas',
					'vardas' => 'Tomas'
				]
			],
			'vaikai' => []
		]
		]
	];
	
	
var_dump($zmogus);

echo kiekVaiku($zmogus);
echo kiekVaiku($zmogus['vaikai'][0]);
echo kiekVaiku($zmogus['vaikai'][1]);

