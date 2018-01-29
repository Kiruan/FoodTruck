<!DOCTYPE html>
<html>
<head>
	<title>utilisateurs</title>
</head>
<body style="background-color:powderblue;">
	<?php  
	include 
	"header.html";
	"footer.html";
	?>
	<form action= "connexion.php" method="post">
		<p>Votre Nom : <input type="text" name="nom" /></p> 
		<p>Votre Prenom : <input type="text" name="prenom" /></p> 
		<p>Votre password : <input type="password" name="password" /></p>
		<p><input type="submit" value="Valider" style="font-size:20px;"></p>
	</form>
	<form action= "formulaire.php" method="post">
		<p><input type="submit" value="Retour" style="font-size:20px;"></p>
	</form>
	<br/><br/>Si vous voulez supprimer tout les utilisateurs
	<form action= "connexion2.php" method="post">
		<p><input type="submit" value="Supprimer" style="font-size:20px;"></p>
	</form>
</body>
</html>