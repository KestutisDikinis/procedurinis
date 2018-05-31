<?php

$masyvas = ['Jonas', 'Petras', 'Stasys'];
shuffle($masyvas);

echo '<!DOCTYPE html>
 <html>
    <head><title>Puslapis</title></head>
 <body>';
foreach($masyvas as $vardas) {
	echo '<h3>' . $vardas . '</h3>';
}
echo '</body>
 </html>';