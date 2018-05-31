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
	<?php foreach($masyvas as $vardas): ?>
		<?php if (strpos($vardas, 'P') === 0): ?>
			<h2><?= $vardas ?></h2>
		<?php else: ?>
			<h3><?= $vardas; ?></h3>
		<?php endif; ?>
	<?php endforeach; ?>
</body>
</html>
