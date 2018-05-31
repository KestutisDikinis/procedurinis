<?php

require_once 'Lempute.php';
require_once 'Girlianda.php';
require_once 'Jungiklis.php';

$jungiklis = new Jungiklis();

$lempute = new Lempute();
$lempute2 = new Lempute();
$lempute3 = new Lempute();

$jungiklis->prideti($lempute);
$jungiklis->prideti($lempute2);
$jungiklis->prideti($lempute3);
$jungiklis->prideti($lempute3);

$jungiklis->ijungti();

var_dump($jungiklis);

$jungiklis->isjungti();
var_dump($jungiklis);


$girlianda = new Girlianda([
	new Lempute(),
	new Lempute(),
	new Lempute()
]);

// $jungiklis2 = new Jungiklis();

$jungiklis->prideti($girlianda);

var_dump($jungiklis);

$jungiklis->ijungti();

var_dump($jungiklis);

