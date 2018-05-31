<?php

$masyvas = ['Jonas', 'Petras', 'Stasys'];
shuffle($masyvas);

$output = '<!DOCTYPE html>'
	. '<html>'
    . '<head><title>Puslapis</title></head>'
  . '<body>';
foreach($masyvas as $vardas) {
	$output .= '<h3>' . $vardas . '</h3>';
}
$output .= '</body>'
  . '</html>';
  
  
  echo $output;