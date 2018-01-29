<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
</head>
<body>
	<p> Hello World ! <br/>

		<a href="<?php echo 'https://imie-ecole-informatique.fr/'; ?>"><?php echo 'lien'?><a/>

	<?php
		$var = "World ";
		echo "Hellooo " . $var . "! ";
		echo'<a href="https://imie-ecole-informatique.fr/" > Mon lien </a><br/>';
	?>

	<?php
		$prenom = "paul ";
		$nom = "fazilleau ";
		echo $prenom . $nom;
	?>

	<?php 
		$quantite = 10;
		$prix = 120;
		$tva = 5.5;
		$element = $quantite * $prix;
		$total = $element * $tva;
		$totalTVA = $total / 100;
		$totalTTC = $totalTVA + $element;
		echo '<br/>';
		echo $totalTTC;
	 ?>

	 <pre><?php  
	 	$couleur = array('rouge', 'bleu', 'vert', 'blanc', 'noir');
	 	print_r($couleur);
	 	echo '<br/>';
	 	array_push($couleur, 'violet');
	 	print_r($couleur);
	 	array_shift($couleur);
	 	print_r($couleur);
	 	rsort($couleur);
	 	print_r($couleur);

	 ?></pre>

	 <?php 
	 	$nbr = 4;
	 	$somme = 0;
	 	$total = 0;
	 	while ($somme <= $nbr) {
	 		$total = $total + $somme;
	 		$somme++; 
	 	}
	 	echo '<br/>';
	 	echo $total;
	 	echo '<br/>';

	 	for ($total = 0; $total <= $nbr; $total++){
	 		echo $total;
	 	}

	 ?>

	 <?php 
	 	echo '<br/>';
	 	$choix = 3;
	 	if ($choix == 1){
	 		echo "pas satisfait";
	 		echo '<br/>';
	 	} elseif ($choix == 2){
	 		echo "pas tres satisfait";
	 		echo '<br/>';
	 	} elseif ($choix == 3) {
	 		echo "satisfait";
	 		echo '<br/>';
	 	} elseif ($choix == 4) {
	 		echo "tres satisfait";
	 		echo '<br/>';
	 	} else{
	 		echo "superbe !";
	 		echo '<br/>';
	 	}

	 	switch ($choix) {
	 		case "1":
		 		echo "pas satisfait";
		 		echo '<br/>';
		 		break;
		 	case "2":
		 		echo "pas tres satisfait";
	 			echo '<br/>';
	 			break;
	 		case "3":
	 			echo "satisfait";
	 			echo '<br/>';
	 			break;
	 		case "4":
		 		echo "tres satisfait";
		 		echo '<br/>';
		 		break;
		 	default:
			 	echo "superbe !";
		 		echo '<br/>';
		 		break;
		 }
	  ?>

	<pre><?php  
	 	$semaine = array(
	 		'j1' => 'lundi', 
	 		'j2' => 'mardi', 
	 		'j3' => 'mercredi', 
	 		'j4' => 'jeudi', 
	 		'j5' => 'vendredi', 
	 		'j6' => 'samedi', 
	 		'j7' => 'dimanche');
	 	print_r($semaine);
	 	echo '<br/>';
	?></pre>
</p>
</body>
</html>
