<?php

function tiese($x)
{
	echo 2 * $x + 1;
}

function parabole($x)
{
	return 3 * pow($x, 2) + 2 * $x;
}

function suma($a, $b, $c, $d, $e, $f)
{
	echo $a + $b + $c + $d + $e + $f;
}

tiese(1);

echo '<br/>';

tiese(2);

echo '<br/>';

// $p1 = parabole(1);
// $p2 = parabole(2);
// $p3 = parabole(3);

// var_dump($p1);
// var_dump($p2);
// var_dump($p3);

// suma($p1, $p2, $p3);


suma(parabole(1), parabole(2), parabole(3), parabole(4), parabole(5), parabole(6));


