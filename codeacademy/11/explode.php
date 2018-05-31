<?php

$tekstas = "Laba diena pasauli.";

$arr = explode(' ', $tekstas);

var_dump($arr);

array_unshift($arr, 'Ate');

var_dump($arr);

$txt = implode(' ', $arr);

echo $txt;


