<!DOCTYPE html>
<html>
<head>
	<title>formulaire2</title>
</head>
<body style="background-color:powderblue;">
	<?php 
	include 											
	"connexionbdd.php";
	"header.html";
	"footer.html";
	 ?>

	 <form action= "utilisateurs.php" method="post">
		<p><input type="submit" value="Utilisateurs" style="font-size:20px;"></p>
	</form>
	<form action= "horaires\horaires.php" method="post">
		<p><input type="submit" value="Horaires" style="font-size:20px;"></p>
	</form>

	<br/>
	<br/>


</body>
</html>