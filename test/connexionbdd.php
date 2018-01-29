<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', '');
	}
	catch (PDOException $e) {
	    die('Erreur : ' . $e->getMessage());
	}
	$bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	include 
	"header.html";
	"footer.html";
	?>
