<?php  
	$login = htmlspecialchars($_POST['login']);
	$mdp = htmlspecialchars($_POST['mdp']);

	if ($login == "admin" && $mdp == "CHAUSSETTE"){
		echo "GG wp c'est le bon mdp bon bro, btw la réponse à la vie c'est 42 aller salut";
	} else {
		echo "ptdr t ki";
	}
		echo $mdp;
		echo '<form action="mdr.php" method="post"><p><input type="submit" name="Retour"></p></form>';
?>

<?php 
/*	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$login = htmlspecialchars($_POST['login']);
	$mdp = htmlspecialchars($_POST['mdp']);
	$message = htmlspecialchars($_POST['message']);
	$pays = $_POST['pays'];
	$hf = $_POST['hf'];
	$expiration = time() + 60*60*24*30; // = dans 30 jours
	setcookie('nom', $_POST['nom'], $expiration); 
	session_start();
	$_SESSION['prenom'] = $_POST['prenom'];



	if ($login != "admin" || $mdp != "admin") {
		echo "ptdr t ki";
	} else {
		if ($hf = "Homme") {
			echo "Bonjour monsieur ";
		} elseif ($hf = "Femme") {
			echo "Bonjour madame ";
		} else {
			echo "Bonjour chose appellée ";
		}
		echo $prenom . " " . $nom . " habitant de " . $pays . ", nous avons bien reçu votre message.";
		echo "<p>Aperçu de votre message : <br/>" . $message . "</p>";
	}*/
?>

<?php
// REDIRECTION
	// header('Location: lelol.php');
?>

<?php
	// $uploadedFile = $_FILES['monFichier'];
 	// $destinationDirectory = 'uploads/';
	// $destinationPath = $destinationDirectory . basename($uploadedFile['name']);

	// if ($uploadedFile['size'] > 1000000) {
	// 	echo "Fichier trop gros";
	// } elseif (move_uploaded_file($uploadedFile['tmp_name'], $destinationPath)){
	// 	echo "Upload réussi : " . $uploadedFile['name'] . " (" . $uploadedFile['size'] . "octets)";
	// } else {
	// 	echo "Echec de l’upload";
	// }
?>