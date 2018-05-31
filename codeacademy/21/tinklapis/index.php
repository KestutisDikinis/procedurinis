<?php
session_start();

require_once __DIR__ . '/src/Session.php';

$error = '';

$session = new Session();
try {
	$user = $session->GetCurrentUser();
	
} catch (UserException $ex) {
	$error = $ex->getMessage();
	redirect();

} catch(DbException $ex) {
	$error = $ex->getMessage();
}

include 'view.phtml';