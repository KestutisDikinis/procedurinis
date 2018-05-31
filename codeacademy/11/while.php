<?php

function randomId()
{
	
}

/**
 * @return bool
 */
function idExists($id)
{
	
}


function generateUniqueId()
{
	$id = radomId();
	
	while(idExists($id)) {
		$id = randomId();
	}
	
	// ..
}

function generateUniqueId2()
{
	do {
		$id = radomId();
	} while (idExists($id));
	
	// ..
}

function generateUniqueId3()
{
	$id = randomId();
	if (!idExists($id)) {
		return $id;
	} else {
		$id = generateUniqueId3();
	}
	return $id;
}

