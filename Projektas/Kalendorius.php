<?php
require_once __DIR__ .'/Event.php';
require_once __DIR__ .'/Kalendoriuss.php';
require_once __DIR__ .'/Database.php';
require_once __DIR__ .'/Generatorius.php';

$db = new Database('localhost','root','root','loginSystem',3306);

$db->connect();
//$rez = $db->execute("Select * from events");
$akg = new Generatorius($db);
$knyga = $akg->generuoti();
$adresatai = $knyga->getEvents();
include 'Calendar.phtml';
$db->disconnect();
