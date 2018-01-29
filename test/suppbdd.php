<?php
	include "connexionbdd.php";
	$bdd->exec('DELETE FROM users');
	//DELETE FROM USERS WHERE NOM = 'toto'
	echo "Tout les utilisateurs ont été supprimé !"
	?>