<?php include "trycatch.php";
$users= $bdd->query('SELECT * FROM users');
?>
<p> Utilisateurs enregistrés :</p>
<ul><?php
while ($user= $users->fetch()) 
{ ?>
    <li><?php echo $user['nom'] . "  ".  $user['prenom'] . "  ".  $user['password'];   ?></li>
<?php 
} ?>
</ul>
<?php 
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$password = $_POST['password'];
$bdd->exec('INSERT INTO users (nom, prenom, password) VALUES("'.$nom.'", "'.$prenom.'","'.$password.'")');
echo ($nom." ".$prenom." ".$password);
?>