<?php

require_once __DIR__ . '/file_db.php';

function saveNote($irasas)
{
	$irasai = get(__DIR__ . '/../data/irasai.txt');
	$irasai[] = $irasas;
	save(__DIR__ . '/../data/irasai.txt', $irasai);
}

function visiIrasai()
{
	return get(__DIR__ . '/../data/irasai.txt');
}

function irasasById($id)
{
	$irasai = get(__DIR__ . '/../data/irasai.txt');

	return $irasai[$id];
}

function pasalintiIrasa($id)
{
	$irasai = get(__DIR__ . '/../data/irasai.txt');
	unset($irasai[$id]);
	save(__DIR__ . '/../data/irasai.txt', $irasai);
}