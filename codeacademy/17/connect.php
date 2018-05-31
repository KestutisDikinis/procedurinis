<?php


$connection = mysqli_connect('127.0.0.1', 'arturas', '');

mysqli_select_db($connection, 'arturas');

$res = mysqli_query($connection, 'SELECT * FROM `users`');

while($row = mysqli_fetch_assoc($res)) {
	var_dump($row);
}

mysql_close($connection);