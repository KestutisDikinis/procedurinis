<?php

session_start();

if (isset($_GET['reset'])) {
	session_destroy();
}

if (!isset($_SESSION['fib'])) {
	$_SESSION['fib'] = [1, 1];
}

$skaiciai = $_SESSION['fib'];

$sk = $skaiciai[0] + $skaiciai[1];
$skaiciai = [$skaiciai[1], $sk];
$_SESSION['fib'] = $skaiciai;

echo $sk;
