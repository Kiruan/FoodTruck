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
	<form action= "formulaire2.php" method="post">
		<p>Votre nom : <input type="text" name="admin" /></p> 
		<p>Votre mot de passe : <input type="password" name="password" /></p>
		<p><input type="submit" value="Valider" style="font-size:20px;"></p>
	</form>
	<form action= "Admin.php" method="post">
		<p><input type="submit" value="Admin" style="font-size:20px;"></p>
	</form>
</body>
</html>