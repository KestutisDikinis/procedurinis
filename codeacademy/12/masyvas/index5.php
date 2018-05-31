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
	foreach($masyvas as $vardas) { ?>
	
		<h3><?php echo $vardas; ?></h3>
	
	<?php } ?>
	
</body>
</html>
