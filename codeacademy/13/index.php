<?php


// if (isset($_GET['vardas']) && isset($_GET['pavarde'])) {
// 	echo "Labas, " . $_GET['vardas'] . ' ' . $_GET['pavarde'];
// }

$vardas = (isset($_GET['vardas']) && !is_null($_GET['vardas']) ? $_GET['vardas'] : 'tuscias');
$pavarde = (isset($_GET['pavarde']) && !is_null($_GET['pavarde']) ? $_GET['pavarde'] : 'tuscias');

echo "Labas, " . $vardas . ' ' . $pavarde;


// nuo PHP 7.0
$vardas = $_GET['vardas'] ?? 'tuscias';
$pavarde = $_GET['pavarde'] ?? 'tuscias';

echo "Labas, " . $vardas . ' ' . $pavarde;

