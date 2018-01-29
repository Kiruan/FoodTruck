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
		$login = $_POST['admin'];
		$password = $_POST['password'];
		$query = $bdd -> query('select password from users where nom = "'.$login.'" limit 1');
		$passwordBase = "";
		while ($row = $query->fetch()) {
			$passwordBase = $row['password'];
			echo $passwordBase;
		}
		if ($password == $passwordBase) {
			echo "Bienvenue !";

			echo '<form action= "formulaire3.php" method="post">
				<p><input type="submit" value="Suivant" style="font-size:20px;"></p>
			</form>';
		}
		else{
			echo "FAUX !! <br/>";
			echo '<form action= "formulaire.php" method="post">
				<p><input type="submit" value="Retour" style="font-size:20px;"></p>
			</form>';
		
		}
	 ?>

	<br/>
	<br/>


</body>
</html>