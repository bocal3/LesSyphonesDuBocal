<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=juegos;charset=utf8', 'root', '');
		// On se connecte à la base de données avec les bosn identifiants.
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
?>