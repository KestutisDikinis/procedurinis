<?php
	$masyvas = ['Jonas', 'Petras', 'Stasys'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Puslapis</title>
	</head>
	<body>
	<?php
	shuffle($masyvas);
	foreach($masyvas as $vardas) {
		echo '<h3>' . $vardas . '</h3>';
	}
	?>
	
</body>
</html>
