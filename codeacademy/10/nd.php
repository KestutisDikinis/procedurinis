<?php

echo "<h1>Cia nieko nera, reikia atsidaryti per codiad ir nusikopijuoti faila pas save</h1>";

//////////////////////////////////////////// Nusikopijuojame faila pas save, cia nieko nekeiciame!!!! //////////////////////////////


/**
 * Funkcija sugeneruoja atsitiktini automobili, pvz.:
 * $auto = [
 *	'marke' => 'audi',
 *	'modelis' => 'R8',
 *	'metai' => 2005, // metai nuo 1991 iki 2018
 *	'kaina' => 5000 // kaina nuo 1000 iki 20000
 * ];
 * 
 * @return array $auto
 */
function randomAuto()
{
	
}

/**
 * Funkcija sugeneruoja masyva atsitiktiniu automobiliu panaudodama funkcija randomAuto
 * 
 * @see randomAuto
 * @param int $length
 * @return array
 */
function autoList($length = 20)
{
	
}

/**
 * Funkcija sugeneruoja ir grazina html sarasa su automobilio atributais, pvz.:
 * 	<ul>
 *		<li>Marke: audi</li>
 *		<li>Modelis: R8</li>
 *		<li>Metai: 2008</li>
 *		<li>Kaina: 7000</li>
 *	</ul>
 * 
 * @param array $auto
 * @return string
 */
function printAuto($auto)
{
	$output = '<ul>';

	// Jeigu mums reikia ciklo viduje masyvo elemento indekso, naudojam as $key => $value
	foreach($auto as $key => $value) {
		$output .= '<li>' . ucfirst($key) . ": $value</li>";
	}
	
	$output .= '</ul>';
	
	return $output;
}

printAuto([]);

/**
 * Funkcija sugeneruoja ir grazina html sarasa su automobiliais. pvz.:
 * $output = "
 * <ul>
 *	<li>
 *		<ul>
 *			<li>Marke: audi</li>
 *			<li>Modelis: R8</li>
 *			<li>Metai: 2008</li>
 *			<li>Kaina: 7000</li>
 *		</ul>
 *	</li>
 *	<li>
 *		...
 *	</li>
 *	...
 * </ul>"
 * 
 * @see printAuto()
 * @param array 
 * @return string
 */
function printAutos($arr)
{
	
}

/**
 * Funkcija is nurodyto saraso automobili issirenka atsitiktini (arba koks jums labiau patinka)
 * 
 * @param array
 * @return
 */
function pickRandom($autos)
{
}

/**
 * Funkcija paskaiciuoja automobilio veertingumo svori, kuris naudojamas issirinkti geriausia automobili
 * Kuo naujesnis ir pigesnis automobilis - tuo geriau
 * Pagaminimi metai itakoja 30% galutinio apsisprendimo
 * Kaina itakoja 70% galutino apsisprendimo
 * 
 * @param array $auto
 * @return int
 */
function autoDealWeight($auto)
{
}

/**
 * Funkcija pasirenka geriausia automobilis. Geriausias laikomas - kuo naujesnis ir pigesni
 * Pagaminimi metu ir kainos santyki paskaiciuoja funkcija autoDealWeight()
 * 
 * @see autoDealWeight()
 * @param array
 * @return array
 */
function pickBest($autos)
{
	
}

/////////////////////////////////////////// Programos kodas, nekeisti ////////////////////////////////////////////

$autos = autoList(10);

echo printAutos($autos);

$myChoice = pickRandom($autos);
$bestChoice = pickBest($autos);


echo "<h2>My choice: </h2><br/>";
echo printAuto($myChoice);


echo "<h2>Best choice: </h2><br/>";
echo printAuto($bestChoice);


echo 'Ketinau isleisti ' . $myChoice['kaina'] . ', bet isleisiu ' . $bestChoice['kaina'] . ' pinigu.';



