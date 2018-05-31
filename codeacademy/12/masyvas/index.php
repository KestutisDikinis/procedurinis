<?php

$masyvas = ['Jonas', 'Petras', 'Stasys'];
shuffle($masyvas);

echo '<!DOCTYPE html>';
echo '<html>';
echo '<head><title>Puslapis</title></head>';
echo '<body>';
foreach($masyvas as $vardas) {
	echo '<h3>' . $vardas . '</h3>';
}
echo '</body>';
echo '</html>';