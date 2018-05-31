<?php

require_once __DIR__ . '/Coordinates.php';
require_once __DIR__ . '/Adresatas.php';
require_once __DIR__ . '/AdresuKnyga.php';
require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/AdresuKnygosGeneratorius.php';


$db = new Database('127.0.0.1', 'admin', '1445c1c5a', 'testine');
$db->connect();
$akg = new AdresuKnygosGeneratorius($db);
$knyga = $akg->generuoti();
$adresatai = $knyga->gautiAdresatus();
include __DIR__ . '/adresatai.phtml';
$db->disconnect();

