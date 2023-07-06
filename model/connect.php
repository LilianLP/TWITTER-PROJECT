<?php

function connect_db() {
	try {
<<<<<<< HEAD
    $sql = new PDO('mysql:host=localhost;dbname=tweet_academy;charset=utf8', 'root', 'Mpolkiuj27');
=======
    $sql = new PDO('mysql:host=localhost;dbname=tweet_academy;charset=utf8', 'root', 'rootroot');
>>>>>>> 41e9b034c18686f483f4ade330a1663281ce0ff9
		return $sql;
	} catch (Exception $e) {
		die("Une erreur s'est produite. Veuillez contacter " .
			"votre administrateur.");
	}
}