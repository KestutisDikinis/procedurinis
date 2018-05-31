<?php

spl_autoload_register(function ($class) {
	$class = str_replace('\\', '/', $class);
	$class = str_replace('CA/', '', $class);
    include  $class . '.php';
});


$db = new CA\DB\Database('127.0.0.1', 'admin', '1445c1c5a', 'testine');
$db->connect();
$akg = new CA\AdresuKnygosGeneratorius($db);
$knyga = $akg->generuoti();
$adresatai = $knyga->gautiAdresatus();
include __DIR__ . '/adresatai.phtml';
$db->disconnect();

