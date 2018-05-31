<?php

require_once __DIR__ . '/../logic/irasai.php';

if (!isset($_GET['irasas'])) {
	return redirect('irasu-sarasas');
}

$irasas = irasasById((int)$_GET['irasas']);

if ($irasas['user_id'] != $_SESSION['isLoggedIn']) {
	return redirect('irasu-sarasas');
}

pasalintiIrasa((int)$_GET['irasas']);

addMessage('success', 'Sekmingai pasalinta.');

return redirect('irasu-sarasas');
