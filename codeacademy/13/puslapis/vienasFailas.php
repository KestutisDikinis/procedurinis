<?php
	if ($_GET['id'] == 'pagrindinis') {
?>

<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<h3>Pagrindinis pulapis</h3>
		
		<a href="vienasFailas.php?id=prisijungti" >Prisijungimas </a>
	</body>
</html>

<?php
} elseif ($_GET['id'] == 'prisijungti') {
?>

<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<form action="prisijungimas.php" method="GET">
			<input type="text" name="name" />
			<input type="password" name="pass" />
			<input type="submit" name="submit" />
		</form>
		
		<a href="vienasFailas.php?id=pagrindinis" >Pagrindinis </a>
	</body>
</html>
<?php
} ?>