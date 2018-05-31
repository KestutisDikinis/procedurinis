<?php


$pridetiVartotoja = "INSERT INTO `users` (`vardas`, `email`, `password`, `amzius`) VALUES ('Jonas', 'test@test.lt', '\$2y\$10\$fMZ.K.WLrlKr.nfNzeWBpuMdqqyeiu8TU4Lmjbahys2uLwuBF\/Xz2', 25)";

$pasalintiVartotoja = "DELETE FROM `users` WHERE `users`.`id` = 2";

$update = "UPDATE `users` SET `vardas` = 'Petras' WHERE `id` = 1 AND `vardas` = 'Jonas'";

"SELECT * FROM `users`"

"SELECT `id`, `vardas` FROM `users`"

"SELECT * FROM `users` LIMIT 1,2"

"SELECT * FROM `users` WHERE `id` = 1 LIMIT 1"

"SELECT * FROM `users` ORDER BY `id` DESC LIMIT 1"

"SELECT count(*) FROM `users`"

"SELECT `irasai`.*, `users`.`vardas` FROM `irasai`, `users` WHERE `users`.`id` = `irasai`.`user_id`"