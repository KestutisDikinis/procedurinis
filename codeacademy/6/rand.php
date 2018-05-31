<?php

function kauliukas()
{
	return rand(1, 6);
}

echo kauliukas() + kauliukas() + kauliukas();

