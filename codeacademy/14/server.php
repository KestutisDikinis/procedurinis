<?php

var_dump($_SERVER);

$content = file_get_contents("perziuros.txt");

$content++;

file_put_contents("perziuros.txt", $content);

echo $content;