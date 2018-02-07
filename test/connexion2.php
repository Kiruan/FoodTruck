<!DOCTYPE html>
<html>
<head>
	<title>utilisateurs</title>
</head> 
<body style="background-color:powderblue;">

	<form action= "connexion.php" method="post">
		<p>Votre Nom : <input type="text" name="nom" /></p> 
		<p>Votre Prenom : <input type="text" name="prenom" /></p> 
		<p>Votre password : <input type="password" name="password" /></p>
		<p><input type="submit" value="Valider" style="font-size:20px;"></p>
	</form>

	<form action= "utilisateurs.php" method="post">
		<p><input type="submit" value="Retour" style="font-size:20px;"></p>
	</form>

	<form method="post" onclick="suppr()">
		<p><input type="submit" value="Supprimer" style="font-size:20px;"></p>
		<?php
			function suppr(){
				try {
					$bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', '');
				}
				// catch (PDOException $e) {
				// 	die('Erreur : ');
				//  die('Erreur : ' . $e->getMessage());
				// }
				include 
				"header.html";
				"footer.html";
				$bdd->exec('DELETE from users WHERE nom="van"');
				echo "l'utilisateurs a été supprimé !"
			}
		?>
	</form>





</body>
</html>