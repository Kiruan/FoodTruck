<!DOCTYPE html>
<html>
<head>
	<title>formulaire2</title>
</head>
<body style="background-color:powderblue;">
	<?php 
	include 											//mettre lidentification avec seul le mot de passe de ladmin
	"connexionbdd.php";
	"header.html";
	"footer.html";
		$login = $_POST['admin'];
		$password = $_POST['password'];


		// $query = $bdd -> query('select password from users where nom = "'.$login.'" limit 1');
		// $passwordBase = "";
		// while ($row = $query->fetch()) {
		// 	$passwordBase = $row['password'];
		// }
		//if ($password == $passwordBase) {

		if ($login == "admin" && $password == "admin"){
			echo "Bienvenue !";

			echo '<form action= "admin3.php" method="post">
				<p><input type="submit" value="Suivant" style="font-size:20px;"></p>
			</form>';
		}
		else{
			echo "Mauvais admin ou mot de passe <br/>";
			echo '<form action= "admin.php" method="post">
				<p><input type="submit" value="Retour" style="font-size:20px;"></p>
			</form>';
		}
	 ?>

	<br/>
	<br/>


</body>
</html>