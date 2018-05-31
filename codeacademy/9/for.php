<?php

function skaiciusLyginis($i)
{
	return $i % 2 == 0;
}

for($i = 1; $i <= 100; $i++)
{
	if(skaiciusLyginis($i)) {
		echo $i;
	}
}