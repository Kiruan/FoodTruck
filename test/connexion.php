<!DOCTYPE html>
<html>
<head>
	<title>utilisateurs</title>
</head>
<body style="background-color:powderblue;">
<?php
	include "connexionbdd.php";

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$password = $_POST['password'];




	// $requete= SELECT COUNT(users) FROM utilisateur WHERE login = "'.$_POST['login'].'"
	// $resultat = $pdo->query($requete) //ou autre si tu n'utilise pas la pdo
 
	// if($resultat!= 0){
	// 	echo "cool";
	// }






	$bdd->exec('INSERT INTO users (nom, prenom, password) VALUES("'.$nom.'", "'.$prenom.'","'.$password.'")');
	echo ($nom." ".$prenom." ".$password);
?>

	<form action= "utilisateurs.php" method="post">
		<p><input type="submit" value="Retour" style="font-size:20px;"></p>
	</form>
	<form action= "connexion2.php" method="post">
		<p><input type="submit" value="Supprimer" style="font-size:20px;"></p>
	</form>
</body>
</html>