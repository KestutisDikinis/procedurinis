<?php
require_once __DIR__.'/Vartotojas.php';
require_once __DIR__ . '/Database.php';
require_once __DIR__.'/vartotojuSarasas.php';
require_once __DIR__ . '/Generatorius.php';
require_once '/Applications/MAMP/htdocs/Projektas/header.php';

$db = new Database('localhost','root','root','loginSystem',3306);
$akg = new Generatorius($db);
$db->connect();
$rez = $db->execute("Select * from vartotojai");
include 'adresatai.phtml';
$db->disconnect();