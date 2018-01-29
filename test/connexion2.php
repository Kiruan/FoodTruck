<!DOCTYPE html>
<html>
<head>
	<title>utilisateurs</title>
</head> 
<body style="background-color:powderblue;">
<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', '');
	}
	catch (PDOException $e) {
	    die('Erreur : ' . $e->getMessage());
	}
	include 
	"header.html";
	"footer.html";
	$bdd->exec('DELETE FROM users');
	echo "Tout les utilisateurs ont été supprimé !"
	?>

	<form action= "utilisateurs.php" method="post">
		<p><input type="submit" value="Retour" style="font-size:20px;"></p>
	</form>
</body>
</html>