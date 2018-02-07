<!DOCTYPE html>
<html>
<head>
	<title>formulaire</title>
</head>
<body style="background-color:powderblue;">
	<?php  
	include 
	"header.html";
	"footer.html";


	?>
	<form action= "connexion2.php" method="post">
		<p>Votre nom : <input type="text" name="admin" /></p> 
		<p>Votre password : <input type="password" name="password" /></p>
		<p><input type="submit" value="Valider" style="font-size:20px;"></p>
	</form>
	<form action= "utilisateurs.php" method="post">
		<p><input type="submit" value="utilisateurs" style="font-size:20px;"></p>
	</form>
</body>
</html>