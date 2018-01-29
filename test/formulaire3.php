 
<!DOCTYPE html>
<html>
    <head>
        <title>formulaire3</title>
    </head>
    <body style = "background-color:powderblue;">
    	<?php 
    	include 
		"header.html";
		"footer.html"; ?>
        <form name = "envoie" action = "formulaire4.php" method = "post" enctype='multipart/form-data'>
            <p>Genre : 
	            <input type="radio" name="genre" value="homme"/> Homme 
	            <input type="radio" name="genre" value="femme"/> Femme</p>

            <p>Nom : 
            	<input type="text" name="nom" value="" placeholder="Votre nom de famille" /></p>

            <p>Prénom : 
            	<input type="text" name="prenom" value="" placeholder="Voter prénom" /></p>

            <p>Age : 
            	<input type="number" name="age" value="" placeholder="18 ans minimum" /></p>

            <p>Mail : 
            	<input type="text" name="mail" value="" placeholder="nom.prenom@mail.com" /></p>

            <p>Couleur des yeux : 
	            <input type="radio" name="yeux" value="bleu"/>Bleu
	            <input type="radio" name="yeux" value="rouge"/>Rouge
	            <input type="radio" name="yeux" value="vert"/>Vert
	            <input type="radio" name="yeux" value="marron"/>Marron
	            <input type="radio" name="yeux" value="noir"/>Noir
	            <input type="radio" name="yeux" value="gris"/>Gris</p>
            
            <p>Longueur des cheveux : 
				<select name = "cheveux" size = "3px" value="">
					<option>tres court</option>
					<option>court</option>
					<option>normal</option>
					<option>long</option>
					<option>tres long</option>
				</select></p>


			Code de réduction: 
				<INPUT name = "code" type = "text size" = "10px" value=""></INPUT>
				<br/><br/>
						
			<input type="submit" value="Valider" style="font-size:20px;"/>
			<input type="reset" value="Effacer" style="font-size:20px;"/>
			<br/><br/><br/><br/>
			<input type="checkbox" name="conditions" value="ok" checked="checked" /> 
			J'accepte les conditions d'utilisations.
			<input type='file' name='Fichier' />
     	</form>

     
			
		
			<br/><br/>


			







    </body>
</html>