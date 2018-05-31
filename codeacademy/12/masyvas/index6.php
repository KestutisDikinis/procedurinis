<?php
	$masyvas = ['Jonas', 'Petras', 'Stasys'];
	shuffle($masyvas);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Puslapis</title>
	</head>
	<body>
	<?php
	foreach($masyvas as $vardas): ?>
		<h3><?php echo $vardas; ?></h3>
	<?php endforeach; ?>
</body>
</html>
