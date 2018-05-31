<?php

function firstSentenceToUpper($p)
{
	$taskoPozicija = strpos($p, '.') + 1;
	$sakinys = substr($p, 0, $taskoPozicija);
	$sakinys = strtoupper($sakinys);
	
	$likesTekstas = substr($p, $taskoPozicija, strlen($p) - $taskoPozicija);
	
	return $sakinys . $likesTekstas;
}

function excerpt($p)
{
	$tarpas = strpos($p, ' ', 150);
	$text = substr($p, 0, $tarpas);
	$text = rtrim($text, '.');
	$text = rtrim($text, ',');
	$text = rtrim($text, '!');
	$text = rtrim($text, '?');
	
	return $text . '...';
}


$pastraipa = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

echo firstSentenceToUpper($pastraipa);

echo '<br/>';

echo excerpt($pastraipa);