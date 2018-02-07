<!DOCTYPE html>
<html>
<head>
	<title>formulaire</title>
</head>
<body style="background-color:powderblue;">
	<?php  
	include 
	"header.html";												//renvoyer la verif sur le mdp admin
	"footer.html";


	?>
	<form action= "admin2.php" method="post">
		<p>Votre nom d'admin : <input type="text" name="admin" /></p> 
		<p>Votre mot de passe d'admin: <input type="password" name="password" /></p>
		<p><input type="submit" value="Valider" style="font-size:20px;"></p>
	</form>
</body>
</html>